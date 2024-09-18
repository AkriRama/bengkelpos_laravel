@extends('layouts.mainlayouts')

@section('title','Detail Product')

@section('content')

<style>
.card-lancip {
    border-radius: 0;
}

.card-custom {
    border-radius: 10px 10px 0px 0px;
}

.card-custom2 {
    border-radius: 0px 0px 10px 0px;
}

.card-custom3 {
    border-radius: 10px 0px 0px 0px;
}

.card-custom4 {
    border-radius: 0px 0px 10px 0px;
}

.right{
    float: right;
    display: block;
}

.no-border
{
    border:0;
    background: transparent;
}
</style>

<div class="container mx-auto mt-5 mb-5" style="width: 45rem;">
    <!-- <div class="row mx-auto mt-5 mb-5" style="width: 45rem;"> -->
       
    <div class="card mb-2 mt-3 card-custom">
        <div class="card-body">
            <div class="row">
    
                <div class="col-lg-4 col-md-5 col-sm-6 d-flex flex-column justify-content-center" style="max-height:100%; max-width: 100%;" >
                    <img src="{{ $products->cover != null ? asset('storage/cover/'.$products->cover) : asset('images/no-image.png')  }}" alt="" style="max-width: 100%; max-height: 100%;">
                </div> 

                <div class="col-md-6 col-sm-6">
                    <h5 class="card-title">{{$products->name}}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Rp.{{$products->price}}</h6>
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


    <form action="/purchase/{{$products->slug}}" method="post">
        @csrf
        
        <label for="quantity"></label>
        <div class="row mb-4">
            <div class="col-sm-4">
                <button type="button" id="increaseQuantity">+</button>                    
            </div>
            <div class="col-sm-4">
                <input type="text" name="quantity" id="quantity" value="1" style="width: 35px; text-align:center">
            </div>
            <div class="col-sm-4">
                <button type="button" id="decreaseQuantity">-</button>                    
            </div>
        </div>
        
        
        <div class="row d-flex">
            <div class="col-md-6 col-sm-6">
                <!-- <a href="" class="btn btn-primary card-custom3" type="submit" style="width: 30vh;">Beli Sekarang</a> -->
                <button class="btn btn-primary card-custom3" type="submit" style="width: 30vh;">Beli</button>

            </div>
            <div class="col-md-6 col-sm-6">
                <ul class="right">
                    <a href="/detailtransaction/{{$products->slug}}" class="btn btn-primary card-custom4" style="width: 30vh">Keranjang</a>
                </ul>
            </div>
        </div>
    </form>
</div>

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

@endsection