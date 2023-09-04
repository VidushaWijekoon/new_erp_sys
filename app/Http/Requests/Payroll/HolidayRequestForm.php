<?php

namespace App\Http\Requests\Payroll;

use Illuminate\Foundation\Http\FormRequest;

class HolidayRequestForm extends FormRequest
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
            'holiday_name' => ['required', 'string', 'max:25'],
            'holiday_date' => ['required', 'string', 'max:100'],
            'holiday_special_note' => ['required', 'string', 'max:100'],
        ];
    }
}
