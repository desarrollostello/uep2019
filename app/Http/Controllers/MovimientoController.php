<?php

namespace App\Http\Controllers;
use App\Movimiento;
use App\Proyecto;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Requests\MovimientoRequest;
use Illuminate\Support\Facades\Auth;

class MovimientoController extends Controller
{

    protected $movimiento;

    public function __construct()
    {
        $this->movimiento = $this->getMovimiento();
    }

    public function index()
    {
        $movimientos = Movimiento::all();
        return view('movimientos.index',compact('movimientos'));
    }


    public function create()
    {
        $proyectos = Proyecto::get();
        return view('movimientos.create', compact('proyectos'));
    }


    public function store(MovimientoRequest $movimientoRequest)
    {
        $data = $movimientoRequest->all();
        // dd($data);
        $proyecto = Proyecto::where('id',$data['proyecto_id'])->first();

        $data['user_id'] = Auth::user()->id;
        if (Movimiento::create($data))
        {
            $proyecto['fechaUltimoMovimiento'] = \Carbon\Carbon::parse($data['fecha'])->format('Y-m-d');
            if ($proyecto->save())
            {
                Session::flash('message-success', 'Movimiento creado satisfactoriamente.');
                return redirect()->route('proyecto.edit', $proyecto);
            }else{
                Session::flash('message-danger', 'Se creo el movimiento pero no se actualizo la fecha de Último Movimiento del Proyecto');
                return redirect()->route('proyecto.edit', $proyecto);
            }
        }



    }
    public function store_index(MovimientoRequest $movimientoRequest)
    {
        $data = $movimientoRequest->all();
        $proyecto = Proyecto::where('id',$data['proyecto_id'])->first();
        $data['user_id'] = Auth::user()->id;
        Movimiento::create($data);
        return redirect()->route('proyecto.index');

    }


     public function show(movimiento $movimiento)
     {
         return view('movimientos.show', compact('movimiento'));
     }


     public function edit(movimiento $movimiento)
     {
          return view('movimientos.edit', ['movimiento' => $movimiento]);
     }


     public function update(MovimientoRequest $movimientoRequest)
     {
        $garantia->fill($movimentoRequest->all())->update();
        Session::flash('message', 'Movimiento actualizado satisfactoriamente.');
        return redirect()->route('movimiento.index');
     }


     public function destroy(Movimiento $movimiento)
     {
         $movimiento->delete();
         Session::flash('message-danger', 'Movimiento eliminado satisfactoriamente!');
         return redirect()->route('movimiento.index');
     }

    function removedata(Request $request)
    {
        $movimiento = Movimiento::find($request->input('id'));
        if($movimiento->delete())
        {
            Session::flash('message-success', 'Movimiento eliminada satisfactoriamente.');
        }else{
            Session::flash('message-danger', 'Error al intentar eliminar una Movimiento');
        }
        return back();
    }


    private function getMovimiento()
    {
        return Movimiento::all();
    }
}
