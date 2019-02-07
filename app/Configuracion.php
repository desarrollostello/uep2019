<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuracion extends Model
{
  /**
   * Setea la Tabla a la que pertenece el modelo
   *
   * @var string
   */
    protected $table = 'configuraciones';
    protected $dates = ['deleted_at'];

    /**
   * Get the route key for the model.
   *
   * @return string
   */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
   * Asignación masiva de atributos para la insecion
   *
   * @var array
   */
    protected $fillable = [
            'titulo',
            'user_id',
            'domicilio',
            'telefono',
            'usuarioAdministrador_id',
            'provincia_id',
            'logo',
            'slug'
        ];
    /**
   * Normaliza y setea el nombre y el slug del Archivo
   *
   * @param $val
   */
    public function setTituloAttribute($val)
    {
        $this->attributes['titulo'] = trim($val);
    }

    public function getTituloAttribute()
    {
        return strtoupper($this->attributes['titulo']);
    }

    /**
     * Retorna el Codigo Postal de la Localidad
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function userAdmin()
    {
        return $this->belongsTo('App\User', 'usuarioAdministrador_id');
    }
    public function provincia()
    {
        return $this->belongsTo('App\Provincia', 'provincia_id');
    }
}
