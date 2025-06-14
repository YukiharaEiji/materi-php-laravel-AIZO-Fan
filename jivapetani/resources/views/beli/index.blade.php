@extends('layout.master')

@section('title', 'Beli Barang')

@section('content')
<main class="app-main" style="background-color: #f4f4f4;">
    <div class="container">
        <h1 class="mb-4 mt-3 text-danger">Daftar Barang Tersedia</h1>

        {{-- Tampilkan pesan sukses dan error jika ada --}}
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @elseif (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

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
                            <h5 class="card-title"><strong>Nama:</strong> {{ $barang->nama }}</h5>
                            <br>
                            <p class="card-text mb-1"><strong>Stok:</strong> {{ $barang->stok }}</p>
                            <p class="card-text mb-1"><strong>Harga:</strong> Rp{{ number_format($barang->harga, 0, ',', '.') }}</p>
                            <p class="card-text"><strong>Deskripsi:</strong> {{ $barang->deskripsi }}</p>

                            {{-- Form pembelian --}}
                            <form action="{{ route('pembeli.beli.proses') }}" method="POST">
                                @csrf
                                <input type="hidden" name="barang_id" value="{{ $barang->id }}">
                                <div class="input-group mb-2">
                                    <input type="number" name="jumlah" class="form-control" placeholder="Jumlah" min="1" max="{{ $barang->stok }}" required>
                                    <button class="btn btn-success">Beli</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-muted">Tidak ada barang tersedia untuk dibeli.</p>
            @endforelse
        </div>
    </div>
</main>
@endsection
