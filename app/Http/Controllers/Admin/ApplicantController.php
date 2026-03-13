<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\JobApplication;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class ApplicantController extends Controller
{
    /**
     * Display a listing of job applications.
     */
    public function index(Request $request): View
    {
        $query = JobApplication::with('job')->latest('created_at');

        if ($request->has('job') && $request->job) {
            $query->where('job_id', $request->job);
        }

        $applications = $query->get();
        $selectedJob = $request->has('job') ? Job::find($request->job) : null;

        return view('admin.applicants', compact('applications', 'selectedJob'));
    }

    /**
     * Download the CV file for a job application.
     */
    public function downloadCv(JobApplication $application): BinaryFileResponse|RedirectResponse
    {
        if (! $application->hasCv()) {
            return redirect()->back()->with('error', 'CV file not found or does not exist.');
        }

        $filePath = $application->getCvPath();
        $extension = pathinfo($filePath, PATHINFO_EXTENSION);
        $fileName = str_replace(' ', '_', $application->name).'_CV.'.$extension;

        return response()->download($filePath, $fileName);
    }
}
