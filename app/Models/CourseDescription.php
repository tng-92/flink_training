<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseDescription extends Model
{
    /** @use HasFactory<\Database\Factories\CourseDescriptionFactory> */
    use HasFactory;

    public $fillable = [
        'course_id',
        'feild_1',
        'feild_2',
        'feild_3',
    ];
}
