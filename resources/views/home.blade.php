@extends('layouts.mainlayouts')

@section('title','Beranda')

@section('content')
    
    <style>
        {box-sizing: border-box}
        .mySlides {display: none}
        .mySlides2 {display: none}
        img {
            vertical-align: middle; 
            max-height: 300px;
            max-width:100%;
        }
        
        .img2 {
            vertical-align: middle; 
            max-height: 400px;
            max-width:100%;
        }

        /* Slideshow container */
        .slideshow-container {
            max-width: 100%;
            max-height: 400px;   
            position: relative;
            display: flex;
            justify-content:center;
            margin: 0 auto;
        }
        .slideshow-container2 {
            max-width: 900px;
            position: relative;
            display: flex;
            justify-content:center;
            margin: 0 auto;
        }
 
        
        /* Next & previous buttons */
        .prev, .next {
            cursor: pointer;
            position: absolute;  /* Ganti relative dengan absolute agar bisa ditempatkan di tengah secara vertikal */
            padding: 8px 16px;  /* Padding sedikit disesuaikan agar proporsional */
            color: white;
            background-color: rgba(0, 0, 0, 0.5); /* Background hitam dengan transparansi */
            font-weight: bold;
            font-size: 16px;  /* Ukuran font sedikit dikurangi untuk estetika */
            transition: 0.6s ease;
            border: none; /* Menghilangkan border */
            border-radius: 50px;  /* Membuat border berbentuk bulat untuk estetika */
            user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 20px;
            border-radius: 3px 0 0 3px;
        }
        
        .prev {
            left: 20px;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }
        
        .dot2 {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active2, .dot:hover {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            opacity:0;
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
            animation-fill-mode: forwards;
        }

        @-webkit-keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
        }

        @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .prev, .next,.text {font-size: 11px}
        }

        .card-img-top {
            max-width: auto; // Contoh tinggi, sesuaikan sesuai kebutuhan Anda.
            max-height: auto; // Contoh tinggi, sesuaikan sesuai kebutuhan Anda.
            
        }
    </style>
 
        <div class="container d-flex flex-column align-items-center justify-content-center">

        <div class="container d-flex flex-column justify-content-center align-items-center">

            <div class="slideshow-container mt-5">
                
                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="{{asset('images/no-image.png')}}">
                    <div class="text">Caption Text</div>
                </div>
                
                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <!-- <img src="{{asset('storage/cover/Product 27-1695784175.png')}}" style="width:100%"> -->
                    <img src="{{asset('storage/cover/Product 27-1695784175.png')}}">
                    <div class="text">Caption Two</div>
                </div>
                
                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="{{asset('storage/cover/Product 21-1695642784.png')}}">
                    <div class="text">Caption Three</div>
                </div>
                
                
            </div>
            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
            <br>
            
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span> 
                <span class="dot" onclick="currentSlide(3)"></span> 
            </div>
        </div>
            
            <div class="content p-2 ">
                <div class="m-5 ">
                    <div class="row">
                        @foreach($products as $item)
                        <div class="col-lg col-md-3 col-sm-6 col-6 mb-3">
                            <div class="card" style="width: 100%; height: 100%;">
                                <div class="card p-1 d-flex flex-column justify-content-center m-auto" style="width: 100%; height: 100%; border: 0;">
                                    <img src="{{  $item->cover != null ? asset('storage/cover/'.$item->cover) : asset('images/no-image4.png') }}" class="card-img-top" alt="..." >
                                </div>
                                
                                <div class="card-body" >
                                    <h6 class="card-title">{{ $item->name }}</h6>
                                    <p class="card-text">Rp.{{ $item->price }}</p>
                                    <a href="detailproduct/{{$item->slug}}" class="btn btn-primary">Details</a>
                                </div>
                            </div>
                        </div>
                        
                        @endforeach
                        
                    </div>
                </div> 
            </div>
            
            <div class="card col-lg-10 col-sm-10 d-flex flex-column justify-content-center" style="height: 40rem; max-width: 100%; margin:auto">
                
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
        
        <div class="content p-2">
            <div class="m-5 ">
                <div class="row">
                    @foreach($products as $item)
                    <div class="col-lg col-md-3 col-sm-6 mb-3">
                        <div class="card h-100" style="width: 100%; height: 100%;">
                            <div class="card d-flex flex-column justify-content-center m-auto" style="width: 100%; height: 100%; border: 0;">
                                <img src="{{  $item->cover != null ? asset('storage/cover/'.$item->cover) : asset('images/no-image4.png') }}" class="card-img-top" alt="..." >
                            </div>
                            
                            <div class="card-body">
                                <h6 class="card-title">{{ $item->name }}</h6>
                                <p class="card-text">Rp.{{ $item->price }}</p>
                                <a href="detailproduct/{{$item->slug}}" class="btn btn-primary" style="max-height:100%; max-width: 100%;">Default</a>
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