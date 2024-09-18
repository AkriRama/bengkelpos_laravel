@extends('layouts.mainlayoutsadmin')

@section('title','Pelanggan')

@section('content')

<style>
    img {
        max-width: 5rem;
        max-height: 5rem;
    }
</style>

    <h1>Daftar Pelanggan</h1>

    <div class="mt-3 d-flex flex-column justify-content-center align-items-end">
        <a href="addproduct" class="btn btn-primary">Tambah Data</a>
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
                    <th>Foto Profil</th>
                    <th>Username</th>
                    <th>No Telepon</th>
                    <th>Alamat</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><img src="{{ $item->photo_profile != null ? asset('storage/photo_profile/'. $item->photo_profile) : asset('images/no-image.png')}}" alt=""></td>
                    <td>{{ $item->username }}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->address}}</td>
                    <td>{{$item->status}}</td>
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