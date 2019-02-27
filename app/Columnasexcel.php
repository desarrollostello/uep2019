<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Columnasexcel extends Model
{
  /**
   * Setea la Tabla a la que pertenece el modelo
   *
   * @var string
   */
    protected $table = 'columnasexcel';
    public $timestamps = true;
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
        'nombre',
        'descripcion',
        'orden',
        'seleccionada',
        'provincia_id',
        'slug'
    ];
    /**
   * Normaliza y setea el nombre y el slug del Archivo
   *
   * @param $val
   */
    public function setNombreAttribute($val)
    {
        $this->attributes['nombre'] = trim($val);
        $this->attributes['slug'] = str_slug($val);
    }

    public function provincia()
    {
        return $this->belongsTo('App\Provincia', 'provincia_id');
    }

    public function scopeColexcelProv($query)
    {
        return $query->where('provincia_id', Auth::user()->provincia_id);
    }

    public static function boot() {
        parent::boot();

        static::creating(function ($data) {
            return $data['provincia_id'] = Auth::user()->provincia_id;

        });

        static::updating(function($proyecto)
        {
        });

        static::updated(function($proyecto) {
        });


        static::created(function ($model) {
        });
    }


}
