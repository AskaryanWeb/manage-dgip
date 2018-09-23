<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Proyecto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Scheme::create('proyectos', function(Blueprint $table){

            $table->increments('id');
            $table->string('matricula');
            $table->string('estatus');
            $table->string('investigador_num_plaza');

            $table->foreign('investigador_num_plaza')->references('num_plaza')->on('investigador')->onDelete('cascade');


        });

        
        Schema::create('entregables_elegidos', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('tipos_entregables_id')->references('id')->on('tipos_entregables');
            $table->foreign('proyecto_id')->references('id')->on('proyectos')->onDelete('cascade');
            $table->timestamps();
        });        

        Scheme::create('observaciones', function(Blueprint $table){

            $table->increments('id');
            $table->integer('proyecto_id');
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
        Scheme::deleteIfExists('proyecto');
    }
}
