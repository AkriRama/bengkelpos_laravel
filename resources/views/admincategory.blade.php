@extends('layouts.mainlayoutsadmin')

@section('title','Category')

@section('content')

    <h1>Daftar Kategori</h1>

    <div class="mt-5 d-flex justify-content-end">
        <a href="deletedcategory" class="btn btn-secondary me-3">View Deleted Data</a>
        <a href="addcategory" class="btn btn-primary">Tambah Data</a>
    </div>

    <div class="mt-5">
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>

        @endif
    </div>

    <div class="my-5">
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->name}}</td>
                    <td>
                        <a href="editcategory/{{$item->slug}}">Edit</a>
                        <a href="deletecategory/{{$item->slug}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
