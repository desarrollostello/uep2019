<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLineasCreditosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lineas_creditos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->text('descripcion');
            $table->integer('monto_maximo', 11);
            $table->integer('provincia_id')->unsigned();
            $table->tinyInteger('gracia_maximo', 4);
            $table->tinyInteger('amortizacion_maximo', 4);
            $table->tinyInteger('tasa');
            $table->string('slug')->unique();
            $table->timestamps();

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
        Schema::dropIfExists('lineas_creditos');
    }
}
