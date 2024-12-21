<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SkillsRequest extends FormRequest
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
            'skill_title' => 'required',
            'skill_number' => 'required',
            'skill_progress' => 'required'
        ];
    }
    public function messages(): array
    {
        return [
            'skill_title' => 'Skill title is required',
            'skill_number' => 'Skill number is required',
            'skill_progress' => 'Skill progress is required'
        ];
    }
}
