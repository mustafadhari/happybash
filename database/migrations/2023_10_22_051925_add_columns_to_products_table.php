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
        Schema::table('products', function (Blueprint $table) {
            if (!Schema::hasColumn('products', 'name')) {
                $table->string('name')->after('id');
            }

            if (!Schema::hasColumn('products', 'description')) {
                $table->text('description')->after('name');
            }

            if (!Schema::hasColumn('products', 'price')) {
                $table->decimal('price', 8, 2)->after('description');
            }

            if (!Schema::hasColumn('products', 'available_quantity')) {
                $table->integer('available_quantity')->after('price');
            }

            if (!Schema::hasColumn('products', 'subcategory_id')) {
                $table->unsignedBigInteger('subcategory_id')->after('available_quantity');
                $table->foreign('subcategory_id')->references('id')->on('subcategories')->onDelete('cascade');
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
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['subcategory_id']);
            $table->dropColumn(['name', 'description', 'price', 'available_quantity', 'subcategory_id']);
        });
    }
};
