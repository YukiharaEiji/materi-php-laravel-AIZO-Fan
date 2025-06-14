@extends('layout.master')

@section('title', 'Manajemen User')

@section('content')
<main class="app-main" style="background-color: #f4f4f4;">
<div class="container mt-4">
    <h1>Manajemen User</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Level</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <span class="badge bg-{{ $user->level == 'admin' ? 'danger' : ($user->level == 'petani' ? 'success' : ($user->level == 'pembeli' ? 'primary' : 'secondary') ) }}">
                            {{ ucfirst($user->level) }}
                        </span>
                    </td>
                    <td>
                        <a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('admin.user.destroy', $user->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Yakin hapus user?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</main>
@endsection
