<?php

namespace App\Http\Controllers;

use App\Checklist;
use App\Proyecto;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ChecklistController extends Controller
{

    public function index()
    {
        $checklists = Checklist::all();
        return view('checklists.index',compact('checklists'));
    }


    public function create()
    {
        $proyectos = Proyecto::where('provincia_id', Auth::user()->provincia_id)->pluck('nombre', 'id');
        return view('checklists.create0', compact('proyectos'));
    }

    public function create1($idProyecto)
    {
        $proyectos = Proyecto::find($idProyecto);
        /*
        if (!(Refinanciacion::evaluarRefinanciacion($proyectos)))
        {
            Session::flash('message-danger', 'El proyecto no puede ser Refinanciado, Verifique');
            return back();
        }
        */
        return view('checklists.create', compact('proyectos'));
    }


    public function store(Request $request)
    {
        $data = $request->all();
        //$data['fecha'] = \Carbon\Carbon::parse($data['fecha'])->format('Y-m-d');
        $data['user_id'] = Auth::user()->id;
        if(Checklist::create($data))
        {
            Session::flash('message-success', 'Checklist creado satisfactoriamente.');
        }else{
            Session::flash('message-danger', 'Error al intentar crear un Checklist');
        }
        return redirect()->route('checklist.index');
    }


    public function show(Checklist $checklist)
    {
        //
    }


    public function edit(Checklist $checklist)
    {
        $proyectos   = Proyecto::where('provincia_id', Auth::user()->provincia_id)->pluck('nombre', 'id');
        return view('checklist.edit',
            [
                'proyectos'    => $proyectos,
                'checklist'    => $checklist
            ]
        );
    }


    public function update(Request $request, Checklist $checklist)
    {
        $data = $request->all();
        //$data['fecha'] = \Carbon\Carbon::parse($data['fecha'])->format('Y-m-d');
        if($checklist->fill($data)->update())
        {
            Session::flash('message-success', 'Checklist actualizada satisfactoriamente.');
        }else{
            Session::flash('message-danger', 'Error al intentar actualizar un Checklist');
        }
        return redirect()->route('checklist.index');
    }


    public function destroy(Checklist $checklist)
    {
        //
    }
}
