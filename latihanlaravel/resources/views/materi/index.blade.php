@extends('layout.master')

@section('title', 'Daftar Materi')

@section('content')
<main class="app-main" style="background-color: #f4f4f4; padding: 20px;">
    <div class="container">
        <h2 class="mb-4 text-danger">Daftar Materi</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(Auth::user()->level === 'admin')
            <a href="{{ route('admin.materi.create') }}" class="btn btn-success mb-3">Tambah Materi Baru</a>
        @endif

        <div class="row">
            @foreach ($materi as $mtr)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-header bg-danger text-white">
                            {{ $mtr->namaMK }}
                        </div>
                        <div class="card-body fade-in">
                            <p><strong>Materi :</strong> {{ \Illuminate\Support\Str::limit($mtr->materi, 100) }}</p>
                            <p><strong>Dosen :</strong> {{ $mtr->dosen }}</p>
                            <p><strong>Tanggal :</strong> {{ $mtr->tanggal }}</p>

                            @if(Auth::user()->level === 'admin')
                                <a href="{{ route('admin.materi.edit', $mtr->id) }}" class="btn btn-info btn-sm">Edit</a>

                                <form action="{{ route('admin.materi.destroy', $mtr->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Yakin ingin menghapus materi ini?')">
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
    </div>
</main>
@endsection
