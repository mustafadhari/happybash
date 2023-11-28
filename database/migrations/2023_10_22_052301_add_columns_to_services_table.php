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
        Schema::table('services', function (Blueprint $table) {
            if (!Schema::hasColumn('services', 'name')) {
                $table->string('name');
            }

            if (!Schema::hasColumn('services', 'description')) {
                $table->text('description');
            }

            if (!Schema::hasColumn('services', 'price')) {
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
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn(['name', 'description', 'price']);
        });
    }
};
