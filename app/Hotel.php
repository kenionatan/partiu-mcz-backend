<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
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
        'latitude',
        'longitude'
    ];
}
