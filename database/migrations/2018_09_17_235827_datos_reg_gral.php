<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DatosRegGral extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_reg_gral', function(Blueprint $table){

            $table->increments('id');
            $table->string('titulo');
            $table->date('inicio');
            $table->date('conclusion');
            $table->string('transferencia_patente');
            $table->string('ca_estatus');//estatus del cuerpo academico (formacion. consolidacion, consolidado)
            $table->string('rt_grado_acad');//grado academico del responable tecnico
            $table->string('rt_nombre_comp');//nombre completo del responsable tecnico
            $table->string('rt_centro_adsc');//Nombre del centro adscripto 
            $table->string('rt_correo');
            $table->string('rt_tel_casa');
            $table->string('rt_tel_cel');
            $table->string('estu_tesista_nombre');
            $table->string('estu_tesis_nivel');
            $table->string('clave');
            $table->integer('proyecto_id')->unsigned();
            $table->integer('areas_conocimiento_id')->unsigned();
            $table->string('cuerpo_academico_clave',7);
            $table->integer('tipos_investigacion_id')->unsigned();
            $table->timestamps();

            $table->foreign('proyecto_id')->references('id')->on('proyectos')->onDelete('cascade');
            $table->foreign('cuerpo_academico_clave')->references('clave')->on('cuerpo_academico');
            $table->foreign('areas_conocimiento_id')->references('id')->on('areas_conocimiento');
            $table->foreign('tipos_investigacion_id')->references('id')->on('tipos_investigacion');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datos_reg_gral');
    }
}
