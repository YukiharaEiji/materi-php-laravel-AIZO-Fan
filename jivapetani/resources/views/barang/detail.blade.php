@extends('layout.master')

@section('title', 'Detail Barang')

@section('content')
<main class="app-main" style="background-color:#f4f4f4;">
    <div class="container">
        <h1 class="mb-4 mt-3 text-primary">Detail Barang</h1>

        <div class="card mb-4">
            <div class="card-body">

                {{-- Gambar --}}
                @if ($barang->gambar)
                    <div class="mb-3 text-center">
                        <img src="{{ asset('storage/' . $barang->gambar) }}"
                             alt="{{ $barang->nama }}"
                             class="img-thumbnail"
                             style="max-width:250px;">
                    </div>
                @endif

                <dl class="row">
                    <dt class="col-sm-3">Nama Barang</dt>
                    <dd class="col-sm-9">{{ $barang->nama }}</dd>

                    <dt class="col-sm-3">Stok</dt>
                    <dd class="col-sm-9">{{ $barang->stok }}</dd>

                    <dt class="col-sm-3">Harga</dt>
                    <dd class="col-sm-9">Rp {{ number_format($barang->harga, 0, ',', '.') }}</dd>

                    <dt class="col-sm-3">Deskripsi</dt>
                    <dd class="col-sm-9">{{ $barang->deskripsi }}</dd>
                </dl>
            </div>
        </div>

        {{-- Tombol kembali --}}
        @php
            $prefix = auth()->user()->role === 'admin' ? 'admin' : 'petani';
        @endphp
        <a href="{{ route($prefix . '.barang.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</main>
@endsection
