@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Pengguna Terdaftar</div>
                <div class="card-body">
                    <h5>{{ $registeredUsers }}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Pengguna Aktif</div>
                <div class="card-body">
                    <h5>{{ $activeUsers }}</h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
