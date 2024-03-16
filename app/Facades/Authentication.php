<?php

namespace App\Facades;

use App\DTO\RegisterDTO;
use Illuminate\Support\Facades\Facade;

class Authentication extends Facade
{
    /**
     * @method void store(RegisterDTO $dto)
     * @method void signIn($email, $password)
     * 
     * @see \App\Services\Auth\AuthenticationService
     */
    protected static function getFacadeAccessor()
    {
        return 'register_service';
    }
}
