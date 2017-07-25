<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableVideos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('videos',function($table){
        $table->increments('id');
        $table->integer('profile_id')->unsigned();
        $table->string('video');
        //-----------foreign keys0------
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
      Schema::table('videos',function(Blueprint $table){
            $table->dropForeign('profile_id');
      });

      Schema::drop('videos');
    }
}
