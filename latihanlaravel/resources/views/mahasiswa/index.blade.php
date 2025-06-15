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

                @if(Auth::user()->level === 'admin')
            <a href="{{ route('admin.mahasiswa.create') }}" class="btn btn-success mb-3">Tambah Mahasiswa Baru</a>  
        @endif
        
        <div class="row">
            @foreach ($mahasiswas as $mhs)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-header bg-danger text-white">
                            {{ $mhs->nama }}
                        </div>
                        <div class="card-body">
                            <p><strong>NPM:</strong> {{ $mhs->npm }}</p>
                            <p><strong>Program Studi:</strong> {{ $mhs->prodi }}</p>

                            @if(Auth::user()->level === 'admin')
                                <a href="{{ route('admin.mahasiswa.edit', $mhs->id) }}" class="btn btn-info btn-sm">Edit</a>

                                <form action="{{ route('admin.mahasiswa.destroy', $mhs->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Ingin Menghapus Mahasiswa?')">
                                    @csrf
                                    @method('DELETE') 
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        @if(Auth::user()->level === 'admin')
            <a href="{{ route('admin.mahasiswa.create') }}" class="btn btn-success mb-3">Tambah Mahasiswa Baru</a>  
        @endif

    </div>
</main>
@endsection
