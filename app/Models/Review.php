<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    /* Review

           id: id
           review_rate: tinyInteger index
           user_id: bigInteger foreign:user.id
           service_id: bigInteger foreign:Services.id
           review_comment: text

     */
    protected $fillable = [
        'review_rate',
        'user_id',
        'service_id',
        'review_comment',
    ];
    use HasFactory;
}
