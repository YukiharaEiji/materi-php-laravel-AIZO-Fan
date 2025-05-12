<?php

use App\Http\Controllers\API\MhsApiController;
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
Route::get('/prodi/{id}/detail', [ProdiController::class, 'detail'])->name('prodi.detail');
Route::get('/prodi/create', [ProdiController::class, 'createForm'])->name('prodi.create');
Route::post('/prodi/{id}/destroy', [ProdiController::class, 'destroy'])->name('prodi.destroy');

// Materi Routes
Route::get('/materi', [MateriController::class, 'index'])->name('materi.index');
Route::get('/materi/{id}/detail', [MateriController::class, 'detail'])->name('materi.detail');
Route::get('/materi/create', [MateriController::class, 'createForm'])->name('materi.create');
Route::post('/materi/{id}/destroy', [MateriController::class, 'destroy'])->name('materi.destroy');

// Dosen Routes
Route::get('/dosen', [DosenController::class, 'index'])->name('dosen.index');
Route::get('/dosen/{id}/detail', action: [DosenController::class, 'detail'])->name('dosen.detail');
Route::get('/dosen/create', [DosenController::class, 'createForm'])->name('dosen.create');
Route::post('/dosen/{id}/destroy', [DosenController::class, 'destroy'])->name('dosen.destroy');

// Fakultas Routes
Route::get('/fakultas', [FakultasController::class, 'index'])->name('fakultas.index');
Route::get('/fakultas/{id}/detail', [FakultasController::class, 'detail'])->name('fakultas.detail');
Route::get('/fakultas/create', [FakultasController::class, 'createForm'])->name('fakultas.create');
Route::post('/fakultas/{id}/destroy', [FakultasController::class, 'destroy'])->name('fakultas.destroy');

// Mahasiswa Routes
Route::get('/mhs', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/mhs/{id}/detail', [MahasiswaController::class, 'detail'])->name('mahasiswa.detail');
Route::get('/mhs/create', [MahasiswaController::class, 'createForm'])->name('mahasiswa.create');
Route::post('/mhs/{id}/destroy', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');

Route::get('/', function () {
    return view('home');
})->name('layout.home');
