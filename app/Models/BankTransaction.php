<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankTransaction extends Model
{
    /* BankTransaction

           id: id
           trackingHash: string
           user_id: bigInteger
           transaction_amout: bigInteger
           transaction_type: Enums:"increase","decrease"
           transaction_method: Enums:"gateway","manual"

     */
    protected $fillable = [
        'id',
        'trackingHash',
        'user_id',
        'transaction_amout',
        'transaction_type',
        'transaction_method',
    ];
    use HasFactory;
}
