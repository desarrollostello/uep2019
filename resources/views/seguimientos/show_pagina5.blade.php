
<!-- INICIO PAGINA 5 -->

<div class="row">
  <div class="form-group col-sm-10">
    13. SE HAN REGISTRADO CAMBIOS SIGNIFICATIVOS EN LOS COSTOS TOTALES DE PROEUCCIÓN?
  </div>
</div>


<div class="row">
  <div class="form-group col-sm-10">

        <table id="table" class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>CONCEPTO</th>
                <th style="height: 34px; padding: 6px 12px; font-size: 12px; line-height: 1.42857143; color: #555555; background-color: #fff;background-image: none; border: 1px solid #ccc;" class="text-center" width="15%">SI / NO</th>
                <th style="height: 34px; padding: 6px 12px; font-size: 12px; line-height: 1.42857143; color: #555555; background-color: #fff;background-image: none; border: 1px solid #ccc;" class="text-center" width="10%">%</th>
                <th style="height: 34px; padding: 6px 12px; font-size: 12px; line-height: 1.42857143; color: #555555; background-color: #fff;background-image: none; border: 1px solid #ccc;" class="text-center" width="50%">RAZONES</th>
                
            </tr>
            </thead>
           
            <tbody>
                <tr>
                    <td style="height: 34px; padding: 6px 12px; font-size: 12px; line-height: 1.42857143; color: #555555; background-color: #fff;background-image: none; border: 1px solid #ccc;">Materia Prima</td>
                    <td style="height: 34px; padding: 6px 12px; font-size: 12px; line-height: 1.42857143; color: #555555; background-color: #fff;background-image: none; border: 1px solid #ccc;" class="text-center"> {{ $seguimiento->m_p_si_no_13 }}  </td>
                    <td style="height: 34px; padding: 6px 12px; font-size: 12px; line-height: 1.42857143; color: #555555; background-color: #fff;background-image: none; border: 1px solid #ccc;" class="text-center"> {{ $seguimiento->m_p_porcentaje_13 }}  </td>
                    <td style="height: 34px; padding: 6px 12px; font-size: 12px; line-height: 1.42857143; color: #555555; background-color: #fff;background-image: none; border: 1px solid #ccc;" class="text-center"> {{ $seguimiento->m_p_razones_13 }}  </td>
                </tr>

                <tr>
                    <td style="height: 34px; padding: 6px 12px; font-size: 12px; line-height: 1.42857143; color: #555555; background-color: #fff;background-image: none; border: 1px solid #ccc;">Insumos</td>
                    <td style="height: 34px; padding: 6px 12px; font-size: 12px; line-height: 1.42857143; color: #555555; background-color: #fff;background-image: none; border: 1px solid #ccc;" class="text-center"> {{ $seguimiento->insumos_si_no_13 }} </td>
                    <td style="height: 34px; padding: 6px 12px; font-size: 12px; line-height: 1.42857143; color: #555555; background-color: #fff;background-image: none; border: 1px solid #ccc;" class="text-center">  {{ $seguimiento->insumos_porcentaje_13 }} </td>
                    <td style="height: 34px; padding: 6px 12px; font-size: 12px; line-height: 1.42857143; color: #555555; background-color: #fff;background-image: none; border: 1px solid #ccc;" class="text-center"> {{ $seguimiento->insumos_razones_13 }} </td>
                </tr>

                <tr>
                    <td style="height: 34px; padding: 6px 12px; font-size: 12px; line-height: 1.42857143; color: #555555; background-color: #fff;background-image: none; border: 1px solid #ccc;">Mano de Obra</td>
                    <td style="height: 34px; padding: 6px 12px; font-size: 12px; line-height: 1.42857143; color: #555555; background-color: #fff;background-image: none; border: 1px solid #ccc;" class="text-center"> {{ $seguimiento->mano_obra_si_no_13 }} </td>
                    <td style="height: 34px; padding: 6px 12px; font-size: 12px; line-height: 1.42857143; color: #555555; background-color: #fff;background-image: none; border: 1px solid #ccc;" class="text-center"> {{ $seguimiento->mano_obra_porcentaje_13 }}  </td>
                    <td style="height: 34px; padding: 6px 12px; font-size: 12px; line-height: 1.42857143; color: #555555; background-color: #fff;background-image: none; border: 1px solid #ccc;" class="text-center"> {{ $seguimiento->mano_obra_razones_13 }}  </td>
                </tr>

                <tr>
                    <td style="height: 34px; padding: 6px 12px; font-size: 12px; line-height: 1.42857143; color: #555555; background-color: #fff;background-image: none; border: 1px solid #ccc;">Otros</td>
                    <td style="height: 34px; padding: 6px 12px; font-size: 12px; line-height: 1.42857143; color: #555555; background-color: #fff;background-image: none; border: 1px solid #ccc;" class="text-center"> {{ $seguimiento->otros_si_no_13 }}  </td>
                    <td style="height: 34px; padding: 6px 12px; font-size: 12px; line-height: 1.42857143; color: #555555; background-color: #fff;background-image: none; border: 1px solid #ccc;" class="text-center"> {{ $seguimiento->otros_porcentaje_13 }}   </td>
                    <td style="height: 34px; padding: 6px 12px; font-size: 12px; line-height: 1.42857143; color: #555555; background-color: #fff;background-image: none; border: 1px solid #ccc;" class="text-center"> {{ $seguimiento->otros_razones_13 }}  </td>
                </tr>
              
            </tbody>
        </table>
  </div>
