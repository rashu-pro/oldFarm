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
        Schema::create('price', function (Blueprint $table){
          $table->id();
          $table->string('stripe_id')->unique();
          $table->string('stripe_product');
          $table->decimal('unit_price', 8, 2);
          $table->string('recurring_interval');
          $table->tinyInteger('interval_count')->nullable();

          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('categories');
    }
};
