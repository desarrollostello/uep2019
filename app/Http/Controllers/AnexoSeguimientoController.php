<?php

namespace App\Http\Controllers;
use App\User;
use App\Seguimiento;
use App\AnexoSeguimiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\AnexoSeguimientoRequest;
use Redirect;

class AnexoSeguimientoController extends Controller
{


    
    public function index()
    {
        $seguimientos = Seguimiento::all();
        $anexos    = AnexoSeguimiento::all();
        return view('anexosseguimientos.index', [
            'anexos' => $anexos
        ]);
    }

     public function create()
     {
         $seguimientos = Seguimiento::all()->pluck('nombre', 'id');
         return view('anexosseguimientos.create', [
             'seguimientos'  => $seguimientos
         ]);
     }

    
    public function store(AnexoSeguimientoRequest $anexoSeguimientoRequest)
    {
        $now = new \DateTime();
        $data = $anexoSeguimientoRequest->all();
        $data['user_id'] = Auth::user()->id;
        $allowedfileExtension=['xls','xlsx','XLS','XLSX','ZIP','zip','jpeg','JPEG', 'pdf','jpg','png','docx','JPG','PDF','PNG','DOCX', 'txt', 'TXT', 'gif', 'GIF'];


        if ($anexoSeguimientoRequest->hasfile('file'))
        {
            foreach ($anexoSeguimientoRequest->file('file') as $key => $value)
            {
                $fullName = $value->getClientOriginalName(); 
                $extension = $value->getClientOriginalExtension(); 
                $onlyName = explode('.'.$extension,$fullName); 

                $filename = rand(1,10000) . "-"  . str_slug($now->format('d-m-Y H:i:s')) . "-" . $onlyName  . "." . $extension;
                $check=in_array($extension,$allowedfileExtension);
                if($check)
                {
                    $value->move('upload/seguimientos/' . $data->proyecto->nombre . '/', $filename);
                    $data['file'] = $filename;
                    $creado =  AnexoSeguimiento::create($data);
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
       
        return redirect()->route('anexoSeguimiento.index');
    }


     public function show(Seguimiento $seguimiento)
     {
         //return view('bancos.show', compact('banco'));
     }

 
     public function edit(AnexoSeguimiento $anexoSeguimiento)
     {
          return view('anexoSeguimiento.edit', ['anexoSeguimiento' => $anexoSeguimiento]);
     }

   
     public function update(AnexoSeguimientoRequest $anexoSeguimientoRequest, AnexoSeguimiento $anexoSeguimiento)
     {
        if($proyecto->fill($anexoSeguimientoRequest->all())->update())
        {
            if ($anexoSeguimientoRequest->hasfile('filename'))
            {
                foreach ($anexoSeguimientoRequest->file('filename') as $key => $value)
                {

                    $imageName = $value->getClientOriginalName();
                    $value->move(public_path('upload/seguimientos/' . $data->proyecto->nombre . '/'), $imageName);
                    $data['file'] = "upload/seguimientos/" . $data->proyecto->nombre . "/" . $imageName;
                }

            }
            Session::flash('message-success', 'Anexo Proyecto actualizado satisfactoriamente.');
        }else{
            Session::flash('message-danger', 'Error al intentar actualizar el Anexo');
        }


        return redirect()->route('anexoSeguimiento.index');
    }

    public function deletefile($slug)
    {
        $archivo = AnexoSeguimiento::where('slug', $slug)->first();
        if (AnexoSeguimiento::where('slug' , $archivo->slug)->delete())
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

    public function destroy(AnexoSeguimiento $anexoSeguimiento)
    {
        $archivo = AnexoSeguimiento::where('slug', $slug)->first();
        if (AnexoSeguimiento::where('slug' , $archivo->slug)->delete())
        {
            if(file_exists('upload/seguimientos/' . $archivo->proyecto->nombre  . '/' . $archivo->file))
            {
                unlink('upload/seguimientos/' . $archivo->proyecto->nombre  . '/' . $archivo->file);
            }else{
                 Session::flash('message-danger', 'El Archivo no existe en el disco');
            }
            Session::flash('message-success', 'Anexo borrado correctamente !!!');
        }else{
            Session::flash('message-danger', 'Error al intentar eliminar el Anexo');
        }
        return redirect()->route('anexoSeguimiento.index');
    }

}
