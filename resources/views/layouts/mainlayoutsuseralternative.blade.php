<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bengkel | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css/') }}">

</head>

<style>
    
</style>
<body>
    <div class="main d-flex flex-column justify-content-between">

        <nav class="navbar navbar-expand-lg" style="background: #072541;" data-bs-theme="dark">
            <div class="container-fluid ms-3 me-5">
                <a class="navbar-brand" href="#">Bengkel</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end " id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{Auth::user()->username}}
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="home"><i class="bi bi-house-door"></i> Beranda</a></li>
                    <li><a class="dropdown-item" href="historyorderservice"><i class="bi bi-gear"></i> Pesanan Pelayanan</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="logout"><i class="bi bi-box-arrow-right"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
</nav>

        <div class="body-content h-100">
            <div class="row g-0 h-100">
                <div class="sidebar col-lg-2 collapse d-lg-block" id="navbarAdmin">
                    <a href="/cashier" @if(request()->route()->uri == 'cashier') class='active' @endif><i class="bi bi-display"></i> Kasir</a>
                    <a href="/report" @if(request()->route()->uri == 'report') class='active' @endif><i class="bi bi-clipboard-data"></i> Laporan</a>
                    <a href="/profile" @if(request()->route()->uri == 'profile') class='active' @endif><i class="bi bi-person-fill"></i> Profil</a>
                    <a href="/usertransaction" @if(request()->route()->uri == 'usertransaction') class='active' @endif><i class="bi bi-clock-history"></i> Riwayat Transaksi</a>
                    <a href="/logout"><i class="bi bi-box-arrow-right"></i> Logout</a>
                </div>
                
                <div class="content p-5 col-lg-10">
                    @yield('content')
                </div>
            </div>
        </div>
        
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </div>
</body>
</html>