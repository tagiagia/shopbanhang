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
        Schema::create('product', function (Blueprint $table) {
            $table->Increments('product_id');
            $table->integer('category_id');
            $table->integer('brand_id');
            $table->String('product_name');
            $table->text('product_decs');
            $table->text('product_content');
            $table->String('product_price');
            $table->String('product_image');
            $table->String('product_size');
            $table->integer('product_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
