<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    /*     Booking:
        id: id
        status: enum:"reserved","pending","canceled" index
        User_id: bigInteger foreign:user.id
        Service_id: bigInteger foreign:Services.id*/
    use HasFactory;
}