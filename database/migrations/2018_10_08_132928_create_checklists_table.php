<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChecklistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checklists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nota_oficial',3)->default('off');
            $table->string('nota_oficial_c',250);
            $table->string('solicitud_financiamiento',3)->default('off');
            $table->string('solicitud_financiamiento_c',250);
            $table->string('fotocopia_dni',3)->default('off');
            $table->string('fotocopia_dni_c',250);
            $table->string('certificado_domicilio',3)->default('off');
            $table->string('certificado_domicilio_c',250);
            $table->string('inscripcion_afip_rentas',3)->default('off');
            $table->string('inscripcion_afip_rentas_c',250);
            $table->string('estado_civil',3)->default('off');
            $table->string('estado_civil_c',250);
            $table->string('ddjj',3)->default('off');
            $table->string('ddjj_c',250);
            $table->string('nota_banco',3)->default('off');
            $table->string('nota_banco_c',250);
            $table->string('respuesta_banco',3)->default('off');
            $table->string('respuesta_banco_c',250);
            $table->string('titulo_propiedad_inmuebles',3)->default('off');
            $table->string('titulo_propiedad_inmuebles_c',250);
            $table->string('habilitaciones',3)->default('off');
            $table->string('habilitaciones_c',250);
            $table->string('titulo_propiedad_muebles',3)->default('off');
            $table->string('titulo_propiedad_muebles_c',250);
            $table->string('proformas',3)->default('off');
            $table->string('proformas_c',250);
            $table->string('guia_proyecto',3)->default('off');
            $table->string('guia_proyecto_c',250);
            $table->string('estadisticas',3)->default('off');
            $table->string('estadisticas_c',250);
            $table->string('promeva',3)->default('off');
            $table->string('promeva_c',250);
            $table->string('informe_uep',3)->default('off');
            $table->string('informe_uep_c',250);
            $table->integer('user_id')->unsigned();
            $table->integer('proyecto_id')->unsigned();
            $table->string('slug')->unique();

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('proyecto_id')->references('id')->on('proyectos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checklists');
    }
}
