<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BengkelAdmin | @yield('title')</title>

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

    /* .sidebar ul {
        list-style: none;
    }

    .sidebar li {
        padding: 10px;
    } */

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
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Bengkel</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarAdmin" aria-controls="navbarAdmin" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <div class="body-content h-100">
        <div class="row g-0 h-100">
                <div class="sidebar col-lg-2 collapse d-lg-block" id="navbarAdmin">
                    <!-- <ul>
                        <li>Barang</li>
                        <li>Jasa</li>
                        <li>Pelanggan</li>
                        <li>Transaksi</li>
                        <li>Logout</li>
                    </ul> -->
                    
                    <a href="dashboard" @if(request()->route()->uri == 'dashboard') class='active' @endif>Dashboard</a>
                    <a href="admincategory" @if(request()->route()->uri == 'admincategory' || request()->route()->uri == 'addcategory' || request()->route()->uri == 'editcategory' || request()->route()->uri == 'deletecatecategory' || request()->route()->uri == 'deletedcategory') class='active' @endif>Kategori</a>
                    <a href="adminproduct" @if(request()->route()->uri == 'adminproduct') class='active' @endif>Barang</a>
                    <a href="adminservice">Jasa</a>
                    <a href="users">Pelanggan</a>
                    <a href="transaction">Transaksi</a>
                    <a href="logout">Logout</a>

                </div>

                <div class="content p-5 col-lg-10">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
</body>
</html>l