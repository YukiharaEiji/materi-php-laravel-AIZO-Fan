@extends('layout.master')

@section('title', 'Detail Fakultas')

@section('content')
<main class="app-main" style="background-color: #f4f4f4;">
    <div class="container">
        <h1 class="mb-4 mt-3 text-danger">{{ $fakultas['nama'] }}</h1>

        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('img/' . $fakultas['gambar']) }}" class="img-fluid rounded" alt="{{ $fakultas['nama'] }}">
            </div>
            <div class="col-md-6 mt-3">
                <h2 class="text-danger">{{ $fakultas['nama'] }}</h2>
                <p>{{ $fakultas['deskripsi'] }}</p>
                
                <a href="{{ route('fakultas.index') }}" class="btn btn-secondary">Kembali ke Daftar Fakultas</a>

                <form action="{{ route('fakultas.destroy', $fakultas['id']) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE') 
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus fakultas ini?')">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
