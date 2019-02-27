<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SujetoCredito extends Model
{
  /**
   * Setea la Tabla a la que pertenece el modelo
   *
   * @var string
   */
    protected $table = 'sujeto_credito';

    public $timestamps = true;


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
      'proyecto_id',
      'user_id',
      'sucursal_id',
      'fechaEnvioBanco',
      'fechaRespuestaBanco',
      'sujeto_credito',
      'descripcion',
      'slug'
    ];
    /**
   * Normaliza y setea el nombre y el slug del Archivo
   *
   * @param $val
   */

    public function setSujetoCreditoAttribute($val)
    {
        $this->attributes['sujeto_credito'] = trim($val);
        //$this->attributes['slug'] = str_slug($val) . "-" . $this->attributes['proyecto_id'] . "-" . $this->attributes['sucursal_id'] . "-" . rand(5,10);
    }

/*
    public function setFechaEnvioBancoAttribute($value): void
    {

        if($value)
          $this->attributes['fechaEnvioBanco'] = \Carbon\Carbon::createFromFormat(config('app.date_format'), $value)->format('Y-m-d');
    }
*/
/*
    public function getFechaEnvioBancoAttribute($value)
    {
      if($value)
        return \Carbon\Carbon::createFromFormat('Y-m-d', $value)->format(config('app.date_format'));
    }
    */
/*
    public function setFechaRespuestaBancoAttribute($value): void
    {
      if($value)
          $this->attributes['fechaRespuestaBanco'] = \Carbon\Carbon::createFromFormat(config('app.date_format'), $value)->format('Y-m-d');
    }

    public function getFechaRespuestaBancoAttribute($value)
    {
      if($value)
        return \Carbon\Carbon::createFromFormat('Y-m-d', $value)->format(config('app.date_format'));
    }
*/



    public function proyecto()
    {
        return $this->belongsTo('App\Proyecto', 'proyecto_id');
    }

    /**
     * Retorna el Codigo Postal de la Localidad
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sucursal()
    {
        return $this->belongsTo('App\Sucursal', 'sucursal_id');
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
}
