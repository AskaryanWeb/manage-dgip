<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Financiamiento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('financiamiento', function(Blueprint $table){
            $table->increments('id');
            $table->integer('administrador_id')->unsigned();
            $table->string('nombre');
            $table->boolean('activado');            
            $table->timestamps();
            $table->foreign('administrador_id')->references('id')->on('administrador');
            

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('financiamiento');
    }
}
