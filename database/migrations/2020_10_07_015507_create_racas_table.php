<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRacasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('racas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('especies_id');
            $table->string('nome');
            $table->timestamps();

            $table->foreign('especies_id')->references('id')->on('especies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('racas');
    }
}
