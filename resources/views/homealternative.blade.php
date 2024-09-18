@extends('layouts.mainlayouts')

@section('title','Beranda')

@section('content')
 
    <div class="container d-flex flex-column align-items-center justify-content-center mt-3">

        <div class="container-lg d-flex flex-column align-items-center justify-content-center" style="background: #072541;">

            <div class="slideshow-container mt-5">
                @foreach($sliders as $item)
                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="{{$item->cover != null ? asset('storage/slider/'. $item->cover) : asset('images/no-image.png')}}">
                    <div class="text">Caption Text</div>
                </div>
                @endforeach
            </div>

            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
            <br>
            
            <div style="text-align:center">
                @foreach($sliders as $item)
                <span class="dot" onclick="currentSlide({{$item ->id}})"></span> 
                @endforeach
            </div>      
        </div>
    </div>

        <div class="container-lg d-flex flex-column justify-content-center align-items-center">
        
            <div class="content border border-dark col-lg-12 text-center p-2 mt-5">
                <h5>Rekomendasi Barang</h5>
            </div>
            
            <div class="content p-2 mb-5 mt-2" style="background: #072541;">
                <div class="m-5 ">
                    <div class="row">
                        @foreach($products as $item)
                        <div class="col-lg col-md-3 col-sm-6 col-6 mb-3">
                            <div class="card shadow" style="width: 100%; height: 100%;">
                                <div class="card p-1 d-flex flex-column justify-content-center m-auto" style="width: 100%; height: 100%; border: 0;">
                                    <img src="{{  $item->cover != null ? asset('storage/cover/'.$item->cover) : asset('images/no-image4.png') }}" class="card-img-top" alt="..." >
                                </div>
                                
                                <div class="card-body" >
                                    <h6 class="card-title">{{ $item->name }}</h6>
                                    <p class="card-text">Rp.{{ $item->price }}</p>
                                    <a href="detailproduct/{{$item->slug}}" class="btn btn-dark" style="background-color: #605B5B;">Details</a>
                                </div>
                            </div>
                        </div>
                        
                        @endforeach
                        
                    </div>
                </div> 
            </div>
            
            <div class="card col-lg-10 col-sm-10 d-flex flex-column justify-content-center" style="height: 40rem; max-width: 100%; margin:auto; background: #072541;">
                
            <div class="slideshow-container2 mt-5">
                
                <div class="mySlides2 fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="{{asset('images/no-image.png')}}" class="img2">
                    <div class="text">Caption Text</div>
                </div>
                
                <div class="mySlides2 fade">
                    <div class="numbertext">2 / 3</div>
                    <!-- <img src="{{asset('storage/cover/Product 27-1695784175.png')}}" style="width:100%"> -->
                    <img src="{{asset('storage/cover/Product 27-1695784175.png')}}" class="img2">
                    <div class="text">Caption Two</div>
                </div>
                
                <div class="mySlides2 fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="{{asset('storage/cover/Product 21-1695642784.png')}}" class="img2">
                    <div class="text">Caption Three</div>
                </div>
                
                
            </div>
            <a class="prev" onclick="plusSlides2(-1)">❮</a>
            <a class="next" onclick="plusSlides2(1)">❯</a>
            <br>
            
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide2(1)"></span> 
                <span class="dot" onclick="currentSlide2(2)"></span> 
                <span class="dot" onclick="currentSlide2(3)"></span> 
            </div>
        </div>
        
        <div class="mt-5 text-center p-1 border border-dark" style="width: 100%; height: 100%;"><h5>Jasa</h5></div>
        <div class="content p-2 mt-2 mb-5" style="background: #072541;">
            <div class="m-5 ">
                <div class="row" >
                    @foreach($services as $item)
                    <div class="col-lg col-md-3 col-sm-6 mb-3">
                        <div class="card p-2 h-100" style="width: 100%; height: 100%;">
                            <div class="card d-flex flex-column justify-content-center m-auto" style="width: 100%; height: 100%; border: 0;">
                                <img src="{{  $item->cover != null ? asset('storage/coverService/'.$item->cover) : asset('images/no-image4.png') }}" class="card-img-top" alt="..." >
                            </div>
                            
                            <div class="card-body">
                                <h6 class="card-title">{{ $item->name }}</h6>
                                <p class="card-text">Rp.{{ $item->price }}</p>
                                <a href="detailproduct/{{$item->slug}}" class="btn btn-dark" style="max-height:100%; max-width: 100%;">Default</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div> 
        </div>
    </div>

    
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}    
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active2", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active2";
        }
    </script>
    
    <script>
        var slideIndex2 = 1;
        showSlides2(slideIndex2);

        function plusSlides2(n) {
            showSlides2(slideIndex2 += n);
        }

        function currentSlide2(n) {
            showSlides2(slideIndex2 = n);
        }

        function showSlides2(n) {
            var i;
            var slides2 = document.getElementsByClassName("mySlides2");
            var dots2 = document.getElementsByClassName("dot2");
            if (n > slides2.length) {slideIndex2 = 1}    
            if (n < 1) {slideIndex2 = slides2.length}
            for (i = 0; i < slides2.length; i++) {
                slides2[i].style.display = "none";  
            }
            for (i = 0; i < dots2.length; i++) {
                dots2[i].className = dots2[i].className.replace(" active2", "");
            }
            slides2[slideIndex2-1].style.display = "block";  
            dots2[slideIndex2-1].className += " active2";
        }
    </script>


@endsection