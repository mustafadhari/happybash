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
        Schema::dropIfExists('vendors');
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('business_name');
            $table->date('date_of_birth')->nullable();
            $table->string('primary_mobile_number');
            $table->string('whatsapp_number')->nullable();
            $table->string('email')->unique();
            $table->string('business_category');
            $table->string('city');
            $table->string('address');
            $table->string('languages');
            $table->string('profile_picture')->nullable();
            $table->string('referral_code')->nullable();
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendors');
    }
};
