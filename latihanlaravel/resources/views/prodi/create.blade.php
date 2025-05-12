@extends('layout.master')

@section('title', 'Tambah Program Studi')

@section('content')
<main class="app-main" style="background-color: #f4f4f4;">
    <div class="container">
        <h1 class="mb-4 mt-3 text-danger">Tambah Program Studi</h1>

        <form action="{{ route('prodi.create') }}" method="GET">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Program Studi</label>
                <input type="text" name="nama" class="form-control" id="nama">
            </div>
            <div class="mb-3">
                <label for="kaprodi" class="form-label">Nama Ka Prodi</label>
                <input type="text" name="kaprodi" class="form-control" id="kaprodi">
            </div>
            <div class="mb-3">
                <label for="akreditasi" class="form-label">Akreditasi</label>
                <input type="text" name="akreditasi" class="form-control" id="akreditasi">
            </div>

            <a href="{{ route('prodi.index') }}" class="btn btn-primary">Simpan</a>
            <a href="{{ route('prodi.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</main>
@endsection
