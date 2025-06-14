@extends('layout.master')

@section('title', 'Stok Barang')

@section('content')
<main class="app-main" style="background-color: #f4f4f4;">
    <div class="container">
        <h1 class="mb-4 mt-3 text-danger">Stok Barang</h1>


        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif


        <a href="{{ route('petani.barang.create') }}" class="btn btn-success mb-4">Tambah Barang</a>

        <div class="row">
            @forelse ($barangs as $barang)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">

                        {{-- Gambar barang --}}
                        <img 
                            src="{{ $barang->gambar ? Storage::url($barang->gambar) : asset('img/default.png') }}" 
                            alt="{{ $barang->nama }}" 
                            class="card-img-top" 
                            style="height: 200px; object-fit: cover;" 
                            onerror="this.src='{{ asset('img/default.png') }}'"
                        >

                        <div class="card-body">
                            <h5 class="card-title"><strong>Nama: </strong>{{ $barang->nama }}</h5>
                            <br>
                            <p class="card-text mb-1"><strong>Stok:</strong> {{ $barang->stok }}</p>
                            <p class="card-text mb-1"><strong>Harga:</strong> Rp{{ number_format($barang->harga, 0, ',', '.') }}</p>
                            <p class="card-text"><strong>Deskripsi:</strong> {{ $barang->deskripsi }}</p>
                        </div>

                        {{-- Tombol aksi --}}
                        <div class="card-footer">
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('petani.barang.show', $barang->id) }}" class="btn btn-outline-primary btn-sm w-100 me-1">Detail</a>
                                <a href="{{ route('petani.barang.edit', $barang->id) }}" class="btn btn-outline-warning btn-sm w-100 mx-1">Edit</a>
                                <form action="{{ route('petani.barang.destroy', $barang->id) }}" method="POST" onsubmit="return confirm('Yakin ingin hapus barang ini?')" class="w-100 ms-1">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger btn-sm w-100">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-muted">Belum ada barang.</p>
            @endforelse
        </div>
    </div>
</main>
@endsection
