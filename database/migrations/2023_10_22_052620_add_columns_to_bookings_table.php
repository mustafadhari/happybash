<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bookings', function (Blueprint $table) {
            if (!Schema::hasColumn('bookings', 'user_id')) {
                $table->unsignedBigInteger('user_id');
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            }

            if (!Schema::hasColumn('bookings', 'event_id')) {
                $table->unsignedBigInteger('event_id');
                $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
            }

            if (!Schema::hasColumn('bookings', 'start_datetime')) {
                $table->dateTime('start_datetime');
            }

            if (!Schema::hasColumn('bookings', 'end_datetime')) {
                $table->dateTime('end_datetime');
            }

            if (!Schema::hasColumn('bookings', 'status')) {
                $table->string('status');
            }

            if (!Schema::hasColumn('bookings', 'price')) {
                $table->decimal('price', 8, 2);
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['event_id']);
            $table->dropColumn(['user_id', 'event_id', 'start_datetime', 'end_datetime', 'status', 'price']);
        });
    }
};
