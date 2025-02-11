<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
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


    public function events(): HasMany
    {
        return $this->hasMany(Event::class);
    }
}
