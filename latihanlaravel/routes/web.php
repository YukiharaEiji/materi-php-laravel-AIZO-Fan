<?php

use App\Http\Controllers\API\MhsApiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\prodiController;
use Illuminate\Support\Facades\Route;

// Route::get('/profile', function () {
//     return view('Profile');
// });

Route::get('/', function () {
    return view('welcome');
});

// Route::get("/berita/{id}/{title?}", function($id, $title = NULL) {
//     return view("Berita", ['id' => $id, 'title' => $title]);
// });

// Route::get("/total/{angka1}/{angka2}/{angka3?}", function($angka1, $angka2, $angka3 = 0) {
//     return view("Hasil", [
//         'total' => $angka1 + $angka2 + $angka3,
//         'angka1' => $angka1,
//         'angka2' => $angka2,
//         'angka3' => $angka3
//     ]);
// });

// ---------------------------------- BATAS SUCI --------------------------------------

// Route::get('/dosen',function(){
//     return view('dosen');
// });

// Route::get('/dosen/index',function(){
//     return view('dosen.index');
// });

// Route::get('/fakultas',function(){
//      return view('fakultas.index',["ilkom" => "Fakultas Ilmu Komputer dan Rekayasa"]);

//      return view('fakultas.index',["fakultas" => ["Fakultas Ilmu Komputer dan Rekayasa","Fakultas ilmu ekonomi"]]);

//      return view('fakultas.index')->with("fakultas",["Fakultas ilmu komputer dan rekayasa","Fakultas ilmu ekonomi"]);

//      $fakultas = ["Fakultas Ilmu Komputer dan Rekayasa","Fakultas Ilmu Ekonomi"];
//      return view('fakultas.index',compact('fakultas'));

//      $fakultas =["Fakultas Ilmu Komputer dan Rekayasa","Fakultas Ilmu Ekonomi"];
//     return view('fakultas.index',compact('fakultas'));

//     $kampus = "Universitas Multi Data Palembamg";
//     $fakultas = ["Fakultas Ilmu Komputer dan Rekayasa","Fakultas Ilmu Ekonomi"];
//     return view('fakultas.index',compact('fakultas','kampus'));
// });

// Route::get('/latihan/index',[MateriController::class,'index']);

// Route::get('/latihan/detail/{id}',[MateriController::class,'detail']);

// Route::resource(name:'prodi',controller:prodiController::class);

// Route::apiResource('api/mhs',MhsApiController::class);

// ---------------------------------- BATAS SUCI --------------------------------------

// Prodi Routes
Route::get('/prodi', [ProdiController::class, 'index'])->name('prodi.index');
Route::get('/prodi/create', [ProdiController::class, 'create'])->name('prodi.create');
Route::post('/prodi', [ProdiController::class, 'store'])->name('prodi.store');
Route::get('/prodi/{id}', [ProdiController::class, 'show'])->name('prodi.show');
Route::get('/prodi/{id}/edit', [ProdiController::class, 'edit'])->name('prodi.edit');
Route::put('/prodi/{id}', [ProdiController::class, 'update'])->name('prodi.update');
Route::delete('/prodi/{id}/destroy', [ProdiController::class, 'destroy'])->name('prodi.destroy');


// Materi Routes
Route::get('/materi', [MateriController::class, 'index'])->name('materi.index');
Route::get('/materi/{id}/detail', [MateriController::class, 'detail'])->name('materi.detail');
Route::get('/materi/create', [MateriController::class, 'createForm'])->name('materi.create');
Route::post('/materi/{id}/destroy', [MateriController::class, 'destroy'])->name('materi.destroy');

// Dosen Routes
Route::get('/dosen', [DosenController::class, 'index'])->name('dosen.index');
Route::get('/dosen/create', [DosenController::class, 'create'])->name('dosen.create');
Route::post('/dosen', [DosenController::class, 'store'])->name('dosen.store');
Route::get('/dosen/{id}', [DosenController::class, 'show'])->name('dosen.show');
Route::get('/dosen/{id}/edit', [DosenController::class, 'edit'])->name('dosen.edit');
Route::put('/dosen/{id}', [DosenController::class, 'update'])->name('dosen.update');

Route::delete('/dosen/{id}/destroy', [DosenController::class, 'destroy'])->name('dosen.destroy');

// Fakultas Routes
Route::get('/fakultas', [FakultasController::class, 'index'])->name('fakultas.index');
Route::get('/fakultas/create', [FakultasController::class, 'create'])->name('fakultas.create');
Route::post('/fakultas', [FakultasController::class, 'store'])->name('fakultas.store');
Route::get('/fakultas/{id}/edit', [FakultasController::class, 'edit'])->name('fakultas.edit');
Route::put('/fakultas/{id}', [FakultasController::class, 'update'])->name('fakultas.update');
Route::delete('/fakultas/{id}', [FakultasController::class, 'destroy'])->name('fakultas.destroy');
Route::get('/fakultas/{id}/detail', [FakultasController::class, 'detail'])->name('fakultas.detail');
// Mahasiswa Routes
Route::get('/mhs', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/mhs/{id}/detail', [MahasiswaController::class, 'detail'])->name('mahasiswa.detail');
Route::get('/mhs/create', [MahasiswaController::class, 'createForm'])->name('mahasiswa.create');
Route::post('/mhs/{id}/destroy', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');

// Authentication
Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'do_login']);

Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'do_register']);
Route::get('/', function () {
    return view('home');
})->name('layout.home');
