<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/halo', function () {
    return 'haloo';
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/data', function () {
    return view('data');
});
