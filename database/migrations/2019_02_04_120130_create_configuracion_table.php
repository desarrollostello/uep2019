<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfiguracionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuracion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('titulo',250)->nullable(); // titulo del Sistema
            $table->string('domicilio',250)->nullable(); // domicilio de la unidad
            $table->string('telefono',250)->nullable(); // Teléfono de la Unidad
            $table->integer('usuarioAdministrador_id')->unsigned();
            $table->integer('provincia_id')->unsigned();
            $table->string('logo',250)->nullable(); // Logo de la provincia
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('usuarioAdministrador_id')->references('id')->on('users');
            $table->foreign('provincia_id')->references('id')->on('provincias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('configuracion');
    }
}
