<?php

namespace App\Http\Controllers;
use App\Configuracion;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Requests\ConfiguracionRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class FiguraLegalController extends Controller
{

    public function index()
    {
        //return view('figuralegal.index', ['figuralegal' => $this->figuralegal]);
        $configuracion = Configuracion::all();
        return view('configuraciones.index',compact('configuracion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('configuraciones.create');
    }


    public function store(ConfiguracionRequest $configuracionRequest)
    {
        if(Configuracion::create($configuracionRequest->all()))
        {
            if ($configuracionRequest->hasfile('filename'))
            {
                foreach ($configuracionRequest->file('filename') as $key => $value)
                {
                    $imageName = $value->getClientOriginalName() . '-' . rand(5,200);
                    $value->move(public_path('upload/configuracion/'), $imageName);
                    $data['file'] = "upload/configuracion/" . $imageName;
                }

            }
            Session::flash('message-success', 'Configuracion creada satisfactoriamente.');
        }else{
            Session::flash('message-danger', 'Error al intentar crear una Configuración');
        }
        return redirect()->route('configuracion.show', [
            'id' => $configuracionRequest->id,
        ]);

    }


     public function show($id)
     {
        $configuracion = Configuracion::findOrFail($id)->get();
        return view('configuraciones.show', [
            'configuracion' => $configuracion,
        ]);
     }


     public function edit(figuralegal $figuralegal)
     {
        return view('configuraciones.edit', ['configuracion' => $configuracion]);
     }

     public function update(ConfiguracionRequest $configuracionRequest, Configuracion $configuracion)
     {
        $user = Auth::user();
        if (Gate::forUser($user)->allows('update-configuracion', $configuracion))
        {
            if($configuracion->fill($configuracionRequest->all())->update())
            {
                if ($configuracionRequest->hasfile('filename'))
                {
                    foreach ($configuracionRequest->file('filename') as $key => $value)
                    {
                        $imageName = $value->getClientOriginalName() . '-' . rand(5,200);
                        $value->move(public_path('upload/configuracion/'), $imageName);
                        $data['file'] = "upload/configuracion/" . $imageName;
                    }

                }
                Session::flash('message-success', 'Configuracion actualizada satisfactoriamente.');
            }else{
                Session::flash('message-danger', 'Error al intentar actualizar la Configuracion');
            }
        }
        return view('configuraciones.show', [
            'configuracion' => $configuracion,
        ]);
     }
/*
     public function destroy(Request $request)
     {
        $figuralegal = FiguraLegal::findOrFail($request->id);
        if($figuralegal->delete())
        {
            Session::flash('message-success', 'Figura Legal eliminada satisfactoriamente.');
        }else{
            Session::flash('message-danger', 'Error al intentar eliminar una Figura Legal');
        }
        return back();
     }
     */
     /*
     public function destroy(figuralegal $figuralegal)
     {
         FiguraLegal::where('slug' , $slug)->delete();
         $this->figuralegal = $this->getFiguraLegal();
         Session::flash('message-danger', 'FiguraLegal eliminado satisfactoriamente.');
         return redirect()->route('figuralegal.index');
     }
     */

}
