@extends('layout.master')

@section('title', 'Daftar Program Studi')

@section('content')
<main class="app-main" style="background-color: #f4f4f4; padding: 20px;">
    <div class="container">
        <h2 class="mb-4 text-danger">Daftar Program Studi</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('prodi.create') }}" class="btn btn-success mb-3">Tambah Prodi Baru</a>

        <div class="row">
            @forelse ($prodi as $p)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-header bg-danger text-white">
                            {{ $p->nama }}
                        </div>
                        <div class="card-body fade-in">
                            <p><strong>Kaprodi :</strong> {{ $p->kaprodi }}</p>
                            <p><strong>Akreditasi :</strong> {{ $p->akreditasi }}</p>
                            <p><strong>Fakultas :</strong> {{ $p->fakultas }}</p>

                            <a href="{{ route('prodi.edit', $p->id) }}" class="btn btn-info btn-sm">Edit</a>
                            {{-- <a href="{{ route('prodi.show', $p->id) }}" class="btn btn-info btn-sm">detail</a> --}}
                            <form action="{{ route('prodi.destroy', $p->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Ingin Menghapus Prodi ?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-warning">Tidak ada data program studi.</div>
                </div>
            @endforelse
        </div>
    </div>
</main>
@endsection
