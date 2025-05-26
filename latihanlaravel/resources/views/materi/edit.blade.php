@extends('layout.master')

@section('title', 'Edit Materi')

@section('content')
<main class="app-main" style="background-color: #f4f4f4;">
    <div class="container">
        <h1 class="mb-4 mt-3 text-danger">Edit Materi</h1>

        <form action="{{ route('materi.update', $materi->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="namaMK" class="form-label">Nama Mata Kuliah</label>
                <input type="text" name="namaMK" class="form-control" id="namaMK" value="{{ old('namaMK', $materi->namaMK) }}" required>
                @error('namaMK')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="materi" class="form-label">Isi Materi</label>
                <textarea name="materi" class="form-control" id="materi" rows="4" required>{{ old('materi', $materi->materi) }}</textarea>
                @error('materi')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="dosen" class="form-label">Dosen</label>
                <input type="text" name="dosen" class="form-control" id="dosen" value="{{ old('dosen', $materi->dosen) }}" required>
                @error('dosen')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" id="tanggal" 
                    value="{{ old('tanggal', $materi->tanggal ? $materi->tanggal->format('Y-m-d') : '') }}" required>
                @error('tanggal')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('materi.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</main>
@endsection
