<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('plaza',6);
            $table->string('unidad_academica_clave',6);
            $table->string('name');
            $table->string('paterno');
            $table->string('materno');
            $table->char('genero',1);
            $table->string('grado_academico');
            $table->string('area');
            $table->string('diciplina');
            $table->string('email')->unique();
            $table->string('telefono');
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->primary('plaza');
            $table->foreign('unidad_academica_clave')->references('clave')->on('unidad_academica');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
