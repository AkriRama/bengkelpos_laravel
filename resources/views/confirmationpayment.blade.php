@extends('layouts.mainlayouts')

@section('title','Konfirmasi Pembayaran')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <div class="container d-flex flex-column justify-content-center align-items-center mb-3 mt-3" style="text-align:center;">
        <h5>Detail Pembayaran</h5>

        
        <div class="card col-lg-6 p-4" style="text-align:left;">
            <div>
                <h6>Rincian Pembayaran</h6>
            </div>
            
            <div class="card mb-3" style="background:black; height: 2px;"></div>
            
            <!-- <div class="row">
                <div class="col-sm-3">
                    <p>No Pesanan</p>
                    <p>Nama Barang</p>
                    <p>Total Pembayaran</p>
                </div>
                
                <div class="col">
                    <p>:</p>
                    <p>:</p>
                    <p>:</p>
                </div>
            </div> -->
            
            <div class="row">
                <div class="col-sm-3">
                        <p>No Pesanan</p>
                </div>
                <div class="col">
                    <p>:</p>
                </div>
            </div>
            
            <div class="card mb-3" style="background:black; height: 2px;"></div>
            
            <div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>{{$products->name}}</th>
                            <th>X{{$quantity}}</th>
                            <th>Rp.{{$products->price}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <th>Total Keseluruhan</th>
                            <th>Rp.{{$total}}</th>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <!-- <div class="row">
                <div class="col-sm-4">
                    <p>OLI</p>
                </div>
                
                <div class="col-sm-4">
                    <p>X2</p>
                </div>
                
                <div class="col-sm-4">
                    <p>Rp.200.000</RP></p>
                </div>
            </div> -->
            
            <div class="card mb-3" style="background:black; height: 2px;"></div>
            
            <div class="mb-3">
                <label for="selectpayment">Metode Pembayaran</label><br>
                <select name="payment" id="">
                    <option value="payment">Bank BRI</option>
                    <option value="payment">Bank BCA</option>
                </select>
            </div>
            
            <div class="card mb-3" style="background:black; height: 2px;"></div>
            
            <!-- <div class="d-flex flex-column justify-content-end align-items-end">
                <a href="/confirmationpayment/{{$products->slug}}/{{$quantity}}" class="btn btn-primary" style="width: 10rem;">Bayar Sekarang</a>
            </div>
             -->
            <form action="/confirmationpayment/{{$products->slug}}" method="post">
                @csrf
            <div class="d-flex flex-column justify-content-end align-items-end">
                <input type="hidden" name="quantity" value="{{$quantity}}">
                <button class="btn btn-primary" style="width:10rem;">Bayar Sekarang</button>
            </div>
        </form>
    </div>
</div>

@endsection