<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bengkel | @yield('title')</title>
    
    <!-- Bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css/')}}">

</head>

<body>
    
    <!-- Navbar -->
    <!-- bg-body-tertiary -->

    <nav class="navbar navbar-expand-lg" style="background-color: #072541;"  data-bs-theme="dark" >
        <div class="container-fluid">
            <a class="navbar-brand ms-3" href="#">Bengkel</a>
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <!-- nav-link active -->
                <a class="btn btn-navy" aria-current="page" href="/home">Beranda</a>
                </li>
                <li class="nav-item">
                <a class="btn btn-navy" aria-current="page" href="/product">Barang</a>
                </li>
                <li class="nav-item">
                <a class="btn btn-navy" aria-current="page" href="/service">Jasa</a>
                </li>
                <li class="nav-item">
                <a class="btn btn-navy" aria-current="page" href="/aboutus">About Us</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" style="width:550px; max-height:100%;" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light" type="submit" style="height:40px; width: 50px;"><i class="bi bi-search"></i></button>
            </form>
            </div>

            <div class="ms-3 me-2 position-relative">
                <a href="/detailtransaction">
                    <i class="bi bi-cart3 btn"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: .6em;">
                        99+
                        <span class="visually-hidden">product uncheckout</span>
                    </span>
                </a>
            </div>

            @if(auth()->id() == null)
            <div>
                <a href="/login" class="btn">Login</a>
                <a href="/register" class="btn">Daftar</a>
            </div>
            @endif

            @if(auth()->id() != null)
            <div class="me-3">
                <a href="/profile">
                    <i class="bi bi-person-circle btn"></i>
                </a>
            </div>
            @endif
        </div>
    </nav>

    <div class="body h-100">
        @yield('content')
    </div>
    
        <!-- Footer -->
    <footer class="text-center text-lg-start text-white" style="background: #173551; height:">

    <!-- Section: Links  -->
    <section class="d-flex justify-content-center">
        <div class="container text-center text-md-start mt-2">
        <!-- Grid row -->
        <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">Tentang Kami
            </h6>
            <p style="text-align: justify;">
                Kami menawarkan berbagai layanan mulai dari servis rutin, perbaikan kerusakan, dan penjualan suku cadang asli.
            </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-6 col-lg-6 col-xl-6 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Lokasi</h6>
            
                <div class="embed-responsive embed-responsive-1by1">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15900.219651297488!2d105.221217!3d-4.9304707!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40a78251762385%3A0xdf0dcfab5284b5cf!2sBengkel%20Alsya%20Jaya%20Motor!5e0!3m2!1sid!2sid!4v1696229019375!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Kontak</h6>
            <p><i class="fas fa-home"></i> Alamat : Jl. Merapi, Bandar Jaya</p>
            <p><i class="fas fa-envelope"></i> Email : info@bengkelxyz.com</p>
            <p><i class="fas fa-phone"></i> No Telepon : 0812-XXXX-XXXX</p>
            </div>
            <!-- Grid column -->
        </div>
        <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <!-- background-color: rgba(0, 0, 0, 0.05); -->
    <div class="text-center p-3 fw-bold" style="background: #072541;">
        © 2023 Copyright: BengkelAI
        <!-- <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a> -->
    </div>
    <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

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

    <!-- detailproduct -->
    <script>
    document.getElementById('increaseQuantity').addEventListener('click', function() {
        var input = document.getElementById('quantity');
        input.value = parseInt(input.value) + 1;
    });

    document.getElementById('decreaseQuantity').addEventListener('click', function() {
        var input = document.getElementById('quantity');
        if (parseInt(input.value) > 0) {
            input.value = parseInt(input.value) - 1;
        }
    });
</script>

<script>
    $(document).ready(function() {
        $('.increase').click(function() {
            let id = $(this).data('id');
            let input = $('#quantity_' + id);
            input.val(parseInt(input.val()) + 1);
            // Anda dapat menambahkan logika AJAX di sini untuk memperbarui kuantitas di database
        });

        $('.decrease').click(function() {
            let id = $(this).data('id');
            let input = $('#quantity_' + id);
            if (parseInt(input.val()) > 1) { // Pastikan kuantitas tidak kurang dari 1
                input.val(parseInt(input.val()) - 1);
                // Anda dapat menambahkan logika AJAX di sini untuk memperbarui kuantitas di database
            }
        });
    });
</script>

<script>
    document.querySelector('.btn.card-custom4').addEventListener('click', function() {
    const quantityValue = document.getElementById('quantity').value;
    document.getElementById('hiddenQuantity').value = quantityValue;
}); 
</script>
<script>
    document.querySelector('.btn.card-custom3').addEventListener('click', function() {
    const quantityValue = document.getElementById('quantity').value;
    document.getElementById('hiddenQuantity2').value = quantityValue;
}); 
</script>

</body>
</html>