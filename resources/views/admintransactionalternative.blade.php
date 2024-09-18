@extends('layouts.mainlayoutsadmin')

@section('title','Transaksi')

@section('content')

    <h1>Daftar Transaksi</h1>

    <div class="mt-3 d-flex flex-column justify-content-center align-items-end">
        <a href="addproduct" class="btn btn-primary">Tambah Data</a>
    </div>

    <div class="mt-3">
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>

        @endif
    </div>

    <div class="my-3">
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>User ID</th>
                    <th>No Pesanan</th>
                    <th>Total Pembayaran</th>
                    <th>Metode Pembayaran</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transactions as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->user_id}}</td>
                    <td>{{$item->order_id}}</td>
                    <td>Rp{{number_format($item->totalOrder, 0, ',', '.')}}</td>
                    <td>{{$payments->name}}</td>
                    <td>
                        @if($item->status == "unpaid")
                            <p class="text-danger fw-bold">Belum Bayar</p>
                        @else
                            <p class="text-success fw-bold">Sudah Bayar</p>
                        @endif    
                    </td>
                    <td>
                        <a href="#">Detail</a>
                        <a href="#">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection