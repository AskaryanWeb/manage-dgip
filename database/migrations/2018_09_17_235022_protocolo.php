<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Protocolo extends Migration
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
            $table->integer('proyecto_id');
            $table->timestamps();

            $table->foreign('proyecto_id')->references('id')->on('proyecto')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Scheme::dropIfExists('protocolo');
    }
}
