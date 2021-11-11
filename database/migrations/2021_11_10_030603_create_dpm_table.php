<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDpmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dpms', function (Blueprint $table) {
            $table->id();
            $table->string('fotodpm',100);
            $table->string('angkatandpm',4);
            $table->string('namadpm', 20);
            $table->string('prodidpm', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dpm');
    }
}