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

        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('service_category');
            $table->bigInteger('Service_state_location_id');
            $table->foreign('Service_state_location_id')->references('id')->on('state_location');
            $table->string('service_name');
            $table->bigInteger('service_price');
            $table->text('service_description')->nullable();
            $table->string('service_banner')->nullable();
            $table->enum('service_status', ["active","not_active","pending"]);
            $table->timestamps();

        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
