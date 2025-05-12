@extends('layout.master')

@section('title', 'Tambah Dosen')

@section('content')
<main class="app-main" style="background-color: #f4f4f4;">
    <div class="container">
        <h1 class="mb-4 mt-3 text-danger">Tambah Dosen</h1>

        <form action="{{ route('dosen.index') }}" method="GET">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Dosen</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama dosen">
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" placeholder="Masukkan deskripsi"></textarea>
            </div>

            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar Dosen</label>
                <input type="file" class="form-control" id="gambar" name="gambar" disabled>
            </div>

             <a href="{{ route('dosen.index') }}" class="btn btn-primary mt-2">Simpan</a>
            <a href="{{ route('dosen.index') }}" class="btn btn-secondary mt-2">Batal</a>
        </form>
    </div>
</main>
@endsection
