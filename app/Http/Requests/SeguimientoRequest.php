<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeguimientoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
     public function rules()
     {
         $seguimiento = $this->route('seguimiento');

         switch ($this->method()) {
             case 'GET':
             case 'DELETE': {
                 return [];
             }
             case 'POST': {
                 return [
                    'proyecto_id'              => 'required|exists:proyectos,id',
                    'fechaSeguimiento'        => 'date|required',
                    'profesional_cfi'          => 'nullable',
                    'profesional_uep'          => 'nullable',
                    'grado_morosidad'          => 'integer|nullable',
                    'nro_entrevista'           => 'integer|nullable',
                    'evaluador_sectorial_cfi'  => 'nullable',
                    'localizacion'             => 'nullable',
                    'tipo_proyecto'            => 'nullable',
                    'beneficiario1'            => 'nullable',
                    'domicilio_beneficiario1'  => 'nullable',
                    'telefono_beneficiario1'   => 'nullable',
                    'beneficiario2'            => 'nullable',
                    'domicilio_beneficiario2'  => 'nullable',
                    'telefono_beneficiario2'   => 'nullable',
                    'beneficiario3'            => 'nullable',
                    'domicilio_beneficiario3'  => 'nullable',
                    'telefono_beneficiario3'   => 'nullable',
                    'personal_permanente'      => 'integer|nullable',
                    'personal_temporario'      => 'integer|nullable',
                    'personal_a_incorporar'    => 'integer|nullable',
                    'credito_cfi'              => 'nullable',
                    'credito_otros_bancos'     => 'nullable',
                    'aporte_propio'            => 'nullable',
                    'credito_proveedores'      => 'nullable',
                    'inv_preinversion'         => 'nullable',
                    'inv_activo_fijo'          => 'nullable',
                    'inv_ct'                   => 'nullable',
                    'prefinanciacion'          => 'nullable',
                    'detalle_inversiones'      => 'nullable',
                    'plazos_frecuencias_vigentes'  => 'nullable',
                    'cant_cuotas'              => 'integer|nullable',
                    'frecuencia_amortizacion'  => 'nullable',
                    'frecuencia_gracia'        => 'nullable',
                    'empresa_activa'           => 'nullable',
                    'empresa_inactiva'         => 'nullable',
                    'empresa_parcial'          => 'nullable',
                    'cambio_nomina'            => 'nullable',
                    'cambio_afectan_empresa'   => 'nullable',
                    'cambio_afectan_empresa_medida'   => 'nullable',
                    'especificar_nombre1'      => 'nullable',
                    'especificar_domicilio_telefono1'      => 'nullable',
                    'especificar_nombre2'      => 'nullable',
                    'especificar_domicilio_telefono2'      => 'nullable',
                    'especificar_nombre3'      => 'nullable',
                    'especificar_domicilio_telefono3'      => 'nullable',
                    'especificar_nombre4'      => 'nullable',
                    'especificar_domicilio_telefono4'      => 'nullable',
                    'cambios_localizacion'      => 'nullable',
                    'cambios_localizacion_causas'   => 'nullable',

                    'nueva_localizacion_domicilio'   => 'nullable',
                    'nueva_localizacion_localidad'   => 'nullable',
                    'nueva_localizacion_telefono'   => 'nullable',
                    'nueva_localizacion_cp'   => 'nullable',
                    'nueva_localizacion_provincia'   => 'nullable',

                    'puesta_en_marcha_nuevo_ampliacion'   => 'nullable',
                    'puesta_en_marcha_si_no'   => 'nullable',
                    'puesta_en_marcha_parcial' => 'nullable',
                    'problema_1'   => 'nullable',
                    'problema_2'   => 'nullable',
                    'problema_3'   => 'nullable',
                    'problema_4'   => 'nullable',
                    'problema_5'   => 'nullable',
                    'problema_6'   => 'nullable',
                    'problema_7'   => 'nullable',
                    'razones_10_2'   => 'nullable',
                    'inv_previstas_si_no'   => 'nullable',
                    'inv_previstas_desvios'   => 'nullable',

                    'desvio_inv_problema_1'   => 'nullable',
                    'desvio_inv_problema_2'   => 'nullable',
                    'desvio_inv_problema_3'   => 'nullable',
                    'desvio_inv_problema_4'   => 'nullable',
                    'desvio_inv_problema_5'   => 'nullable',
                    'desvio_inv_problema_6'   => 'nullable',
                    'desvio_inv_problema_7'   => 'nullable',
                    'desvio_inv_problema_8'   => 'nullable',

                    'razones_11_2'   => 'nullable',

                    'inv_verificacion_si_no'   => 'nullable',
                    'forma_de_verificacion'   => 'nullable',
                    'inv_proyectadas_si_no'   => 'nullable',
                    'razones_11_5'   => 'nullable',
                    'nuevas_inv_si_no'   => 'nullable',
                    'monto_aprox_nuevas_inversiones'   => 'nullable',
                    'd_nuevas_inv_12_1'   => 'nullable',
                    'nuevas_inv_verificacion_si_no'   => 'nullable',
                    'forma_verificacion_nuevas_inv'   => 'nullable',

                    'pagina4_12_3_aumento_produccion'   => 'nullable',
                    'pagina4_12_3_calidad_productos'   => 'nullable',
                    'pagina4_12_3_disminucion_costos'   => 'nullable',
                    'pagina4_12_3_otros'   => 'nullable',

                    'm_p_si_no_13'   => 'nullable',
                    'm_p_porcentaje_13'   => 'nullable',
                    'm_p_razones_13'   => 'nullable',

                    'insumos_si_no_13'   => 'nullable',
                    'insumos_porcentaje_13'   => 'nullable',
                    'insumos_razones_13'   => 'nullable',

                    'mano_obra_si_no_13'   => 'nullable',
                    'mano_obra_porcentaje_13'   => 'nullable',
                    'mano_obra_razones_13'   => 'nullable',

                    'otros_si_no_13'   => 'nullable',
                    'otros_porcentaje_13'   => 'nullable',
                    'otros_razones_13'   => 'nullable',

                    'mo_antes_del_credito'   => 'nullable',
                    'mo_con_el_credito'   => 'nullable',
                    'mo_permanente'   => 'nullable',
                    'mo_temporaria'   => 'nullable',

                    'mo_aclaraciones_14'   => 'nullable',
                    'p_f_si_no'   => 'nullable',


                    'p_admin_15_1' => 'nullable',
                    'p_mp_15_1' => 'nullable',
                    'p_disp_mo_15_1' => 'nullable',
                    'p_calif_mo_15_1' => 'nullable',
                    'p_proc_prod_15_1' => 'nullable',
                    'p_comer_15_1' => 'nullable',
                    'p_finan_15_1' => 'nullable',
                    'p_serv_15_1' => 'nullable',
                    
                    'p_cli_15_1' => 'nullable',
                    'p_otros_15_1' => 'nullable',

                    'descripcion_problmeas_15_2'   => 'nullable',

                    'ingresos_aumentaron_16'   => 'nullable',
                    'ingresos_disminuyeron_16'   => 'nullable',
                    'ingresos_no_variaron_16'   => 'nullable',
                    'ingresos_proporcion_16'   => 'nullable',

                    'precio_productos_si_no_16_1'   => 'nullable',
                    'p_prod_variacion_16_1'   => 'nullable',

                    'volumen_vta_si_no_16_1'   => 'nullable',




                    'volumen_vta_variacion_16_1'   => 'nullable',

                    'gtos_comercializacion_si_no_16_1'   => 'nullable',
                    'gtos_comercializacion_variacion_16_1'   => 'nullable',

                    'nivel_prod_si_no_16_1'   => 'nullable',
                    'nivel_prod_variacion_16_1'   => 'nullable',

                    'otros_si_no_16_1'   => 'nullable',
                    'otros_variacion_16_1'   => 'nullable',

                    'observaciones_16_2'   => 'nullable',

                    'p_a_ingresos_aumentaron_16_3'   => 'nullable',
                    'p_a_ingresos_disminuyeron_16_3'   => 'nullable',
                    'p_a_ingresos_no_variaron_16_3'   => 'nullable',
                    'p_a_ingresos_proporcion_16_3'   => 'nullable',

                    'periodo_anterior_ingresos_porque_16_4'   => 'nullable',

                    'perspectiva_futuro_17'   => 'nullable',
                    'perspectiva_futuro_porque_17'   => 'nullable',

                    'problemas_pago_credito_18'   => 'nullable',
                    'problemas_pago_si_actuales_futuros_18'   => 'nullable',
                    'problmeas_pago_razones_18'   => 'nullable',

                    'problemas_entrevista_anterior_19'   => 'nullable',
                    'problemas_entrevista_anterior_como_19'   => 'nullable',
                    'entrevista_anterior_razones_19_1'   => 'nullable',

                    'asistencia_financiera_20'   => 'nullable',

                    'asistencia_financiera_en_que_20'   => 'nullable',
                    'asistencia_financiera_ampliacion_20_1'   => 'nullable',

                    'anteriormente_capacitacion_20_2'   => 'nullable',
                    'anteriormente_capac_tipo_cargo_20_2'   => 'nullable',
                    'recibir_capacitacion_20_3'   => 'nullable',
                    'en_que_temas_20_3'   => 'nullable',
                    'importancia_actividad_21'   => 'nullable',

                    'actividad_ppal_perspectiva_21_1'   => 'nullable',
                    'observaciones_21_2'   => 'nullable',
                    'opinion_responsable_22'   => 'nullable',
                    'slug'       => 'nullable'

                 ];
             }
             case 'PUT':
             case 'PATCH': {
                 return [
                    'proyecto_id'              => 'required|exists:proyectos,id',
                    'fechaSeguimiento'        => 'date|required',
                    'profesional_cfi'          => 'nullable',
                    'profesional_uep'          => 'nullable',
                    'grado_morosidad'          => 'integer|nullable',
                    'nro_entrevista'           => 'integer|nullable',
                    'evaluador_sectorial_cfi'  => 'nullable',
                    'localizacion'             => 'nullable',
                    'tipo_proyecto'            => 'nullable',
                    'beneficiario1'            => 'nullable',
                    'domicilio_beneficiario1'  => 'nullable',
                    'telefono_beneficiario1'   => 'nullable',
                    'beneficiario2'            => 'nullable',
                    'domicilio_beneficiario2'  => 'nullable',
                    'telefono_beneficiario2'   => 'nullable',
                    'beneficiario3'            => 'nullable',
                    'domicilio_beneficiario3'  => 'nullable',
                    'telefono_beneficiario3'   => 'nullable',
                    'personal_permanente'      => 'integer|nullable',
                    'personal_temporario'      => 'integer|nullable',
                    'personal_a_incorporar'    => 'integer|nullable',
                    'credito_cfi'              => 'nullable',
                    'credito_otros_bancos'     => 'nullable',
                    'aporte_propio'            => 'nullable',
                    'credito_proveedores'      => 'nullable',
                    'inv_preinversion'         => 'nullable',
                    'inv_activo_fijo'          => 'nullable',
                    'inv_ct'                   => 'nullable',
                    'prefinanciacion'          => 'nullable',
                    'detalle_inversiones'      => 'nullable',
                    'plazos_frecuencias_vigentes'  => 'nullable',
                    'cant_cuotas'              => 'integer|nullable',
                    'frecuencia_amortizacion'  => 'nullable',
                    'frecuencia_gracia'        => 'nullable',
                    'empresa_activa'           => 'nullable',
                    'empresa_inactiva'         => 'nullable',
                    'empresa_parcial'          => 'nullable',
                    'cambio_nomina'            => 'nullable',
                    'cambio_afectan_empresa'   => 'nullable',
                    'cambio_afectan_empresa_medida'   => 'nullable',
                    'especificar_nombre1'      => 'nullable',
                    'especificar_domicilio_telefono1'      => 'nullable',
                    'especificar_nombre2'      => 'nullable',
                    'especificar_domicilio_telefono2'      => 'nullable',
                    'especificar_nombre3'      => 'nullable',
                    'especificar_domicilio_telefono3'      => 'nullable',
                    'especificar_nombre4'      => 'nullable',
                    'especificar_domicilio_telefono4'      => 'nullable',
                    'cambios_localizacion'      => 'nullable',
                    'cambios_localizacion_causas'   => 'nullable',

                    'nueva_localizacion_domicilio'   => 'nullable',
                    'nueva_localizacion_localidad'   => 'nullable',
                    'nueva_localizacion_telefono'   => 'nullable',
                    'nueva_localizacion_cp'   => 'nullable',
                    'nueva_localizacion_provincia'   => 'nullable',

                    'puesta_en_marcha_nuevo_ampliacion'   => 'nullable',
                    'puesta_en_marcha_si_no'   => 'nullable',
                    'puesta_en_marcha_parcial' => 'nullable',
                    'problema_1'   => 'nullable',
                    'problema_2'   => 'nullable',
                    'problema_3'   => 'nullable',
                    'problema_4'   => 'nullable',
                    'problema_5'   => 'nullable',
                    'problema_6'   => 'nullable',
                    'problema_7'   => 'nullable',
                    'razones_10_2'   => 'nullable',
                    'inv_previstas_si_no'   => 'nullable',
                    'inv_previstas_desvios'   => 'nullable',

                    'desvio_inv_problema_1'   => 'nullable',
                    'desvio_inv_problema_2'   => 'nullable',
                    'desvio_inv_problema_3'   => 'nullable',
                    'desvio_inv_problema_4'   => 'nullable',
                    'desvio_inv_problema_5'   => 'nullable',
                    'desvio_inv_problema_6'   => 'nullable',
                    'desvio_inv_problema_7'   => 'nullable',
                    'desvio_inv_problema_8'   => 'nullable',

                    'razones_11_2'   => 'nullable',

                    'inv_verificacion_si_no'   => 'nullable',
                    'forma_de_verificacion'   => 'nullable',
                    'inv_proyectadas_si_no'   => 'nullable',
                    'razones_11_5'   => 'nullable',
                    'nuevas_inv_si_no'   => 'nullable',
                    'monto_aprox_nuevas_inversiones'   => 'nullable',
                    'd_nuevas_inv_12_1'   => 'nullable',
                    'nuevas_inv_verificacion_si_no'   => 'nullable',
                    'forma_verificacion_nuevas_inv'   => 'nullable',

                    'pagina4_12_3_aumento_produccion'   => 'nullable',
                    'pagina4_12_3_calidad_productos'   => 'nullable',
                    'pagina4_12_3_disminucion_costos'   => 'nullable',
                    'pagina4_12_3_otros'   => 'nullable',

                    'm_p_si_no_13'   => 'nullable',
                    'm_p_porcentaje_13'   => 'nullable',
                    'm_p_razones_13'   => 'nullable',

                    'insumos_si_no_13'   => 'nullable',
                    'insumos_porcentaje_13'   => 'nullable',
                    'insumos_razones_13'   => 'nullable',

                    'mano_obra_si_no_13'   => 'nullable',
                    'mano_obra_porcentaje_13'   => 'nullable',
                    'mano_obra_razones_13'   => 'nullable',

                    'otros_si_no_13'   => 'nullable',
                    'otros_porcentaje_13'   => 'nullable',
                    'otros_razones_13'   => 'nullable',

                    'mo_antes_del_credito'   => 'nullable',
                    'mo_con_el_credito'   => 'nullable',
                    'mo_permanente'   => 'nullable',
                    'mo_temporaria'   => 'nullable',

                    'mo_aclaraciones_14'   => 'nullable',
                    'p_f_si_no'   => 'nullable',


                    'p_admin_15_1' => 'nullable',
                    'p_mp_15_1' => 'nullable',
                    'p_disp_mo_15_1' => 'nullable',
                    'p_calif_mo_15_1' => 'nullable',
                    'p_proc_prod_15_1' => 'nullable',
                    'p_comer_15_1' => 'nullable',
                    'p_finan_15_1' => 'nullable',
                    'p_serv_15_1' => 'nullable',
                   
                    'p_cli_15_1' => 'nullable',
                    'p_otros_15_1' => 'nullable',

                    'descripcion_problmeas_15_2'   => 'nullable',

                    'ingresos_aumentaron_16'   => 'nullable',
                    'ingresos_disminuyeron_16'   => 'nullable',
                    'ingresos_no_variaron_16'   => 'nullable',
                    'ingresos_proporcion_16'   => 'nullable',

                    'precio_productos_si_no_16_1'   => 'nullable',


                    'volumen_vta_variacion_16_1'   => 'nullable',

                    'gtos_comercializacion_si_no_16_1'   => 'nullable',
                    'gtos_comercializacion_variacion_16_1'   => 'nullable',

                    'nivel_prod_si_no_16_1'   => 'nullable',
                    'nivel_prod_variacion_16_1'   => 'nullable',

                    'otros_si_no_16_1'   => 'nullable',
                    'otros_variacion_16_1'   => 'nullable',

                    'observaciones_16_2'   => 'nullable',

                    'p_a_ingresos_aumentaron_16_3'   => 'nullable',
                    'p_a_ingresos_disminuyeron_16_3'   => 'nullable',
                    'p_a_ingresos_no_variaron_16_3'   => 'nullable',
                    'p_a_ingresos_proporcion_16_3'   => 'nullable',

                    'periodo_anterior_ingresos_porque_16_4'   => 'nullable',





                    'perspectiva_futuro_17'   => 'nullable',
                    'perspectiva_futuro_porque_17'   => 'nullable',

                    'problemas_pago_credito_18'   => 'nullable',
                    'problemas_pago_si_actuales_futuros_18'   => 'nullable',
                    'problmeas_pago_razones_18'   => 'nullable',

                    'problemas_entrevista_anterior_19'   => 'nullable',
                    'problemas_entrevista_anterior_como_19'   => 'nullable',
                    'entrevista_anterior_razones_19_1'   => 'nullable',

                    'asistencia_financiera_20'   => 'nullable',

                    'asistencia_financiera_en_que_20'   => 'nullable',
                    'asistencia_financiera_ampliacion_20_1'   => 'nullable',

                    'anteriormente_capacitacion_20_2'   => 'nullable',
                    'anteriormente_capac_tipo_cargo_20_2'   => 'nullable',
                    'recibir_capacitacion_20_3'   => 'nullable',
                    'en_que_temas_20_3'   => 'nullable',
                    'importancia_actividad_21'   => 'nullable',

                    'actividad_ppal_perspectiva_21_1'   => 'nullable',
                    'observaciones_21_2'   => 'nullable',
                    'opinion_responsable_22'   => 'nullable',
                    'slug'       => 'nullable|unique:seguimientos,slug,' . $seguimiento->id,
                 ];
             }
             default:
                 break;
         }
     }
     public function messages()
     {
        return [
            'proyecto_id.required' => 'Deberá completar el Proyecto del Seguimiento',
           
        ];
    }
}
