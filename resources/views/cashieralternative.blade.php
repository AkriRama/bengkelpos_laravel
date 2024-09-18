@extends('layouts.mainlayoutsuser')

@section('title', 'Kasir')

@section('content')

<h1>Welcome</h1>
<div class="row">

<div class="card p-5 shadow col-lg-6" style="border-radius: 30px;">

    
    <div class="" >

            @if(!empty($products))
        <form action="">

            <div class="row mb-3">
                <div class="col-sm-3 col-lg-3">
                    <label for="id">No Barang</label>
                </div>
                <div class="col-sm-9 col-lg-9">
                    <input type="text" name="id" id="id" value="{{ $products->id}}" class="submit" style="width: 100%;"  onkeypress="return enterAsSubmit(event)">
                    <button hidden type="submit">Cari</button>
                </div>
            </div>
            
            
            <div class="row mb-3">
                <div class="col-sm-3 col-lg-3">
                    <label for="name">Nama Barang</label>
                </div>
                <div class="col-sm-9 col-lg-9">
                    <input type="text" name="name" value="{{$products->name}}" style="width: 100%;" disabled>
                </div>
            </div>
            
            <div class="row mb-3">
                <div class="col-sm-3 col-lg-3">
                    <label for="price">Harga</label>
                </div>
                <div class="col-sm-9 col-lg-9">
                    <input type="text" name="price" value="Rp{{number_format($products->price, 0, ',', '.')}}" style="width: 100%;" disabled>
                </div>
            </div>
            
            @if(!empty($total))
                <div class="row mb-3">
                    <div class="col-sm-3 col-lg-3">
                        <label for="quantity">Jumlah</label>
                    </div>
                    <div class="col-sm-9 col-lg-9">
                        <input type="text" name="quantity" value="{{$quantity}}" style="width: 100%;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-lg-3">
                        <label for="total">Total Harga</label>
                    </div>
                    <div class="col-sm-9 col-lg-9">
                        <input type="text" name="total" value="Rp{{number_format($total, 0, ',', '.')}}" style="width: 100%;" disabled>
                    </div>
                </div>  

                @else
                
                <div class="row mb-3">
                    <div class="col-sm-3 col-lg-3">
                        <label for="quantity">Jumlah</label>
                    </div>
                    <div class="col-sm-9 col-lg-9">
                        <input type="text" name="quantity" value="" style="width: 100%;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-lg-3">
                        <label for="total">Total Harga</label>
                    </div>
                    <div class="col-sm-9 col-lg-9">
                        <input type="text" name="total" value="" style="width: 100%;" disabled>
                    </div>
                </div>  
                @endif
                </form>


                <form action="addCashier/{{$products->slug}}" method="post">
                    @csrf
                    <div>
                        <input type="hidden" name="quantity" value="{{$quantity}}">
                        <button  class="btn btn-navy mt-3">Bayar</button>
                    </div>
                </form>

            <!-- <div>
                <a href="addCashier/{{$products->slug}}">Bayar</a>
            </div> -->

            @else 
            <div class="row mb-3">
                <div class="col-sm-3 col-lg-3">
                    <label for="id">No Barang</label>
                </div>
                <div class="col-sm-9 col-lg-9">
                    <input type="text" name="id" id="id" value="{{ old('id') }}" class="submit" style="width: 100%;"  onkeypress="return enterAsSubmit(event)">
                    <button hidden type="submit">Cari</button>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-3 col-lg-3">
                    <label for="name">Nama Barang</label>
                </div>
                <div class="col-sm-9 col-lg-9">
                    <input type="text" name="name" value="" style="width: 100%;" disabled>
                </div>
            </div>
            
            <div class="row mb-3">
                <div class="col-sm-3 col-lg-3">
                    <label for="price">Harga</label>
                </div>
                <div class="col-sm-9 col-lg-9">
                    <input type="text" name="price" value="" style="width: 100%;" disabled>
                </div>
            </div>
            
            <div class="row mb-3">
                <div class="col-sm-3 col-lg-3">
                    <label for="quantity">Jumlah</label>
                </div>
                <div class="col-sm-9 col-lg-9">
                    <input type="text" name="quantity" value="" style="width: 100%;">
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-3 col-lg-3">
                    <label for="total">Total Harga</label>
                </div>
                <div class="col-sm-9 col-lg-9">
                    <input type="text" name="total" value="" style="width: 100%;" disabled>
                </div>
            </div>     
            @endif
            
    </div>
</div>

<script>
    function enterAsSubmit(event) {
        if (event.keyCode === 13) {
            event.preventDefault(); // Menghindari perilaku default dari 'enter'
            event.target.form.submit(); // Mengirim form
        }
    }
</script>

<script>
    document.querySelector('.btn.btn-navy').addEventListener('click', function() {
    const quantityValue = document.getElementById('quantity').value;
    document.getElementById('hiddenQuantity').value = quantityValue;
}); 
</script>
@endsection