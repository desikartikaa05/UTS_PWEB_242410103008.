@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="card card-dark p-4 mx-auto" style="max-width:500px;">
    <h2 class="text-center mb-3">Login ke K-Norebang</h2>
    <form action="{{ route('doLogin') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Username</label>
            <input type="text" name="username" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success w-100">Masuk</button>
    </form>
</div>
@endsection
