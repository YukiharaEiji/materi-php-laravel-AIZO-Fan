@extends('layout.master')

@section('title', 'Edit Barang')

@section('content')
<main class="app-main" style="background-color: #f4f4f4;">
    <div class="container">
        <h1 class="mb-4 mt-3 text-danger">Edit Barang</h1>

        @php
            $prefix = explode('.', Route::currentRouteName())[0];
        @endphp

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route($prefix . '.barang.update', $barang->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Nama Barang --}}
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Barang</label>
                <input type="text" name="nama" class="form-control" id="nama"
                       value="{{ old('nama', $barang->nama) }}" required>
            </div>

            {{-- Stok --}}
            <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input type="number" name="stok" class="form-control" id="stok"
                       value="{{ old('stok', $barang->stok) }}" required>
            </div>

            {{-- Harga --}}
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" name="harga" class="form-control" id="harga"
                       value="{{ old('harga', $barang->harga) }}" required>
            </div>

            {{-- Deskripsi --}}
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" id="deskripsi" rows="4" required>{{ old('deskripsi', $barang->deskripsi) }}</textarea>
            </div>

            {{-- Gambar --}}
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar Barang</label>
                @if ($barang->gambar)
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $barang->gambar) }}"
                             alt="{{ $barang->nama }}"
                             class="img-thumbnail"
                             style="max-width: 200px;">
                    </div>
                @endif
                <input type="file" name="gambar" class="form-control" id="gambar">
                <small class="form-text text-muted">Kosongkan jika tidak ingin mengganti gambar.</small>
            </div>

            {{-- Tombol --}}
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                <a href="{{ route($prefix . '.barang.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</main>
@endsection
