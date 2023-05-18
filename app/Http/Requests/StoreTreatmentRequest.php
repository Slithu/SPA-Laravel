<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTreatmentRequest extends FormRequest
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
            'name' => 'required|max:255',
            'typeId' => 'required',
            'description' => 'required|max:1500',
            'duration' => 'required|date_format:H:i',
            'price' => 'required|numeric|between:0,9999.99',
            'image' => 'nullable|image'
        ];
    }
}
