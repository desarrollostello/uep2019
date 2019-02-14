<?php

namespace App\Http\Controllers;
use App\Auditoria;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Requests\AuditoriaRequest;

class AuditoriaController extends Controller
{

    protected $auditoria;

    public function __construct()
    {
        $this->auditoria = $this->getAuditoria();
    }

    public function index()
    {
        return view('auditorias.index', ['auditorias' => $this->auditoria]);
    }


    public function create()
    {
        return view('auditorias.create');
    }


    public function store(AuditoriaRequest $auditoriaRequest)
    {

        $this->validate($auditoriaRequest,[
            'fecha'=>'required',
        ]);
        $data = $movimientoRequest->all();
        $data['modelo'] = 'proyecto';
        if (Auditoria::create($data)){
            dd("ok");
        }else{
            dd("mal");
        }

        return;
         /*
         $data = $movimientoRequest->all();
         $data['user_id'] = Auth::user()->id;
         Movimiento::create($data);
         return redirect()->route('movimientos.index')->with('message', 'Movimiento ingresado.');
         */
    }


    public function show(Auditoria $auditoria)
    {
        return view('auditorias.show', compact('auditoria'));
    }


    public function edit(auditoria $auditoria)
    {
        return view('auditorias.edit', ['auditoria' => $auditoria]);
    }


    public function update(AuditoriaRequest $auditoriaRequest, auditoria $auditoria)
    {
        $auditoria->fill($auditoriaRequest->all())->update();
        Session::flash('message', 'Auditoria actualizado satisfactoriamente.');
        return redirect()->route('auditoria.index');
    }


    public function destroy($slug)
    {
        if(Auditoria::where('slug' , $slug)->delete())
        {
            Session::flash('message-success', 'Auditoria eliminada satisfactoriamente.');
        }else{
            Session::flash('message-danger', 'Error al intentar eliminar una Auditoria');
        }

        return redirect()->route('auditoria.index');
    }

    private function getAuditoria()
    {
        return Auditoria::all();
    }
}
