<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Proyecto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Scheme::create('proyecto', function(Blueprint $table){

            $table->increments('id');
            $table->string('matricula');
            $table->string('estatus');
            $table->string('investigador_num_plaza');

            $table->foreign('investigador_num_plaza')->references('num_plaza')->on('investigador')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Scheme::deleteIfExists('proyecto');
    }
}
