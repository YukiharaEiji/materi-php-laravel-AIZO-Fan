@extends('layout.master')

@section('title', 'Detail Mahasiswa')

@section('content')
<main class="app-main" style="background-color: #f4f4f4; padding: 20px;">
    <div class="container">
        <h2 class="mb-4">Detail Mahasiswa</h2>

        <div class="card">
            <div class="card-header bg-danger text-white">
                {{ $mahasiswa['nama'] }}
            </div>
            <div class="card-body">
                <p><strong>ID:</strong> {{ $mahasiswa['id'] }}</p>
                <p><strong>Nama:</strong> {{ $mahasiswa['nama'] }}</p>
                <p><strong>NPM:</strong> {{ $mahasiswa['npm'] }}</p>
                <p><strong>Program Studi:</strong> {{ $mahasiswa['prodi'] }}</p>

                <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali ke daftar</a>
            </div>
        </div>
    </div>
</main>
@endsection
