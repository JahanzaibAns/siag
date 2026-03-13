<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AppointmentController extends Controller
{
    /**
     * Display a listing of appointments.
     */
    public function index(): View
    {
        $appointments = Appointment::latest('appointment_date')->latest('created_at')->get();

        return view('admin.bookings', compact('appointments'));
    }

    /**
     * Display the specified appointment.
     */
    public function show(Appointment $appointment): View
    {
        return view('admin.bookings-details', compact('appointment'));
    }

    /**
     * Update the appointment status.
     */
    public function updateStatus(Request $request, Appointment $appointment): RedirectResponse
    {
        $request->validate([
            'status' => ['required', 'string', 'in:pending,confirmed,cancelled'],
        ]);

        $appointment->update([
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Appointment status updated successfully!');
    }

    /**
     * Remove the specified appointment.
     */
    public function destroy(Appointment $appointment): RedirectResponse
    {
        $appointment->delete();

        return redirect()->route('admin.bookings')->with('success', 'Appointment deleted successfully!');
    }
}
