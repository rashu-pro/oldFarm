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
        Schema::create('products', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('stripe_id')->unique();
            $table->string('name');
            $table->string('unit_price');
            $table->string('excerpt')->nullable();
            $table->string('description')->nullable();
            $table->string('slug')->nullable();
            $table->string('image_url');
            $table->boolean('is_gallery')->nullable();
            $table->string('images')->nullable();
            $table->bigInteger('category_id')->nullable();
            $table->string('sku')->nullable();
            $table->string('stock_status')->nullable();
            $table->boolean('is_stocked')->nullable();
            $table->boolean('is_variation')->nullable();
            $table->boolean('is_active')->nullable();
            $table->boolean('is_sale')->nullable();
            $table->boolean('is_featured')->nullable();
            $table->timestamp('sale_price_start_date')->nullable();
            $table->timestamp('sale_price_end_date')->nullable();
            $table->timestamps();

            $table->index(['category_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
