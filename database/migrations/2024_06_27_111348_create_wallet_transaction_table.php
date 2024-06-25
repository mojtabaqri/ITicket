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

        Schema::create('wallet_transaction', function (Blueprint $table) {
            $table->id();
            $table->string('trackingHash');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('user');
            $table->bigInteger('transaction_amout');
            $table->enum('transaction_type', ["increase","decrease"]);
            $table->unsignedBigInteger('transaction_booking_id');
            $table->foreign('transaction_booking_id')->references('id')->on('bookings');
            $table->string('transaction_description');
            $table->timestamps();

        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wallet_transaction');
    }
};
