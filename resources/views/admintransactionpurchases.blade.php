@extends('layouts.mainlayoutsadmin')

@section('title','Transaksi')

@section('content')

    @foreach($purchases as $item)
    <!-- Modal Detail Pembelian -->
    <div class="modal fade" id="purchaseDetailModal{{ $item->purchase_id }}" tabindex="-1" aria-labelledby="purchaseDetailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md   ">
        <div class="modal-content">
            
        </div>
    </div>
    </div>
    @endforeach

    <!-- <h1>Daftar Transaksi Pembelian</h1> -->
<!-- 
    <div class="mt-3 d-flex flex-column justify-content-center align-items-end">
        <a href="addproduct" class="btn btn-navySmall"><i class="bi bi-plus-square"></i> Tambah Data</a>
    </div> -->

    <div class="mt-3">
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>

        @endif
    </div>

    <div class="sideBar">
        <form action="" id="pagination-form">

            <select name="paginate" id="paginate" onchange="submitForm()">
                <option value="">Kuantitas</option>
                <option value="10">10</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
            <button hidden type="submit" >Hello</button>
        </form>
    </div>

    <div class="my-3 table">
        <table class="table table-hover table-bordered">
            <thead class="table table-dark" style="vertical-align: middle;">
                <tr>
                    <th>No.</th>
                    <form action="">
                        @if(session('sortdown'))
                        <input hidden name="sortdown" value="desc">
                        <th>Tanggal <button class="btn" href=""><i class="bi bi-sort-down"></i></button></th>
                        @else
                        <input hidden name="sortup" value="asc">
                        <th>Tanggal <button class="btn" href=""><i class="bi bi-sort-up"></i></button></th>
                        @endif
                    </form>
                    <th>No Pembelian</th>
                    <th>Penerima</th>
                    <th>Jumlah</th>
                    <th>Total Pembelian</th>
                    <!-- <th>Aksi</th> -->
                </tr>
            </thead>
            <tbody>
                @foreach($purchases as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>{{$item->purchase_id}}</td>
                    <td>{{$users->username}}</td>
                    <td>{{$item->quantity}}</td>
                    <td>Rp{{number_format($item->total, 0, ',', '.')}}</td>
                    <!-- <td> -->
                        <!-- <a href="#"data-bs-toggle="modal" data-bs-target="#purchaseDetailModal{{ $item->purchase_id }}"><i class="bi bi-card-list"></i> Detail</a> -->
                        <!-- <a href="#">Delete</a> -->
                    <!-- </td> -->
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- paginator -->
    {{ $purchases->links('pagination::paginator-bengkel') }}

    <script>
    function submitForm() {
        document.getElementById('pagination-form').submit();
    }
</script>

@endsection