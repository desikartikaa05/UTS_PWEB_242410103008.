@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="card card-dark p-4 mx-auto" style="max-width:600px;">
    <h4>Profil Pengguna</h4>
    <p><strong>Username:</strong> {{ $profile['username'] }}</p>
    <p><strong>Fandom Favorit:</strong> {{ $profile['fandom'] }}</p>
    <p><strong>Lagu Favorit:</strong> {{ $profile['lagu_favorit'] }}</p>
    <a href="{{ route('pengelolaan') }}" class="btn btn-primary mt-2">Lihat Event</a>
</div>
@endsection
