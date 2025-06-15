@extends('layout.master')

@section('title', 'Edit Mahasiswa')

@section('content')
<main class="app-main" style="background-color: #f4f4f4; padding: 20px;">
    <div class="container">
        <h2 class="mb-4">Edit Mahasiswa</h2>

        <form action="{{ route('admin.mahasiswa.update', $mahasiswa->id) }}" method="POST">
            @csrf

            @method('PUT') 
            <div class="form-group">
                <label for="nama">Nama Mahasiswa</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $mahasiswa->nama) }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="npm">NPM</label>
                <input type="text" class="form-control" id="npm" name="npm" value="{{ old('npm', $mahasiswa->npm) }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="prodi">Program Studi</label>
                <input type="text" class="form-control" id="prodi" name="prodi" value="{{ old('prodi', $mahasiswa->prodi) }}" required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Update</button>
            <a href="{{ route('admin.mahasiswa.index') }}" class="btn btn-secondary mt-3">Batal</a>
        </form>
    </div>
</main>
@endsection
