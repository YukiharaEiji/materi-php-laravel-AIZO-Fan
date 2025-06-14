<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Daftar Akun</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-light d-flex align-items-center" style="height: 100vh;">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="mb-4 text-center text-primary">Buat Akun Baru</h3>

                        {{-- Pesan Error --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Terjadi kesalahan:</strong>
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            {{-- Nama --}}
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Lengkap</label>
                                <input type="text" name="name" id="name" class="form-control"
                                       placeholder="Masukkan nama lengkap" value="{{ old('name') }}" required>
                            </div>

                            {{-- Email --}}
                            <div class="mb-3">
                                <label for="email" class="form-label">Alamat Email</label>
                                <input type="email" name="email" id="email" class="form-control"
                                       placeholder="Masukkan email aktif" value="{{ old('email') }}" required>
                            </div>

                            {{-- Password --}}
                            <div class="mb-3">
                                <label for="password" class="form-label">Kata Sandi</label>
                                <input type="password" name="password" id="password" class="form-control"
                                       placeholder="Minimal 8 karakter" required>
                            </div>

                            {{-- Level --}}
                            <div class="mb-4">
                                <label for="level" class="form-label">Daftar Sebagai</label>
                                <select name="level" id="level" class="form-select" required>
                                    <option value="">-- Pilih Level --</option>
                                    <option value="admin" {{ old('level') == 'admin' ? 'selected' : '' }}>Admin</option>
                                    <option value="petani" {{ old('level') == 'petani' ? 'selected' : '' }}>Petani</option>
                                    <option value="pembeli" {{ old('level') == 'pembeli' ? 'selected' : '' }}>pembeli</option>
                                    <option value="user" {{ old('level') == 'user' ? 'selected' : '' }}>user</option>
                                </select>
                            </div>

                            {{-- Tombol Daftar --}}
                            <button type="submit" class="btn btn-primary w-100">Daftar Sekarang</button>
                        </form>

                        {{-- Link ke Login --}}
                        <p class="text-center mt-3 mb-0">
                            Sudah punya akun?
                            <a href="{{ route('login') }}" class="text-decoration-none">Masuk di sini</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
