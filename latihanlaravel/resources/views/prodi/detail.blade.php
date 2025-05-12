@extends('layout.master')

@section('title', 'Detail Program Studi')

@section('content')
<main class="app-main" style="background-color: #f4f4f4; padding: 20px;">
    <div class="container">
        <h2 class="mb-4">Detail Program Studi</h2>

        <div class="card">
            <div class="card-header bg-danger text-white">
                {{ $prodi['nama'] }}
            </div>
            <div class="card-body">
                <p><strong>ID:</strong> {{ $prodi['id'] }}</p>
                <p><strong>Nama Prodi:</strong> {{ $prodi['nama'] }}</p>
                <p><strong>Ka Prodi:</strong> {{ $prodi['kaprodi'] }}</p>
                <p><strong>Akreditasi:</strong> {{ $prodi['akreditasi'] }}</p>

                <a href="{{ route('prodi.index') }}" class="btn btn-secondary">Kembali ke daftar</a>
            </div>
        </div>
    </div>
</main>
@endsection
