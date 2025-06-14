@extends('layout.master')

@section('title', 'Laporan Penjualan')

@section('content')
<main class="app-main" style="background-color: #f4f4f4;">
    <div class="container">
        <h1 class="mb-4 mt-3 text-danger">Laporan Penjualan</h1>

        @if ($details->isEmpty())
            <div class="alert alert-info">Belum ada transaksi penjualan.</div>
        @else
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Nama Barang</th>
                            <th>Jumlah Terjual</th>
                            <th>Total Pendapatan</th>
                            <th>Tanggal Transaksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($details as $i => $detail)
                            <tr>
                                <td>{{ $i + 1 }}</td>
                                <td>{{ $detail->barang->nama ?? '-' }}</td>
                                <td>{{ $detail->jumlah }}</td>
                                <td>Rp{{ number_format($detail->subtotal, 0, ',', '.') }}</td>
                                <td>{{ $detail->created_at->format('d-m-Y H:i') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</main>
@endsection
