<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeguimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguimientos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('proyecto_id')->unsigned()->nullable();
            $table->date('fechaSeguimiento')->nullable();
            $table->string('profesional_cfi',250)->nullable();
            $table->string('profesional_uep',250)->nullable();
            $table->integer('grado_morosidad')->nullable();
            $table->integer('nro_entrevista')->nullable();
            $table->string('evaluador_sectorial_cfi',250)->nullable();
            $table->string('localizacion',250)->nullable();
            $table->string('tipo_proyecto',250)->nullable();

            $table->string('beneficiario1',250)->nullable();
            $table->string('domicilio_beneficiario1',250)->nullable();
            $table->string('telefono_beneficiario1',250)->nullable();

            $table->string('beneficiario2',250)->nullable();
            $table->string('domicilio_beneficiario2',250)->nullable();
            $table->string('telefono_beneficiario2',250)->nullable();

            $table->string('beneficiario3',250)->nullable();
            $table->string('domicilio_beneficiario3',250)->nullable();
            $table->string('telefono_beneficiario3',250)->nullable();


            $table->integer('personal_permanente')->nullable();
            $table->integer('personal_temporario')->nullable();
            $table->integer('personal_a_incorporar')->nullable();

            $table->double('credito_cfi')->nullable();
            $table->double('credito_otros_bancos')->nullable();
            $table->double('aporte_propio')->nullable();
            $table->double('credito_proveedores')->nullable();
            $table->double('inv_preinversion')->nullable();
            $table->double('inv_activo_fijo')->nullable();
            $table->double('inv_ct')->nullable();
            $table->double('prefinanciacion')->nullable();
            $table->text('detalle_inversiones')->nullable();


            $table->text('plazos_frecuencias_vigentes')->nullable();

            $table->integer('cant_cuotas')->nullable();
            $table->string('frecuencia_amortizacion',20)->nullable();
            $table->string('frecuencia_gracia',20)->nullable();

            $table->string('empresa_activa_inactiva_parcial',15)->nullable();

            $table->string('cambio_nomina',3)->nullable();



            // los 2 siguientes campos dependen de que se responda que si en el campo anterior
            $table->string('cambio_afectan_empresa',3)->nullable();
            $table->text('cambio_afectan_empresa_medida',3)->nullable();

            // Especificar los cambios, también depende de que se responda que si en cambio_nomina
            // Esto es para cuando hay cambios de los titulares de una emrpesa por ejemplo
            $table->string('especificar_nombre1',250)->nullable();
            $table->string('especificar_domicilio_telefono1',250)->nullable();

            $table->string('especificar_nombre2',250)->nullable();
            $table->string('especificar_domicilio_telefono2',250)->nullable();

            $table->string('especificar_nombre3',250)->nullable();
            $table->string('especificar_domicilio_telefono3',250)->nullable();

            $table->string('especificar_nombre4',250)->nullable();
            $table->string('especificar_domicilio_telefono4',250)->nullable();


            $table->string('cambios_localizacion',3)->nullable();
            $table->text('cambios_localizacion_causas')->nullable();

            $table->string('nueva_localizacion_domicilio',250)->nullable();
            $table->string('nueva_localizacion_localidad',250)->nullable();
            $table->string('nueva_localizacion_telefono',100)->nullable();
            $table->string('nueva_localizacion_cp',10)->nullable();
            $table->string('nueva_localizacion_provincia',100)->nullable();


            // Punto 10
            $table->string('puesta_en_marcha_nuevo_ampliacion',1)->nullable();
            
            // En este  campo hacer un combo con SI / NO / PARCIAL
            $table->string('puesta_en_marcha_si_no_parcial',9)->nullable();

            

            // problemas de porque no se puso en marcha
            $table->string('problema_1',3)->nullable();
            $table->string('problema_2',3)->nullable();
            $table->string('problema_3',3)->nullable();
            $table->string('problema_4',3)->nullable();
            $table->string('problema_5',3)->nullable();
            $table->string('problema_6',3)->nullable();
            $table->string('problema_7',3)->nullable();

            // Punto 10.2 Describir Razones consignadas
            $table->text('razones_10_2',3)->nullable();
            
            // 11 Inversiones Realizadas son las Previstas en el proyecto
            // En este  campo hacer un combo con SI / NO / PARCIAL
            $table->string('inv_previstas_si_no',9)->nullable();

            // Si se elije PARCIAL hay que poner el porcentaje de Desvio, al igual que si se elije NO
            $table->string('inv_previstas_desvios',20)->nullable();

            // 11.1 Razones del Desvio de las Inversiones
            $table->string('desvio_inv_problema_1',3)->nullable();
            $table->string('desvio_inv_problema_2',3)->nullable();
            $table->string('desvio_inv_problema_3',3)->nullable();
            $table->string('desvio_inv_problema_4',3)->nullable();
            $table->string('desvio_inv_problema_5',3)->nullable();
            $table->string('desvio_inv_problema_6',3)->nullable();
            $table->string('desvio_inv_problema_7',3)->nullable();
            $table->string('desvio_inv_problema_8',3)->nullable();

            //11.2 Descripción de las Razones Consignadas
            $table->text('razones_11_2',3)->nullable();

            //11.3 Las inversiones se han podido verificar
            // En este  campo hacer un combo con SI / NO / PARCIAL
            $table->string('inv_verificacion_si_no',9)->nullable();
            $table->string('forma_de_verificacion',250)->nullable();

            //11.4 Las inversiones realizadas con el credito son las proyectas
            // En este  campo hacer un combo con SI / NO / PARCIAL
            $table->string('inv_proyectadas_si_no',9)->nullable();

            //11.5 Razones
            $table->text('razones_11_5')->nullable();

            //12 Se han registrado nuevas inversiones
            // En este  campo hacer un combo con SI / NO
            $table->string('nuevas_inv_si_no',2)->nullable();
            $table->double('monto_aprox_nuevas_inversiones')->nullable();

            //12.1 Si responde que si y pone el monto tenemos que describir cuales son
            $table->text('d_nuevas_inv_12_1')->nullable();

            //12.2 Las nuevas inversiones fueron verificadas
            // En este  campo hacer un combo con SI / NO
            $table->string('nuevas_inv_verificacion_si_no',2)->nullable();
            $table->string('forma_verificacion_nuevas_inv',250)->nullable();
            

            //12 3 Incidencia de las nuevas inversiones en la empresa
            $table->string('pagina4_12_3_aumento_produccion',3)->nullable();
            $table->string('pagina4_12_3_calidad_productos',3)->nullable();
            $table->string('pagina4_12_3_disminucion_costos',3)->nullable();
            $table->string('pagina4_12_3_otros',3)->nullable();

            //13. Se han observado cambios significativos en los costos totales??
            
            //Materia Prima SI NO, PORCENTAJE y Razones
            $table->string('m_p_si_no_13',2)->nullable();
            $table->string('m_p_porcentaje_13',10)->nullable();
            $table->string('m_p_razones_13',100)->nullable();


            //Insunos SI NO, PORCENTAJE y Razones
            $table->string('insumos_si_no_13',2)->nullable();
            $table->string('insumos_porcentaje_13',10)->nullable();
            $table->string('insumos_razones_13',100)->nullable();


            //Mano de OBRA SI NO, PORCENTAJE y Razones
            $table->string('mano_obra_si_no_13',2)->nullable();
            $table->string('mano_obra_porcentaje_13',10)->nullable();
            $table->string('mano_obra_razones_13',100)->nullable();

            //Otros SI NO, PORCENTAJE y Razones
            $table->string('otros_si_no_13',2)->nullable();
            $table->string('otros_porcentaje_13',10)->nullable();
            $table->string('otros_razones_13',100)->nullable();

            //14. Mano de Obra empleada
            $table->integer('mo_antes_del_credito')->nullable();
            $table->integer('mo_con_el_credito')->nullable();

            $table->integer('mo_permanente')->nullable();
            $table->integer('mo_temporaria')->nullable();

            //14 Aclaraciones
            $table->text('mo_aclaraciones_14')->nullable();

            //15 La empresa tiene problema para su funcionamiento
            $table->string('p_f_si_no',2)->nullable();

            //15.1. Cuales
            //'p_admin_15_1',
    
            $table->string('p_mp_15_1',2)->nullable();
            $table->string('p_mp_15_1',2)->nullable();
            $table->string('p_disp_mo_15_1',2)->nullable();
            $table->string('p_calif_mo_15_1',2)->nullable();
            $table->string('p_proc_prod_15_1',2)->nullable();
            $table->string('p_comer_15_1',2)->nullable();
            $table->string('p_finan_15_1',2)->nullable();
            $table->string('p_serv_15_1',2)->nullable();
           
            $table->string('p_cli_15_1',2)->nullable();
            $table->string('p_otros_15_1',2)->nullable();
            
            //15.2 Descripcion Problema y posibles soluciones
            $table->text('descripcion_problmeas_15_2')->nullable();

            //16 Evolucion de los Ingresos
            $table->string('ingresos_aumentaron_16',2)->nullable();
            $table->string('ingresos_disminuyeron_16',2)->nullable();
            $table->string('ingresos_no_variaron_16',2)->nullable();
            $table->string('ingresos_proporcion_16',20)->nullable();

            //16.1 RAZONES
            
            //Precio de los Productos
            $table->string('precio_productos_si_no_16_1',2)->nullable();
            $table->string('p_prod_variacion_16_1',20)->nullable();

            //Volúmen de Ventas
            $table->string('volumen_vta_si_no_16_1',2)->nullable();
            $table->string('volumen_vta_variacion_16_1',20)->nullable();

            //Gtos Comercialización
            $table->string('gtos_comercializacion_si_no_16_1',2)->nullable();
            $table->string('gtos_comercializacion_variacion_16_1',20)->nullable();

            //Niveles de Produccion
            $table->string('nivel_prod_si_no_16_1',2)->nullable();
            $table->string('nivel_prod_variacion_16_1',20)->nullable();

            //OTROS
            $table->string('otros_si_no_16_1',2)->nullable();
            $table->string('otros_variacion_16_1',20)->nullable();

            //16.2. Observaciones
            $table->text('observaciones_16_2')->nullable();

            //16.3 Evolución ingresos con respecto al mes o periodo anterior. En caso de que la empresa sea estacional
            $table->string('p_a_ingresos_aumentaron_16_3',2)->nullable();
            $table->string('p_a_ingresos_disminuyeron_16_3',2)->nullable();
            $table->string('p_a_ingresos_no_variaron_16_3',2)->nullable();
            $table->string('p_a_ingresos_proporcion_16_3',20)->nullable();

            // 16.4. Porque?
            $table->text('periodo_anterior_ingresos_porque_16_4')->nullable();

            //17 Perspectiva Futuro
            // Hacer un combo con Mejor, Algo Mejor, Igual, Algo Peor, Peor
            $table->string('perspectiva_futuro_17',15)->nullable();
            $table->text('perspectiva_futuro_porque_17')->nullable();



            // 18. La empresa tiene problemas para el pago del Credito con el CFI
            // Si dice que SI estos son problemas Actuales o a Futuro
            // Hacer un combo con SI / NO
            $table->string('problemas_pago_credito_18',2)->nullable();

            // Hacer un combo con las opciones ACTUALES y FUTURO y que aparezca cuando eligen SI que tienen
            // problemas para el pago del crdito
            $table->string('problemas_pago_si_actuales_futuros_18',20)->nullable();

            $table->text('problmeas_pago_razones_18')->nullable();


            //19 Los problemas planteados en la ENTREVISTA anterior han sido solucionados?
            // COMBO SI / NO
            $table->string('problemas_entrevista_anterior_19',2)->nullable();

            // Si es SI tienen que responder a la pregunta COMO ???
            $table->string('problemas_entrevista_anterior_como_19',250)->nullable();

            $table->text('entrevista_anterior_razones_19_1')->nullable();

            // 20. Asistencia Tecnica
            // COMBO SI / NO
            $table->string('asistencia_financiera_20',2)->nullable();

            //Si responde SI compleatar esto
            //Combo con los siguientes valroes
            //1. Técnicos - Productivos
            //2. Gestión Admin-Financiera
            //3. Mercado y Comercialización
            $table->string('asistencia_financiera_en_que_20',50)->nullable();
            $table->text('asistencia_financiera_ampliacion_20_1')->nullable();            




            // 20_2. Ha recibido Anteriormente capacitacion
            // COMBO SI / NO
            $table->string('anteriormente_capacitacion_20_2',2)->nullable();

            //Si responde SI compleatar esto
            $table->text('anteriormente_capac_tipo_cargo_20_2')->nullable();


             // 20_3. El empresario esta interesado en recibir capacitación
            // COMBO SI / NO / NO SABE
            $table->string('recibir_capacitacion_20_3',10)->nullable();

            //Si responde en que temas
            $table->text('en_que_temas_20_3')->nullable();


            // 21 Importancia de la Actividad, combo con
            // a. Unica
            // b. Principal
            // c. Secundaria
            $table->string('importancia_actividad_21',20)->nullable();

            // 21.1 Perspectiva para que se convierta en Actividad Ppal si no la es
            // COMBO con SI / NO
            $table->string('actividad_ppal_perspectiva_21_1',2)->nullable();

            //21.2 Observaciones
            $table->text('observaciones_21_2')->nullable();

            //22 Opinion del Responsable 
            $table->text('opinion_responsable_22')->nullable();


            $table->string('slug')->unique();
            $table->timestamps();

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
        Schema::dropIfExists('seguimientos');
    }
}
