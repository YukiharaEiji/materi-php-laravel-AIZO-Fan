<?php

use App\Http\Controllers\API\MhsApiController;
use App\Http\Controllers\MateriControler;
use App\Http\Controllers\prodiController;
use Illuminate\Support\Facades\Route;

Route::get('/profile', function () {
    return view('Profile');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get("/berita/{id}/{title?}", function($id, $title = NULL) {
    return view("Berita", ['id' => $id, 'title' => $title]);
});

Route::get("/total/{angka1}/{angka2}/{angka3?}", function($angka1, $angka2, $angka3 = 0) {
    return view("Hasil", [
        'total' => $angka1 + $angka2 + $angka3,
        'angka1' => $angka1,
        'angka2' => $angka2,
        'angka3' => $angka3
    ]);
});

Route::get('/dosen',function(){
    return view('dosen');
});

Route::get('/dosen/index',function(){
    return view('dosen.index');
});

Route::get('/fakultas',function(){
    // return view('fakultas.index',["ilkom" => "Fakultas Ilmu Komputer dan Rekayasa"]);

    // return view('fakultas.index',["fakultas" => ["Fakultas Ilmu Komputer dan Rekayasa","Fakultas ilmu ekonomi"]]);

    // return view('fakultas.index')->with("fakultas",["Fakultas ilmu komputer dan rekayasa","Fakultas ilmu ekonomi"]);

    // $fakultas = ["Fakultas Ilmu Komputer dan Rekayasa","Fakultas Ilmu Ekonomi"];
    // return view('fakultas.index',compact('fakultas'));

    // $fakultas =["Fakultas Ilmu Komputer dan Rekayasa","Fakultas Ilmu Ekonomi"];
    // return view('fakultas.index',compact('fakultas'));

    $kampus = "Universitas Multi Data Palembamg";
    $fakultas = ["Fakultas Ilmu Komputer dan Rekayasa","Fakultas Ilmu Ekonomi"];
    return view('fakultas.index',compact('fakultas','kampus'));
});

Route::get('/materi/index',[MateriControler::class,'index']);

Route::get('/materi/detail/{id}',[MateriControler::class,'detail']);

Route::resource(name:'prodi',controller:prodiController::class);

Route::apiResource('api/mhs',MhsApiController::class);