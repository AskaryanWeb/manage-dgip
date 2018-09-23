<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstanciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instancias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('datos_reg_gral_id')->unsigned();
            $table->string('nombre');
            $table->string('ciudad',45);
            $table->string('estado',20);
            $table->foreign('datos_reg_gral_id')->references('id')->on('datos_reg_gral')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instancias');
    }
}
