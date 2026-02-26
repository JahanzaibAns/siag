<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/our-doctors', function () {
    return view('our-doctors');
})->name('our.doctors');
Route::get('/appointments', function () {
    return view('appointments');
})->name('appointments');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/admin/login', function () {
    return view('login');
})->name('admin.login');

// Admin Routes
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');
Route::get('/admin/bookings', function () {
    return view('admin.bookings');
})->name('admin.bookings');
Route::get('/admin/booking-details', function () {
    return view('admin.bookings-details');
})->name('admin.bookings.details');
Route::get('/admin/inquiries', function () {
    return view('admin.inquiries');
})->name('admin.inquiries');