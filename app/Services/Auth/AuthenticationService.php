<?php

namespace App\Services\Auth;

use App\Exceptions\InvalidCredentialsException;
use App\Models\User;
use App\DTO\RegisterDTO;
use Illuminate\Support\Facades\Auth;

class AuthenticationService
{
    public function store(RegisterDTO $dto)
    {
        User::query()->create([
            'name' => $dto->name,
            'email' => $dto->email,
            'password' => $dto->password
        ]);

        return redirect()->route('login.index');
    }

    public function signIn($email, $password)
    {
        $user = User::query()->where('email', $email)->first();

        if (!empty($user)) {
            if (Auth::attempt(['email' => $email, 'password' => $password], true)) {
                return redirect()->route('index.application');
            }
        }

        throw new InvalidCredentialsException();
    }
}
