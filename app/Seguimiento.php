<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use app\Movimiento;


class Seguimiento extends Model
{
      protected $dates = ['created_at', 'updated_at', 'deleted_at', 'fecha'];

      protected $table = 'seguimientos';
    
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
        '10_2_describir_razones_consignadas',
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

        '11_2_describir_razones_consignadas',

        'inv_verificacion_si_no',
        'forma_de_verificacion',
        'inv_proyectadas_si_no',
        '11_5_inv_proyectadas_razones',
        'nuevas_inv_si_no',
        'monto_aprox_nuevas_inversiones',
        '12_1_detalle_nuevas_inversiones',
        'nuevas_inv_verificacion_si_no',
        'forma_verificacion_nuevas_inv',

        'pagina4_12_3_aumento_produccion',
        'pagina4_12_3_calidad_productos',
        'pagina4_12_3_disminucion_costos',
        'pagina4_12_3_otros',

        '13_materia_prima_si_no',
        '13_materia_prima_porcentaje',
        '13_materia_prima_razones',

        '13_insumos_si_no',
        '13_insumos_porcentaje',
        '13_insumos_razones',

        '13_mano_obra_si_no',
        '13_mano_obra_porcentaje',
        '13_mano_obra_razones',

        '13_otros_si_no',
        '13_otros_porcentaje',
        '13_otros_razones',

        'mo_antes_del_credito',
        'mo_con_el_credito',
        'mo_permanente',
        'mo_temporaria',

        '14_mo_aclaraciones',
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

        '15_2_descripcion_problmeas',

        'ingresos_aumentaron_16',
        'ingresos_disminuyeron_16',
        'ingresos_no_variaron_16',
        '16_ingresos_proporcion',

        'precio_productos_si_no_16_1',
        '16_1_precio_productos_variacion',

        'volumen_vta_si_no_16_1',
        '16_1_volumen_vta_variacion',

        'gtos_comercializacion_si_no_16_1',
        '16_1_gtos_comercializacion_variacion',

        'nivel_prod_si_no_16_1',
        '16_1_nivel_prod_variacion',

        'otros_si_no_16_1',
        '16_1_otros_variacion',

        '16_2_observaciones',

        'p_a_ingresos_aumentaron_16_3',
        'p_a_ingresos_disminuyeron_16_3',
        'p_a_ingresos_no_variaron_16_3',
        '16_3_p_a_ingresos_proporcion',

        '16_4_periodo_anterior_ingresos_porque',

        '17_perspectiva_futuro',
        '17_perspectiva_futuro_porque',

        '18_problemas_pago_credito',
        '18_problemas_pago_si_actuales_futuros',
        '18_problmeas_pago_razones',

        '19_problemas_entrevista_anterior',
        '19_problemas_entrevista_anterior_como',
        '19_1_entrevista_anterior_razones',

        '20_asistencia_financiera',

        '20_asistencia_financiera_en_que',
        '20_1_asistencia_financiera_ampliacion',

        '20_2_anteriormente_capacitacion',
        '20_2_anteriormente_capac_tipo_cargo',
        '20_3_recibir_capacitacion',
        '20_3_en_que_temas',
        '21_importancia_actividad',

        '21_1_actividad_ppal_perspectiva',
        '21_2_observaciones',
        '22_opinion_responsable',
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
