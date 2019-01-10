<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlertaRequest extends FormRequest
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
         $alerta = $this->route('alerta');

         switch ($this->method()) {
             case 'GET':
             case 'DELETE': {
                 return [];
             }
             case 'POST': {
                 return [
                    'nombre'     => 'required',
                    'estado'     => 'required',
                    'color'      => 'required',
                    'codigo'    => 'nullable',
                    'sql_alerta'        => 'nullable',
                    'mensaje'    => 'required',
                    'dias'       => 'required',
                    'slug'       => 'nullable',
                    'observaciones' => 'nullable',
                 ];
             }
             case 'PUT':
             case 'PATCH': {
                 return [
                    'nombre'     => 'required',
                    'estado'     => 'required',
                    'color'      => 'required',
                    'codigo'    => 'nullable',
                    'sql_alerta'        => 'nullable',
                    'mensaje'    => 'required',
                    'dias'       => 'required',
                    'observaciones' => 'nullable',
                    'slug'       => 'nullable|unique:alerta,slug,' . $alerta->id,
                 ];
             }
             default:
                 break;
         }
     }
     public function messages()
     {
        return [
            'nombre.required' => 'Deberá completar el Nombre de la Alerta',
            'mensaje.required' => 'Deberá completar el mensaje de la Alerta',
            'estado.required' => 'Deberá completar el Estado de la Alerta',
            'color.required' => 'Deberá completar el Color de la Alerta',
            'dias.required' => 'Deberá completar los días transcurridos para que aparezca la Alerta'
        ];
    }
}
