<?php

namespace App\Http\Requests;

use App\Models\Section;
use Illuminate\Foundation\Http\FormRequest;

class UpdateSectionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }
    public function rules(): array
    {
        return [
            "name" => [
                'required',
                'max:10',
                'string',
                'unique:sections'
            ],
            "company_id" => ['required', 'min:1', 'integer'],
        ];
    }
}
