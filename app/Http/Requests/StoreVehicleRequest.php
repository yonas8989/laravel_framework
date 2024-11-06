<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVehicleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'company_id' => ['required', 'exists:companies,id'],
            'vehicle_number' => ['required', 'integer', 'min:0'],
            'vehicle_model' => ['required', 'string', 'max:20'],
            'year_made' => ['nullable', 'string', 'max:20'],
            'driver_name' => ['required', 'string', 'max:20'],
            'notes' => ['nullable', 'string', 'max:255'], 
        ];
    }
}
