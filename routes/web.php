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
Route::get('/our-story', function () {
    return view('our-story');
})->name('our.story');
Route::get('/leadership', function () {
    return view('leadership');
})->name('leadership');
Route::get('/mission-vision', function () {
    return view('mission-vision');
})->name('mission.vision');
Route::get('/departments', function () {
    return view('departments');
})->name('departments');
Route::get('/services', function () {
    return view('services');
})->name('services');
Route::get('/careers', function () {
    return view('careers');
})->name('careers');
Route::get('/job-details', function () {
    return view('job-details');
})->name('job.details');
Route::get('/workshop', function () {
    return view('workshop');
})->name('workshop');
Route::get('/trainings', function () {
    return view('trainings');
})->name('trainings');
Route::get('/sessions', function () {
    return view('sessions');
})->name('sessions');
Route::get('/newsletter', function () {
    return view('newsletter');
})->name('newsletter');
Route::get('/events', function () {
    return view('events');
})->name('events');
Route::get('/images', function () {
    return view('images');
})->name('images');
Route::get('/videos', function () {
    return view('videos');
})->name('videos');



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
Route::get('/admin/jobs', function () {
    return view('admin.jobs');
})->name('admin.jobs');
Route::get('/admin/add-job', function () {
    return view('admin.add-job');
})->name('admin.add.job');
Route::get('/admin/edit-job', function () {
    return view('admin.edit-job');
})->name('admin.edit.job');
Route::get('/admin/applicants', function () {
    return view('admin.applicants');
})->name('admin.applicants');