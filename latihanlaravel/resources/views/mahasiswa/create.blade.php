@extends('layout.master')

@section('title', 'Tambah Mahasiswa')

@section('content')
<main class="app-main" style="background-color: #f4f4f4;">
    <div class="container">
        <h2 class="mb-4">Tambah Mahasiswa Baru</h2>

        <form action="{{ route('admin.mahasiswa.store') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="nama">Nama Mahasiswa</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group mb-3">
                <label for="npm">NPM</label>
                <input type="text" class="form-control" id="npm" name="npm" required>
            </div>
            <div class="form-group mb-3">
                <label for="prodi">Program Studi</label>
                <input type="text" class="form-control" id="prodi" name="prodi" required>
            </div>

            <button type="submit" class="btn btn-primary mt-2">Simpan</button>
            <a href="{{ route('admin.mahasiswa.index') }}" class="btn btn-secondary mt-2">Batal</a>
        </form>
    </div>
</main>
@endsection
