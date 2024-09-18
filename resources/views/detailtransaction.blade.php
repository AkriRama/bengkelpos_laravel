@extends('layouts.mainlayouts')

@section('title','Detail Transaction')

@section('content')

<style>

.card-custom-reverse {
    border-radius: 0px 0px 10px 10px;
}

.card-custom5 {
    border-radius: 0px 20px 0px 20px;
}

/* tambahan style */
.custom-checkbox {
    position: relative;
}

.custom-checkbox input[type="checkbox"] {
    display: none;
}

.custom-checkbox label {
    padding-left: 25px;
    position: relative;
    cursor: pointer;
}

.custom-checkbox label:before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 20px;
    height: 20px;
    border: 1px solid #ccc;
    background-color: #fff;
}

.custom-checkbox input[type="checkbox"]:checked + label:after {
    content: '\2713';  /* Unicode character for a checkmark */
    position: absolute;
    left: 5px;
    top: 2px;
    color: #000;
    font-weight: bold;
}
</style>

<div class="container mx-auto mt-5 mb-5 card-lancip" style="width: 45rem;">
    <div class="card mb-3 card-custom5">
        <div class="row">
            <div class="col-md-2 my-auto mx-auto card-custom-reverse">
                
                <div class="btn" aria-label="Basic checkbox toggle button group">
                    <input class="btn btn-outline-primary" type="checkbox" class="btn-check" id="btncheck1" autocomplete="off" style="width: 30px;
    height: 30px;">
                </div>
            </div>

            <div class="col-md-4">
                <div class="card-body bg-primary" style="width: 10rem; height: 150px"></div>
            </div>
            
            <div class="col-md-6">
                <h5>OLI</h5>
                <h6>Rp.250.000</h6>
            </div>
        </div>
    </div>
    
    <div class="card mb-3 card-custom5">
        <div class="row">
            <div class="col-md-2 my-auto mx-auto card-custom-reverse">
                
                <div class="btn" aria-label="Basic checkbox toggle button group">
                    <input class="btn btn-outline-primary" type="checkbox" class="btn-check" id="btncheck1" autocomplete="off" style="width: 30px;
    height: 30px;">
                </div>
            </div>

            <div class="col-md-4">
                <div class="card-body bg-primary" style="width: 10rem; height: 150px"></div>
            </div>
            
            <div class="col-md-6">
                <h5>OLI</h5>
                <h6>Rp.250.000</h6>
            </div>
        </div>
    </div>
    <div class="card mb-3 card-custom5">
        <div class="row">
            <div class="col-md-2 my-auto mx-auto card-custom-reverse">
                
                <div class="btn" aria-label="Basic checkbox toggle button group">
                    <input class="btn btn-outline-primary" type="checkbox" class="btn-check" id="btncheck1" autocomplete="off" style="width: 30px;
    height: 30px;">
                </div>
            </div>

            <div class="col-md-4">
                <div class="card-body bg-primary" style="width: 10rem; height: 150px"></div>
            </div>
            
            <div class="col-md-6">
                <h5>OLI</h5>
                <h6>Rp.250.000</h6>
            </div>
        </div>
    </div>

    <div class="card card-custom-reverse">
        <div class="row">
            <div class="col">
                <div class="card-title text-center fw-bold fs-5">Total Harga</div>
            </div>

            <div class="col-md my-auto">
                <h6>Rp.200.000</h6>
            </div>

            <div class="col d-flex justify-content-end" >
                <button class="btn btn-outline" style="width: 10rem;">Checkout</button>
            </div>
        </div>
    </div>
</div>

@endsection