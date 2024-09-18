@extends('layouts.mainlayoutsuser')

@section('title','Profile')

@section('content')

<div class="container p-3">

        <div class="card p-3">
            <div>
                <h1>Riwayat Pesanan</h1>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No Pesanan</th>
                        <th>Nama Barang</th>
                        <th>Total Pesanan</th>
                        <th>Tanggal Pembelian</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>A1</td>
                        <td>Oli</td>
                        <td>Rp.500.000</td>
                        <td>29-09-2023</td>
                        <td>
                            <a href="">Detail</a>
                            <a href="" type="button" onclick="cetakHalaman(); return false;">Cetak</a>
                        </td>
                    </tr>
                </tbody>
        </table>
    </div>
</div>

<script>
    function cetakHalaman() {
        const myWindow = window.open("/cetak", "_blank");
        myWindow.focus();

        // Menunggu jendela sepenuhnya dimuat sebelum mencetak
        myWindow.onload = function() {
            myWindow.print();
        }
    }
</script>
@endsection