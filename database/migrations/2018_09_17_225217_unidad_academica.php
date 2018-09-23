<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UnidadAcademica extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Scheme::create('unidad_academica', function(Bluepirnt $table){
            
            $table->string('clave_ua',5);
            $table->string('nombre');
            $table->string('nomb_encargado');
            $table->string('calle');
            $table->string('colonia');
            $table->string('localidad');
            $table->string('cp',5);
            $table->string('telefono',10);            
            $table->string('password',8);
            $table->string('pat_encargado');
            $table->string('mat_encargado');
            $table->integer('administrador_id');
            $table->timestamps();

            $table->foreign('administrador_id')->references('id')->on('administrador')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Scheme::deleteIfExists('unidad_academica'); 
    }
}
