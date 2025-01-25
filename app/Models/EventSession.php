<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventSession extends Model
{
    public $fillable = [
        'business_id',
        'course_id',
        'trainer_id',
        'created_by',
        'code',
        'date',
        'start_time',
        'end_time',
        'status',
    ];
}
