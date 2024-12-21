<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServicesRequest extends FormRequest
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
            'service_title' => 'required',
            'service_icon' => 'required',
            'service_description' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'service_title.required' => 'Title is required',
            'service_icon.required' => 'Description is required',
            'service_description.required' => 'Icon is required',
        ];
    }
}
