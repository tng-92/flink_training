<?php

namespace App\Enums\Business;

enum BusinessStatus: int
{
    case ACTIVE = 1;
    case TRIAL = 2;
    case EXPIRED = 99;
}
