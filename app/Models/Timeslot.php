<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timeslot extends Model
{
    /*
    Timeslot:
        id: id
        start_slot: dateTime index
        end_slot: dateTime
    */
    use HasFactory;
}
