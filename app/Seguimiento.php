<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use app\Movimiento;


class Seguimiento extends Model
{
      protected $dates = ['created_at', 'updated_at', 'deleted_at', 'fecha'];

      protected $table = 'seguimientos';

      public $timestamps = true;

      public function getRouteKeyName()
      {
            return 'slug';
      }


      protected $fillable = [
        'proyecto_id',
        'user_id',
        'fechaSeguimiento',
        'profesional_cfi',
        'profesional_uep',
        'grado_morosidad',
        'nro_entrevista',
        'evaluador_sectorial_cfi',
        'localizacion',
        'tipo_proyecto',
        'beneficiario1',
        'domicilio_beneficiario1',
        'telefono_beneficiario1',
        'beneficiario2',
        'domicilio_beneficiario2',
        'telefono_beneficiario2',
        'beneficiario3',
        'domicilio_beneficiario3',
        'telefono_beneficiario3',
        'personal_permanente',
        'personal_temporario',
        'personal_a_incorporar',
        'credito_cfi',
        'credito_otros_bancos',
        'aporte_propio',
        'credito_proveedores',
        'inv_preinversion',
        'inv_activo_fijo',
        'inv_ct',
        'prefinanciacion',
        'detalle_inversiones',
        'plazos_frecuencias_vigentes',
        'cant_cuotas',
        'frecuencia_amortizacion',
        'frecuencia_gracia',
        'empresa_activa_inactiva_parcial',
        'cambio_nomina',
        'cambio_afectan_empresa',
        'cambio_afectan_empresa_medida',
        'especificar_nombre1',
        'especificar_domicilio_telefono1',
        'especificar_nombre2',
        'especificar_domicilio_telefono2',
        'especificar_nombre3',
        'especificar_domicilio_telefono3',
        'especificar_nombre4',
        'especificar_domicilio_telefono4',
        'cambios_localizacion',
        'cambios_localizacion_causas',

        'nueva_localizacion_domicilio',
        'nueva_localizacion_localidad',
        'nueva_localizacion_telefono',
        'nueva_localizacion_cp',
        'nueva_localizacion_provincia',

        'puesta_en_marcha_nuevo_ampliacion',
        'puesta_en_marcha_si_no_parcial',
        'problema_1',
        'problema_2',
        'problema_3',
        'problema_4',
        'problema_5',
        'problema_6',
        'problema_7',
        'razones_10_2',
        'inv_previstas_si_no',
        'inv_previstas_desvios',

        'desvio_inv_problema_1',
        'desvio_inv_problema_2',
        'desvio_inv_problema_3',
        'desvio_inv_problema_4',
        'desvio_inv_problema_5',
        'desvio_inv_problema_6',
        'desvio_inv_problema_7',
        'desvio_inv_problema_8',

        'razones_11_2',

        'inv_verificacion_si_no',
        'forma_de_verificacion',
        'inv_proyectadas_si_no',
        'razones_11_5',
        'nuevas_inv_si_no',
        'monto_aprox_nuevas_inversiones',
        'd_nuevas_inv_12_1',
        'nuevas_inv_verificacion_si_no',
        'forma_verificacion_nuevas_inv',

        'pagina4_12_3_aumento_produccion',
        'pagina4_12_3_calidad_productos',
        'pagina4_12_3_disminucion_costos',
        'pagina4_12_3_otros',

        'm_p_si_no_13',
        'm_p_porcentaje_13',
        'm_p_razones_13',

        'insumos_si_no_13',
        'insumos_porcentaje_13',
        'insumos_razones_13',

        'mano_obra_si_no_13',
        'mano_obra_porcentaje_13',
        'mano_obra_razones_13',

        'otros_si_no_13',
        'otros_porcentaje_13',
        'otros_razones_13',

        'mo_antes_del_credito',
        'mo_con_el_credito',
        'mo_permanente',
        'mo_temporaria',

        'mo_aclaraciones_14',
        'p_f_si_no',


        'p_admin_15_1',
        'p_mp_15_1',
        'p_disp_mo_15_1',
        'p_calif_mo_15_1',
        'p_proc_prod_15_1',
        'p_comer_15_1',
        'p_finan_15_1',
        'p_serv_15_1',
        'p_cli_15_1',
        'p_otros_15_1',

        'descripcion_problmeas_15_2',

        'ingresos_aumentaron_16',
        'ingresos_disminuyeron_16',
        'ingresos_no_variaron_16',
        'ingresos_proporcion_16',

        'precio_productos_si_no_16_1',
        'p_prod_variacion_16_1',

        'volumen_vta_si_no_16_1',
        'volumen_vta_variacion_16_1',

        'gtos_comercializacion_si_no_16_1',
        'gtos_comercializacion_variacion_16_1',

        'nivel_prod_si_no_16_1',
        'nivel_prod_variacion_16_1',

        'otros_si_no_16_1',
        'otros_variacion_16_1',

        'observaciones_16_2',

        'p_a_ingresos_aumentaron_16_3',
        'p_a_ingresos_disminuyeron_16_3',
        'p_a_ingresos_no_variaron_16_3',
        'p_a_ingresos_proporcion_16_3',

        'periodo_anterior_ingresos_porque_16_4',

        'perspectiva_futuro_17',
        'perspectiva_futuro_porque_17',

        'problemas_pago_credito_18',
        'problemas_pago_si_actuales_futuros_18',
        'problmeas_pago_razones_18',

        'problemas_entrevista_anterior_19',
        'problemas_entrevista_anterior_como_19',
        'entrevista_anterior_razones_19_1',

        'asistencia_financiera_20',

        'asistencia_financiera_en_que_20',
        'asistencia_financiera_ampliacion_20_1',

        'anteriormente_capacitacion_20_2',
        'anteriormente_capac_tipo_cargo_20_2',
        'recibir_capacitacion_20_3',
        'en_que_temas_20_3',
        'importancia_actividad_21',

        'actividad_ppal_perspectiva_21_1',
        'observaciones_21_2',
        'opinion_responsable_22',
        'slug'
      ];


