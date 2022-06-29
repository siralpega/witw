<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'countries';

    /**
     * The attributes that are not mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['id', 'location'];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'paths' => 'array',
        'updated_at' => 'datetime',
        'created_at' => 'datetime',
    ];

    /**
     * Convert paths attribute to array from string (unserialize)
     *
     * @param  string  $value
     * @return string
     */
    public function getPathsAttribute($value)
    {
        return unserialize($value);
    }

    /**
     * Convert location attribute to coordinates array
     *
     * @param  string  $value
     * @return array $country->location['lat'] $country->location['lon']
     */
    public function getLocationAttribute($value)
    {
        return unpack('x/x/x/x/corder/Ltype/dlat/dlon', $value);
    }
}
