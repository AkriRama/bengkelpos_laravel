<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Transaksi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<style>
    .img-top {
        width : 10%;
        height: 10%;    
    }
</style>
<body>
    <div class="container p-3 d-flex flex-column justify-content-center align-items-center col-lg-8 col-md-8 col-sm-8">
        <div class="card p-5 col-md-10 col-lg-10" style="border: 2px solid black;">

            <div>
                <img src="{{asset('images/logo2.png')}}" class="img-top" alt="">
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="card-text">
                        <p class="mb-1">Jl. Rajabasa No.22</p>
                        <p class="mb-1">Bandar Lampung</p>
                        <p>No. 0987654321</p>
                    </div>
                </div>
                
                <div class="col-sm-3 col-md-2 col-lg-2">
                    <div class="card-title  ">
                        <p>Tanggal</p>
                    </div>
                </div>

                <div class="col-sm-1">
                    <div class="card-title  ">
                        <p>:</p>
                    </div>
                </div>
            </div>
            
            <div class="card" style="height:2px; background:black"></div>
            <div class="row mt-2">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <p>No. Pesanan</p>
                    <p>Nama Pelanggan</p>
                </div>
                
                <div class="col-sm-1">
                    <p>:</p>
                    <p>:</p>
                </div>
            </div>
            
            <div class="card" style="height:2px; background:black"></div>
            
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>A1</td>
                        <td>Oli</td>
                        <td>2</td>
                        <td>Rp.25.000</td>
                        <td>Rp.50.000</td>
                    </tr>
                </tbody>

                <tfoot>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><b>Total Keseluruhan</b></td>
                        <td>RP.50.000</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <div class="mt-3">
        <button class="btn btn-primary" onclick="printDiv('printableArea')">Print</button>
    </div>
    
    </div>
</body>
</html>