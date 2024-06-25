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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('National_code', 20)->index();
            $table->boolean('is_active')->default(false);
            $table->timestamp('phone_verified_at')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('phone',30)->unique();
            $table->string('name',191)->nullable();
            $table->string('last_name',191)->nullable();
            $table->string('user_photo')->default('/user/profile/defualt.jpg');
            $table->text('address')->nullable();
            $table->string('password')->default(bcrypt(random_int(53343434,64543535)));
            $table->bigInteger('ballance')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
