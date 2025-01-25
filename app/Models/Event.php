<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public $fillable = [
        'business_id',
        'course_id',
        'trainer_id',
        'created_by',
        'code',
        'start_date',
        'end_date',
        'start_time',
        'end_time',
        'net_price',
        'tax',
        'gross_price',
        'type',
        'status',
    ];
}
