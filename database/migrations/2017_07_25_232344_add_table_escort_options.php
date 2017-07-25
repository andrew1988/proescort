<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableEscortOptions extends Migration
{
    /**
     * Run the migrations.
     *escort options table : settings like turning off private messsaging and
     * other privacy settings for pictures and private info
     * @return void
     */
    public function up()
    {
      Schema::create('escort_options',function($table){
        $table->increments('id');
        $table->integer('user_id')->unique()->unsigned();
        $table->timestamps();
        //**************************fk
          $table->foreign('user_id')->references('id')->on('users');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('escort_options');
    }
}
