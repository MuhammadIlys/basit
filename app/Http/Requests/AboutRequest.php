<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
            'intro' => 'required',
            'title' => 'required',
            'name'  => 'required',
            'email' => 'required',
            'dob' => 'required',
            'address' => 'required',
            'zip' => 'required',
            'phone' => 'required',
            'description' => 'required',
            'image' => 'required'
        ];
    }
    public function messages(): array
    {
        return [
            'intro.required' => 'Introduction text required',
            'title.required' => 'Title is required',
            'name.required' => 'Name is required',
            'name.required'  => 'required',
            'email.required' => 'Email is required',
            'dob.required' => 'DOB is required',
            'zip.required' => 'Zip code is required',
            'phone.required' => 'Phone number is required',
            'description.required' => 'Description is required',
            'image.required' => 'required'
        ];
    }
}
