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
        Schema::create('voting2', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('users_id')->unsigned();
            $table->bigInteger('dpm_id')->unsigned();
            $table->timestamps();
            
            $table->foreign('dpm_id')->references('id')->on('dpm')->onDelete('restrict');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
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