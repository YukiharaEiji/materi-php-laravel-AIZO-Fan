@extends('layout.master')

@section('title', 'Tambah Program Studi')

@section('content')
<main class="app-main" style="background-color: #f4f4f4; padding: 20px;">
    <div class="container">
        <h2 class="mb-4 text-danger">Tambah Program Studi Baru</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.prodi.store') }}" method="POST">
            @csrf

            <div class="form-group mb-3">
                <label for="nama" class="form-label">Nama Program Studi</label>
                <input type="text" name="nama" class="form-control" id="nama" 
                       value="{{ old('nama') }}" required>
                @error('nama')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="kaprodi" class="form-label">Nama Ka Prodi</label>
                <input type="text" name="kaprodi" class="form-control" id="kaprodi" 
                       value="{{ old('kaprodi') }}" required>
                @error('kaprodi')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="akreditasi" class="form-label">Akreditasi</label>
                <input type="text" name="akreditasi" class="form-control" id="akreditasi" 
                       value="{{ old('akreditasi') }}" required>
                @error('akreditasi')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group mb-4">
                <label for="fakultas" class="form-label">Fakultas</label>
                <input type="text" name="fakultas" class="form-control" id="fakultas" 
                       value="{{ old('fakultas') }}" required>
                @error('fakultas')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('admin.prodi.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</main>
@endsection
