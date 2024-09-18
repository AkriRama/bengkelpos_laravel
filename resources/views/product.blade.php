<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bengkel | Barang</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<style>
    .main {
        height: 100vh;
    }

    .sidebar {
        background: #605B5B;
        color: #fff; 
    }

    .sidebar button {
        background: transparent;
        color: #fff;
        text-decoration: none;
        display: block;
        padding: 20px 20px;
    }

    .sidebar button:hover {
        background: #000;
    }

    .active {
        background: #000;
    }
    
    .active2 {
        background: #;
    }

    .simple-bootstrap-4 {
        
    }



</style>

<body>

    <div class="main d-flex flex-column justify-content-between">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Bengkel</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link" href="/home">Beranda</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/product">Barang</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Jasa</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/aboutus">About Us</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" name="title" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                </div>
            </div>
        </nav>

        <div class="body-content h-100">
            <div class="row g-0 h-100">
                <div class="sidebar col-lg-2 collapse d-lg-block" id="navbarAdmin">
                    
                    
                    <form action="" method="get">
                        <div class="sidebar col-lg-2 collapse d-lg-block" style="width:100%;" id="navbarAdmin">
                        <input type="hidden" name="category" id="hiddenInputId">
                        @foreach ($categories as $item)
                            <button type="submit"style="width:100%; border:0;  text-align: left;" onclick="setCategoryValue({{ $item->id }})">{{ $item->name }}</button>
                        @endforeach
                        </div>
                </form>

                </div>

                <div class="content p-2 col-lg-10">

                    <div class="m-5">
                        <div class="row">
                            @foreach($products as $item)
                            <div class="col-lg-3 col-md-4 col-xm-4 col-sm-6 col-6 mb-3 m-auto">
                                <div class="card h-100" style="width: 100%; height: 100%;">
                                    <div class="card d-flex flex-column justify-content-center m-auto" style="width: 100%; height: 100%; border: 0;">
                                        <img src="{{  $item->cover != null ? asset('storage/cover/'.$item->cover) : asset('images/no-image4.png') }}" class="card-img-top" alt="..." >
                                    </div>

                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item->name }}</h5>
                                        <p class="card-text">Rp.{{ $item->price }}</p>
                                        <a href="detailproduct/{{$item->slug}}" class="btn btn-primary" style="max-width:100%; max-height:100%;">Gosomewhere</a>
                                    </div>
                                </div>
                            </div>

                            @endforeach
                            
                        </div>
                    </div>   
                    
                    <!-- Pagination -->
                    <div class="d-flex justify-content-center">
                        @if ($products->hasPages())
                            <ul class="pagination">
                                {{-- Previous Page Link --}}
                                @if ($products->onFirstPage())
                                    <li class="page-item disabled"><span class="page-link">«</span></li>
                                @else
                                    <li class="page-item"><a class="page-link" href="{{ $products->previousPageUrl() }}" rel="prev">«</a></li>
                                @endif
    
                                {{-- Page Numbers --}}
                                @foreach(range(1, $products->lastPage()) as $i)
                                    @if($i >= $products->currentPage() - 2 && $i <= $products->currentPage() + 2)
                                        @if ($i == $products->currentPage())
                                            <li class="page-item active"><span class="page-link">{{ $i }}</span></li>
                                        @else
                                            <li class="page-item"><a class="page-link" href="{{ $products->url($i) }}">{{ $i }}</a></li>
                                        @endif
                                    @endif
                                @endforeach
    
                                {{-- Next Page Link --}}
                                @if ($products->hasMorePages())
                                    <li class="page-item"><a class="page-link" href="{{ $products->nextPageUrl() }}" rel="next">»</a></li>
                                @else
                                    <li class="page-item disabled"><span class="page-link">»</span></li>
                                @endif
                            </ul>
                        @endif
                    </div>
                    
                    <!-- {{ $products->links('pagination::simple-bootstrap-4') }} -->
                </div>

                <!-- Footer -->
                <footer class="text-center text-lg-start bg-light text-muted">

                <!-- Section: Links  -->
                <section class="d-flex justify-content-center">
                    <div class="container text-center text-md-start mt-2">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>Company name
                        </h6>
                        <p>
                            Here you can use rows and columns to organize your footer content. Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit.
                        </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Products
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Angular</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">React</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Vue</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Laravel</a>
                        </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Pricing</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Settings</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Orders</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Help</a>
                        </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            info@example.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                    </div>
                </section>
                <!-- Section: Links  -->

                <!-- Copyright -->
                <div class="text-center p-4 fw-bold" style="background-color: rgba(0, 0, 0, 0.05);">
                © 2021 Copyright: BengkelAI
                </div>
                <!-- Copyright -->
                </footer>
                
            </div>
        </div>       

    </div>

    <script>
    function setCategoryValue(id) {
        document.getElementById('hiddenInputId').value = id;
    }
</script>
    <script>
        var slideIndex = 1;
        showCategory(categoryIndex);

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("category");
            if (n > slides.length) {categoryIndex = 1}    
            if (n < 1) {categoryIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            
            slides[categoryIndex-1].style.display = "block";  
            dots[categoryeIndex-1].className += " active2";
        }
    </script>

    </script>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    

</body>
</html>