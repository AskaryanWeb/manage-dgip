<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Proyectos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function(Blueprint $table){

            $table->increments('id');
            $table->string('matricula')->unique();
            $table->string('estatus');
            $table->string('users_plaza',6);
            $table->foreign('users_plaza')->references('plaza')->on('users')->onDelete('cascade');
        });

        
        Schema::create('entregables_elegidos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipos_entregables_id')->unsigned();
            $table->integer('proyecto_id')->unsigned();
            $table->foreign('tipos_entregables_id')->references('id')->on('tipos_entregables');
            $table->foreign('proyecto_id')->references('id')->on('proyectos')->onDelete('cascade');
            $table->timestamps();
        });        

        Schema::create('observaciones', function(Blueprint $table){

            $table->increments('id');
            $table->integer('proyecto_id')->unsigned();
            $table->string('unidad_academica_clave');
            $table->text('observaciones');
            $table->foreign('proyecto_id')->references('id')->on('proyectos')->onDelete('cascade');
            $table->foreign('unidad_academica_clave')->references('clave')->on('unidad_academica');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyecto');
    }
}
