@extends('layout.master')

@section('title', 'Materi')

@section('content')
<main class="app-main" style="background-color: #f4f4f4;">
    <div class="container">
        <h1 class="mb-4 mt-3 text-danger">Daftar Materi</h1>

        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <div class="row ">
            @foreach($materi as $item)
            <div class="col-md-4 mb-4">
                <div class="card shadow">
                    <div class="card-header bg-danger text-white">
                        {{ $item['title'] }}
                    </div>
                    <div class="card-body fade-in">
                        <p><strong>Materi : </strong> {{ $item['deskripsi'] }}</p>
                        <p><strong>Dosen : </strong> {{ $item['dosen'] }}</p>
                        <p><strong>Tanggal : </strong> {{ $item['tanggal'] }}</p>

                        <a href="{{ route('materi.detail', $item['id']) }}" class="btn btn-info btn-sm">Detail</a>

                        <form action="{{ route('materi.destroy', $item['id']) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('POST')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
              <a href="{{ route('prodi.create') }}" class="btn btn-success mb-3">Tambah Materi Baru</a>
        </div>
    </div>
</main>
@endsection
