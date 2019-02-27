<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
  /**
 * Setea la Tabla a la que pertenece el modelo
 *
 * @var string
 */
    protected $table = 'logs';
    protected $dates = ['deleted_at'];
    public $timestamps = true;

    protected $fillable = [
      'descripcion',
      'modelo',
      'accion',
      'user_id',
      'slug',
    ];

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
     * Normaliza y setea el nombre y el slug del Articulo
     *
     * @param $val
     */
    public function setModeloAttribute($val)
    {
        $this->attributes['modelo'] = trim($val);
        $this->attributes['slug'] = str_slug($val) . '-'. rand(10,1000);
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }


    public static function boot(){

        parent::boot();
        static::creating(function($model)
        {
            $model->user_id = Auth::user()->id;
        });
    }

}
