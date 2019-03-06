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
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function informeEstados()
    {
        $proyectos = Proyecto::prov()->get();

        $estado_aprobado_cfi = DB::Table('estados')->select('id')->where('codigo','APROBADOCFI')->first();
        $estado_uep =          DB::Table('estados')->select('id')->where('codigo','UEP')->first();
        $estado_cfi =          DB::Table('estados')->select('id')->where('codigo','CFI')->first();
        $estado_cancelado =    DB::Table('estados')->select('id')->where('codigo','CANCELADO')->first();
        $estado_archivado =    DB::Table('estados')->select('id')->where('codigo','ARCHIVADO')->first();
        $estado_judicial =     DB::Table('estados')->select('id')->where('codigo','JUDICIAL')->first();
        $estado_des =          DB::Table('estados')->select('id')->where('codigo','DESEMBOLSADO')->first();
        $estado_titular =      DB::Table('estados')->select('id')->where('codigo','SOLICITANTE')->first();
        $estado_bco =          DB::Table('estados')->select('id')->where('codigo','BANCO')->first();
        $estado_efec =         DB::Table('estados')->select('id')->where('codigo','EFECTIVIZADO')->first();
        $estado_amortizando =  DB::Table('estados')->select('id')->where('codigo','AMORTIZANDO')->first();

        $proyectos_aprobado_cfi = Proyecto::prov()->est($estado_aprobado_cfi->id)->count();
        $proyectos_en_uep =       Proyecto::prov()->est($estado_uep->id)->count();
        $proyectos_judicial =     Proyecto::prov()->est($estado_judicial->id)->count();
        $proyectos_cfi =          Proyecto::prov()->est($estado_cfi->id)->count();
        $proyectos_cancelado =    Proyecto::prov()->est($estado_cancelado->id)->count();
        $proyectos_archivado =    Proyecto::prov()->est($estado_archivado->id)->count();
        $proyectos_des =          Proyecto::prov()->est($estado_des->id)->count();
        $proyectos_titular =      Proyecto::prov()->est($estado_titular->id)->count();
        $proyectos_bco =          Proyecto::prov()->est($estado_bco->id)->count();
        $proyectos_efec =         Proyecto::prov()->est($estado_efec->id)->count();
        $proyectos_amortizando =  Proyecto::prov()->est($estado_amortizando->id)->count();

        //$endDate = $proyectos_efec['fecha_Efectivizado']->addYears(4);
        //$proyectos = Proyecto::prov()->all();

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
            'p_amortizando' => $proyectos_amortizando,
            'proyectos' => $proyectos

        ]);
    }


    public function informeLocalidades()
    {
        $localidades = Localidad::locProv()->get();
        $cant = Localidad::locProv()->count();

        return view('informes.localidades', [
           'localidades' => $localidades,
           'cant'        => $cant
        ]);

    }

    public function informeSectores()
    {
        $sectores = Sector::all();
        $cant = Sector::count();
        return view('informes.sectores', [
           'sectores' => $sectores,
           'cant'        => $cant

        ]);

    }

    public function informeDptos()
    {
        /*
        $users = DB::table('users')->select('name', 'email as user_email')->get();
        $users = DB::table('users')
                     ->select(DB::raw('count(*) as user_count, status'))
                     ->where('status', '<>', 1)
                     ->groupBy('status')
                     ->get();

        */
        $proyectos = DB::table('proyectos')->join('localidades', 'proyectos.localidad_id', '=', 'localidades.id')->join('departamentos', 'localidades.dpto_id', '=', 'departamentos.id')->where('dpto_id', 1)->count();

         /*
        $proyectos=DB::select('
        SELECT COUNT(*) FROM proyectos, localidades, departamentos
WHERE proyectos.`localidad_id` = localidades.`id`
AND localidades.`dpto_id` = departamentos.`id`
AND dpto_id = 1');

*/
        //echo $proyectos;
        //dd("parar");
        $dptos = Departamento::depProv()->get();
        //$proyectos = Proyecto::with('localidad')->where('dpto_id', 1)->get();

        $cant =  Departamento::depProv()->count();
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

        $estado_aprobado_cfi = DB::Table('estados')->select('id')->where('codigo','APROBADOCFI')->first();
        $estado_uep =          DB::Table('estados')->select('id')->where('codigo','UEP')->first();
        $estado_cfi =          DB::Table('estados')->select('id')->where('codigo','CFI')->first();
        $estado_cancelado =    DB::Table('estados')->select('id')->where('codigo','CANCELADO')->first();
        $estado_archivado =    DB::Table('estados')->select('id')->where('codigo','ARCHIVADO')->first();
        $estado_judicial =     DB::Table('estados')->select('id')->where('codigo','JUDICIAL')->first();
        $estado_des =          DB::Table('estados')->select('id')->where('codigo','DESEMBOLSADO')->first();
        $estado_titular =      DB::Table('estados')->select('id')->where('codigo','SOLICITANTE')->first();
        $estado_bco =          DB::Table('estados')->select('id')->where('codigo','BANCO')->first();
        $estado_efec =         DB::Table('estados')->select('id')->where('codigo','EFECTIVIZADO')->first();
        $estado_amortizando =  DB::Table('estados')->select('id')->where('codigo','AMORTIZANDO')->first();

        $proyectos_aprobado_cfi = Proyecto::prov()->est($estado_aprobado_cfi->id)->count();
        $proyectos_en_uep =       Proyecto::prov()->est($estado_uep->id)->count();
        $proyectos_judicial =     Proyecto::prov()->est($estado_judicial->id)->count();
        $proyectos_cfi =          Proyecto::prov()->est($estado_cfi->id)->count();
        $proyectos_cancelado =    Proyecto::prov()->est($estado_cancelado->id)->count();
        $proyectos_archivado =    Proyecto::prov()->est($estado_archivado->id)->count();
        $proyectos_des =          Proyecto::prov()->est($estado_des->id)->count();
        $proyectos_titular =      Proyecto::prov()->est($estado_titular->id)->count();
        $proyectos_bco =          Proyecto::prov()->est($estado_bco->id)->count();
        $proyectos_efec =         Proyecto::prov()->est($estado_efec->id)->count();
        $proyectos_efec_get =     Proyecto::prov()->est($estado_efec->id)->get();

        $proyectos = Proyecto::prov()->get();
        $configuracion = Configuracion::where('provincia_id', Auth::user()->provincia_id)->get();

        return view('adminlte::home', [
            'p_aprobado_cfi'    => $proyectos_aprobado_cfi,
            'p_en_uep'          => $proyectos_en_uep,
            'p_judicial'        => $proyectos_judicial,
            'p_cfi'             => $proyectos_cfi,
            'p_cancelado'       => $proyectos_cancelado,
            'p_archivado'       => $proyectos_archivado,
            'p_des'             => $proyectos_des,
            'p_titular'         => $proyectos_titular,
            'p_bco'             => $proyectos_bco,
            'alerta_proyectos'  =>$alerta_proyectos,
            'p_efec'            => $proyectos_efec,
            'configuracion'     => $configuracion,

        ]);
    }
}
