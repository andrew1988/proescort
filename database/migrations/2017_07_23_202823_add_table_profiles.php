<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableProfiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('profiles',function($table){
        $table->increments('id');
        $table->integer('user_id');
        $table->integer('country_id');
        $table->integer('countie_id');
        $table->string('city',255);
        $table->string('zodiac',255);
        $table->integer('height');
        $table->integer('weight');
        $table->string('constituion',255);
        //------------------foreign keys----------------------------------------
        $table->foreign('user_id')->references('id')->on('users'); //cascade also deletes user id profile deleted.
        $table->foreign('country_id')->references('id')->on('countries');
        $table->foreign('countie_id')->references('id')->on('counties');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('profiles',function(Blueprint $table){
            $table->dropForeign('user_id');
            $table->dropForeign('country_id');
            $table->dropForeign('countie_id');
      });

      Schema::drop('profiles');
    }
}
