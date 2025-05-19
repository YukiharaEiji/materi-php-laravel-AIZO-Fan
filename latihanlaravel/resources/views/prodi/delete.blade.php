@extends('layout.master')

@section('title', 'Hapus Program Studi')

@section('content')
<main class="app-main" style="background-color: #f4f4f4;">
    <div class="container text-center">
        <h1 class="mb-4 mt-3 text-danger">Hapus Program Studi</h1>
        <p>Apakah Anda yakin ingin menghapus <strong>{{ $prodi['nama'] }}</strong>?</p>

        <form action="{{ route('prodi.destroy', $prodi['id']) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus program studi ini?')">Hapus</button>
        </form>

        <a href="{{ route('prodi.index') }}" class="btn btn-secondary">Batal</a>
    </div>
</main>
@endsection
