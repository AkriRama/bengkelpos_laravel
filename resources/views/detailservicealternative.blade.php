@extends('layouts.mainlayouts')

@section('title','Detail Jasa')

@section('content')

<div class="container mx-auto mt-5 mb-5" style="width: 45rem;">
    <!-- <div class="row mx-auto mt-5 mb-5" style="width: 45rem;"> -->
        <div class="card mb-2 mt-3 card-custom">
            <div class="card-body">
                <div class="row">
     
                    <div class="col-md-4">
                        <div class="card bg-primary" style="width: 10rem; height: 150px"></div>
                    </div>      
                    <div class="col-md-6">
                        <h5 class="card-title">Paket Ganti Oli</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Rp.250.000</h6>
                    </div>
                 </div>
            </div>
        </div>

        <div>
            <h6 class="card-title mb-2 ml-0">Detail Jasa</h6>
        </div>

        <div class="card mb-3 card-lancip">
            <div class="card-body">
                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus veritatis iste iusto rerum sint eaque fuga ducimus inventore dolore ex, est architecto corporis molestiae nihil quibusdam quasi cupiditate eius laudantium labore impedit alias voluptas beatae quas. Nihil libero et expedita excepturi tempore, laboriosam iusto ex minima! Voluptas, unde, inventore facere aut, iusto voluptatem at perferendis nemo voluptates dolore iure provident suscipit nobis eveniet veritatis! Qui non placeat unde dolores similique voluptas impedit soluta. Explicabo obcaecati doloremque vitae! Totam, repudiandae consequatur. Inventore enim dolorum commodi aspernatur quae debitis odit beatae eveniet officiis impedit dignissimos molestiae ea, quaerat neque aperiam laudantium voluptatibus?</p>
            </div>
        </div>

        <div class="card text-center mb-3 card-custom2" style="width: 25vh;">

                <div class="row align-items-center" >
                    <div class="col">
                        <a class="btn btn-transparent fw-bold fs-3" href="">-</a>
                    </div>
                    <div class="col">
                        <a class="btn btn-transparent" href="">1</a>
                    </div>
                    <div class="col">
                        <a class="btn btn-transparent fw-bold fs-3" href="">+</a>
                    </div>
                </div>
        </div>
        

            <div class="row">
                <div class="col-md-6">
                    <a href="" class="btn btn-primary card-custom3" style="width: 25vh;">Beli Sekarang</a>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <a href="" class="btn btn-primary card-custom4" style="width: 25vh">Keranjang</a>
                </div>
            </div>

    <!-- </div> -->
</div>

@endsection