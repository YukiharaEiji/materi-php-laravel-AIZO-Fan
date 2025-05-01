<?php

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
