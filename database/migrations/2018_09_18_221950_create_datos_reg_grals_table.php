<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosRegGralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_reg_grals', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('titulo');
            $table->date('inicio');
            $table->date('conclusion');
            $table->string('area_conocimiento');
            $table->char('tipo',1);
            $table->string('transferencia_patente');
            $table->string('ca_nombre');
            $table->string('ca_estatus');
            $table->string('ca_lgac');
            $table->string('rt_grado_acad');
            $table->string('rt_nombre_comp');
            $table->string('rt_centro_adsc');
            $table->string('rt_correo');
            $table->string('rt_tel_casa');
            $table->string('rt_tel_cel');
            $table->string('estu_tesista_nombre');
            $table->string('estu_tesis_nivel');
            $table->string('clave');
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
        Schema::dropIfExists('datos_reg_grals');
    }
}
