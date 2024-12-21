<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialRequest extends FormRequest
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
            'name' => 'required',
            'profession' => 'required',
            'message' => 'required',
            'image' => 'required',
        ];
    }

    public function messages(): array
    {
            return [
                'name.required' => 'Username is required',
                'profession.required' => 'Profession required',
                'message.required' => 'Message required',
                'image.required' => 'Image is required',
            ];
    }
}
