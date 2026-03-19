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
Route::get('/advancing-careers-abroad', function () {
    return view('session-advancing-careers-abroad');
})->name('session.advancing.careers.abroad');
Route::get('/ai-sessions', function () {
    return view('session-ai-sessions');
})->name('session.ai.sessions');
Route::get('/occupational-safety', function () {
    return view('session-occupational-safety');
})->name('session.occupational.safety');
Route::get('/grant-writing-workshop', function () {
    return view('session-grant-writing-workshop');
})->name('session.grant.writing.workshop');
Route::get('/newsletter', function () {
    return view('newsletter');
})->name('newsletter');
Route::get('/events', function () {
    return view('events');
})->name('events');
Route::get('/images', function () {
    return view('images');
})->name('images');
Route::get('/8th-hands-on-ercp-workshop', function () {
    return view('events-8th-hands-on-ercp-workshop');
})->name('8th-hands-on-ercp-workshop');
Route::get('/6th-sindh-aeg-eus-workshop', function () {
    return view('events-6th-sindh-aeg-eus-workshop');
})->name('6th-sindh-aeg-eus-workshop');
Route::get('/videos', function () {
    return view('videos');
})->name('videos');
Route::get('/tenders', function () {
    return view('tenders');
})->name('tenders');
Route::get('/donate', function () {
    return view('donate');
})->name('donate');
Route::get('/ogd-endoscopy', function () {
    return view('ogd-endoscopy');
})->name('ogd.endoscopy');
Route::get('/colonoscopy', function () {
    return view('colonoscopy');
})->name('colonoscopy');
Route::get('/ercp', function () {
    return view('ercp');
})->name('ercp');
Route::get('/eswl', function () {
    return view('eswl');
})->name('eswl');
Route::get('/spyglass', function () {
    return view('spyglass');
})->name('spyglass');
Route::get('/eus', function () {
    return view('eus');
})->name('eus');
Route::get('/eus-rfa', function () {
    return view('eus-rfa');
})->name('eus.rfa');
Route::get('/esophageal-manometry', function () {
    return view('esophageal-manometry');
})->name('esophageal.manometry');
Route::get('/fibroscan', function () {
    return view('fibroscan');
})->name('fibroscan');
Route::get('/endoscopy-unit', function () {
    return view('endoscopy-unit');
})->name('endoscopy.unit');
Route::get('/sedation-and-anesthesia-unit', function () {
    return view('sedation-and-anesthesia-unit');
})->name('sedation.and.anesthesia.unit');
Route::get('/clinical-research-and-trials', function () {
    return view('clinical-research-and-trials');
})->name('clinical.research.and.trials');
Route::get('/advanced-diagnostic-technologies', function () {
    return view('advanced-diagnostic-technologies');
})->name('advanced.diagnostic.technologies');
Route::get('/innovation-and-technology-lab', function () {
    return view('innovation-and-technology-lab');
})->name('innovation.and.technology.lab');
Route::get('/dr-saad-khalid-niaz', function () {
    return view('dr-saad-khalid-niaz');
})->name('dr-saad-khalid-niaz');
Route::get('/dr-babar-matin', function () {
    return view('dr-babar-matin');
})->name('dr-babar-matin');
Route::get('/dr-aftab-leghari', function () {
    return view('dr-aftab-leghari');
})->name('dr-aftab-leghari');
Route::get('/dr-sajida-qureshi', function () {
    return view('dr-sajida-qureshi');
})->name('dr-sajida-qureshi');
Route::get('/dr-shanil-kadir', function () {
    return view('dr-shanil-kadir');
})->name('dr-shanil-kadir');
Route::permanentRedirect('/workshop/colonoscopy', '/colonoscopy-workshop');
Route::permanentRedirect('/workshop/ercp', '/ercp-workshop');
Route::permanentRedirect('/workshop/eus', '/eus-workshop');
Route::permanentRedirect('/workshop/advanced-techniques-endoscopy', '/advanced-techniques-endoscopy-workshop');
Route::permanentRedirect('/workshop/train-the-trainer', '/train-the-trainer-workshop');

Route::get('/colonoscopy-workshop', function () {
    return view('colonoscopy-workshop');
})->name('colonoscopy.workshop');
Route::get('/ercp-workshop', function () {
    return view('ercp-workshop');
})->name('ercp.workshop');
Route::get('/eus-workshop', function () {
    return view('eus-workshop');
})->name('eus.workshop');
Route::get('/advanced-techniques-endoscopy-workshop', function () {
    return view('advanced-techniques-endoscopy-workshop');
})->name('advanced.techniques.endoscopy.workshop');
Route::get('/train-the-trainer-workshop', function () {
    return view('train-the-trainer-workshop');
})->name('train.the.trainer.workshop');

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
