@extends('layout.master')

@section('title', 'Tambah Barang')

@section('content')
<main class="app-main" style="background-color: #f4f4f4;">
    <div class="container">
        <h1 class="mb-4 mt-3 text-danger">Tambah Barang Baru</h1>

        @php
            $prefix = explode('.', request()->rout(e)->getName())[0];
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

        <form action="{{ route($prefix . '.barang.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Nama barang --}}
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Barang</label>
                <input type="text" name="nama" class="form-control" id="nama"
                       value="{{ old('nama') }}" placeholder="Masukkan nama barang" required>
            </div>

            {{-- Stok --}}
            <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input type="number" name="stok" class="form-control" id="stok"
                       value="{{ old('stok') }}" placeholder="Masukkan jumlah stok" required>
            </div>

            {{-- Harga --}}
            <div class="mb-3">
                <label for="harga" class="form-label">Harga (Rp)</label>
                <input type="number" name="harga" class="form-control" id="harga"
                       value="{{ old('harga') }}" placeholder="Masukkan harga barang" required>
            </div>

            {{-- Deskripsi --}}
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" id="deskripsi" rows="4"
                          placeholder="Masukkan deskripsi barang">{{ old('deskripsi') }}</textarea>
            </div>

            {{-- Gambar --}}
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar Barang</label>
                <input type="file" name="gambar" class="form-control" id="gambar">
            </div>

            <button type="submit" class="btn btn-primary mt-2">Simpan</button>
            <a href="{{ route($prefix . '.barang.index') }}" class="btn btn-secondary mt-2">Batal</a>
        </form>
    </div>
</main>
@endsection
