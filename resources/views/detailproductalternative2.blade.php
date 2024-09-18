@extends('layouts.mainlayouts')

@section('title','Detail Product')

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
                    <img src="{{ $products->cover != null ? asset('storage/cover/'.$products->cover) : asset('images/no-image4.png')  }}" alt="" style="max-width: 100%; max-height: 100%;">
                </div> 

                <div class="col-md-7 col-sm-7">
                    <h5 class="card-title mb-3">{{$products->name}}</h5>
                    <h2 class="card-subtitle mb-2 text-body-secondary">Rp{{ number_format($products->price,0, ',','.') }}</h2 >

                    <div class="mt-4 fw-bold text-white p-2 mb-2" style="background: #072541;">Deskripsi Barang</div>
                    <p style="text-align: justify;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam fugiat neque nam! At, eveniet. Sapiente suscipit praesentium adipisci omnis porro, ipsam nemo pariatur. Repellat voluptatem tempora autem. Asperiores earum sit nobis doloribus sequi harum quaerat nisi minus unde sed amet perspiciatis qui ipsa architecto beatae, vitae atque accusantium! Rem ea consectetur nobis dolore illum in eaque mollitia! Vero aliquid, sunt eligendi quia blanditiis porro! Consectetur quos alias officia corporis nam quisquam optio tempore explicabo distinctio harum sit, temporibus qui? Quam tempora harum ea quo, sit non, nesciunt ad tempore, quis rem hic culpa ipsum! Quae aliquid in sunt quos magni?</p>
                    
                    <div class="fw-bold fs-5 position-absolute end-0 top-0 mt-3 me-3">
                        <p>Stok : {{$products->stock}}</p>
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
                            <form action="/buy/{{$products->slug}}" method="post">
                                @csrf
                        
                                <input type="hidden" name="quantity" id="hiddenQuantity2">
                                <input type="hidden" name="statusBuy" id="hiddenQuantity2" value="1">
                                <!-- <a href="" class="btn btn-primary card-custom3" type="submit" style="width: 30vh;">Beli Sekarang</a> -->
                                <button class="btn card-custom3 text-white p-2" type="submit" style="width: 30vh;"><i class="bi bi-bag-fill"></i> Beli</button>
                            </form>
                        </div>
                        
                        <div class="col-md-6 col-sm-6">
                            <ul class="right">
                                
                            <!-- detailtransaction -> masukan kekeranjang -->
                                <form action="/detailtransaction/{{$products->slug}}" method="post">
                                    @csrf
                                    
                                    <input type="hidden" name="quantity" id="hiddenQuantity">
                                    <button class="btn card-custom4 text-white p-2" type="submit" style="width:30vh;"><i class="bi bi-cart-plus-fill"></i> Keranjang</button>
                                    <!-- <a href="/detailtransaction/{{$products->slug}}" class="btn btn-primary card-custom4" style="width: 30vh">Keranjang</a> -->
                                </form>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div>
        <h6 class="card-title mb-2 ml-0">Detail Barang</h6>
    </div>

    <div class="card mb-3 card-lancip">
        <div class="card-body">
            <p class="card-text">{{$products->description}}</p>
        </div>
    </div>

    <div class="card text-center mb-3 card-custom2 d-flex flex-column justify-content-center align-items-center" style="width: 30vh;">

    
    </div>  
    <!-- <div class="row align-items-center" >
        <div class="col">
            <a class="btn btn-transparent fw-bold fs-3" href="/hitung/{{$products->slug}}">-</a>
        </div>
        <div class="col">
            <a class="btn btn-transparent" href="">{{$products->stock}}</a>
        </div>
        <div class="col">
            <a class="btn btn-transparent fw-bold fs-3" href="">+</a>
        </div>
    </div> -->
    
</div>

@endsection