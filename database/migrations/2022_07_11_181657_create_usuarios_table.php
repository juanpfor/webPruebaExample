<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->integer('id_usuario')->autoIncrement();
            $table->string('nombre',45);
            $table->string('cargo',45);
            $table->string('registro',45);

            //referencer foranea
            $table->integer('id_rol');
            //llamo foranea a mi referencer
            $table->foreign('id_rol')->references('id_rol')->on('rols')->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('usuarios');
    }
}
