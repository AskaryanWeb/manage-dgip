<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntregablesElegidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entregables_elegidos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('entregables_elegidos_id')->unsigned();
            $table->foreign('tipos_entregables_id')->references('id')->on('tipos_entregables');
            $table->foreign('proyecto_id')->references('id')->on('proyecto')->onDelete('cascade');
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
        Schema::dropIfExists('entregables_elegidos');
    }
}
