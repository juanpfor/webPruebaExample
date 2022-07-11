<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramaProyectadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programa_proyectados', function (Blueprint $table) {
            $table->integer('id_programas')->autoIncrement();

            $table->string('estado');
            $table->integer('numero_estudiantes')->length(9);
            $table->string('intencidad_horaria');
            $table->string('jornada');

            $table->integer('id_programa');
            $table->integer('id_colegio');

            $table->foreign('id_programa')->references('id_colegios')->on('colegios')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_colegio')->references('id_programas')->on('programas')->onUpdate('cascade')->onDelete('cascade');



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
        Schema::dropIfExists('programa_proyectados');
    }
}
