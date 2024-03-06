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
        Schema::table('products', function (Blueprint $table) {
            $table->decimal('rating', 8, 2)->nullable();
            $table->integer('times_booked')->default(0);
            $table->text('included_items')->nullable();
            $table->text('not_included_items')->nullable();
            $table->text('additional_information')->nullable();
            $table->text('terms_conditions')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn([
                'rating',
                'times_booked',
                'included_items',
                'not_included_items',
                'additional_information',
                'terms_conditions'
            ]);
        });
    }
};
