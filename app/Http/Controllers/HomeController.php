<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;
use App\Proyecto;
use App\AlertaProyecto;
use App\Alerta;
use App\Profile;
use App\Localidad;
use App\Configuracion;
use App\Departamento;
use App\Estado;
use App\Sector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Http\Request;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */

    public function informeEstados()
    {
        $proyectos = Proyecto::prov()->all();

        $estado_aprobado_cfi = Estado::where('nombre','APROBADO CFI')->first();
        $estado_uep =          Estado::where('nombre','UEP')->first();
        $estado_cfi =          Estado::where('nombre','CFI')->first();
        $estado_cancelado =    Estado::where('nombre','CANCELADO')->first();
        $estado_archivado =    Estado::where('nombre','ARCHIVADO')->first();
        $estado_judicial =     Estado::where('nombre','GESTION JUDICIAL')->first();
        $estado_des =          Estado::where('nombre','DESEMBOLSADO')->first();
        $estado_titular =      Estado::where('nombre','TITULAR')->first();
        $estado_bco =          Estado::where('nombre','BANCO')->first();
        $estado_efec =         Estado::where('nombre','EFECTIVIZADO')->first();

        $proyectos_aprobado_cfi = Proyecto::prov()->est($estado_aprobado_cfi['id'])->count();
        $proyectos_en_uep =       Proyecto::prov()->est($estado_uep['id'])->count();
        $proyectos_judicial =     Proyecto::prov()->est($estado_judicial['id'])->count();
        $proyectos_cfi =          Proyecto::prov()->est($estado_cfi['id'])->count();
        $proyectos_cancelado =    Proyecto::prov()->est($estado_cancelado['id'])->count();
        $proyectos_archivado =    Proyecto::prov()->est($estado_archivado['id'])->count();
        $proyectos_des =          Proyecto::prov()->est($estado_des['id'])->count();
        $proyectos_titular =      Proyecto::prov()->est($estado_titular['id'])->count();
        $proyectos_bco =          Proyecto::prov()->est($estado_bco['id'])->count();
        $proyectos_efec =         Proyecto::prov()->est($estado_efec['id'])->count();



        //$endDate = $proyectos_efec['fecha_Efectivizado']->addYears(4);

        $proyectos = Proyecto::prov()->all();

        return view('informes.primero', [
            'p_aprobado_cfi' => $proyectos_aprobado_cfi,
            'p_en_uep' => $proyectos_en_uep,
            'p_judicial' => $proyectos_judicial,
            'p_cfi' => $proyectos_cfi,
            'p_cancelado' => $proyectos_cancelado,
            'p_archivado' => $proyectos_archivado,
            'p_des' => $proyectos_des,
            'p_titular' => $proyectos_titular,
            'p_bco' => $proyectos_bco,
            'p_efec' => $proyectos_efec,
            'proyectos' => $proyectos

        ]);
    }


    public function informeLocalidades()
    {
        $localidades = Localidad::locProv()->all();
        $cant = Localidad::locProv()->count();


        foreach ($localidades as $key => $value) {
            //echo '$proyectos_' . str_slug($value->nombre);

        }

        return view('informes.localidades', [
           'localidades' => $localidades,
           'cant'        => $cant

        ]);

    }

    public function informeSectores()
    {
        $sectores = Sector::all();
        $cant = Sector::count();

        foreach ($sectores as $key => $value) {
            //echo '$proyectos_' . str_slug($value->nombre);

        }

        return view('informes.sectores', [
           'sectores' => $sectores,
           'cant'        => $cant

        ]);

    }

    public function informeDptos()
    {
        $dptos = Departamento::depProv()->all();
        $cant =  Departamento::devProv()->count();


        foreach ($departamentos as $key => $value) {
            //echo '$proyectos_' . str_slug($value->nombre);

        }

        return view('informes.departamentos', [
           'dptos' => $dptos,
           'cant'  => $cant

        ]);

    }


    public function index()
    {

        $perfil = Profile::where('user_id', Auth::user()->id)->count();
        //dd($perfil);
        if ($perfil == 0){
            Profile::create([
                'user_id' =>  Auth::user()->id,
                'apellido' => Auth::user()->name,
            ]);
        }

        $alerta_proyectos    = DB::select("SELECT ap.*, a.*, p.nombre AS nombreProyecto, p.id, p.slug as slugProyecto FROM alerta_proyecto ap, alertas a, proyectos p WHERE ap.alerta_id = a.id AND ap.proyecto_id = p.id");

        //dd($alerta_proyectos);

        $estado_aprobado_cfi = Estado::where('nombre','APROBADO CFI')->first();
        $estado_uep =          Estado::where('nombre','UEP')->first();
        $estado_cfi =          Estado::where('nombre','CFI')->first();
        $estado_cancelado =    Estado::where('nombre','CANCELADO')->first();
        $estado_archivado =    Estado::where('nombre','ARCHIVADO')->first();
        $estado_judicial =     Estado::where('nombre','GESTION JUDICIAL')->first();
        $estado_des =          Estado::where('nombre','DESEMBOLSADO')->first();
        $estado_titular =      Estado::where('nombre','TITULAR')->first();
        $estado_bco =          Estado::where('nombre','BANCO')->first();
        $estado_efec =         Estado::where('nombre','EFECTIVIZADO')->first();



        $proyectos_aprobado_cfi = Proyecto::prov()->est($estado_aprobado_cfi['id'])->count();
        $proyectos_en_uep =       Proyecto::prov()->est($estado_uep['id'])->count();
        $proyectos_judicial =     Proyecto::prov()->est($estado_judicial['id'])->count();
        $proyectos_cfi =          Proyecto::prov()->est($estado_cfi['id'])->count();
        $proyectos_cancelado =    Proyecto::prov()->est($estado_cancelado['id'])->count();
        $proyectos_archivado =    Proyecto::prov()->est($estado_archivado['id'])->count();
        $proyectos_des =          Proyecto::prov()->est($estado_des['id'])->count();
        $proyectos_titular =      Proyecto::prov()->est($estado_titular['id'])->count();
        $proyectos_bco =          Proyecto::prov()->est($estado_bco['id'])->count();
        $proyectos_efec =         Proyecto::prov()->est($estado_efec['id'])->count();
        $proyectos_efec_get =     Proyecto::prov()->est($estado_efec['id'])->get();


        foreach ($proyectos_efec_get as $key => $value) {
        //    echo "KEY: " . $value->fechaEfectivizacion . "<br>";
        }
    //    dd($proyectos_efec_get['0']->fechaEfectivizacion);

    //    dd("termine");


        $proyectos = Proyecto::prov()->get();
        $configuracion = Configuracion::where('provincia_id', Auth::user()->provincia_id)->get();

        return view('adminlte::home', [
            'p_aprobado_cfi' => $proyectos_aprobado_cfi,
            'p_en_uep' => $proyectos_en_uep,
            'p_judicial' => $proyectos_judicial,
            'p_cfi' => $proyectos_cfi,
            'p_cancelado' => $proyectos_cancelado,
            'p_archivado' => $proyectos_archivado,
            'p_des' => $proyectos_des,
            'p_titular' => $proyectos_titular,
            'p_bco' => $proyectos_bco,
            'alerta_proyectos' =>$alerta_proyectos,
            'p_efec' => $proyectos_efec,
            'configuracion' => $configuracion,

        ]);
    }
}
