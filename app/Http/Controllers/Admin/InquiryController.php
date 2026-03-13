<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use Illuminate\View\View;

class InquiryController extends Controller
{
    /**
     * Display a listing of inquiries.
     */
    public function index(): View
    {
        $inquiries = Inquiry::latest()->get();

        return view('admin.inquiries', compact('inquiries'));
    }
}
