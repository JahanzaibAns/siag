<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInquiryRequest;
use App\Models\Inquiry;
use Illuminate\Http\RedirectResponse;

class InquiryController extends Controller
{
    /**
     * Store a newly created inquiry.
     */
    public function store(StoreInquiryRequest $request): RedirectResponse
    {
        Inquiry::create($request->validated());

        $redirectRoute = $request->has('from_home') ? 'index' : 'contact';

        return redirect()->route($redirectRoute)->with('success', 'Thank you for your inquiry! We will contact you soon.');
    }
}
