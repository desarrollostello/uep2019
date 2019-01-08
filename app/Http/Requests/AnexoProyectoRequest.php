<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnexoProyectoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
     public function rules()
     {
         $anexoProyecto = $this->route('anexoProyecto');

         switch ($this->method()) {
             case 'GET':
             case 'DELETE': {
                 return [];
             }
             case 'POST': {
                 return [
                     'file'             => 'required',
                     'fecha'            => 'required',
                     'icon'             => 'nullable',
                     'nombre_archivo'   => 'required',
                     'proyecto_id'      => 'required|exists:proyectos,id',
                     'slug'             => 'nullable'


                 ];
             }
             case 'PUT':
             case 'PATCH': {
                 return [
                     'file'             => 'required',
                     'fecha'            => 'required',
                     'icon'             => 'nullable',
                     'nombre_archivo'   => 'required',
                     'proyecto_id'      => 'required|exists:proyectos,id',
                     'slug'              => 'nullable|unique:anexoProyecto,slug,' . $anexoProyecto->id,

                 ];
             }
             default:
                 break;
         }
     }
     public function messages()
     {
        return [
          
        ];
    }
}
