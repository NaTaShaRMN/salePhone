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
            $table->integer('brand')->unsigned();
            $table->foreign('brand')->references('id')->on('brands')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('display')->unsigned();
            $table->integer('storage')->unsigned();
            $table->integer('operating_system')->unsigned();
            $table->integer('color')->unsigned();
            $table->text('description');
            $table->bigInteger('quantily')->nullable()->default(0);
            
            $table->foreign('display')->references('id')->on('displays')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('storage')->references('id')->on('storages')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('operating_system')->references('id')->on('operating_systems')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('color')->references('id')->on('colors')->onDelete('cascade')->onUpdate('cascade');
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