      public function setFechaSeguimientoAttribute($val)
      {
          $this->attributes['fechaSeguimiento'] = \Carbon\Carbon::parse($val)->format('Y-m-d');
          $string = str_slug($this->attributes['fechaSeguimiento']) . '-' . $this->attributes['proyecto_id'] . '-' . rand(5,50);
          $this->attributes['slug'] = str_slug($string);
      }


      public function getFechaSeguimientoAttribute()
      {
          return  \Carbon\Carbon::parse($this->attributes['fechaSeguimiento'])->format('d-m-Y');
      }


      public function proyecto()
      {
          return $this->belongsTo('App\Proyecto', 'proyecto_id');
      }


      public function user()
      {
          return $this->belongsTo('App\User', 'user_id');
      }



      public static function evaluarSeguimiento($proyecto)
      {
      //  dd($proyecto);
        if (is_null($proyecto->fechaEfectivizacion))
          return false;
        if (is_null($proyecto->fechaDesembolso))
          return false;
        if (!(is_null($proyecto->fechaDesistido)))
          return false;
        if (!(is_null($proyecto->fechaCancelado)))
          return false;
        if (!(is_null($proyecto->fechaArchivado)))
          return false;
        if($proyecto->estado->nombre != 'AMORTIZANDO')
          return false;

        return true;
      }


       protected static function boot() {

            parent::boot();
            // esto es para controlar cuando se puede crear un seguimiento
            //
            /*
            Seguimiento::creating(function($proyecto){
                if (is_null($proyecto->fechaEfectivizacion))
                  return false;
                if (is_null($proyecto->fechaDesembolso))
                  return false;
                if (!(is_null($proyecto->fechaDesistido)))
                  return false;
                if (!(is_null($proyecto->fechaCancelado)))
                  return false;
                if (!(is_null($proyecto->fechaArchivado)))
                  return false;
                if($proyecto->estado->nombre != 'AMORTIZANDO')
                  return false;

              return true;


            });
            */
            Seguimiento::created(function($proyecto){
                $movimiento = new app\Movimiento;
                $movimiento->fecha = $seguimiento->created_at;
                $movimiento->description = 'Seguimiento al Proyecto';
                $movimiento->proyecto_id = $seguimiento->proyecto_id;
                $movimiento->user_id     = $seguimiento->user_id;
                if($movimiento->save()){
                    return true;
                }else{
                    return false;
                }


            });

        }

}
