<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBranchRequest extends FormRequest
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
          "name"=>['required', 'max:15', 'string'],
          'location'=>['required','string', 'max:50'],
          'email'=>['required', 'email', 'max:20'],
          'phone'=>['required', 'phone','max:20'],
          'is_active'=>['required','boolean'],
        ];
    }
}
