<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    /** @use HasFactory<\Database\Factories\CourseFactory> */
    use HasFactory;

    public $fillable = [
        'user_id',
        'business_id',
        'owned_by',
        'code',
        'name',
        'short_description',
        'net_price',
        'tax',
        'gross_price',
        'type',
        'status',
    ];
}
