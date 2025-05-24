@extends('layout.master')

@section('title', 'Detail Materi')

@section('content')
<main class="app-main" style="background-color: #f4f4f4; padding: 20px;">
    <div class="container">
        <h2 class="mb-4">Detail Materi</h2>

        <div class="card">
            <div class="card-header bg-danger text-white">
                {{ $materi['title'] }}
            </div>
            <div class="card-body">
                <p><strong>ID:</strong> {{ $materi['id'] }}</p>
                <p><strong>Judul Materi:</strong> {{ $materi['title'] }}</p>
                <p><strong>Deskripsi:</strong> {{ $materi['deskripsi'] }}</p>
                <p><strong>Dosen : </strong> {{ $materi['dosen'] }}</p>
                <p><strong>Tanggal : </strong> {{ $materi['tanggal'] }}</p>


                <a href="{{ route('materi.index') }}" class="btn btn-secondary">Kembali ke daftar</a>
            </div>
        </div>
    </div>
</main>
@endsection
