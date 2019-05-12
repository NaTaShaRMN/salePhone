<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDertails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_dertails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('order')->unsigned();
            $table->foreign('order')->references('id')->on('orders')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('product')->unsigned();
            $table->foreign('product')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('priced');
            $table->bigInteger('quantity');
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
        Schema::dropIfExists('order_dertails');
    }
}
