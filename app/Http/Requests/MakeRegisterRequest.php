<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

/**
 * Handle login request
 * @property-read string $name 
 * @property-read string $email
 * @property-read string $password
 */



class MakeRegisterRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'confirmed', 'max:255', 'unique:users'],
            'password' => ['required', Password::defaults()],
        ];
    }

    public function tryToRegister()
    {
        User::query()->create($this->validated());

        return true;
    }
}
