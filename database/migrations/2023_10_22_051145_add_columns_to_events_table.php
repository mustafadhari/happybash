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
        Schema::table('events', function (Blueprint $table) {
            if (!Schema::hasColumn('events', 'title')) {
                $table->string('title');
            }
            if (!Schema::hasColumn('events', 'description')) {
                $table->text('description');
            }
            if (!Schema::hasColumn('events', 'date')) {
                $table->date('date');
            }
            if (!Schema::hasColumn('events', 'location')) {
                $table->string('location');
            }
            if (!Schema::hasColumn('events', 'vendor_id')) {
                $table->foreignId('vendor_id')->constrained()->onDelete('cascade');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('events', function (Blueprint $table) {
            //
        });
    }
};
