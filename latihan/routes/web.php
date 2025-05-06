<?php

use App\Http\Controllers\MhsApiController;
use Illuminate\Support\Facades\Route;  
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('home');
});

Route::get('/profil', function() {
    return view( 'profil');
});

Route::get('/berita/{id}/{title}', function ($id, $title = NULL) {
    return view('berita', ['id' => '$id', 'title'=> $title ]);
});

Route::get('/fakultas', function () {
    // return view('fakultas.index', ["ilkom" => "Fakultas Ilmu Komputer dan Rekayasa"]);
    // return view('fakultas.index', ["fakultas" => ["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ilmu Ekonomi"]]);
    // return view('fakultas.index')->with("fakultas", ["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ilmu Ekonomi"]);

    $kampus = "Universitas Multi Data Palembang";
    // $fakultas = [];
    $fakultas = ["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ilmu Ekonomi"];

    return view('fakultas.index', compact('fakultas', 'kampus'));
});

Route::get('/materi/index', 
[materi::class, 'index']);

Route::resource('prodi',
ProdiController::class);

Route::apiResource('api/mhs', 
MhsApiController::class);