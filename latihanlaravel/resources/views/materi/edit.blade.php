@extends('layout.master')

@section('title', 'Edit Materi')

@section('content')
<main class="app-main" style="background-color: #f4f4f4; padding: 20px;">
    <div class="container">
        <h2 class="mb-4 text-danger">Edit Materi</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.materi.update', $materi->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group mb-3">
                <label for="namaMK" class="form-label">Nama Mata Kuliah</label>
                <input type="text" name="namaMK" id="namaMK" class="form-control" 
                    value="{{ old('namaMK', $materi->namaMK) }}" required>
                @error('namaMK')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="materi" class="form-label">Isi Materi</label>
                <textarea name="materi" id="materi" class="form-control" rows="4" required>{{ old('materi', $materi->materi) }}</textarea>
                @error('materi')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="dosen" class="form-label">Nama Dosen</label>
                <input type="text" name="dosen" id="dosen" class="form-control" 
                    value="{{ old('dosen', $materi->dosen) }}" required>
                @error('dosen')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group mb-4">
                <label for="tanggal" class="form-label">Tanggal Materi</label>
                <input type="date" name="tanggal" id="tanggal" class="form-control" 
                    value="{{ old('tanggal', $materi->tanggal ? $materi->tanggal->format('Y-m-d') : '') }}" required>
                @error('tanggal')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">Simpan Perubahan</button>
            <a href="{{ route('admin.materi.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</main>
@endsection
