@extends('layouts.mainlayouts')

@section('title','Tentang Kami')

@section('content')

    
<style>
    img {
        width: 30vh;
        height:30vh;
        margin:auto;
    }
</style>
    
        <div class="container">
            <div class="card m-5">
                <div class="card-header">
                    <h4>Tentang Kami</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="card col-lg-4 col-md-6 col-sm-12" style="border:0;">
                            <img src="{{asset('images/logo.png')}}" alt="">
                        </div>

                        <div class="col-lg-7 col-md-6 col-sm-12">
                            <h5>Bengkel Alsya Jaya Motor</h5>
                            <p style="text-align:justify;">Kami menawarkan berbagai layanan mulai dari servis rutin, perbaikan kerusakan, penjualan suku cadang asli, dan konsultasi gratis. Tim mekanik kami selalu update dengan teknologi terbaru untuk memastikan motor Anda selalu dalam kondisi prima. Di Bengkel XYZ, kami bangga memiliki tim mekanik yang berdedikasi dan berpengalaman. Dipimpin oleh Bapak Andi Hartono, setiap mekanik kami telah melalui pelatihan khusus untuk memastikan kualitas pelayanan yang kami berikan.</p>
                            <h6>Hubungi Kami</h6>
                            <p>Alamat: Jl. Merapi, Bandar Jaya <br>
                            Telepon: 0812-XXXX-XXXX <br>
                            Email: info@bengkelxyz.com</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-title">
                <h5>Lokasi</h5>
            </div>

            <div class="card mb-5" style="border:0;">
                <div class="embed-responsive embed-responsive-21by9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15900.219651297488!2d105.221217!3d-4.9304707!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40a78251762385%3A0xdf0dcfab5284b5cf!2sBengkel%20Alsya%20Jaya%20Motor!5e0!3m2!1sid!2sid!4v1696229019375!5m2!1sid!2sid" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>


@endsection