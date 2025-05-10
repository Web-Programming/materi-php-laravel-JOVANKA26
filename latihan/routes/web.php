<?php

use Illuminate\Support\Facades\Route;  
use App\Http\Controllers\MhsApiController; 
use App\Http\Controllers\MateriController; 
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;

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

Route::apiResource('api/mhs', 
MhsApiController::class);

Route::resource('materi', 
MateriController::class);

Route::resource('prodi', 
ProdiController::class);

Route::resource('fakultas', 
FakultasController::class);

Route::resource('mhs', 
MahasiswaController::class);

Route::resource('dosen', 
DosenController::class);
