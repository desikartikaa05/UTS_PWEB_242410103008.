@extends('layouts.app')

@section('title', 'Daftar Event')

@section('content')
<div class="card card-dark p-4">
    <h4 class="mb-3">Daftar Event Norebang K-Pop</h4>
    <div class="table-responsive">
        <table class="table text-white">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Tanggal</th>
                    <th>Lokasi</th>
                    <th>Tema</th>
                    <th>Hadiah</th>
                </tr>
            </thead>
            <tbody>
                @foreach($events as $event)
                <tr>
                    <td>{{ $event['nama'] }}</td>
                    <td>{{ $event['tanggal'] }}</td>
                    <td>{{ $event['lokasi'] }}</td>
                    <td>{{ $event['tema'] }}</td>
                    <td>{{ $event['hadiah'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
