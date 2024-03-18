<?php

namespace App\Services;

use App\DTO\UserDTO;
use App\Models\User;


class AuthenticationService
{
    public function store(UserDTO $dto)
    {
        User::query()->create([
            'name' => $dto->name,
            'email' => $dto->email,
            'password' => $dto->password
        ]);
    }
}
