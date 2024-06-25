<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->enum('invoice_status', ["Paid","unpaid"]);
            $table->bigInteger('invoice_amount');
            $table->unsignedBigInteger('invoice_booking_id');
            $table->foreign('invoice_booking_id')->references('id')->on('bookings');
            $table->unsignedBigInteger('invoice_user_id');
            $table->foreign('invoice_user_id')->references('id')->on('user');
            $table->timestamp('invoice_payment_date');
            $table->unsignedBigInteger('invoice_wallet_transaction_id');
            $table->foreign('invoice_wallet_transaction_id')->references('id')->on('wallet_transaction');
            $table->timestamps();

        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
