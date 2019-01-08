<?php

namespace App\Http\Controllers;
use App\Seguimiento;
use App\Proyecto;
use App\AnexoSeguimiento;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\SeguimientoRequest;

class SeguimientoController extends Controller
{

    protected $seguimiento;

    public function __construct()
    {
        $this->seguimiento = $this->getSeguimiento();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    


     public function search(Request $req)
    {
        //return response()->json($req->proyecto_id);

        $proyecto = Proyecto::find($req->proyecto_id);

        //return response()->json($proyecto);
        
        if (is_null($proyecto->fechaEfectivizacion))
          return response()->json(false);
        if (is_null($proyecto->fechaDesembolso))
          return response()->json(false);
        if (!(is_null($proyecto->fechaDesistido)))
          return response()->json(false);
        if (!(is_null($proyecto->fechaCancelado)))
          return response()->json(false);
        if (!(is_null($proyecto->fechaArchivado)))
          return response()->json(false);
        if($proyecto->estado->nombre != 'AMORTIZANDO')
          return response()->json(false);
        
        return response()->json(true);
        /* 
        $desembolso = Desembolso::where('id', $req->id)->first();
        return response()->json($desembolso);
        if ($dese->save())
        {
            return response()->json(true);
        }else{
            return response()->json(false);
        }

        */
    }


    public function index()
    {
       $seguimientos = Seguimiento::all();
       return view('seguimientos.index',
        [
            'seguimientos' => $seguimientos,
            'action'      => 'index'
        ]);
    }

   
    public function create()
    {
        $proyectos = Proyecto::all()->pluck('nombre_titular', 'id');
        return view('seguimientos.create', ['action' => 'create', 'proyectos' => $proyectos]);
    }

    public function create1($idProyecto)
    {
        $proyecto = Proyecto::select('id','nombre', 'fechaEfectivizacion', 'fechaArchivado', 'fechaCancelado','fechaDesembolso','fechaDesistido', 'estado_id')
                            ->whereId($idProyecto)
                            ->first();
         
        if (!(Seguimiento::evaluarSeguimiento($proyecto)))
        {
            Session::flash('message-danger', 'El proyecto no puede tener Seguimiento, Verifique');
            return back();
        }
        

        return view('seguimientos.create', ['action' => 'create1', 'proyectos' => $proyecto]);
       
    }

    public function store(SeguimientoRequest $seguimientoRequest)
    {
        $data = $seguimientoRequest->all();

        $data['user_id'] = Auth::user()->id;
        $proyecto = Proyecto::find($data['proyecto_id']);

        if (!(Seguimiento::evaluarSeguimiento($proyecto)))
        {
            Session::flash('message-danger', 'El proyecto no puede tener Seguimiento, Verifique');
            return redirect()->route('seguimiento.index')->with('message-danger', 'El proyecto no puede tener Seguimiento, Verifique.');
        }else
        {
            //dd($data);
            if(Seguimiento::create($data))
            {
                Session::flash('message-success', 'Seguimiento creado satisfactoriamente.');
            }else{
                Session::flash('message-danger', 'Error al intentar crear un Seguimiento');
            }
            return redirect()->route('seguimiento.index');
        }
    }

    
    public function show(seguimiento $seguimiento)
    {
        $anexos  = AnexoSeguimiento::where('seguimiento_id', $seguimiento->id)->get();
        return view('seguimiento.show', [
            'seguimiento'   => $seguimiento,
            'anexos'        => $anexos,
            'action'        => 'show'
        ]);
    }

    
    public function edit(seguimiento $seguimiento)
    {
        $anexos    = AnexoSeguimiento::where('seguimiento_id', $seguimiento->id)->get();
        $proyecto  = Proyecto::select('id', 'nombre')->whereId($seguimiento->proyecto_id)->first();

        //dd($proyecto);

        return view('seguimientos.edit', [
            'seguimiento'   => $seguimiento, 
            'action'        => 'edit',
            'proyecto'      => $proyecto,
            'anexos'        => $anexos

        ]);
    }

    
    public function update(SeguimientoRequest $seguimientoRequest, seguimiento $seguimiento)
    {
        $data = $seguimientoRequest->all();

        //dd($data);
        //
        //
        /**** pagina 3 **/
        if (!isset($data['problema_1']))
            $data['problema_1'] = 'off';

        if (!isset($data['problema_2']))
            $data['problema_2'] = 'off';

        if (!isset($data['problema_3']))
            $data['problema_3'] = 'off';

        if (!isset($data['problema_4']))
            $data['problema_4'] = 'off';

        if (!isset($data['problema_5'])){
            $data['problema_5'] = 'off';
        }

        if (!isset($data['problema_6']))
            $data['problema_6'] = 'off';

        if (!isset($data['problema_7']))
            $data['problema_7'] = 'off';


        /**** pagina 3 **/
        if (!isset($data['desvio_inv_problema_1']))
            $data['desvio_inv_problema_1'] = 'off';

        if (!isset($data['desvio_inv_problema_2']))
            $data['desvio_inv_problema_2'] = 'off';

        if (!isset($data['desvio_inv_problema_3']))
            $data['desvio_inv_problema_3'] = 'off';

        if (!isset($data['desvio_inv_problema_4']))
            $data['desvio_inv_problema_4'] = 'off';

        if (!isset($data['desvio_inv_problema_5']))
            $data['desvio_inv_problema_5'] = 'off';

        if (!isset($data['desvio_inv_problema_6']))
            $data['desvio_inv_problema_6'] = 'off';

        if (!isset($data['desvio_inv_problema_7']))
            $data['desvio_inv_problema_7'] = 'off';

        if (!isset($data['desvio_inv_problema_8']))
            $data['desvio_inv_problema_8'] = 'off';
        


        /**** pagina 4 **/
        if (!isset($data['pagina4_12_3_aumento_produccion']))
            $data['pagina4_12_3_aumento_produccion'] = 'off';

        if (!isset($data['pagina4_12_3_calidad_productos']))
            $data['pagina4_12_3_calidad_productos'] = 'off';

        if (!isset($data['pagina4_12_3_disminucion_costos']))
            $data['pagina4_12_3_disminucion_costos'] = 'off';

        if (!isset($data['pagina4_12_3_otros']))
            $data['pagina4_12_3_otros'] = 'off';
        
        /********** pagina 5 ************/


        if (!isset($data['p_admin_15_1']))
            $data['p_admin_15_1'] = 'off';

        if (!isset($data['p_mp_15_1']))
            $data['p_mp_15_1'] = 'off';

        if (!isset($data['p_disp_mo_15_1']))
            $data['p_disp_mo_15_1'] = 'off';

        if (!isset($data['p_calif_mo_15_1']))
            $data['p_calif_mo_15_1'] = 'off';

        if (!isset($data['p_proc_prod_15_1']))
            $data['p_proc_prod_15_1'] = 'off';

        if (!isset($data['p_comer_15_1']))
            $data['p_comer_15_1'] = 'off';

        if (!isset($data['p_finan_15_1']))
            $data['p_finan_15_1'] = 'off';

        if (!isset($data['p_serv_15_1']))
            $data['p_serv_15_1'] = 'off';

        if (!isset($data['p_cli_15_1']))
            $data['p_cli_15_1'] = 'off';

        if (!isset($data['p_otros_15_1']))
            $data['p_otros_15_1'] = 'off';



        if (!isset($data['ingresos_aumentaron_16']))
            $data['ingresos_aumentaron_16'] = 'off';

        if (!isset($data['ingresos_disminuyeron_16']))
            $data['ingresos_disminuyeron_16'] = 'off';

        if (!isset($data['ingresos_no_variaron_16']))
            $data['ingresos_no_variaron_16'] = 'off';




        if (!isset($data['precio_productos_si_no_16_1']))
            $data['precio_productos_si_no_16_1'] = 'off';

        if (!isset($data['volumen_vta_si_no_16_1']))
            $data['volumen_vta_si_no_16_1'] = 'off';

        if (!isset($data['gtos_comercializacion_si_no_16_1']))
            $data['gtos_comercializacion_si_no_16_1'] = 'off';

        if (!isset($data['nivel_prod_si_no_16_1']))
            $data['nivel_prod_si_no_16_1'] = 'off';

        if (!isset($data['otros_si_no_16_1']))
            $data['otros_si_no_16_1'] = 'off';


        if (!isset($data['p_a_ingresos_aumentaron_16_3']))
            $data['p_a_ingresos_aumentaron_16_3'] = 'off';

        if (!isset($data['p_a_ingresos_disminuyeron_16_3']))
            $data['p_a_ingresos_disminuyeron_16_3'] = 'off';

        if (!isset($data['p_a_ingresos_no_variaron_16_3']))
            $data['p_a_ingresos_no_variaron_16_3'] = 'off';



        $proyecto = Proyecto::find($data['proyecto_id']);
        if (!(Seguimiento::evaluarSeguimiento($proyecto)))
        {
            Session::flash('message-danger', 'El proyecto no puede tener Seguimiento, Verifique');
            return redirect()->route('seguimiento.index')->with('message-danger', 'El proyecto no puede tener Seguimiento, Verifique.');
        }else
        {
       
            if($seguimiento->fill($data)->update())
            {
                Session::flash('message-success', 'Línea de Crédito actualizada satisfactoriamente.');
            }else{
                Session::flash('message-danger', 'Error al intentar actualizar una Línea de Crédito');
            }
            return redirect()->route('seguimiento.index');
        }
    }


    public function deletefile($archivo)
    {
            $borrar = DB::table('derivaciones_archivos')->where('slug', '=', $archivo)->first();
            $duenio = $borrar->user_id;
            $logueado = Auth::user()->id;
            $usuario = Auth::user();
            $rol_usuario= $usuario->rol->rol;

            if (($duenio == $logueado) OR ($rol_usuario == 'supervisor' OR $rol_usuario == 'administrador')){
                  if(\File::exists(public_path("$borrar->archivo"))){

                      if (\File::delete(public_path("$borrar->archivo"))){
                        if( $borrar_registro = DB::table('derivaciones_archivos')->where('archivo', '=', $borrar->archivo)->delete()){
                            return back()->withSuccess('Archivo Borrado Correctamente!');
                            Session::flash('message', 'Archivo Borrado Correctamente');
                        }else{
                          Session::flash('message-danger', 'Se eliminó el archivo del disco pero hubo un inconveniente en borrar el registro correspondiente');
                        }
                      }else{
                          Session::flash('message-danger', 'Ocurrió un error al intentar eliminar el archivo');
                      }
                  }else{
                      Session::flash('message-danger', 'El archivo no Existe en el Disco');
                  }
            }else{
                  Session::flash('message-danger', 'Ud no puede borrar este archivo');
            }
    }


     public function destroy(seguimiento $seguimiento)
     {
        if($seguimiento->delete())
        {
            Session::flash('message-success', 'Seguimiento eliminado satisfactoriamente.');
        }else{
            Session::flash('message-danger', 'Error al intentar eliminar el Seguimiento');
        }
        return redirect()->route('seguimiento.index');
     }

     private function getSeguimiento()
    {
        return Seguimiento::all();
    }
}
