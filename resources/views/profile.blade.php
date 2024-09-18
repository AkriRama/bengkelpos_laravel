@extends('layouts.mainlayoutsuser')

@section('title','Profile')

@section('content')

<div class="container p-3">
        <div class="card col-lg">
            <div class="card-header">
                <h5>Profile</h5>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6 image-container">
                        <img src="{{asset('images/no-image.png')}}" class="img-fluid block" alt="">
                    </div>

                    <div class="col-sm-6">
                        <form id="form" action="editprofile">
                            <div class="mb-3">
                                <label for="name">Nama</label>
                                <input type="text" id="name" class="form-control" value="{{Auth::user()->username}}" disabled >
                            </div>
                            
                            <div class="mb-3">
                                <label for="phone">No HP</label>
                                <input type="text" id="phone" class="form-control" value="{{Auth::user()->phone}}" disabled >
                            </div>
                            
                            <div class="mb-3">
                                <label for="address">Alamat</label>
                                <input type="text" id="address" class="form-control" value="{{Auth::user()->address}}" disabled >
                            </div>
                            
                            <div class="mb-3">
                                <label for="Image">Cover</label>
                                <input type="file" id="image" class="form-control" disabled >
                            </div>
                            
                            <button class="btn btn-primary" type="submit">Perbarui Profile</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection