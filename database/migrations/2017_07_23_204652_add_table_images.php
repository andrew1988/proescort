<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('images',function($table){
        $table->increments('id');
        $table->integer('profile_id')->unsigned();
        $table->string('image');
        //-----------foreign keys0---------------
        $table->foreign('profile_id')->references('id')->on('profiles');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('images',function(Blueprint $table){
            $table->dropForeign('profile_id');
      });
      Schema::drop('images');
    }
}
