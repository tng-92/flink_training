<?php

namespace App\Models;

use App\Enums\Business\BusinessStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Business extends Model
{
    use HasFactory;

    protected $table = 'businesses';

    protected $fillable = [
        'name',
        'domain',
        'status',
    ];

    public $casts =  [
        'status' => BusinessStatus::class
    ];

    protected function Owner(): HasMany
    {
        return $this->hasMany(User::where('type', 2));
    }

    protected function Users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    protected function Courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }

    protected function Events(): HasMany
    {
        return $this->hasMany(Event::class);
    }

    protected function EventSessions(): HasMany
    {
        return $this->hasMany(Event::class);
    }
}
