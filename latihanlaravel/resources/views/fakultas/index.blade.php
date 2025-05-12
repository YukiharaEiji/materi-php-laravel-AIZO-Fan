@extends('layout.master')

@section('title', 'Universitas MDP')

@section('content')
<main class="app-main" style="background-color: #f4f4f4;">
    <div class="container">
        <h1 class="mb-4 mt-3 text-danger">Fakultas di Universitas Kami</h1>
        @if(session('success'))
            <div class="alert alert-success">
        {{ session('success') }}
            </div>
        @endif
        @foreach($fakultas as $fak)
        <div class="row mb-5 fade-in">
            <div class="col-md-6">
                <img src="{{ asset('img/' . $fak['gambar']) }}" class="img-fluid rounded w-75" alt="{{ $fak['nama'] }}">
            </div>
            <div class="col-md-6 mt-3">
                <h2 class="text-danger">{{ $fak['nama'] }}</h2>
                <p>{{ $fak['deskripsi'] }}</p>
                
                <!-- Tombol Detail -->
                <a href="{{ route('fakultas.detail', $fak['id']) }}" class="btn btn-primary">Detail</a>

                <!-- Tombol Hapus -->
                <form action="{{ route('fakultas.destroy', $fak['id']) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('POST')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus fakultas ini?')">Hapus</button>
                </form>
            </div>
        </div>
        @endforeach

        <a href="{{ route('fakultas.create') }}" class="btn btn-success mb-5">Tambah Fakultas</a>
    </div>
</main>
@endsection
