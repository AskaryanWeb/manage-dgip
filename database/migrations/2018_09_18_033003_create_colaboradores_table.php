<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColaboradoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colaboradores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('datos_reg_gral_id')->unsigned();
            $table->string('grado_academico');
            $table->string('nombre');
            $table->string('paterno');
            $table->string('materno');
            $table->string('centro_adscripcion');
            $table->foreign('datos_reg_gral_id')->references('id')->on('datos_reg_gral')->onDelete('cascade');
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
        Schema::dropIfExists('colaboradores');
    }
}
