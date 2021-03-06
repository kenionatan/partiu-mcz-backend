<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = [
        'name',
        'street',
        'number',
        'neighborhood',
        'additional',
        'zipcode',
        'city',
        'state',
        'country',
        'website',
        'latitude',
        'longitude'
    ];
}
