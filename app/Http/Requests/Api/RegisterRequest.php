<?php

namespace App\Http\Requests\Api;

use App\DTO\UserDTO;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:20'],
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'min:6', 'max:100', 'confirmed'],
        ];
    }

    public function data(): UserDTO
    {
        return UserDTO::from($this->validated());
    }
}
