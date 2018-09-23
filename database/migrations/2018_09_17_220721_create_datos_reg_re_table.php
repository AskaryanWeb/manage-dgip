<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosRegResTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //datos_reg_re =  Datos de registro Recurso Externo
    //datos_reg_gral = Datos de registro Generales 
    public function up()
    {
        Schema::create('datos_reg_re', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('datos_reg_id')->unsigned();
            $table->string('nombre');
            $table->decimal('monto_efectivo',12,2);
            $table->decimal('monto_especie',12,2);
            $table->string('monto_desc');
            $table->decimal('monto_total',12,2);
            $table->string('clave');
            $table->foreign('proyecto_id')->references('id')->on('proyectos')->onDelete('cascade'); 
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
        Schema::dropIfExists('datos_reg_res');
    }
}
