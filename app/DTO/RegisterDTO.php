<?php

namespace App\DTO;


use Spatie\LaravelData\Data;

class RegisterDTO extends Data
{
    public string $name;
    public string $email;
    public string $password;
}
