@extends('layouts.mainlayoutsuser')

@section('title', 'Kasir')

@section('content')

<h4>Welcome</h4>
<div class="row">

    <div class="col-lg-6" style="height: 100%;  font-size: 15px;">

    <div class="card p-5 shadow mb-1 fw-bold" style="border-radius: 30px 30px 0px 0px ; height: 100%;">
    
    @if(isset($products))
        <form action="">

            <div class="row mb-3">
                <div class="col-sm-3 col-lg-3">
                    <label for="id" class="fw-bold">No Barang</label>
                </div>
                <div class="col-sm-9 col-lg-9">
                    <input type="text" name="id" id="id" value="{{ $products->id}}" class="submit" style="width: 100%;"  onkeypress="return enterAsSubmit(event)">
                    <button hidden type="submit">Cari</button>
                </div>
            </div>
            
            
            <div class="row mb-3">
                <div class="col-sm-3 col-lg-3">
                    <label for="name" class="fw-bold">Nama Barang</label>
                </div>
                <div class="col-sm-9 col-lg-9">
                    <input type="text" name="name" value="{{$products->name}}" style="width: 100%;" disabled>
                </div>
            </div>
            
            <div class="row mb-3">
                <div class="col-sm-3 col-lg-3">
                    <label for="price" class="fw-bold">Harga</label>
                </div>
                <div class="col-sm-9 col-lg-9">
                    <input type="text" name="price" value="Rp{{number_format($products->price, 0, ',', '.')}}" style="width: 100%;" disabled>
                </div>
            </div>
            
        @if(isset($quantity))
            <div class="row mb-3">
                <div class="col-sm-3 col-lg-3">
                    <label for="quantity" class="fw-bold">Jumlah</label>
                </div>
                <div class="col-sm-9 col-lg-9">
                    <input type="text" name="quantity" value="{{$quantity}}" style="width: 100%;">
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-3 col-lg-3">
                    <label for="total" class="fw-bold">Total Harga</label>
                </div>
                <div class="col-sm-9 col-lg-9">
                    <input type="text" name="total" value="Rp{{number_format($total, 0, ',', '.')}}" style="width: 100%;" disabled>
                </div>
            </div>

        </form>

        <form action="addCashier/{{$products->slug}}" method="post">
        @csrf
    
            <div>
                <input type="hidden" name="quantity" value="{{$quantity}}">
                <button type="submit" class="btn btn-navy mt-3" @if(session(isset($disableButton))) disabled @endif>Tambah</button>
            </div>
        </form>
        
        @else
            
            <div class="row mb-3">
                <div class="col-sm-3 col-lg-3">
                    <label for="quantity" class="fw-bold">Jumlah</label>
                </div>
                <div class="col-sm-9 col-lg-9">
                    <input type="text" name="quantity" value="" style="width: 100%;">
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-3 col-lg-3">
                    <label for="total" class="fw-bold">Total Harga</label>
                </div>
                <div class="col-sm-9 col-lg-9">
                    <input type="text" name="total" value="" style="width: 100%;" disabled>
                </div>
            </div>  
            
            <div>
                <button  class="btn btn-navy mt-3">Tambah</button>
            </div>
        @endif

            


        
        <!-- if products not have value -->
        @else
        <form action="">

            <div class="row mb-3">
                <div class="col-sm-3 col-lg-3">
                    <label for="id" class="fw-bold">No Barang</label>
                </div>
                <div class="col-sm-9 col-lg-9">
                    <input type="text" name="id" id="id" value="" class="submit" style="width: 100%;"  onkeypress="return enterAsSubmit(event)">
                    <button hidden type="submit">Cari</button>
                </div>
            </div>
            
            
            <div class="row mb-3">
                <div class="col-sm-3 col-lg-3">
                    <label for="name" class="fw-bold">Nama Barang</label>
                </div>
                <div class="col-sm-9 col-lg-9">
                    <input type="text" name="name" value="" style="width: 100%;" disabled>
                </div>
            </div>
            
            <div class="row mb-3">
                <div class="col-sm-3 col-lg-3">
                    <label for="price" class="fw-bold">Harga</label>
                </div>
                <div class="col-sm-9 col-lg-9">
                    <input type="text" name="price" value="" style="width: 100%;" disabled>
                </div>
            </div>
            
            <div class="row mb-3">
                <div class="col-sm-3 col-lg-3">
                    <label for="quantity" class="fw-bold">Jumlah</label>
                </div>
                <div class="col-sm-9 col-lg-9">
                    <input type="text" name="quantity" value="" style="width: 100%;">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-lg-3">
                    <label for="total" class="fw-bold">Total Harga</label>
                </div>
                <div class="col-sm-9 col-lg-9">
                    <input type="text" name="total" value="" style="width: 100%;" disabled>
                </div>
            </div>  

            <div>
                <button  class="btn btn-secondary mt-3" disabled>Tambah</button>
            </div>
        </form>

    @endif
    </div>

    @if(isset($products) && isset($quantity) && isset($orders))
    <div class="card p-5 shadow" style="border-radius: 0px 0px 30px 30px ; height: 100%;">
       @if(isset($cash))
        <form action="">
           <input hidden name="id"value="{{$products->id}}" style="width: 100%;">
           <input hidden name="quantity"value="{{$quantity}}" style="width: 100%;">
           
           <div class="row mb-3">
               <div class="col-sm-3 col-lg-3">
                   <label for="cash" class="fw-bold">Tunai</label>
                </div>
                <div class="col-sm-9 col-lg-9">
                    <input type="text" name="cash" id="cash" value="{{$cash}}" class="submit" style="width: 100%;">
                    <button hidden type="submit"></button>
                </div>
            </div>
            
            
            <div class="row mb-3">
                <div class="col-sm-3 col-lg-3">
                    <label for="change" class="fw-bold">Kembalian</label>
                </div>
                <div class="col-sm-9 col-lg-9">
                    <input type="text" name="change" value="Rp{{number_format($change, 0, ',', '.')}}" style="width: 100%;" disabled>
                </div>
            </div>

        </form> 
        @else
        <form action="">
            <input hidden name="id"value="{{$products->id}}" style="width: 100%;">
            <input hidden name="quantity"value="{{$quantity}}" style="width: 100%;">
            
            <div class="row mb-3">
                <div class="col-sm-3 col-lg-3">
                <label for="cash" class="fw-bold">Tunai</label>
                </div>
                <div class="col-sm-9 col-lg-9">
                    <input type="text" name="cash" id="cash" value="" class="submit" style="width: 100%;">
                    <button hidden type="submit"></button>
                </div>
            </div>
            
            
            <div class="row mb-3">
                <div class="col-sm-3 col-lg-3">
                    <label for="change" class="fw-bold">Kembalian</label>
                </div>
                <div class="col-sm-9 col-lg-9">
                    <input type="text" name="change" value="" style="width: 100%;" disabled>
                </div>
            </div>

        </form> 

        @endif

        <form action="paidorder/{{$order->order_id}}" method="post">
        @csrf
    
            <div>
                <input type="hidden" name="" value="">
                <button type="submit" class="btn btn-navy mt-3">Bayar</button>
            </div>
        </form>
    </div>
    
    @else
    <div class="card p-5 shadow" style="border-radius: 0px 0px 30px 30px ; height: 100%;">

        <div class="row mb-3">
            <div class="col-sm-3 col-lg-3">
                <label for="cash" class="fw-bold">Tunai</label>
            </div>
            <div class="col-sm-9 col-lg-9">
                <input type="text" name="cash" id="cash" value="" class="submit" style="width: 100%;">
                <button hidden type="submit"></button>
            </div>
        </div>
        
        
        <div class="row mb-3">
            <div class="col-sm-3 col-lg-3">
                <label for="change" class="fw-bold">Kembalian</label>
            </div>
            <div class="col-sm-9 col-lg-9">
                <input type="text" name="change" value="" style="width: 100%;" disabled>
            </div>
        </div>

        <div>
            <input type="hidden"value="">
            <button type="submit" class="btn btn-secondary mt-3" disabled>Bayar</button>
        </div>
    </div>
    @endif

    </div>


    @if(isset($orders))
    <div class="col-lg-5 ms-5" style="height: 100%;">
 
    <div class="card shadow p-5" style="text-align:left; border-radius: 20px; height: 100%;">
            <div>
                <h3>Rincian Pembayaran</h3>
            </div>
            
            <div class="card mb-3" style="background:black; height: 2px;"></div>
            
            <div class="row" style="font-size: 10px;">
            <table class="table">
                <tr>
                    <th>No Pesanan</th>
                    <td>:</td>
                    <td>{{$order->order_id}}</td>

                    <th>Tanggal Pesanan</th>
                    <td>:</td>
                    <td>{{$order->created_at->format('d-m-Y')}}</td>
                </tr>
                
                <tr>
                    <th>Nama Pelanggan</th>
                    <td>:</td>
                    <td>{{Auth::user()->username}}</td>

                    <th>Waktu Pesanan</th>
                    <td>:</td>
                    <td>{{$order->created_at->format('H:i:s')}}</td>
                </tr>
            </table>

            <!-- <div>
                <div class="col-sm-4 col-md-3">
                        <p>No Pesanan</p>
                        <p>Nama Pelanggan</p>
                </div>
                <div class="col">
                    <p>: {{$order->order_id}}</p>
                    <p>: {{Auth::user()->username}}</p>
                </div>
                
            </div> -->
            
            </div>
            
            <div class="card mb-3" style="background:black; height: 2px;"></div>
            
            <div>
                <table class="table" style="font-size: 10px;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Barang/Jasa</th>
                            <th style="text-align:center;">Jumlah</th>
                            <th style="text-align:right;">Harga</th>
                            <th style="text-align:right;">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->products->name}}</td>
                            <td style="text-align:center;">X {{$item->quantity}}</td>
                            <td style="text-align:right;">{{number_format($item->products->price, 0, ',', '.')}}</td>
                            <td style="text-align:right;">{{number_format($item->total, 0, ',', '.')}}</td>
                        </tr>
                        @endforeach
                    </tbody>    

                    <tfoot>
                        <tr>
                            <th colspan="4" style="text-align:right;">Total Keseluruhan</th>
                            <td style="text-align:right;">{{number_format($order->totalOrder, 0, ',', '.')}}</td>
                        </tr>
                        @if(isset($cash))
                        <tr>
                            <th colspan="4" style="text-align:right;">Tunai</th>
                            <td style="text-align:right;">{{number_format($cash, 0, ',', '.')}}</td>
                        </tr>
                        <tr>
                            <th colspan="4" style="text-align:right;">Kembalian</th>
                            <td style="text-align:right;">{{number_format($change, 0, ',', '.')}}</td>
                        </tr>
                        
                        @else
                        <tr>
                            <th colspan="4" style="text-align:right;">Tunai</th>
                            <th></th>
                        </tr>
                        <tr>
                            <th colspan="4" style="text-align:right;">Kembalian</th>
                            <th></th>
                        </tr>
                        @endif
                    </tfoot>
                </table>
            </div> 

    </div>
    @endif

    <div class="mt-3">
        <button class="btn-navy">print</button>
    </div>
    </div>

    

</div>

@endsection