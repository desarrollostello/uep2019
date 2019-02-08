<?php

namespace App\Http\Controllers;
use App\User;
use App\Proyecto;
use App\AnexoProyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\SujetoCreditoRequest;
use Redirect;

class AnexoProyectoController extends Controller
{



    public function index()
    {
        $proyectos = Proyecto::all();
        $anexos    = AnexoProyecto::all();
        return view('anexosproyectos.index', [
            'anexos' => $anexos
        ]);
    }

     public function create()
     {
         $proyectos = Proyecto::all()->pluck('nombre', 'id');
         return view('anexosproyectos.create', [
             'proyectos'  => $proyectos
         ]);
     }


    public function store(AnexoProyectoRequest $anexoProyectoRequest)
    {
        $now = new \DateTime();
        $data = $anexoProyectoRequest->all();
        $data['user_id'] = Auth::user()->id;
        $allowedfileExtension=['xls','xlsx','XLS','XLSX','ZIP','zip','jpeg','JPEG', 'pdf','jpg','png','docx','JPG','PDF','PNG','DOCX', 'txt', 'TXT', 'gif', 'GIF'];


        if ($anexoProyectoRequest->hasfile('file'))
        {
            foreach ($anexoProyectoRequest->file('file') as $key => $value)
            {
                $fullName = $value->getClientOriginalName();
                $extension = $value->getClientOriginalExtension();
                $onlyName = explode('.'.$extension,$fullName);

                $filename = rand(1,10000) . "-"  . str_slug($now->format('d-m-Y H:i:s')) . "-" . $onlyName  . "." . $extension;
                $check=in_array($extension,$allowedfileExtension);
                if($check)
                {
                    $value->move('upload/proyectos/' . $data->proyecto->nombre . '/', $filename);
                    $data['file'] = $filename;
                    $creado =  AnexoProyecto::create($data);
                    if ($creado)
                    {
                        //$this->enviar($creado, Auth::user()->email);
                        Session::flash('message-success', 'Anexo guardado satisfactoriamente.');
                    }else{
                        Session::flash('message-danger', 'Error al intentar guardar el Anexo');
                    }
                }else{
                    Session::flash('message-danger', 'Tipo de Archivo no permitido');
                }

            }

        }

        return redirect()->route('anexoProyecto.index');
    }


     public function show(refinanciacion $refinanciacion)
     {
         //return view('bancos.show', compact('banco'));
     }


     public function edit(AnexoProyecto $anexoProyecto)
     {
          return view('anexoProyecto.edit', ['anexoProyecto' => $anexoProyecto]);
     }


     public function update(AnexoProyectoRequest $anexoProyectoRequest, AnexoProyecto $anexoProyecto)
     {
        if($proyecto->fill($anexoProyectoRequest->all())->update())
        {
            if ($anexoProyectoRequest->hasfile('filename'))
            {
                foreach ($anexoProyectoRequest->file('filename') as $key => $value)
                {
                    $imageName = $value->getClientOriginalName();
                    $value->move(public_path('upload/proyectos/' . $data->proyecto->nombre . '/'), $imageName);
                    $data['file'] = "upload/proyectos/" . $data->proyecto->nombre . "/" . $imageName;
                }

            }
            Session::flash('message-success', 'Anexo Proyecto actualizado satisfactoriamente.');
        }else{
            Session::flash('message-danger', 'Error al intentar actualizar el Anexo');
        }


        return redirect()->route('anexoProyecto.index');
    }

    public function deletefile($slug)
    {
        $archivo = AnexoProyecto::where('slug', $slug)->first();
        if (AnexoProyecto::where('slug' , $archivo->slug)->delete())
        {
            if(file_exists($archivo->file))
            {
                unlink($archivo->file);
            }else{
                 return back()->with('message-danger', 'El archivo no Existe en el Disco');
            }
            return back()->withSuccess('Archivo Borrado Correctamente!');
        }else{
            Session::flash('message-danger', 'Error al intentar eliminar el Anexo');
        }
    }

    public function destroy(AnexoProyecto $AnexoProyecto)
    {
        $archivo = AnexoProyecto::where('slug', $slug)->first();
        if (AnexoProyecto::where('slug' , $archivo->slug)->delete())
        {
            if(file_exists('upload/proyectos/' . $archivo->proyecto->nombre  . '/' . $archivo->file))
            {
                unlink('upload/proyectos/' . $archivo->proyecto->nombre  . '/' . $archivo->file);
            }else{
                 Session::flash('message-danger', 'El Archivo no existe en el disco');
            }
            Session::flash('message-success', 'Anexo borrado correctamente !!!');
        }else{
            Session::flash('message-danger', 'Error al intentar eliminar el Anexo');
        }
        return redirect()->route('anexoProyecto.index');
    }

}
