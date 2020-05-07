<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TravelPackage extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'slug', 'location', 'about', 'features_event', 'language', 'food', 'depature_date', 'duration', 'type', 'price'
    ];

    protected $hidden = [];
}
