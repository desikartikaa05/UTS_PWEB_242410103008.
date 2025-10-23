@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="card card-dark p-4">
    <h3>Annyeong, {{ $username ?? request('username') ?? 'Pengunjung' }}! 🎶</h3>
    <p>Senang kamu gabung di K-Norebang — Event Karaoke K-Pop.</p>

    <div class="row mt-3">
        <div class="col-md-4 mb-3">
            <div class="card-dark p-3 text-center">
                <h6>Total Event</h6>
                <h2>{{ count($events) }}</h2>
            </div>
        </div>
        <div class="col-md-8 mb-3">
            <div class="card-dark p-3">
                <h6>Event Terdekat</h6>
                @if($nearest)
                    <strong>{{ $nearest['nama'] }}</strong><br>
                    <small>{{ $nearest['tanggal'] }} — {{ $nearest['lokasi'] }}</small><br>
                    <em>Tema: {{ $nearest['tema'] }}</em>
                @else
                    <p>Tidak ada event terdaftar.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
