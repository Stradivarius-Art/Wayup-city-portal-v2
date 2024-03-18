<?php

namespace App\DTO;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;

class UserDTO extends Data
{
    public string $name;
    public string $email;
    public string $password;
}
