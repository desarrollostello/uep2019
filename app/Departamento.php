<?php

namespace App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
  /**
   * Setea la Tabla a la que pertenece el modelo
   *
   * @var string
   */
    protected $table = 'departamentos';
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
    protected $fillable = ['nombre', 'provincia_id', 'slug'];
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

    public function getNombreAttribute()
    {
        return strtoupper($this->attributes['nombre']);
    }
    public function provincia()
    {
      return $this->hasOne('App\Provincia');
    }

    public function scopeDepProv($query)
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
