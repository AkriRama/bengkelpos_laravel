<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bengkel | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<style>
    .image-container {
        width: col-sm-6;
        height: 300px;
        overflow: hidden;
        position: relative;
    }

    .image-container img{
        display: block;
        max-width: 100%;
        max-height: 100%;
        height: auto;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    
    .navbar {
        z-index: 1; 
        position: relative;
    }

    .main {
        height: 100vh;
    }

    .sidebar {
        background: #605B5B;
        color: #fff; 
    }

    .sidebar a {
        color: #fff;
        text-decoration: none;
        display: block;
        padding: 20px 20px;
    }

    .sidebar a:hover {
        background: #000;
    }

    .active {
        background: #000;
        border-right: solid 8px orange;
    }
</style>
<body>
    <div class="main d-flex flex-column justify-content-between">

        <nav class="navbar navbar-expand-lg bg-body-tertiary ps-5 pe-5">
            <div class="container-fluid">
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
                    <li><a class="dropdown-item" href="home">Beranda</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="logout">Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
</nav>

        <div class="body-content h-100">
            <div class="row g-0 h-100">
                <div class="sidebar col-lg-2 collapse d-lg-block" id="navbarAdmin">
                    <a href="profile" @if(request()->route()->uri == 'profile') class='active' @endif>Profile</a>
                    <a href="usertransaction" @if(request()->route()->uri == 'usertransaction') class='active' @endif>Riwayat Transaksi</a>
                    <a href="logout">Logout</a>
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