<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosEntregablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_entregables', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('datos_entregable_id')->unsigned();
            $table->string('isbn');
            $table->string('titulo');
            $table->string('titulo_capitulo');
            $table->date('fecha_ed');
            $table->string('tiraje');
            $table->string('tipo_soporte');
            $table->integer('paginas');
            $table->string('nombre_congreso');
            $table->string('titulo_ponencia');
            $table->string('nombre_memoria');
            $table->string('editor_memoria');
            $table->string('sede_congreso');
            $table->string('alcance');
            $table->date('fecha_participacion');
            $table->string('tesista');
            $table->string('director_tesis');
            $table->string('revisores_tesis');
            $table->string('issn');
            $table->string('nombre_revista');
            $table->date('fecha_pub');
            $table->string('num_revista');
            $table->foreign('reporte_tecnico_id')->references('id')->on('reportes')->onDelete('cascade');
            $table->foreign('tipos_entregables_id')->references('id')->on('tipos_entregables')-onDelete('cascade');
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
        Schema::dropIfExists('datos_entregables');
    }
}
