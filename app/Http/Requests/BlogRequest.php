<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            'title' => 'required',
            'category' => 'required',
            'status' => 'required',
            'short_desc' => 'required',
            'long_desc' => 'required',
            'image' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Blog title is required',
            'category.required' => 'Blog category is required',
            'status.required' => 'Blog Status is required',
            'short_desc.required' => 'Short description is required',
            'long_desc.required' => 'Long description is required',
            'image.required' => 'Blog thumbnail is required',
        ];
    }

}
