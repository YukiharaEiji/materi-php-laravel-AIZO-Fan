@extends('layout.master')

@section('title', 'Edit User')

@section('content')
<main class="app-main" style="background-color: #f4f4f4;">
<div class="container mt-4">
    <h1 class="mb-4">Edit Level User</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" class="form-control" value="{{ $user->name }}" disabled>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" class="form-control" value="{{ $user->email }}" disabled>
        </div>

        <div class="mb-3">
            <label>Level</label>
            <select name="level" class="form-control" required>
                <option value="admin" {{ $user->level == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="petani" {{ $user->level == 'petani' ? 'selected' : '' }}>Petani</option>
                <option value="pembeli" {{ $user->level == 'pembeli' ? 'selected' : '' }}>Pembeli</option>
                <option value="user" {{ $user->level == 'user' ? 'selected' : '' }}>User</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="{{ route('admin.user.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
</main>
@endsection
