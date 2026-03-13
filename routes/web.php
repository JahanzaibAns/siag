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

// Admin Authentication Routes
Route::get('/admin/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [LoginController::class, 'login']);
Route::post('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');

// Admin Routes (Protected)
Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', function () {
        $appointmentCount = \App\Models\Appointment::count();
        $inquiryCount = \App\Models\Inquiry::count();

        return view('admin.dashboard', compact('appointmentCount', 'inquiryCount'));
    })->name('admin.dashboard');
    Route::get('/admin/bookings', [AdminAppointmentController::class, 'index'])->name('admin.bookings');
    Route::get('/admin/bookings/{appointment}', [AdminAppointmentController::class, 'show'])->name('admin.bookings.details');
    Route::put('/admin/bookings/{appointment}/status', [AdminAppointmentController::class, 'updateStatus'])->name('admin.bookings.update-status');
    Route::delete('/admin/bookings/{appointment}', [AdminAppointmentController::class, 'destroy'])->name('admin.bookings.destroy');
    Route::get('/admin/inquiries', [InquiryController::class, 'index'])->name('admin.inquiries');
    Route::get('/admin/jobs', [JobController::class, 'index'])->name('admin.jobs');
    Route::get('/admin/add-job', [JobController::class, 'create'])->name('admin.add.job');
    Route::post('/admin/jobs', [JobController::class, 'store'])->name('admin.jobs.store');
    Route::get('/admin/edit-job/{job}', [JobController::class, 'edit'])->name('admin.edit.job');
    Route::put('/admin/jobs/{job}', [JobController::class, 'update'])->name('admin.jobs.update');
    Route::delete('/admin/jobs/{job}', [JobController::class, 'destroy'])->name('admin.jobs.destroy');
    Route::get('/admin/applicants', [ApplicantController::class, 'index'])->name('admin.applicants');
    Route::get('/admin/applicants/{application}/download-cv', [ApplicantController::class, 'downloadCv'])->name('admin.applicants.download-cv');
});
