
<!-- INICIO PAGINA 6 -->


<div class="row">
  <div class="form-group col-sm-10">
    16. INGRESOS. EVOLUCIÓN DE LOS INGRESOS DE ACUERDO A LO PROYECTADO
  </div>
</div>





<div class="row">
    <div class="form-group col-sm-5">
        <ul class="list-group">
            <li class="list-group-item">
                AUMENTARION
                <div class="material-switch pull-right">
                    <input type="checkbox" name="ingresos_aumentaron_16" id="ingresos_aumentaron_16" {{$seguimiento->ingresos_aumentaron_16 == 'on'?"checked":''}}>
                    <label for="ingresos_aumentaron_16" class="label-primary"></label>
                </div>
            </li>
            <li class="list-group-item">
                DISMINUYERON
                <div class="material-switch pull-right">
                    <input type="checkbox" name="ingresos_disminuyeron_16" id="ingresos_disminuyeron_16" {{$seguimiento->ingresos_disminuyeron_16 == 'on'?"checked":''}}>
                    <label for="ingresos_disminuyeron_16" class="label-primary"></label>
                </div>
            </li>

            <li class="list-group-item">
                NO VARIARON
                <div class="material-switch pull-right">
                  <input type="checkbox" name="ingresos_no_variaron_16" id="ingresos_no_variaron_16" {{$seguimiento->ingresos_no_variaron_16 == 'on'?"checked":''}}>
                  <label for="ingresos_no_variaron_16" class="label-primary"></label>
                </div>
            </li>

          </ul>    
    </div>
    <div class="form-group col-sm-5">
          EN QUE PROPORCIÓN
          <span class="form-control"> {{ $seguimiento->ingresos_proporcion_16 }} </span>
    </div>
</div>


<div class="row">
  <div class="form-group col-sm-10">
    16.1.  RAZONES. Variación en:
  </div>
</div>


<div class="row">
    <div class="form-group col-sm-6">
        <ul class="list-group">


            <li class="list-group-item">
                <div class="row">
                      <div style="margin-top:10px" class="form-group col-sm-7 material-switch">
                        Precios de los productos
                          <input type="checkbox" name="precio_productos_si_no_16_1" id="precio_productos_si_no_16_1" {{$seguimiento->precio_productos_si_no_16_1 == 'on'?"checked":''}}>
                          <label style="margin-left:25px" for="precio_productos_si_no_16_1" class="label-primary"></label>
                           
                      </div>
                      <div class="form-group col-sm-3">
                          <td> {{ $seguimiento->p_prod_variacion_16_1 }}  </td>
                      </div>
                 </div>
            </li>


            <li class="list-group-item">
                <div class="row">
                      <div style="margin-top:10px" class="form-group col-sm-7 material-switch">
                        Volúmen de Ventas
                          <input type="checkbox" name="volumen_vta_si_no_16_1" id="volumen_vta_si_no_16_1" {{$seguimiento->volumen_vta_si_no_16_1 == 'on'?"checked":''}}>
                          <label style="margin-left:25px" for="volumen_vta_si_no_16_1" class="label-primary"></label>
                           
                      </div>
                      <div class="form-group col-sm-3">
                          <td class="form-control"> {{ $seguimiento->volumen_vta_variacion_16_1 }} </td>
                      </div>
                 </div>
            </li>


            <li class="list-group-item">
                <div class="row">
                      <div style="margin-top:10px" class="form-group col-sm-7 material-switch">
                        Gastos de comercialización
                          <input type="checkbox" name="gtos_comercializacion_si_no_16_1" id="gtos_comercializacion_si_no_16_1" {{$seguimiento->gtos_comercializacion_si_no_16_1 == 'on'?"checked":''}}>
                          <label style="margin-left:25px" for="gtos_comercializacion_si_no_16_1" class="label-primary"></label>
                           
                      </div>
                      <div class="form-group col-sm-3">
                          <td class="form-control"> {{ $seguimiento->gtos_comercializacion_variacion_16_1 }}  </td>
                      </div>
                 </div>
            </li>



            <li class="list-group-item">
                <div class="row">
                      <div style="margin-top:10px" class="form-group col-sm-7 material-switch">
                        Niveles de Producción
                          <input type="checkbox" name="nivel_prod_si_no_16_1" id="nivel_prod_si_no_16_1" {{$seguimiento->nivel_prod_si_no_16_1 == 'on'?"checked":''}}>
                          <label style="margin-left:25px" for="nivel_prod_si_no_16_1" class="label-primary"></label>
                           
                      </div>
                      <div class="form-group col-sm-3">
                          <td class="form-control"> {{ $seguimiento->nivel_prod_variacion_16_1 }} </td>
                      </div>
                 </div>
            </li>

            <li class="list-group-item">
                <div class="row">
                      <div style="margin-top:10px" class="form-group col-sm-7 material-switch">
                        Otros (especificar)
                          <input type="checkbox" name="otros_si_no_16_1" id="otros_si_no_16_1" {{$seguimiento->otros_si_no_16_1 == 'on'?"checked":''}}>
                          <label style="margin-left:25px" for="otros_si_no_16_1" class="label-primary"></label>
                           
                      </div>
                      <div class="form-group col-sm-3">
                          <td class="form-control"> {{ $seguimiento->otros_variacion_16_1 }}  </td>
                      </div>
                 </div>
            </li>
            

          </ul>    
    </div>
   
