<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'username' => ['required', 'string'],
            'project' => ['required'],
            // 'email' => ['required', 'email', 'confirmed'],
            'email' => ['required', 'email'],
            'message' => ['required', 'string', 'min:4']
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Le champ nom(s) et prénom(s) ne peut être vide',
            'project.required' => 'Le champ téléphone ne peut être vide',
            'email.required' => 'Le champ email ne peut être vide',
            'email.email' => 'Le format de l\'email est invalide',
            // 'email.confirmed' => 'La confirmation de l\'email ne correspond pas',
            'message.required' => 'Le champ message ne peut être vide',
            'message.min' => 'Le champ message doit contenir au moins 4 caractères',
        ];
    }
}