</div>


<div class="row">
  <div class="form-group col-sm-6">
    14. MANO DE OTRA EMPLEADA
  </div>
</div>


<div class="row">
  <div class="form-group col-sm-4">
      <table id="table" class="table table-striped table-bordered">
         
          <tr>
              <th>ANTES DEL CRÉDITO</th>
              <td class="form-control"> {{ $seguimiento->mo_antes_del_credito }}  </td>
             
          </tr>
          <tr>
            <th>CON EL CRÉDITO</th>
            <td class="form-control"> {{ $seguimiento->mo_con_el_credito }} </td>
           
          </tr>

          <tr>
              <th>PERMANENTE</th>
              <td class="form-control"> {{ $seguimiento->mo_permanente }}  </td>
              
          </tr>
          <tr>
            <th>TEMPORARIA</th>
            <td class="form-control"> {{ $seguimiento->mo_temporaria }}   </td>
            
          </tr>
      </table>
  </div>
</div>

<div class="row">
  <div class="form-group col-sm-10">
    ACLARACIONES
  </div>
</div>

<div class="row">
    <div class="form-group col-sm-11">
        <span  class="form-control"> {{ $seguimiento->mo_aclaraciones_14 }} </span>
    </div>
</div>


<div class="row">
  <div class="form-group col-sm-10">
    15. LA EMPRESA TIENE PROBLEMAS DE FUNCIONAMIENTO?
  </div>
</div>
<div class="row">
  <div class="form-group col-sm-3">
      <table id="table" class="table table-striped table-bordered">
          <thead>
          <tr>
              <th>SI / NO</th>   
          </tr>
          </thead>
          <tbody>
              <tr>
                  <td class="form-control"> {{ $seguimiento->problemas_funcionamiento_si_no }}  </td>
              </tr>
          </tbody>
      </table>
  </div>
</div>


<div class="row">
  <div class="form-group col-sm-10">
    15.1. CUALES?
  </div>
</div>




