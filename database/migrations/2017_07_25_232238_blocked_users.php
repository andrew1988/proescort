<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BlockedUsers extends Migration
{
    /**
     * Run the migrations.
     *this table manages blocked users
     * @return void
     */
    public function up()
    {
      Schema::create('blocked_users',function($table){
        $table->increments('id');
        $table->integer('blocking_id')->unique()->unsigned();
        $table->integer('blocked_id')->unique()->unsigned();
        $table->timestamps();
        //--------------------foreign keys----------------------------------
        $table->foreign('blocking_id')->references('id')->on('users');
        $table->foreign('blocked_id')->references('id')->on('users');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blocked_users');
    }
}
