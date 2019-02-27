<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Proyecto;
use App\AlertaProyecto;
use App\Alerta;

class LogSuccessfulLogin
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Login  $event
     * @return void
     */

    // Aca intento hacer algunas cosas para las Alertas , por ejemplo ver si algun proyecto
    // esta pronto a comenzar a pagar capital, se le termina el periodo de gracia digamos
    //
    public function handle(Login $event)
    {


        /*

        1ero: Necesito obtener todos los prestamos que esten efectivizados
        pero que no estén ni dados de baja, ni en judiciales, ni cancelados
        ni archivados

        2do:  obtener de las Alertas los días que le cargue a esa alerta
        codigo: amortizar
        estado: activa porque se la puede desactivar

        3ero: Saber cuando dias pasaron desde la Efectivizacion

        4to:  Sacar la cuenta y ver si corresponde cargar Proyectos_Alertas

        */


       /****
        1ero
        ***/

        $proyecto = Proyecto::whereHas('estado', function ($query) {
                $query->where('codigo', 'like', "%EFECTIVIZADO%");
            })
            ->where('fechaDesistido', null)
            ->where('fechaCancelado', null)
            ->where('fechaArchivado', null)
            ->where('fechaJudicial', null)
            ->get();


        /************************/

        /*** 2do ***/
        $alerta = Alerta::where('codigo','amortizacion')
                        ->where('estado', 'activada')
                        ->first();
        // 10 dias en este caso
        /*** fin 2do ****/

        $fecha2 = \Carbon\Carbon::now();

        foreach ($proyecto as $p)
        {
            $efectivizacion = \Carbon\Carbon::parse($p->fechaEfectivizacion)->format('Y-m-d');
            $gracia = $p->plazoGracia;

            $dt = \Carbon\Carbon::parse($p->fechaEfectivizacion);
            $fecha1 = $dt->addMonths($p->plazoGracia);
            $diasDiferencia = $fecha2->diffInDays($fecha1);

            /*
                Hasta acá tengola diferencia en DIAS entre hoy y la fecha de efectivizacion sumandole los meses de gracia
                Ahora solo me falta comprar entre este valor y el valor que está en la alerta
                Si este valor es igual o menor al de la alerta tiene que salir el mensaje
             */

            if($diasDiferencia <= $alerta->dias)
            {
                $ap = AlertaProyecto::where('proyecto_id', $p->id)
                                    ->where('alerta_id', $alerta->id)
                                    ->exists();

                if(!($ap))
                {
                    $alertaProyecto = new AlertaProyecto();
                    $alertaProyecto->proyecto_id = $p->id;
                    $alertaProyecto->alerta_id = $alerta->id;
                    $alertaProyecto->slug = str_slug($alerta->nombre) . '-' . rand(100,10000);
                    if(!($alertaProyecto->save())){
                        dd('No se pudo guardar');
                     //  Aca debería crear como un LOG para guardar este error sin mostrarlo
                    }else{
                       // dd('Se guardo la Alerta');
                    }
                }

            }

        }
        /**** HASTA ACA ALERTA DE QUE PRONTO COMIENZA A AMORTIZAR***/

        $alerta = Alerta::where('codigo','ingreso')
                        ->where('estado', 'activada')
                        ->first();

        if($alerta)
        {
            $sql = Proyecto::whereHas('estado', function ($query) {
                        $query->where('codigo', 'like', "%UEP%");
                    })
                    ->where('fechaIngreso', '<', \Carbon\Carbon::now()->subDays($alerta->dias))
                    ->get();
            if ($sql)
            {
                foreach ($sql as $s) {
                    $alertaProyecto = new AlertaProyecto();
                    $alertaProyecto->proyecto_id = $s->id;
                    $alertaProyecto->alerta_id = $alerta->id;
                    $alertaProyecto->slug = str_slug($alerta->nombre) . '-' . rand(100,10000);
                    if(!($alertaProyecto->save())){
                        dd('No se pudo guardar alerta de ingreso');
                     //  Aca debería crear como un LOG para guardar este error sin mostrarlo
                    }
                }
            }

        }
        /******* TERMINE LA ALERTA DE TANTOS DIAS DE UN PROYECTO EN ESTADO UEP ********/

        $alerta = Alerta::where('codigo','banco')
                        ->where('estado', 'activada')
                        ->first();

        if($alerta)
        {
            $sql = Proyecto::whereHas('estado', function ($query) {
                            $query->where('nombre', 'like', "%BANCO%");
                        })
                        ->where('fechaEnvioBanco', '<', \Carbon\Carbon::now()->subDays($alerta->dias))
                        ->get();

            if ($sql)
            {
                foreach ($sql as $s) {
                    $alertaProyecto = new AlertaProyecto();
                    $alertaProyecto->proyecto_id = $s->id;
                    $alertaProyecto->alerta_id = $alerta->id;
                    $alertaProyecto->slug = str_slug($alerta->nombre) . '-' . rand(100,10000);
                    if(!($alertaProyecto->save())){
                        dd('No se pudo guardar alerta de mucho tiempo un proyecto en el banco');
                     //  Aca debería crear como un LOG para guardar este error sin mostrarlo
                    }
                }
            }

        }
        /****** TERMINE LA ALERTAD E MUCHO TIEMPO EN BANCO **************/

        $alerta = Alerta::where('codigo','sujeto')
                        ->where('estado', 'activada')
                        ->first();

        if($alerta)
        {
            $sql = Proyecto::whereHas('estado', function ($query) {
                        $query->where('codigo', 'like', "%UEP%");
                    })
                    ->where('fechaRespuestaBanco', '<', \Carbon\Carbon::now()->subDays($alerta->dias))
                    ->get();

            if ($sql)
            {
                foreach ($sql as $s) {
                    $alertaProyecto = new AlertaProyecto();
                    $alertaProyecto->proyecto_id = $s->id;
                    $alertaProyecto->alerta_id = $alerta->id;
                    $alertaProyecto->slug = str_slug($alerta->nombre) . '-' . rand(100,10000);
                    if(!($alertaProyecto->save())){
                        dd('No se pudo guardar alerta de mucho tiempo un proyecto en el banco');
                     //  Aca debería crear como un LOG para guardar este error sin mostrarlo
                    }
                }
            }

        }
        /******** TERMINE ALERTA QUE NO SALE EL SUJETO DEL BANCO ***********/

        $alerta = Alerta::where('codigo','titular')
                        ->where('estado', 'activada')
                        ->first();

        if($alerta)
        {
            $sql = Proyecto::whereHas('estado', function ($query) {
                        $query->where('codigo', 'like', "%SOLICITANTE%");
                    })
                    ->where('fechaTitular', '<', \Carbon\Carbon::now()->subDays($alerta->dias))
                    ->get();

            if ($sql)
            {
                foreach ($sql as $s) {
                    $alertaProyecto = new AlertaProyecto();
                    $alertaProyecto->proyecto_id = $s->id;
                    $alertaProyecto->alerta_id = $alerta->id;
                    $alertaProyecto->slug = str_slug($alerta->nombre) . '-' . rand(100,10000);
                    if(!($alertaProyecto->save())){
                        dd('No se pudo guardar alerta de mucho tiempo en titular');
                     //  Aca debería crear como un LOG para guardar este error sin mostrarlo
                    }
                }
            }

        }
        /******** TERMINE ALERTA EN TITULAR***********/

        $alerta = Alerta::where('codigo','presupuesto')
                        ->where('estado', 'activada')
                        ->first();

        if($alerta)
        {
            $sql = Proyecto::where('fechaAprobadoUep', null)
                    ->where('fechaPresupuestos', '<', \Carbon\Carbon::now()->subDays($alerta->dias))
                    ->get();

            if ($sql)
            {
                foreach ($sql as $s) {
                    $alertaProyecto = new AlertaProyecto();
                    $alertaProyecto->proyecto_id = $s->id;
                    $alertaProyecto->alerta_id = $alerta->id;
                    $alertaProyecto->slug = str_slug($alerta->nombre) . '-' . rand(100,10000);
                    if(!($alertaProyecto->save())){
                        dd('No se pudo guardar alerta de presupuestos');
                     //  Aca debería crear como un LOG para guardar este error sin mostrarlo
                    }
                }
            }

        }
        /******** TERMINE ALERTA PRESUPUESTOS ***********/

        $alerta = Alerta::where('codigo','enviocfi')
                        ->where('estado', 'activada')
                        ->first();

        if($alerta)
        {
            $sql = Proyecto::where('fechaAprobadoCfi', null)
                    ->where('fechaArchivado', null)
                    ->where('fechaDesistido', null)
                    ->where('fechaBaja', null)
                    ->where('fechaEnviadoCfi', '<', \Carbon\Carbon::now()->subDays($alerta->dias))
                    ->get();

            if ($sql)
            {
                foreach ($sql as $s) {
                    $alertaProyecto = new AlertaProyecto();
                    $alertaProyecto->proyecto_id = $s->id;
                    $alertaProyecto->alerta_id = $alerta->id;
                    $alertaProyecto->slug = str_slug($alerta->nombre) . '-' . rand(100,10000);
                    if(!($alertaProyecto->save())){
                        dd('No se pudo guardar alerta de presupuestos');
                     //  Aca debería crear como un LOG para guardar este error sin mostrarlo
                    }
                }
            }

        }
        /******** TERMINE ALERTA ENVIO CFI ***********/


    }
}
