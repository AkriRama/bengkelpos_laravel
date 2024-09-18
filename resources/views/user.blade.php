@extends('layouts.mainlayoutsadmin')

@section('title','Pelanggan')

@section('content')

    <h1>Daftar Pelanggan</h1>

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
                    <th>Username</th>
                    <th>No Telepon</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->username }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>
                        <a href="editproduct/{{$item->slug}}">Detail</a>
                        <a href="deleteproduct/{{$item->slug}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection