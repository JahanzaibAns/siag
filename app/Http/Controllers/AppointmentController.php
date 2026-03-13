<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAppointmentRequest;
use App\Models\Appointment;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AppointmentController extends Controller
{
    /**
     * Display the appointment booking form.
     */
    public function create(): View
    {
        return view('appointments');
    }

    /**
     * Store a newly created appointment.
     */
    public function store(StoreAppointmentRequest $request): RedirectResponse
    {
        Appointment::create($request->validated());

        return redirect()->route('appointments')->with('success', 'Your appointment has been booked successfully! We will contact you soon.');
    }
}
