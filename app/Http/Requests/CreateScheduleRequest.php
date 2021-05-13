<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateScheduleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        // TODO add validation for time overlapping
        return [
            'name' => 'required|min:3 | max:40 |unique:schedules,name',
            'start_at' => 'required | date_format:H:i:s',
            'end_at' => 'required | date_format:H:i:s',
        ];
    }
}
