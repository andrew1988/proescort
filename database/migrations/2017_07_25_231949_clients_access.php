<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClientsAccess extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('clients_access',function($table){
        $table->increments('id');
        $table->integer('section_id')->unique()->unsigned();
        $table->integer('user_id')->unique()->unsigned();
        $table->timestamp('end_time');
        $table->timestamps();
        //--------------------foreign keys----------------------------------+
        $table->foreign('section_id')->references('id')->on('sections');
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
        Schema::dropIfExists('clients_access');
    }
}
