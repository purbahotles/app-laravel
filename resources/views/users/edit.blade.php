@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit User</h2>
        <form method="POST" action="{{ route('users.update', $user->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Leave blank to keep current password">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update User</button>
            </div>
        </form>
    </div>
@endsection
