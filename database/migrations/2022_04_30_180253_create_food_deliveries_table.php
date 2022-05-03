<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_deliveries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_order_id')->constrained();
            $table->string('order_time');
            $table->string('estimated_delivery_time');
            $table->string('food_ready');
            $table->string('actual_delivery_time');
            $table->string('delivery_address');
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
        Schema::dropIfExists('food_deliveries');
    }
}
