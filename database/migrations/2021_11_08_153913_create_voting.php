<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votings', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('usersid')->unsigned();
            $table->string('user-name');
            $table->string('user-NIM');
            $table->string('google_id');
            $table->string('presma-name');
            $table->bigInteger('presmasid')->unsigned();
            $table->timestamps();
            $table->foreign('presmasid')->references('id')->on('presmas')->onDelete('restrict');
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
        Schema::dropIfExists('voting');
    }
}