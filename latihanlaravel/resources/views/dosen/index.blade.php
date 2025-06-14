@extends('layout.master')

@section('title', 'Dosen Universitas MDP')

@section('content')
<main class="app-main" style="background-color: #f4f4f4;">
    <div class="container">
        <h1 class="mb-4 mt-3 text-danger">Dosen Kami</h1>

        @php
            $prefix = explode('.', request()->route()->getName())[0];
        @endphp

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @foreach($dosen as $dsn)
            <div class="row mb-4 fade-in align-items-center">
                <div class="col-md-3 text-center">
                    <img src="{{ asset('storage/' . $dsn->gambar) }}" alt="{{ $dsn->nama }}">
                </div>
                <div class="col-md-9">
                    <h4 class="text-danger">{{ $dsn->nama }}</h4>
                    <p>{{ $dsn->deskripsi }}</p>

                    
                    @if(Auth::user()->level === 'admin')
                        <form action="{{ route($prefix . '.dosen.destroy', $dsn->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus dosen ini?')">Hapus</button>
                        </form>
                    @endif
                </div>
            </div>
        @endforeach

        @if(Auth::user()->level === 'admin')
            <a href="{{ route($prefix . '.dosen.create') }}" class="btn btn-success mb-5">Tambah Dosen</a>
        @endif
    </div>
</main>
@endsection
