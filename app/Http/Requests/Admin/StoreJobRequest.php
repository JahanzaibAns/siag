<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreJobRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'company' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'qualifications' => ['nullable', 'string'],
            'location' => ['required', 'string', 'max:255'],
            'job_type' => ['required', 'string', 'in:Full Time,Part Time,Contract'],
            'posted_date' => [
                'required',
                'date',
                function ($attribute, $value, $fail) {
                    $exists = \App\Models\Job::where('title', $this->input('title'))
                        ->where('company', $this->input('company'))
                        ->where('posted_date', $value)
                        ->exists();

                    if ($exists) {
                        $fail('A job with the same title, company, and posted date already exists.');
                    }
                },
            ],
            'department' => ['nullable', 'string', 'max:255'],
            'experience' => ['nullable', 'string', 'max:255'],
            'contact_email' => ['required', 'email', 'max:255'],
        ];
    }
}
