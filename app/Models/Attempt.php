<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * An individual attempted guess, made by a user
 */
class Attempt extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'distance', 'direction'
    ];

    /**
     * Get the user of for this guess
     */
    public function user()
    {
        return $this->hasOne(User::class);
    }

    /**
     * Get the correct answer during this guess
     */
    public function answer()
    {
        return $this->hasOne(Answer::class);
    }

    /**
     * Get the country guessed
     */
    public function country()
    {
        return $this->hasOne(Country::class, 'id', 'country_id');
    }
}
