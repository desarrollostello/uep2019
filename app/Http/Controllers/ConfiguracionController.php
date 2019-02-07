<?php

namespace App\Http\Controllers;
use App\Configuracion;
use App\Provincia;
use App\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Requests\ConfiguracionRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class ConfiguracionController extends Controller
{

    public function index()
    {
        //return view('figuralegal.index', ['figuralegal' => $this->figuralegal]);
        $configuracion = Configuracion::where('provincia_id', Auth::user()->provincia_id)->get();
        return view('configuraciones.index',compact('configuracion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provincias = Provincia::all()->pluck('nombre', 'id');
        $usuarios   = User::all()->pluck('name', 'id');
        return view('configuraciones.create', [
            'provincias' => $provincias,
            'usuarios'  => $usuarios
        ]);
    }


    public function store(Request $request)
    {
        $data = $request->all();
        $data['provincia_id'] = Auth::user()->provincia_id;
        $data['user_id'] = Auth::user()->id;
        $data['slug'] = str_slug($data['titulo'] . '-' . $data['provincia_id']);

        if(Configuracion::create($data))
        {
            if ($request->hasfile('file'))
            {
                foreach ($request->file('file') as $key => $value)
                {
                    $imageName = $value->getClientOriginalName() . '-' . rand(5,200);
                    $value->move(public_path('upload/configuracion/'), $imageName);
                    $data['logo'] = "upload/configuracion/" . $imageName;
                }

            }
            Session::flash('message-success', 'Configuracion creada satisfactoriamente.');
            return url('/home');
        }else{
            Session::flash('message-danger', 'Error al intentar crear una Configuración');
            return redirect()->route('configuracion.index');
        }


    }


     public function show($id)
     {
        $configuracion = Configuracion::findOrFail($id)->all();
        $configuracion = Configuracion::where('id', $id)->get();

        return view('configuraciones.show', [
            'configuracion' => $configuracion[0],
        ]);
     }


     public function edit(Configuracion $configuracion)
     {
         $provincias = Provincia::all()->pluck('nombre', 'id');
         $usuarios   = User::all()->pluck('name', 'id');
        return view('configuraciones.edit', [
            'configuracion' => $configuracion,
            'provincias' => $provincias,
            'usuarios'  => $usuarios,
        ]);
     }

     public function update(Request $request, Configuracion $configuracion)
     {
        $user = Auth::user();
        if (Gate::forUser($user)->allows('update-configuracion', $configuracion))
        {
            if($configuracion->fill($request->all())->update())
            {
                if ($request->hasfile('file'))
                {
                    foreach ($request->file('file') as $key => $value)
                    {
                        $imageName = $value->getClientOriginalName() . '-' . rand(5,200);
                        $value->move(public_path('upload/configuracion/'), $imageName);
                        $data['logo'] = "upload/configuracion/" . $imageName;
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
