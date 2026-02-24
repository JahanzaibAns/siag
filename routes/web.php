<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/our-doctors', function () {
    return view('our-doctors');
})->name('our.doctors');
