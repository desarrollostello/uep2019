<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Proyecto;
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

        $alerta = Alerta::where('codigo','amortizar')
                        ->where('estado', 'activada')
                        ->first();
       // dd($alerta);
        $date = \Carbon\Carbon::now();



       // $primerAmortizacion = date("Y-m-d", strtotime("$fecha + $plazo months"));


        $dias = $date->subDays($alerta->dias);


        $sql = Proyecto::whereHas('estado', function ($query) {
                $query->where('nombre', 'like', "%EFECTIVIZADO%");
            })
            ->where('fechaEfectivizacion', '<', \Carbon\Carbon::parse($dias)->format('Y-m-d'))
            ->get();
            
        
        foreach ($sql as $key => $value) {
            echo $value->plazoGracia . "<br />";
        }
       // dd('llegue');
       // dd($proyectos);
       // dd($event->user);
    }
}
