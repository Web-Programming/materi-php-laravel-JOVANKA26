<?php

use Illuminate\Support\Facades\Route;
use Pest\Plugins\Profile;

Route::get('/', function () {
    return view('home');
});

Route::get('/profil', function() {
    return view( 'profil');
});

Route::get('/berita/{id}/{title}', function ($id, $title = NULL) {
    return view('berita', ['id' => '$id', 'title'=> $title ]);
});

