<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rules;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class RegistroRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "nombre" => "required|string|max:255",
            "apellido" => "required|string|max:255",
            "name" => 'required|string|max:255',
            "email" => "required|email|lowercase|unique:users,email,except,id",
            "documento" => 'required|string|unique:users,documento,except,id',
            "password" => ['required', 'min:8', Rules\Password::defaults()]
        ];
    }
}
