@extends('layouts.mainlayoutsadmin')

@section('title','Barang')

@section('content')

    <h1>Daftar Barang</h1>

    <div class="mt-5 d-flex flex-column justify-content-center align-items-end">
        <a href="addproduct" class="btn btn-primary">Tambah Data</a>
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
                    <th>Code Product</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>stock</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->code_product }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->stock }}</td>
                    <td>
                        @foreach($item->categories as $category)
                        {{$category->name}} <br>
                        @endforeach
                    </td>
                    <td>{{ $item->description }}</td>
                    <td>
                        <a href="editproduct/{{$item->slug}}">Edit</a>
                        <a href="deleteproduct/{{$item->slug}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection