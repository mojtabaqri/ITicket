<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WalletTransaction extends Model
{
    /* WalletTransaction

           id: id
           trackingHash: string
           user_id: bigInteger foreign:user.id
           transaction_amout: bigInteger
           transaction_type: Enums:"increase","decrease"
           transaction_booking_id: bigInteger foreign:Bookings.id
           transaction_description: bigInteger

     */
    protected $fillable = [
        'trackingHash',
        'user_id',
        'transaction_amout',
        'transaction_type',
        'transaction_booking_id',
        'transaction_description',
    ];
    use HasFactory;
}
