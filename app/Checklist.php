<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checklist extends Model
{
    protected $table = 'checklists';

    protected $fillable = [
        'proyecto_id',
        'nota_oficial',
        'nota_oficial_c',
        'solicitud_financiamiento',
        'solicitud_financiamiento_c',
        'fotocopia_dni',
        'fotocopia_dni_c',
        'certificado_domicilio',
        'certificado_domicilio_c',
        'inscripcion_afip_rentas',
        'inscripcion_afip_rentas_c',
        'estado_civil',
        'estado_civil_c',
        'ddjj',
        'ddjj_c',
        'nota_banco',
        'nota_banco_c',
        'respuesta_banco',
        'respuesta_banco_c',
        'titulo_propiedad_inmuebles',
        'titulo_propiedad_inmuebles_c',
        'habilitaciones',
        'habilitaciones_c',
        'titulo_propiedad_muebles',
        'titulo_propiedad_muebles_c',
        'proformas',
        'proformas_c',
        'guia_proyecto',
        'guia_proyecto_c',
        'estadisticas',
        'estadisticas_c',
        'promeva',
        'promeva_c',
        'informe_uep',
        'informe_uep_c',
        'user_id',
        'slug'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function proyecto()
    {
        return $this->belongsTo('App\Proyecto', 'proyecto_id');
    }
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
