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
        Schema::table('bookings', function (Blueprint $table) {
            // Add 'start_datetime' and 'end_datetime' columns
            $table->dateTime('start_datetime');
            $table->dateTime('end_datetime');
        });
    }

    public function down()
    {
        Schema::table('bookings', function (Blueprint $table) {
            // Remove 'start_datetime' and 'end_datetime' columns
            $table->dropColumn('start_datetime');
            $table->dropColumn('end_datetime');
        });
    }
};
