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
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->after('email'); // Add a 'role' column after 'email'
            $table->string('phone')->nullable()->after('role'); // Add a nullable 'phone' column after 'role'
            $table->string('address')->after('phone'); // Add a 'address' column after 'phone'
            $table->string('avatar')->after('address'); // Add a 'address' column after 'phone'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
