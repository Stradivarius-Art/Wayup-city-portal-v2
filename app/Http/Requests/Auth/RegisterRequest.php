<?php

namespace App\Http\Requests\Auth;

use App\DTO\RegisterDTO;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:6'],
            'email' => ['email', 'string', 'required'],
            'password' => ['required', 'min:6', 'max:100', 'confirmed'],
        ];
    }

    public function register(): RegisterDTO
    {
        return RegisterDTO::from($this->validated());
    }
}
