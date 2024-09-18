<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'project_image' => 'nullable|string',
            'client_name' => 'required|string|max:255',
            'industry' => 'required|string|max:255',
            'website' => 'nullable|url',
            'client_description' => 'nullable|string',
            'project_requirements' => 'nullable|string',
            'project_overview' => 'nullable|string',
            'solution' => 'nullable|string',
            'client_satisfaction' => 'required|in:Satisfied,Neutral,Dissatisfied',
            'time_needed' => 'nullable|string',
            'status' => 'nullable|boolean',
        ];
    }
}
