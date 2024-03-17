<?php

namespace App\Enum;

enum UserRole: string
{
    case Admin = 'Администратор';
    case Citizen = 'Гражданин';
}