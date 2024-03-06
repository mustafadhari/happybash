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
            // Convert text columns to JSON
            $table->json('included_items')->nullable()->change();
            $table->json('not_included_items')->nullable()->change();
            $table->json('additional_information')->nullable()->change();
            $table->json('terms_conditions')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            // Convert JSON columns back to text
            $table->text('included_items')->nullable()->change();
            $table->text('not_included_items')->nullable()->change();
            $table->text('additional_information')->nullable()->change();
            $table->text('terms_conditions')->nullable()->change();
        });
    }
};
