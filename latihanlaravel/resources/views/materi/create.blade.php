@extends('layout.master')

@section('title', 'Tambah Materi')

@section('content')
<main class="app-main" style="background-color: #f4f4f4; padding: 20px;">
    <div class="container">
        <h2 class="mb-4 text-danger">Tambah Materi Baru</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.materi.store') }}" method="POST">
            @csrf

            <div class="form-group mb-3">
                <label for="namaMK">Nama Mata Kuliah</label>
                <input type="text" name="namaMK" id="namaMK" class="form-control" value="{{ old('namaMK') }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="materi">Isi Materi</label>
                <textarea name="materi" id="materi" class="form-control" rows="4" required>{{ old('materi') }}</textarea>
            </div>

            <div class="form-group mb-3">
                <label for="dosen">Nama Dosen</label>
                <input type="text" name="dosen" id="dosen" class="form-control" value="{{ old('dosen') }}" required>
            </div>

            <div class="form-group mb-4">
                <label for="tanggal">Tanggal Materi</label>
                <input type="date" name="tanggal" id="tanggal" class="form-control" value="{{ old('tanggal') }}" required>
            </div>

            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('admin.materi.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</main>
@endsection
