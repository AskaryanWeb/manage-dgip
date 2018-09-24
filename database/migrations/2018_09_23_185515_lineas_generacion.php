<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LineasGeneracion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lineas_generacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cuerpo_academico_clave',7);
            $table->string('nombre');
            $table->timestamps();
            $table->foreign('cuerpo_academico_clave')->references('clave')->on('cuerpo_academico')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lineas_generacion');
    }
}
