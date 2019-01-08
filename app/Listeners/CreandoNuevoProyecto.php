<?php

namespace App\Listeners;

use App\Events\ProyectoCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreandoNuevoProyecto
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
     * @param  ProyectoCreated  $event
     * @return void
     */
    public function handle(ProyectoCreated $event)
    {
        dd('Creando un Proyecto Nuevo', $event->proyect);
    }
}
