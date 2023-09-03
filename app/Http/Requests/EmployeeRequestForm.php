<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequestForm extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'fullname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'integer'],
            'birthday' => ['required', 'string'],
            'passport_number' => ['required', 'string', 'max:25'],
            'visa_type' => ['required', 'integer'],
            'visa_expiring' => ['required', 'string'],
            'contact_number' => ['required', 'string'],
            'current_address' => ['required', 'string', 'max:255'],
            'resident_country' => ['required', 'string'],
            'emergency_number' => ['required', 'string', 'max:20'],
            'department' => ['required', 'integer'],
            'designation' => ['required', 'integer'],
            'join_date' => ['required', 'string'],
            'special_note' => ['required', 'string', 'max:255'],
        ];
    }
}
