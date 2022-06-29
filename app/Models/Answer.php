<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

     /**
     * The attributes that are not mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'on' => 'date',
    ];

    /**
     * Get the country
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * Get all guesses for this answer
     */
    public function attempts()
    {
        return $this->hasMany(Attempt::class);
    }

    /**
     * Returns today's answer
     */
    public function scopeToday($query)
    {
        $query->whereDate('on', now());
    }
}
