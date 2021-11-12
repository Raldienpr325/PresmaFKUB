<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoting2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voting2s', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('usersid')->unsigned();
            $table->string('name');
            $table->bigInteger('dpmsid')->unsigned();
            $table->timestamps();
            
            $table->foreign('dpmsid')->references('id')->on('dpms')->onDelete('restrict');
            $table->foreign('usersid')->references('id')->on('users')->onDelete('cascade');
            $table->engine='InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voting2');
    }
}