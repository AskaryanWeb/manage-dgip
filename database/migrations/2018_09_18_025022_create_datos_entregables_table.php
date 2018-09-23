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
            $table->increments('reporte_id')->unsigned();
            $table->integer('tipo_entregable_id')->unsigned();
            $table->string('isbn')->unique();
            $table->string('titulo');
            $table->string('titulo_capitulo');
            $table->date('fecha_ed');//Fecha de edicion
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
            $table->string('issn')->unique();
            $table->string('nombre_revista');
            $table->date('fecha_pub');//fecha de publicacion
            $table->string('num_revista');
            $table->foreign('reporte_id')->references('id')->on('reportes')->onDelete('cascade');
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
