<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreJobRequest;
use App\Http\Requests\Admin\UpdateJobRequest;
use App\Models\Job;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class JobController extends Controller
{
    /**
     * Display a listing of the jobs.
     */
    public function index(): View
    {
        $jobs = Job::withCount('applications')->latest()->get();

        return view('admin.jobs', compact('jobs'));
    }

    /**
     * Show the form for creating a new job.
     */
    public function create(): View
    {
        return view('admin.add-job');
    }

    /**
     * Store a newly created job in storage.
     */
    public function store(StoreJobRequest $request): RedirectResponse
    {
        Job::create($request->validated());

        return redirect()->route('admin.jobs')->with('success', 'Job posted successfully!');
    }

    /**
     * Show the form for editing the specified job.
     */
    public function edit(Job $job): View
    {
        return view('admin.edit-job', compact('job'));
    }

    /**
     * Update the specified job in storage.
     */
    public function update(UpdateJobRequest $request, Job $job): RedirectResponse
    {
        $job->update($request->validated());

        return redirect()->route('admin.jobs')->with('success', 'Job updated successfully!');
    }

    /**
     * Remove the specified job from storage.
     */
    public function destroy(Job $job): RedirectResponse
    {
        $job->delete();

        return redirect()->route('admin.jobs')->with('success', 'Job deleted successfully!');
    }
}
