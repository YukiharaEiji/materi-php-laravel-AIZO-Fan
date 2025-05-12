@extends('layout.master')

@section('title', 'Tambah Fakultas')

@section('content')
<main class="app-main" style="background-color: #f4f4f4;">
    <div class="container">
        <h1 class="mb-4 mt-3 text-danger">Tambah Fakultas Baru</h1>

        <form action="{{ url('/fakultas') }}">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Fakultas</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukkan nama fakultas">
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" rows="4" placeholder="Masukkan deskripsi fakultas"></textarea>
            </div>

            <div class="mb-3">
                <label for="program" class="form-label">Program Studi</label>
                <input type="text" class="form-control" id="program" placeholder="Contoh: Teknik Informatika (S1)">
            </div>

             <a href="{{ route('fakultas.index') }}" class="btn btn-primary mt-2">Simpan</a>
            <a href="{{ route('fakultas.index') }}" class="btn btn-secondary mt-2">Batal</a>
        </form>
    </div>
</main>
@endsection
