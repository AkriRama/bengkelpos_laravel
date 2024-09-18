@extends('layouts.mainlayoutsadmin')

@section('title','Category')

@section('content')

    <h1>Daftar Slider</h1>

    <div class="mt-3 d-flex justify-content-end">
        <a href="deletedcategory" class="btn btn-secondary me-3">View Deleted Data</a>
        <a href="addslider" class="btn btn-primary">Tambah Slider</a>
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
                    <th>Name</th>
                    <th>Slider</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sliders as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->name}}</td>
                    <td>
                        <img src="{{$item->cover != null ? asset('storage/slider/'. $item->cover) : asset('images/no-image.png')}}" alt="" style="max-width: 3rem; max-height: 3rem;">
                    </td>
                    <td>{{$item->description}}</td>
                    <td>
                        <a href="editslider/{{$item->slug}}">Edit</a>
                        <a href="">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
