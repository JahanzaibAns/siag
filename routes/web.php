<?php

use App\Http\Controllers\Admin\ApplicantController;
use App\Http\Controllers\Admin\AppointmentController as AdminAppointmentController;
use App\Http\Controllers\Admin\InquiryController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\InquiryController as PublicInquiryController;
use App\Http\Controllers\JobApplicationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/our-doctors', function () {
    return view('our-doctors');
})->name('our.doctors');
Route::get('/appointments', [App\Http\Controllers\AppointmentController::class, 'create'])->name('appointments');
Route::post('/appointments', [App\Http\Controllers\AppointmentController::class, 'store'])->name('appointments.store');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::post('/inquiries', [PublicInquiryController::class, 'store'])->name('inquiries.store');
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
Route::get('/careers', [JobApplicationController::class, 'index'])->name('careers');
Route::get('/job-details/{job}', [JobApplicationController::class, 'show'])->name('job.details');
Route::post('/job-application', [JobApplicationController::class, 'store'])->name('job.application.store');
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
Route::get('/tenders', function () {
    return view('tenders');
})->name('tenders');
Route::get('/donate', function () {
    return view('donate');
})->name('donate');

// Admin Authentication Routes (Public)
Route::get('/admin/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [LoginController::class, 'login']);

// Admin Routes (Protected - All require authentication)
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/dashboard', function () {
        $appointmentCount = \App\Models\Appointment::count();
        $inquiryCount = \App\Models\Inquiry::count();

        return view('admin.dashboard', compact('appointmentCount', 'inquiryCount'));
    })->name('dashboard');
    Route::get('/bookings', [AdminAppointmentController::class, 'index'])->name('bookings');
    Route::get('/bookings/{appointment}', [AdminAppointmentController::class, 'show'])->name('bookings.details');
    Route::put('/bookings/{appointment}/status', [AdminAppointmentController::class, 'updateStatus'])->name('bookings.update-status');
    Route::delete('/bookings/{appointment}', [AdminAppointmentController::class, 'destroy'])->name('bookings.destroy');
    Route::get('/inquiries', [InquiryController::class, 'index'])->name('inquiries');
    Route::get('/jobs', [JobController::class, 'index'])->name('jobs');
    Route::get('/add-job', [JobController::class, 'create'])->name('add.job');
    Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store');
    Route::get('/edit-job/{job}', [JobController::class, 'edit'])->name('edit.job');
    Route::put('/jobs/{job}', [JobController::class, 'update'])->name('jobs.update');
    Route::delete('/jobs/{job}', [JobController::class, 'destroy'])->name('jobs.destroy');
    Route::get('/applicants', [ApplicantController::class, 'index'])->name('applicants');
    Route::get('/applicants/{application}/download-cv', [ApplicantController::class, 'downloadCv'])->name('applicants.download-cv');
});
