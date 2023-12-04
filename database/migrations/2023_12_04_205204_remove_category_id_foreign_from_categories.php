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
        Schema::table('categories', function (Blueprint $table) {
            // Drop the foreign key constraint
            $table->dropForeign('categories_category_id_foreign');

            // Now drop the column
            $table->dropColumn('category_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            // Add the column back
            $table->unsignedBigInteger('category_id')->nullable();

            // Recreate the foreign key constraint
            // $table->foreign('category_id')->references('id')->on('categories');
        });
    }
};
