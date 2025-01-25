<?php

namespace App\Enums\User;

enum UserStatus: int
{
    case ACTIVE = 99;
    case EXPIRED = 1;
    case ARCHIVED = 2;
    case DELETED = 3;
}
