<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAppointmentRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'procedure' => ['required', 'string', 'max:255'],
            'doctor' => ['required', 'string', 'max:255'],
            'appointment_date' => [
                'required',
                'date',
                'after_or_equal:today',
                function ($attribute, $value, $fail) {
                    $exists = \App\Models\Appointment::where('email', $this->input('email'))
                        ->where('phone', $this->input('phone'))
                        ->where('procedure', $this->input('procedure'))
                        ->where('doctor', $this->input('doctor'))
                        ->where('appointment_date', $value)
                        ->exists();

                    if ($exists) {
                        $fail('You have already booked an appointment with the same details. Please choose a different date, procedure, or doctor.');
                    }
                },
            ],
        ];
    }
}
