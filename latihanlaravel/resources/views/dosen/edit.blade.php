@extends('layout.master')

@section('title', 'Edit Dosen')

@section('content')
<main class="app-main" style="background-color: #f4f4f4;">
    <div class="container">
        <h1 class="mb-4 mt-3 text-danger">Edit Dosen</h1>

        @php
            $prefix = explode('.', request()->route()->getName())[0];
        @endphp

        <form action="{{ route($prefix . '.dosen.update', $dosen->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nama" class="form-label">Nama Dosen</label>
                <input type="text" name="nama" class="form-control" id="nama" value="{{ old('nama', $dosen->nama) }}" required>
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" id="deskripsi" rows="4">{{ old('deskripsi', $dosen->deskripsi) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar Dosen</label>
                @if ($dosen->gambar)
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $dosen->gambar) }}" alt="{{ $dosen->nama }}" class="img-thumbnail" style="max-width: 200px;">
                    </div>
                @endif
                <input type="file" name="gambar" class="form-control" id="gambar">
                <small class="form-text text-muted">Kosongkan jika tidak ingin mengganti gambar.</small>
            </div>

            <button type="submit" class="btn btn-primary mt-2">Simpan Perubahan</button>
            <a href="{{ route($prefix . '.dosen.index') }}" class="btn btn-secondary mt-2">Batal</a>
        </form>
    </div>
</main>
@endsection
