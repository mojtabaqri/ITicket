<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StateLocation extends Model
{
    /* StateLocation

          id: id
           state_name: string
           lat: point
           long: point

     */
    protected $fillable = [
        'state_name',
        'lat',
        'long',

    ];
    use HasFactory;
}
