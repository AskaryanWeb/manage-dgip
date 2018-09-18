<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnidadAcademicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidad_academicas', function (Blueprint $table) {
            
            $table->string('clave_ua');
            $table->string('nombre');
            $table->string('nomb_encargado');
            $table->string('ubicacion');
            $table->string('password');
            $table->string('pat_encargado');
            $table->string('mat_encargado');
            $table->integer('admin_id');
            $table->timestamps();

            $table->foreign('admin_id')->references('id')->on('administrador')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unidad_academicas');
    }
}
