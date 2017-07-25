<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PrivateMessages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('private_messages',function($table){
        $table->increments('id');
        $table->integer('receiver_id')->unique()->unsigned();
        $table->integer('sender_id')->unique()->unsigned();
        $table->text('message');
        $table->timestamps();
        //*******************************fk
        $table->foreign('receiver_id')->references('id')->on('users');
        $table->foreign('sender_id')->references('id')->on('users');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('private_messages');
    }
}
