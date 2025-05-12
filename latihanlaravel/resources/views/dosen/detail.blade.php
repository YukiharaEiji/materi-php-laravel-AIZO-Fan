@extends('layout.master')

@section('title', 'Detail Dosen')

@section('content')
<main class="app-main" style="background-color: #f4f4f4;">
    <div class="container">
        <h1 class="mb-4 mt-3 text-danger">{{ $dosen['nama'] }}</h1>

        <div class="row mb-5 align-items-center">
            <div class="col-md-3 text-center">
                <img src="{{ asset('img/' . $dosen['gambar']) }}" class="img-thumbnail" style="max-height: 150px; object-fit: cover;" alt="{{ $dosen['nama'] }}">
            </div>
            <div class="col-md-9 mt-3">
                <p><strong>Bidang Keahlian:</strong> {{ $dosen['deskripsi'] }}</p>

                <a href="{{ route('dosen.index') }}" class="btn btn-secondary">Kembali ke Daftar Dosen</a>

                <form action="{{ route('dosen.destroy', $dosen['id']) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus dosen ini?')">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
