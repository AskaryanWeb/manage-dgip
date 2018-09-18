<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObservacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('observaciones', function (Blueprint $table) {
         
            $table->increments('id');
            $table->integer('proyecto_id');
            $table->text('observaciones');
            $table->string('ua_clave_ua');
            
            $table->foreign('proyecto_id')->references('id')->on('proyecto')->onDelete('cascade');
            $table->foreign('ua_clave_ua')->references('clave_ua')->on('unidad_academica')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('observaciones');
    }
}
