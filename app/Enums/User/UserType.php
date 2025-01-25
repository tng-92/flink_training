<?php

namespace App\Enums\User;

enum UserType: int
{
    case SUPER = 99;
    case OWNER = 1;
    case ADMIN = 2;
    case USER = 3;
}
