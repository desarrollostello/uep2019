<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Events\ProyectoCreated;

class Proyecto extends Model
{
    /**
     * Setea la Tabla a la que pertenece el modelo
     *
     * @var string
     */

      protected $dates = ['created_at', 'updated_at', 'deleted_at', 'fechaIngreso'];

      protected $table = 'proyectos';

      protected $events = [
          'updated' => App\Events\ProyectoCreated::class,
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
       * Asignación masiva de atributos para la insecion
       *
       * @var array
       */
      protected $fillable = [
        'fechaIngreso',
        'nombre',
        'numeroInterno',
        'numeroCfi',
        'localidad_id',
        'lineaCredito_id',
        'estado_id',
        'estadoInterno_id',
        'sector_id',
        'monto',
        'tipo',
        'domicilioProyecto',
        'domicilioLegal',
        'telefono',
        'email',
        'web',
        'tamanio',
        'productos',
        'ciuu',
        'mo',
        'enuep',
        'descripcion',
        'inversionTotal',
        'inversionRealizada',
        'inversionARealizar_af',
        'inversionARealizar_ct',
        'figuraLegal_id',
        'periodicidad_id',
        'destinoCredito_id',
        'plazoGracia',
        'plazoAmortizacion',
        'cantidadDesembolsos',
        'tasa',
        'garantia_id',
        'sucursal_id',
        'descripcionGarantia',
        'fechaCaducoBanco',
        'fechaAprobadoUep',
        'fechaEnviadoCfi',
        'fechaAprobadoCfi', // REMIRESol
        'fechaTramdispo',
        'fechaComunicaTran',
        'fechaDesembolso',
        'fechaEfectivizacion',
        'fechaDesistido',
        'fechaJudicial',
        'fechaCancelado',
        'fechaArchivado',
        'fechaEnvioBanco',
        'fechaRespuestaBanco',
        'fechaPresupuestos',
        'fechaUltimoMovimiento',
        'refinanciado',
        'user_id',
        'titular',
        'observaciones',
        'color',
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

      public function getNombreAttribute()
      {
          return strtoupper($this->attributes['nombre']);
      }

      public function getNombreTitularAttribute()
      {
          return strtoupper($this->attributes['nombre'] . ' - ' . $this->attributes['titular']);
      }
    

      /*
      COMO USAR LOS SCOPES QUE NOS AYUDAN A HACER CONSULTAS
       */
      /*
      public function scopeInThisMonthByGender($query, $gender)
      {
          return $query->where('gender', $gender)
              ->whereMonth('created_at', now()->month);
      }
      */

      //// Esto va en el Controller es como llamarlo
      //Proyecto::inThisMonthByGender('female')->get()


        /*
      Cancelling Save Operations Via Events
      If false is returned from the creating, updating, saving, or deleting events, the action will be cancelled:

      User::creating(function($user)
      {
          if ( ! $user->isValid()) return false;
      });

*/
       public function setFechaIngresoAttribute($val)
      {
          $this->attributes['fechaIngreso'] = \Carbon\Carbon::parse($val)->format('Y-m-d');
      }

      
      public function getFechaIngresoAttribute()
      {
        if($this->attributes['fechaIngreso'] != null)
            return  \Carbon\Carbon::parse($this->attributes['fechaIngreso'])->format('d-m-Y');
      }

      /*******************/

      public function setFechaEnvioBancoAttribute($val)
      {
          $this->attributes['fechaEnvioBanco'] = \Carbon\Carbon::parse($val)->format('Y-m-d');
      }
      public function getFechaEnvioBancoAttribute()
      {
          if($this->attributes['fechaEnvioBanco'] != null)
              return  \Carbon\Carbon::parse($this->attributes['fechaEnvioBanco'])->format('d-m-Y');
      }

      /****************************/

      public function setFechaRespuestaBancoAttribute($val)
      {
          $this->attributes['fechaRespuestaBanco'] = \Carbon\Carbon::parse($val)->format('Y-m-d');
      }
      public function getFechaRespuestaBancoAttribute()
      {
          if($this->attributes['fechaRespuestaBanco'] != null)
          return  \Carbon\Carbon::parse($this->attributes['fechaRespuestaBanco'])->format('d-m-Y');
      }
      
      /*********************************/
     
     public function setFechaPresupuestosAttribute($val)
      {

          $this->attributes['fechaPresupuestos'] = \Carbon\Carbon::parse($val)->format('Y-m-d');
      }

      
      public function getFechaPresupuestosAttribute()
      {
          if($this->attributes['fechaPresupuestos'] != null)
          return  \Carbon\Carbon::parse($this->attributes['fechaPresupuestos'])->format('d-m-Y');
      }

      /**********************************/
      
     
       public function setFechaAprobadoUepAttribute($val)
      {
          $this->attributes['fechaAprobadoUep'] = \Carbon\Carbon::parse($val)->format('Y-m-d');
      }

      
      public function getFechaAprobadoUepAttribute()
      {
          if($this->attributes['fechaAprobadoUep'] != null)
          return  \Carbon\Carbon::parse($this->attributes['fechaAprobadoUep'])->format('d-m-Y');
      }


       /*******************/
      public function setFechaAprobadoCfiAttribute($val)
      {
          $this->attributes['fechaAprobadoCfi'] = \Carbon\Carbon::parse($val)->format('Y-m-d');
      }

      
      public function getFechaAprobadoCfiAttribute()
      {
          if($this->attributes['fechaAprobadoCfi'] != null)
          return  \Carbon\Carbon::parse($this->attributes['fechaAprobadoCfi'])->format('d-m-Y');
      }

       /*******************/

      public function setFechaTramdispoAttribute($val)
      {
          $this->attributes['fechaTramdispo'] = \Carbon\Carbon::parse($val)->format('Y-m-d');
      }

      
      public function getFechaTramdispoAttribute()
      {
          if($this->attributes['fechaTramdispo'] != null)
          return  \Carbon\Carbon::parse($this->attributes['fechaTramdispo'])->format('d-m-Y');
      }

       /*******************/


       public function setFechaComunicaTranAttribute($val)
      {
          $this->attributes['fechaComunicaTran'] = \Carbon\Carbon::parse($val)->format('Y-m-d');
      }

      
      public function getFechaComunicaTranAttribute()
      {
          if($this->attributes['fechaComunicaTran'] != null)
              return  \Carbon\Carbon::parse($this->attributes['fechaComunicaTran'])->format('d-m-Y');
      }

       /*******************/

      public function setFechaAprobadoDesembolsoAttribute($val)
      {
          $this->attributes['fechaDesembolso'] = \Carbon\Carbon::parse($val)->format('Y-m-d');
      }

      
      public function getFechaAprobadoDesembolsoAttribute()
      {
          if($this->attributes['fechaDesembolso'] != null)
          return  \Carbon\Carbon::parse($this->attributes['fechaDesembolso'])->format('d-m-Y');
      }

       /*******************/
      public function setFechaEfectivizacionAttribute($val)
      {
          $this->attributes['fechaEfectivizacion'] = \Carbon\Carbon::parse($val)->format('Y-m-d');
      }

      
      public function getFechaEfectivizacionAttribute()
      {
          if($this->attributes['fechaEfectivizacion'] != null)
          return  \Carbon\Carbon::parse($this->attributes['fechaEfectivizacion'])->format('d-m-Y');
      }

      /*******************/

      public function setFechaArchivadoAttribute($val)
      {
          $this->attributes['fechaArchivado'] = \Carbon\Carbon::parse($val)->format('Y-m-d');
      }

      
      public function getFechaArchivadoAttribute()
      {
          if($this->attributes['fechaArchivado'] != null)
          return  \Carbon\Carbon::parse($this->attributes['fechaArchivado'])->format('d-m-Y');
      }

      /*******************/

      public function setFechaUltimoMovimientoAttribute($val)
      {
          $this->attributes['fechaUltimoMovimiento'] = \Carbon\Carbon::parse($val)->format('Y-m-d');
      }

      
      public function getFechaUltimoMovimientoAttribute()
      {
          if($this->attributes['fechaUltimoMovimiento'] != null)
          return  \Carbon\Carbon::parse($this->attributes['fechaUltimoMovimiento'])->format('d-m-Y');
      }

      /*******************/


      public function setFechaDesistidoAttribute($val)
      {
          $this->attributes['fechaDesistido'] = \Carbon\Carbon::parse($val)->format('Y-m-d');
      }

      
      public function getFechaDesistidoAttribute()
      {
          if($this->attributes['fechaDesistido'] != null)
          return  \Carbon\Carbon::parse($this->attributes['fechaDesistido'])->format('d-m-Y');
      }

      /*******************/

      public function setFechaJudicialAttribute($val)
      {
          $this->attributes['fechaJudicial'] = \Carbon\Carbon::parse($val)->format('Y-m-d');
      }

      
      public function getFechaJudicialAttribute()
      {
          if($this->attributes['fechaJudicial'] != null)
          return  \Carbon\Carbon::parse($this->attributes['fechaJudicial'])->format('d-m-Y');
      }

      /*******************/

      public function setFechaCanceladoAttribute($val)
      {
          $this->attributes['fechaCancelado'] = \Carbon\Carbon::parse($val)->format('Y-m-d');
      }

      
      public function getFechaCanceladoAttribute()
      {
          if($this->attributes['fechaCancelado'] != null)
          return  \Carbon\Carbon::parse($this->attributes['fechaCancelado'])->format('d-m-Y');
      }

      /*******************/

      public function setFechaEnviadoCfiAttribute($val)
      {
          $this->attributes['fechaEnviadoCfi'] = \Carbon\Carbon::parse($val)->format('Y-m-d');
      }

      
      public function getFechaEnviadoCfiAttribute()
      {
          if($this->attributes['fechaEnviadoCfi'] != null)
          return  \Carbon\Carbon::parse($this->attributes['fechaEnviadoCfi'])->format('d-m-Y');
      }

    
      /**************************************/
      
      public function setFechaCaducoBancoAttribute($val)
      {
          $this->attributes['fechaCaducoBanco'] = \Carbon\Carbon::parse($val)->format('Y-m-d');
      }
      public function getFechaCaducoBancoAttribute()
      {
          if($this->attributes['fechaCaducoBanco'] != null)
          return  \Carbon\Carbon::parse($this->attributes['fechaCaducoBanco'])->format('d-m-Y');
      }

      


      /**
       * Retorna la Provincia a la que pertenece la Localidad
       *
       * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
       */
      public function localidad()
      {
          return $this->belongsTo('App\Localidad', 'localidad_id');
      }

      /**
       * Retorna el Codigo Postal de la Localidad
       *
       * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
       */
      public function lineaCredito()
      {
          return $this->belongsTo('App\LineaCredito', 'lineaCredito_id');
      }

      public function estado()
      {
          return $this->belongsTo('App\Estado', 'estado_id');
      }

      public function estadoInterno()
      {
          return $this->belongsTo('App\EstadoInterno', 'estadoInterno_id');
      }

      public function sector()
      {
          return $this->belongsTo('App\Sector', 'sector_id');
      }

      public function figuraLegal()
      {
          return $this->belongsTo('App\FiguraLegal', 'figuraLegal_id');
      }

      public function periodicidad()
      {
          return $this->belongsTo('App\Periodicidad', 'periodicidad_id');
      }

      public function destinoCredito()
      {
          return $this->belongsTo('App\DestinoCredito', 'destinoCredito_id');
      }

      public function garantia()
      {
          return $this->belongsTo('App\Garantia', 'garantia_id');
      }

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
