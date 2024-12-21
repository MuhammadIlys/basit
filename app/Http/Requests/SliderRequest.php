<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
            'subtitle' => 'required',
            'hirebutton' => 'required',
            'hirebuttonlink' => 'required',
            'cvbutton' => 'required',
            'cvbuttonlink' => 'required',
            'sliderimage' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Title is required',
            'subtitle.required' => 'Subtitle is required',
            'hirebutton.required' => 'Hire button text is required',
            'hirebuttonlink.required' => 'Hire button link is required',
            'cvbutton.required' => ' CV button text is required',
            'cvbuttonlink.required' => ' CV button link is required',
            'sliderimage.required' => 'Slider image is required',
        ];
    }
}
