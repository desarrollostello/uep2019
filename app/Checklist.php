<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checklist extends Model
{
    protected $table = 'checklists';

    protected $fillable = [
        'proyecto_id',
        'nota_oficial',
        'solicitud_financiamiento',
        'fotocopia_dni',
        'certificado_domicilio',
        'inscripcion_afip_rentas',
        'estado_civil',
        'ddjj',
        'nota_banco',
        'respuesta_banco',
        'titulo_propiedad_inmuebles',
        'habilitaciones',
        'titulo_propiedad_muebles',
        'proformas',
        'guia_proyecto',
        'estadisticas',
        'promeva',
        'informe_uep',
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
