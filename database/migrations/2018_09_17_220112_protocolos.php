<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Protocolos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('protocolo', function(Blueprint $table){
            $table->increments('id');
            $table->text('resumen');
            $table->text('problematica');
            $table->text('objetivo_gral');
            $table->text('metodologia');
            $table->text('metas');
            $table->integer('proyecto_id')->unsigned();
            $table->timestamps();

            $table->foreign('proyecto_id')->references('id')->on('proyectos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('protocolo');
    }
}
