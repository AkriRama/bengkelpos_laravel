@extends('layouts.mainlayoutsuser')

@section('title','Profile')

@section('content')

<div class="container p-3">
        <div class="card col-lg">
            <div class="card-header">
                <h5>Profile</h5>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6 image-container">
                        <img src="{{asset('images/no-image.png')}}" class="img-fluid block" alt="">
                    </div>

                    <div class="col-sm-6">
                        <form id="form" method="post" action="/editprofile">
                            @csrf
                            <div class="mb-3">
                                <label for="name">Nama</label>
                                <input type="text" id="name" class="form-control" value="{{Auth::user()->username}}">
                            </div>
                            
                            <div class="mb-3">
                                <label for="phone">No HP</label>
                                <input type="text" id="phone" class="form-control" value="{{Auth::user()->phone}}">
                            </div>
                            
                            <div class="mb-3">
                                <label for="address">Alamat</label>
                                <input type="text" id="address" class="form-control" value="{{Auth::user()->address}}" >
                            </div>
                            
                            <div class="mb-3">
                                <label for="Image">Cover</label>
                                <input type="file" id="image" class="form-control" >
                            </div>
                            
                            <button class="btn btn-success" type="submit">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection