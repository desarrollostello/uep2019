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
                $query->where('nombre', 'like', "%EFECTIVIZADO%");
            })
            ->where('fechaDesistido', null)
            ->where('fechaCancelado', null)
            ->where('fechaArchivado', null)
            ->where('fechaJudicial', null)
            ->get();

        
        /************************/

        /*** 2do ***/
        $alerta = Alerta::where('codigo','amortizar')
                        ->where('estado', 'activada')
                        ->first();
        // 10 dias en este caso
        /*** fin 2do ****/
        
        $fecha2 = \Carbon\Carbon::now();

        foreach ($proyecto as $p) {
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
                $alertaProyecto = new AlertaProyecto();
                $alertaProyecto->proyecto_id = $p->id;
                $alertaProyecto->alerta_id = $alerta->id;
                $alertaProyecto->slug = str_slug($alerta->nombre) . '-' . rand(5,100);
                $alertaProyecto->save();
            
            }

        }

    }
}
