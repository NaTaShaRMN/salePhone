<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('brand_id')->unsigned();
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('display_id')->unsigned();
            $table->integer('storage_id')->unsigned();
            $table->integer('operating_system_id')->unsigned();
            
            $table->text('description');
            $table->bigInteger('quantity')->nullable()->default(0);
            
            $table->foreign('display_id')->references('id')->on('displays')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('storage_id')->references('id')->on('storages')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('operating_system_id')->references('id')->on('operating_systems')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('products');
    }
}
