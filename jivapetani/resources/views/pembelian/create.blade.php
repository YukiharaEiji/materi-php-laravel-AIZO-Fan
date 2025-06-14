@extends('layout.master')

@section('title', 'Beli Barang')

@section('content')
<main class="app-main" style="background-color: #f4f4f4;">
<div class="container mt-4">
    <h2>Beli Barang</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form action="{{ route('pembeli.pembelian.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="barang_id" class="form-label">Pilih Barang</label>
            <select name="barang_id" id="barang_id" class="form-select" required>
                <option value="">-- Pilih Barang --</option>
                @foreach($barangs as $barang)
                    <option value="{{ $barang->id }}">
                        {{ $barang->nama_barang }} (Stok: {{ $barang->stok }}) - Rp{{ number_format($barang->harga, 0, ',', '.') }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" name="jumlah" id="jumlah" class="form-control" required min="1">
        </div>

        <button type="submit" class="btn btn-primary">Beli Sekarang</button>
    </form>
</div>
</main>
@endsection