<div class="row">
    <div class="form-group col-sm-7">
        <ul class="list-group">
            <li class="list-group-item">
                a. Administrativos-contables
                <div class="material-switch pull-right">
                    <input type="checkbox" name="p_admin_15_1" id="p_admin_15_1" {{$seguimiento->p_admin_15_1 == 'on'?"checked":''}}>
                    <label for="p_admin_15_1" class="label-primary"></label>
                </div>
            </li>
            <li class="list-group-item">
                b. En la provisión de Materia Prima y/o insumos
                <div class="material-switch pull-right">
                    <input type="checkbox" name="p_mp_15_1" id="p_mp_15_1" {{$seguimiento->p_mp_15_1 == 'on'?"checked":''}}>
                    <label for="p_mp_15_1" class="label-primary"></label>
                </div>
            </li>

            <li class="list-group-item">
                c. En cuanto a la disponibilidad de mano de obra
                <div class="material-switch pull-right">
                  <input type="checkbox" name="p_disp_mo_15_1" id="p_disp_mo_15_1" {{$seguimiento->p_disp_mo_15_1 == 'on'?"checked":''}}>
                  <label for="p_disp_mo_15_1" class="label-primary"></label>
                </div>
            </li>


            <li class="list-group-item">
                d. En cuanto a la calificación de mano de obra
                <div class="material-switch pull-right">
                  <input type="checkbox" name="p_calif_mo_15_1" id="p_calif_mo_15_1" {{$seguimiento->p_calif_mo_15_1 == 'on'?"checked":''}}>
                  <label for="p_calif_mo_15_1" class="label-primary"></label>
                </div>
            </li>


            <li class="list-group-item">
                e. Técnicos en el proceso de producción
                <div class="material-switch pull-right">
                 <input type="checkbox" name="p_proc_prod_15_1" id="p_proc_prod_15_1" {{$seguimiento->p_proc_prod_15_1 == 'on'?"checked":''}}>
                 <label for="p_proc_prod_15_1" class="label-primary"></label>
                </div>
            </li>

            <li class="list-group-item">
                f. De comercialización y mercado
                <div class="material-switch pull-right">
                  <input type="checkbox" name="p_comer_15_1" id="p_comer_15_1" {{$seguimiento->p_comer_15_1 == 'on'?"checked":''}}>
                  <label for="p_comer_15_1" class="label-primary"></label>
                </div>
            </li>


            <li class="list-group-item">
                g. Financieros
                <div class="material-switch pull-right">
                    <input type="checkbox" name="p_finan_15_1" id="p_finan_15_1" {{$seguimiento->p_finan_15_1 == 'on'?"checked":''}}>
                    <label for="p_finan_15_1" class="label-primary"></label>
                </div>
            </li>

            <li class="list-group-item">
                h. De infraestructura de servicios<br>(especificar: comunicciones, energía, etc)
                <div class="material-switch pull-right">
                  <input type="checkbox" name="p_serv_15_1" id="p_serv_15_1" {{$seguimiento->p_serv_15_1 == 'on'?"checked":''}}>
                  <label for="p_serv_15_1" class="label-primary"></label>
                </div>
            </li>

           


            <li class="list-group-item">
                i. Climáticos
                <div class="material-switch pull-right">
                  <input type="checkbox" name="p_cli_15_1" id="p_cli_15_1" {{$seguimiento->p_cli_15_1 == 'on'?"checked":''}}>
                  <label for="p_cli_15_1" class="label-primary"></label>
                </div>
            </li>


            <li class="list-group-item">
                j. Otros (especificar)
                <div class="material-switch pull-right">
                  <input type="checkbox" name="p_otros_15_1" id="p_otros_15_1" {{$seguimiento->p_otros_15_1 == 'on'?"checked":''}}>
                  <label for="p_otros_15_1" class="label-primary"></label>
                </div>
            </li>

          </ul>    

    </div>
</div>


<div class="row">
  <div class="form-group col-sm-10">
    15.2. DESCRIPCIÓN DE LOS PROBLEMAS CONSIGNADOS Y PROPUESTA DE SOLUCIONES
  </div>
</div>

<div class="row">
    <div class="form-group col-sm-11">
      <span  class="form-control">  {{ $seguimiento->descripcion_problmeas_15_2 }}  </span>
          
    </div>
</div>


