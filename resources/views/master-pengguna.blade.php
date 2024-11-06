@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Master Pengguna</h2>

    <form class="mb-3" method="GET" action="/master-pengguna">
        <input type="text" name="search" placeholder="Cari berdasarkan nama atau email" class="form-control" value="{{ request('search') }}">
        <button type="submit" class="btn btn-primary mt-2">Cari</button>
    </form>

    <a href="/tambah-pengguna" class="btn btn-success mb-3">Tambah Pengguna Baru</a>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pengguna</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $index => $user)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="/edit-pengguna/{{ $user->id }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="/hapus-pengguna/{{ $user->id }}" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
