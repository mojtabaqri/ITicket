<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noftication extends Model
{
    /*
   Noftication:
        id: id
        user_id: bigInteger foreign:user.id
        notifection_message: string
    */
    protected $fillable = [
        'user_id',
        'notifection_message',

    ];
    use HasFactory;
}
