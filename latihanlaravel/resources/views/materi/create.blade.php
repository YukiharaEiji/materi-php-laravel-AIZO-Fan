@extends('layout.master')

@section('title', 'Tambah Materi')

@section('content')
<main class="app-main" style="background-color: #f4f4f4;">
    <div class="container">
        <h1 class="mb-4 mt-3 text-danger">Tambah Materi</h1>
<form action="{{ route('materi.create') }}" method="GET">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Judul Materi</label>
        <input type="text" name="title" class="form-control" id="title" value="{{ old('title') }}">
    </div>
    <div class="mb-3">
        <label for="deskripsi" class="form-label">Deskripsi</label>
        <input type="text" name="deskripsi" class="form-control" id="deskripsi" value="{{ old('deskripsi') }}">
    </div>

    <a href="{{ route('materi.index') }}" class="btn btn-primary">Simpan</a>
    <a href="{{ route('materi.index') }}" class="btn btn-secondary">Kembali</a>
</form>

    </div>
</main>
@endsection
