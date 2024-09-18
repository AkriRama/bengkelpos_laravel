@extends('layouts.mainlayouts')

@section('title','Detail Service')

@section('content')

<div class="container col-10 mx-auto">
    <!-- <div class="row mx-auto mt-5 mb-5" style="width: 45rem;"> -->
       
    <div class="mt-3">
        @if(session('status'))
            <div class="alert alert-danger">
                {{ session('status') }}
            </div>

        @endif
    </div>

    <div class="card mb-2 mt-5 card-custom  shadow">
        <div class="card-body ms-3 me-3">
            <div class="row">
    
                <div class="col-lg-4 col-md-5 col-sm-6 card-custom5">
                    <img src="{{ $services->cover != null ? asset('storage/coverService/'.$services->cover) : asset('images/no-image4.png')  }}" alt="" style="max-width: 100%; max-height: 100%;">
                </div> 

                <div class="col-md-7 col-sm-7">
                    <h5 class="card-title mb-3">{{$services->name}}</h5>
                    <h2 class="card-subtitle mb-2 text-body-secondary">Rp{{ number_format($services->price,0, ',','.') }}</h2 >

                    <div class="mt-4 fw-bold text-white p-2 mb-2" style="background: #072541;">Deskripsi Barang</div>
                    <p style="text-align: justify;">{{$services->description}}</p>
                    
                    <div class="fw-bold fs-5 position-absolute end-0 top-0 mt-3 me-3 text-capitalize">
                        <p>{{$services->status}}</p>
                    </div>
                    <div class="fw-bold text-white p-2" style="background: #072541;">
                        <label for="quantity">Jumlah</label>
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <div class="input-group-prepend">
                            <button type="button" id="decreaseQuantity" class="border border-dark" style="width: 35px; height: 30px;">-</button>                    
                        </div>
                            
                        <div>
                            <input type="text" name="quantity" id="quantity" value="1" style="width: 50px; height: 30px; text-align:center">
                        </div>
                            
                        <div class="input-group-prepend">
                            <button type="button" id="increaseQuantity" class="border border-dark" style="width: 35px; height: 30px;">+</button>                    
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <form action="/purchase/{{$services->slug}}" method="post">
                                   @csrf
                        
                                <input type="hidden" name="quantity" id="hiddenQuantity2">
                                <button class="btn card-custom3 text-white p-2" type="submit" style="width: 30vh;"><i class="bi bi-bag-fill"></i> Pesan</button>
                            </form>
                        </div>
                        
                        <div class="col-md-6 col-sm-6">
                            <ul class="right">
                                
                                <form action="/detailtransactionService/{{$services->slug}}" method="post">
                                    @csrf
                                    
                                    <input type="hidden" name="quantity" id="hiddenQuantity">
                                    <input type="hidden" name="order" value="service">
                                    <button class="btn card-custom4 text-white p-2" type="submit" style="width:30vh;"><i class="bi bi-cart-plus-fill"></i> Keranjang</button>
                                </form>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div>
        <h6 class="card-title mb-2 ml-0">Detail Service</h6>
    </div>

    <div class="card mb-3 card-lancip">
        <div class="card-body">
            <p class="card-text">
                <p class="fw-bold">List Barang</p>
                <p>Berikut barang-barang yang akan digunakan dalam Pelayanan {{$services->name}}</p>
                @foreach($services->products as $products)
                {{$loop->iteration}}. {{$products->name}} <br>
                @endforeach
            </p>
        </div>
    </div>

    <div class="card text-center mb-3 card-custom2 d-flex flex-column justify-content-center align-items-center" style="width: 30vh;">

    
    </div>  
</div>

@endsection