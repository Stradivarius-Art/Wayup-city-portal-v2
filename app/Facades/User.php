<?php

namespace App\Facades;

use App\DTO\UserDTO;
use Illuminate\Support\Facades\Facade;

class User extends Facade
{
    /**
     * @method void store(UserDTO $dto)
     */
    protected static function getFacadeAccessor()
    {
        return 'user';
    }
}
