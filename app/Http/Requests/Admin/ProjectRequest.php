<?php

namespace App\Http\Requests\Admin;

use Illuminate\Support\Str;
use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            'title' => ['string', 'required'],
            'slug' => ['string', 'required'],
            'description' => ['required'],
            'meta_description' => ['string', 'required'],
            'project_url' => ['string', 'nullable'],
            'github_url' => ['string', 'nullable'],
            'featured_index' => ['required'],
            'technologies' => ['required', 'array'],
            'technologies.*' => ['integer', 'exists:technologies,id'],
            'pictures' => ['array'],
            'pictures.*' => ['image' => 'max:5000'],
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'slug' => Str::slug($this->title),
        ]);
    }
}
