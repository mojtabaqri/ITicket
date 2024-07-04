<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    /*
    Invoice:
        id: id
        invoice_status: Enums:"Paid","unpaid"
        invoice_amount: bigInteger
        invoice_booking_id: bigInteger foreign:Bookings.id
        invoice_user_id: bigInteger foreign:user.id
        invoice_payment_date: bigInteger
        invoice_wallet_transaction_id: bigInteger foreign:wallet_transaction.id
    */
    protected $fillable = [
        'invoice_status',
        'invoice_amount',
        'invoice_booking_id',
        'invoice_user_id',
        'invoice_payment_date',
        'invoice_wallet_transaction_id',
    ];

    use HasFactory;
}
