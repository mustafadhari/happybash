<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('vendors', function (Blueprint $table) {
            // Add a foreign key 'user_id' column
            $table->foreignId('user_id')->constrained('users');

            // Add a 'national_id_card' column with a unique constraint
            $table->string('national_id_card')->unique();
        });
    }

    public function down()
    {
        Schema::table('vendors', function (Blueprint $table) {
            // Drop the foreign key constraint
            $table->dropForeign(['user_id']);
            
            // Remove the 'user_id' and 'national_id_card' columns
            $table->dropColumn('user_id');
            $table->dropColumn('national_id_card');
        });
    }
};
