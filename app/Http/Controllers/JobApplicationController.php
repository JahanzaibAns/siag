<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJobApplicationRequest;
use App\Models\Job;
use App\Models\JobApplication;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class JobApplicationController extends Controller
{
    /**
     * Display a listing of jobs on careers page.
     */
    public function index(): View
    {
        $jobs = Job::where('status', true)->latest('posted_date')->get();

        return view('careers', compact('jobs'));
    }

    /**
     * Display the job details page.
     */
    public function show(Job $job): View
    {
        return view('job-details', compact('job'));
    }

    /**
     * Store a new job application.
     */
    public function store(StoreJobApplicationRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        // Store CV file
        $cvPath = $request->file('cv')->store('job-applications', 'public');

        JobApplication::create([
            'job_id' => $validated['job_id'],
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'subject' => $validated['subject'] ?? null,
            'cv_path' => $cvPath,
        ]);

        return redirect()->route('job.details', $validated['job_id'])->with('success', 'Your application has been submitted successfully!');
    }
}
