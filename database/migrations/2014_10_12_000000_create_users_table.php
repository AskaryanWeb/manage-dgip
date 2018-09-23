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
            $table->string('num_plaza',5);
            $table->string('nombre');
            $table->string('paterno');
            $table->string('materno');
            $table->char('genero',1);
            $table->string('grado_academico');
            $table->string('area');
            $table->string('diciplina');
            $table->string('correo');
            $table->string('telefono');
            $table->string('password');
            $table->string('ua_clave_ua');
            $table->timestamps();

            $table->foreign('unidad_academica_clave_ua')->references('clave_ua')->on('unidad_academica');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
