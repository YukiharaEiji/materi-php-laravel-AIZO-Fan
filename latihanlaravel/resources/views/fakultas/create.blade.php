@extends('layout.master')

@section('title', 'Tambah Fakultas')

@section('content')
<main class="app-main" style="background-color: #f4f4f4;">
    <div class="container">
        <h1 class="mb-4 mt-3 text-danger">Tambah Fakultas Baru</h1>

        @php
            $prefix = explode('.', request()->route()->getName())[0];
        @endphp

        <form action="{{ route($prefix . '.fakultas.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="nama" class="form-label">Nama Fakultas</label>
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama fakultas" required>
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" id="deskripsi" rows="4" placeholder="Masukkan deskripsi fakultas"></textarea>
            </div>

            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar Fakultas</label>
                <input type="file" name="gambar" class="form-control" id="gambar">
            </div>

            <button type="submit" class="btn btn-primary mt-2">Simpan</button>
            <a href="{{ route($prefix . '.fakultas.index') }}" class="btn btn-secondary mt-2">Batal</a>
        </form>
    </div>
</main>
@endsection
