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
                    '10_2_describir_razones_consignadas'   => 'nullable',
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

                    '11_2_describir_razones_consignadas'   => 'nullable',

                    'inv_verificacion_si_no'   => 'nullable',
                    'forma_de_verificacion'   => 'nullable',
                    'inv_proyectadas_si_no'   => 'nullable',
                    '11_5_inv_proyectadas_razones'   => 'nullable',
                    'nuevas_inv_si_no'   => 'nullable',
                    'monto_aprox_nuevas_inversiones'   => 'nullable',
                    '12_1_detalle_nuevas_inversiones'   => 'nullable',
                    'nuevas_inv_verificacion_si_no'   => 'nullable',
                    'forma_verificacion_nuevas_inv'   => 'nullable',

                    'pagina4_12_3_aumento_produccion'   => 'nullable',
                    'pagina4_12_3_calidad_productos'   => 'nullable',
                    'pagina4_12_3_disminucion_costos'   => 'nullable',
                    'pagina4_12_3_otros'   => 'nullable',

                    '13_materia_prima_si_no'   => 'nullable',
                    '13_materia_prima_porcentaje'   => 'nullable',
                    '13_materia_prima_razones'   => 'nullable',

                    '13_insumos_si_no'   => 'nullable',
                    '13_insumos_porcentaje'   => 'nullable',
                    '13_insumos_razones'   => 'nullable',

                    '13_mano_obra_si_no'   => 'nullable',
                    '13_mano_obra_porcentaje'   => 'nullable',
                    '13_mano_obra_razones'   => 'nullable',

                    '13_otros_si_no'   => 'nullable',
                    '13_otros_porcentaje'   => 'nullable',
                    '13_otros_razones'   => 'nullable',

                    'mo_antes_del_credito'   => 'nullable',
                    'mo_con_el_credito'   => 'nullable',
                    'mo_permanente'   => 'nullable',
                    'mo_temporaria'   => 'nullable',

                    '14_mo_aclaraciones'   => 'nullable',
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

                    '15_2_descripcion_problmeas'   => 'nullable',

                    'ingresos_aumentaron_16'   => 'nullable',
                    'ingresos_disminuyeron_16'   => 'nullable',
                    'ingresos_no_variaron_16'   => 'nullable',
                    '16_ingresos_proporcion'   => 'nullable',

                    'precio_productos_si_no_16_1'   => 'nullable',
                    '16_1_precio_productos_variacion'   => 'nullable',

                    'volumen_vta_si_no_16_1'   => 'nullable',
                    '16_1_volumen_vta_variacion'   => 'nullable',

                    'gtos_comercializacion_si_no_16_1'   => 'nullable',
                    '16_1_gtos_comercializacion_variacion'   => 'nullable',

                    'nivel_prod_si_no_16_1'   => 'nullable',
                    '16_1_nivel_prod_variacion'   => 'nullable',

                    'otros_si_no_16_1'   => 'nullable',
                    '16_1_otros_variacion'   => 'nullable',

                    '16_2_observaciones'   => 'nullable',

                    'p_a_ingresos_aumentaron_16_3'   => 'nullable',
                    'p_a_ingresos_disminuyeron_16_3'   => 'nullable',
                    'p_a_ingresos_no_variaron_16_3'   => 'nullable',
                    '16_3_p_a_ingresos_proporcion'   => 'nullable',

                    '16_4_periodo_anterior_ingresos_porque'   => 'nullable',

                    '17_perspectiva_futuro'   => 'nullable',
                    '17_perspectiva_futuro_porque'   => 'nullable',

                    '18_problemas_pago_credito'   => 'nullable',
                    '18_problemas_pago_si_actuales_futuros'   => 'nullable',
                    '18_problmeas_pago_razones'   => 'nullable',

                    '19_problemas_entrevista_anterior'   => 'nullable',
                    '19_problemas_entrevista_anterior_como'   => 'nullable',
                    '19_1_entrevista_anterior_razones'   => 'nullable',

                    '20_asistencia_financiera'   => 'nullable',

                    '20_asistencia_financiera_en_que'   => 'nullable',
                    '20_1_asistencia_financiera_ampliacion'   => 'nullable',

                    '20_2_anteriormente_capacitacion'   => 'nullable',
                    '20_2_anteriormente_capac_tipo_cargo'   => 'nullable',
                    '20_3_recibir_capacitacion'   => 'nullable',
                    '20_3_en_que_temas'   => 'nullable',
                    '21_importancia_actividad'   => 'nullable',

                    '21_1_actividad_ppal_perspectiva'   => 'nullable',
                    '21_2_observaciones'   => 'nullable',
                    '22_opinion_responsable'   => 'nullable',
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
                    '10_2_describir_razones_consignadas'   => 'nullable',
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

                    '11_2_describir_razones_consignadas'   => 'nullable',

                    'inv_verificacion_si_no'   => 'nullable',
                    'forma_de_verificacion'   => 'nullable',
                    'inv_proyectadas_si_no'   => 'nullable',
                    '11_5_inv_proyectadas_razones'   => 'nullable',
                    'nuevas_inv_si_no'   => 'nullable',
                    'monto_aprox_nuevas_inversiones'   => 'nullable',
                    '12_1_detalle_nuevas_inversiones'   => 'nullable',
                    'nuevas_inv_verificacion_si_no'   => 'nullable',
                    'forma_verificacion_nuevas_inv'   => 'nullable',

                    'pagina4_12_3_aumento_produccion'   => 'nullable',
                    'pagina4_12_3_calidad_productos'   => 'nullable',
                    'pagina4_12_3_disminucion_costos'   => 'nullable',
                    'pagina4_12_3_otros'   => 'nullable',

                    '13_materia_prima_si_no'   => 'nullable',
                    '13_materia_prima_porcentaje'   => 'nullable',
                    '13_materia_prima_razones'   => 'nullable',

                    '13_insumos_si_no'   => 'nullable',
                    '13_insumos_porcentaje'   => 'nullable',
                    '13_insumos_razones'   => 'nullable',

                    '13_mano_obra_si_no'   => 'nullable',
                    '13_mano_obra_porcentaje'   => 'nullable',
                    '13_mano_obra_razones'   => 'nullable',

                    '13_otros_si_no'   => 'nullable',
                    '13_otros_porcentaje'   => 'nullable',
                    '13_otros_razones'   => 'nullable',

                    'mo_antes_del_credito'   => 'nullable',
                    'mo_con_el_credito'   => 'nullable',
                    'mo_permanente'   => 'nullable',
                    'mo_temporaria'   => 'nullable',

                    '14_mo_aclaraciones'   => 'nullable',
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

                    '15_2_descripcion_problmeas'   => 'nullable',

                    'ingresos_aumentaron_16'   => 'nullable',
                    'ingresos_disminuyeron_16'   => 'nullable',
                    'ingresos_no_variaron_16'   => 'nullable',
                    '16_ingresos_proporcion'   => 'nullable',

                    'precio_productos_si_no_16_1'   => 'nullable',
                    '16_1_precio_productos_variacion'   => 'nullable',

                    'volumen_vta_si_no_16_1'   => 'nullable',
                    '16_1_volumen_vta_variacion'   => 'nullable',

                    'gtos_comercializacion_si_no_16_1'   => 'nullable',
                    '16_1_gtos_comercializacion_variacion'   => 'nullable',

                    'nivel_prod_si_no_16_1'   => 'nullable',
                    '16_1_nivel_prod_variacion'   => 'nullable',

                    'otros_si_no_16_1'   => 'nullable',
                    '16_1_otros_variacion'   => 'nullable',

                    '16_2_observaciones'   => 'nullable',

                    'p_a_ingresos_aumentaron_16_3'   => 'nullable',
                    'p_a_ingresos_disminuyeron_16_3'   => 'nullable',
                    'p_a_ingresos_no_variaron_16_3'   => 'nullable',
                    '16_3_p_a_ingresos_proporcion'   => 'nullable',

                    '16_4_periodo_anterior_ingresos_porque'   => 'nullable',

                    '17_perspectiva_futuro'   => 'nullable',
                    '17_perspectiva_futuro_porque'   => 'nullable',

                    '18_problemas_pago_credito'   => 'nullable',
                    '18_problemas_pago_si_actuales_futuros'   => 'nullable',
                    '18_problmeas_pago_razones'   => 'nullable',

                    '19_problemas_entrevista_anterior'   => 'nullable',
                    '19_problemas_entrevista_anterior_como'   => 'nullable',
                    '19_1_entrevista_anterior_razones'   => 'nullable',

                    '20_asistencia_financiera'   => 'nullable',

                    '20_asistencia_financiera_en_que'   => 'nullable',
                    '20_1_asistencia_financiera_ampliacion'   => 'nullable',

                    '20_2_anteriormente_capacitacion'   => 'nullable',
                    '20_2_anteriormente_capac_tipo_cargo'   => 'nullable',
                    '20_3_recibir_capacitacion'   => 'nullable',
                    '20_3_en_que_temas'   => 'nullable',
                    '21_importancia_actividad'   => 'nullable',

                    '21_1_actividad_ppal_perspectiva'   => 'nullable',
                    '21_2_observaciones'   => 'nullable',
                    '22_opinion_responsable'   => 'nullable',
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