</div>



<div class="row">
  <div class="form-group col-sm-10">
    16.2. OBSERVACIONES
  </div>
</div>

<div class="row">
    <div class="form-group col-sm-11">
        <<span class="form-control">  {{ $seguimiento->observaciones_16_2 }} </span>
    </div>
</div>



<div class="row">
  <div class="form-group col-sm-10">
    16.3. Y RESPECTO AL MES O PERIODO ANTERIOR (en el caso de que la empresa sea estacional) COMO HAN EVOLUCIONADO SUS INGRESOS?<br>
    (en caso de proyectos estacionales comparar la situación con el mismo periodo anterior o con la campaña anterior)
  </div>
</div>


<div class="row">
    <div class="form-group col-sm-5">
        <ul class="list-group">
            <li class="list-group-item">
                AUMENTARION
                <div class="material-switch pull-right">
                    <input type="checkbox" name="p_a_ingresos_aumentaron_16_3" id="p_a_ingresos_aumentaron_16_3" {{$seguimiento->p_a_ingresos_aumentaron_16_3 == 'on'?"checked":''}}>
                    <label for="p_a_ingresos_aumentaron_16_3" class="label-primary"></label>
                </div>
            </li>
            <li class="list-group-item">
                DISMINUYERON
                <div class="material-switch pull-right">
                    <input type="checkbox" name="p_a_ingresos_disminuyeron_16_3" id="p_a_ingresos_disminuyeron_16_3" {{$seguimiento->p_a_ingresos_disminuyeron_16_3 == 'on'?"checked":''}}>
                    <label for="p_a_ingresos_disminuyeron_16_3" class="label-primary"></label>
                </div>
            </li>

            <li class="list-group-item">
                NO VARIARON
                <div class="material-switch pull-right">
                  <input type="checkbox" name="p_a_ingresos_no_variaron_16_3" id="p_a_ingresos_no_variaron_16_3" {{$seguimiento->p_a_ingresos_no_variaron_16_3 == 'on'?"checked":''}}>
                  <label for="p_a_ingresos_no_variaron_16_3" class="label-primary"></label>
                </div>
            </li>

          </ul>    
    </div>
    <div class="form-group col-sm-5">
          EN QUE PROPORCIÓN
          <<span  class="form-control">{{ $seguimiento->p_a_ingresos_proporcion_16_3 }} </span>
    </div>
</div>



<div class="row">
  <div class="form-group col-sm-10">
    16.4. POR QUE?
  </div>
</div>

<div class="row">
    <div class="form-group col-sm-11">
      <<span  class="form-control"> {{ $seguimiento->periodo_anterior_ingresos_porque_16_4 }}  </span>
    </div>
</div>
