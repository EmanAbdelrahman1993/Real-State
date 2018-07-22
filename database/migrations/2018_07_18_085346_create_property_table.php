<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            //$table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('areas_id');
            //$table->foreign('areas_id')->references('id')->on('areas')->onUpdate('cascade')->onDelete('cascade');
            $table->string('name');
            $table->string('price');
            $table->string('size');
            $table->text('description');
            $table->integer('rooms_no');
            $table->integer('floors_no');
            $table->integer('pathroom_no');
            $table->string('image');
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
        Schema::dropIfExists('property');
    }
}
