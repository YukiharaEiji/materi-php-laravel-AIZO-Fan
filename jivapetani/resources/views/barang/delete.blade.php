@extends('layout.master')

@section('title', 'Hapus Barang')

@section('content')
<main class="app-main" style="background-color: #f4f4f4;">
    <div class="container text-center">
        <h1 class="mb-4 mt-3 text-danger">Konfirmasi Hapus Barang</h1>

        <p class="mb-4">Apakah Anda yakin ingin menghapus <strong>{{ $barang->nama }}</strong>?</p>

        @php
            $prefix = explode('.', request()->route()->getName())[0];
        @endphp

        <div class="d-flex justify-content-center gap-3">
            <form action="{{ route($prefix . '.barang.destroy', $barang->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus barang ini?')">Ya, Hapus</button>
            </form>

            <a href="{{ route($prefix . '.barang.index') }}" class="btn btn-secondary">Batal</a>
        </div>
    </div>
</main>
@endsection
