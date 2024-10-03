<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/akademik', function () {
    return view('akademik');
});
