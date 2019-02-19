<?php

namespace App\Http\Controllers;
use App\SujetoCredito;
use App\Proyecto;
use App\Sucursal;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Requests\SujetoCreditoRequest;

class SujetoCreditoController extends Controller
{

    public function search1(Request $req)
    {
        //$sujetoCredito = SujetoCredito::where('id', $req->id)->first();
        $sujetoCredito = SujetoCredito::with('sucursal')->find($req->id);
        return response()->json($sujetoCredito);
    }

    public function index()
    {
        $sucursales = Sucursal::all()->pluck('nombre', 'id');
        $proyectos = Proyecto::all()->pluck('nombre', 'id');
        $sujetoCreditos = SujetoCredito::all();
        return view('sujetocreditos.index',
        [
            'sujetoCreditos' => $sujetoCreditos,
            'proyectos'     => $proyectos,
            'sucursales'    => $sucursales
        ]);
        //return view('bancos.index', ['banco' => $this->banco]);
    }

    public function create()
    {
        $sucursales = Sucursal::all()->pluck('nombre', 'id');
        $proyectos = Proyecto::all()->pluck('nombre', 'id');
        return view('sujetocreditos.create', [
            'sucursales'    => $sucursales,
            'proyectos'     =>$proyectos
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        if ($data['sujeto_credito'])
        {
            if ($data['sujeto_credito'] == 'SI')
            {
                $data['sujeto_credito'] == 'on';
            }else{
                $data['sujeto_credito'] == 'off';
            }
        }
        $data['fechaEnvioBanco'] = Carbon::parse($data['fechaEnvioBanco'])->format('Y-m-d');
        if ($data['fechaRespuestaBanco'])
        {
            $data['fechaRespuestaBanco'] = Carbon::parse($data['fechaRespuestaBanco'])->format('Y-m-d');
        }
        $data['user_id'] = Auth::user()->id;
        $data['slug'] = $data['proyecto_id'] . "-" . $data['sucursal_id'] . "-" . rand(1,1000);

        if(SujetoCredito::create($data))
        {
            $proyecto = Proyecto::find($data['proyecto_id']);
            $proyecto->fechaRespuestaBanco = $data['fechaRespuestaBanco'];
            $proyecto->fechaEnvioBanco = $data['fecha_envio_banco'];
            $proyecto->save();
            return back()->with('message-success','Sujeto de Crédito cargado correctamente');
        }else{
            return back()->with('message-danger','Error al intentar guardar el Suejto de crédito');
        }

     }

    public function show(sujetoCredito $sujetoCredito)
    {
         //return view('bancos.show', compact('banco'));
     }

    public function edit(sujetoCredito $sujetoCredito)
    {
        $sucursales = Sucursal::all()->pluck('nombre', 'id');
        $proyectos = Proyecto::all()->pluck('nombre', 'id');
        return view('sujetocreditos.edit', [
            'sujetoCreditos' => $sujetoCredito,
            'sucursales'    => $sucursales,
            'proyectos'     =>$proyectos
        ]);
     }

    public function updateAjax(Request $req)
    {
            $id  = (int) $req->id;

            $sujeto = SujetoCredito::find($id);
            $sujeto->fechaEnvioBanco = \Carbon\Carbon::parse($req->fechaEnvioBanco)->format('Y-m-d');
            if ($req->fechaRespuestaBanco)
                $sujeto->fechaRespuestaBanco = \Carbon\Carbon::parse($req->fechaRespuestaBanco)->format('Y-m-d');
            $sujeto->sujeto_credito = $req->sujeto_credito;
            $sujeto->descripcion = $req->descripcion1;
            if ($sujeto->save())
            {
                //$proyecto = Proyecto::find($sujeto->proyecto_id);

                //$proyecto->fechaRespuestaBanco = \Carbon\Carbon::parse($req->fechaRespuestaBanco)->format('Y-m-d');
                //$proyecto->fechaEnvioBanco = \Carbon\Carbon::parse($req->fechaEnvioBanco)->format('Y-m-d');

                $proyecto->save();

                return response()->json($sujeto);
                return back()->with('message-success','Sujeto de Crédito Actualizado correctamente');
            }else{
                return response()->json(false);
                return back()->with('message-danger','Error al intentar Actualizar el Suejto de crèdito');
            }

    }

    public function update(Request $request, SujetoCredito $sujetoCredito)
    {
        $data = $request->all();
        $data['fecha_envio_banco'] = Carbon::parse($data['fecha_envio_banco'])->format('Y-m-d');
        if ($data['fecha_respuesta_banco'])
        {
            $data['fecha_respuesta_banco'] = Carbon::parse($data['fecha_respuesta_banco'])->format('Y-m-d');
        }
        if ($data['sujeto_credito'])
        {
            if ($data['sujeto_credito'] == 'SI')
            {
                $data['sujeto_credito'] == 'on';
            }else{
                $data['sujeto_credito'] == 'off';
            }
        }

        if($sujetoCredito->fill($data)->update())
        {
            Session::flash('message-success', 'Sujeto de Crédito actualizado satisfactoriamente.');
        }else{
            Session::flash('message-danger', 'Error al intentar actualizar un Sujeto de Crédito');
        }
        return redirect()->route('sujetoCredito.index');
     }

    public function search(Request $req)
    {
        $sujeto = SujetoCredito::where('id', $req->id)->first();
        return response()->json($sujeto);
    }



    public function destroy(Request $request)
    {
        $sujetoCredito = SujetoCredito::findOrFail($request->id);
        if($sujetoCredito->delete())
        {
            Session::flash('message-success', 'Sujeto de Crédito eliminado satisfactoriamente.');
        }else{
            Session::flash('message-danger', 'Error al intentar eliminar un Sujeto de Crédito');
        }
        return redirect()->route('sujetoCredito.index');
    }

}
