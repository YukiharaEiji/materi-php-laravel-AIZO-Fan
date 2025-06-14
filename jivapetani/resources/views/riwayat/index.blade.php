@extends('layout.master')

@section('title', 'Riwayat Pembelian')

@section('content')
<main class="app-main" style="background-color: #f4f4f4;">
<div class="container mt-4">
    <h2 class="mb-4">Riwayat Pembelian</h2>

    @if ($pembelian->isEmpty())
        <div class="alert alert-info">Belum ada riwayat pembelian.</div>
    @else
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Tanggal</th>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>Harga Satuan</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($pembelian as $item)
                        @foreach ($item->detailPembelians as $detail)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item->created_at->format('d M Y H:i') }}</td>
                                <td>{{ $detail->barang->nama }}</td>
                                <td>{{ $detail->jumlah }}</td>
                                <td>Rp{{ number_format($detail->harga, 0, ',', '.') }}</td>
                                <td>Rp{{ number_format($detail->jumlah * $detail->harga, 0, ',', '.') }}</td>
                            </tr>
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
</main>
@endsection
