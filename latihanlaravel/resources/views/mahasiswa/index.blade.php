@extends('layout.master')

@section('title', 'Daftar Mahasiswa')

@section('content')
<main class="app-main" style="background-color: #f4f4f4; padding: 20px;">
    <div class="container">
        <h2 class="mb-4 text-danger">Daftar Mahasiswa</h2>
        
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
        <div class="row">
            @foreach ($mahasiswa as $mhs)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-header bg-danger text-white">
                            {{ $mhs['nama'] }}
                        </div>
                        <div class="card-body">
                            <p><strong>NPM:</strong> {{ $mhs['npm'] }}</p>
                            <p><strong>Program Studi:</strong> {{ $mhs['prodi'] }}</p>
                            <a href="{{ route('mahasiswa.detail', $mhs['id']) }}" class="btn btn-info btn-sm">Detail</a>
                            
                            <!-- Gimmick Hapus -->
                            <form action="{{ route('mahasiswa.destroy', $mhs['id']) }}" method="POST" style="display: inline;" onsubmit="return confirm('Ingin Menghapus Mahasiswa?')">
                                @csrf
                                @method('POST') <!-- Gunakan POST sebagai gimmick -->
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <a href="{{ route('mahasiswa.create') }}" class="btn btn-success mb-3">Tambah Mahasiswa Baru</a>  
    </div>
</main>
@endsection
