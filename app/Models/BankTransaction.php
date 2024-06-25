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
        transaction_type: enum:"increase","decrease"
        transaction_method: enum:"gateway","manual"

  */

    use HasFactory;
}
