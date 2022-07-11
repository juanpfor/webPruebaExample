<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColegiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colegios', function (Blueprint $table) {
            $table->integer('id_colegios')->autoIncrement();
            $table->string('nombre',45);
            $table->string('direccion',45);
            $table->string('telefono',45);
    //referencer foranias
            $table->integer('id_convenio');
            $table->integer('id_secretaria');

    //foranias de convenio y secretaria
            $table->foreign('id_convenio')->references('id_convenios')->on('convenios')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_secretaria')->references('id_secretarias')->on('secretarias')->onUpdate('cascade')->onDelete('cascade');


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
        Schema::dropIfExists('colegios');
    }
}
