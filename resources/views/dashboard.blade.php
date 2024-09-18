@extends('layouts.mainlayoutsadmin')

@section('title','Dashboard')

@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">


<style>
    .card-data {
        border:solid;
        padding: 20px 30px;
        background-color: orange;
        color: #fff;
    }

    .card-data i{
        font-size: 50px;
    }

    .card-desc {
        font-size: 30px;
    }

    .card-count {
        font-size: 30px;
    }
</style>
    <h1>Welcome, {{Auth::user()->username}}</h1>
    <div class="row mt-5">
        <div class="col-lg-4">
            <div class="card-data">
                <div class="row">
                    <div class="col-6">
                    <i class="bi bi-box-seam-fill"></i>
                    </div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">Barang</div>
                        <div class="card-count">{{$product_count}}</div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4">
            <div class="card-data">
                <div class="row">
                    <div class="col-6">
                    <i class="bi bi-box2-fill"></i>
                    </div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">Jasa</div>
                        <div class="card-count">30</div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4">
            <div class="card-data">
                <div class="row">
                    <div class="col-6">
                    <i class="bi bi-person-rolodex"></i>
                    </div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">Pelanggan</div>
                        <div class="card-count">{{$user_count}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection