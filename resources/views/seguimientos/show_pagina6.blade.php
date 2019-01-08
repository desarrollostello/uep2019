
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
                    @if ($action == 'create')
                      <input type="checkbox" name="ingresos_aumentaron_16" id="ingresos_aumentaron_16">
                    @else
                        <input type="checkbox" name="ingresos_aumentaron_16" id="ingresos_aumentaron_16" {{$seguimiento->ingresos_aumentaron_16 == 'on'?"checked":''}}>
                    @endif
                    <label for="ingresos_aumentaron_16" class="label-primary"></label>
                </div>
            </li>
            <li class="list-group-item">
                DISMINUYERON
                <div class="material-switch pull-right">
                    @if ($action == 'create')
                      <input type="checkbox" name="ingresos_disminuyeron_16" id="ingresos_disminuyeron_16">
                    @else
                        <input type="checkbox" name="ingresos_disminuyeron_16" id="ingresos_disminuyeron_16" {{$seguimiento->ingresos_disminuyeron_16 == 'on'?"checked":''}}>
                    @endif
                    <label for="ingresos_disminuyeron_16" class="label-primary"></label>
                </div>
            </li>

            <li class="list-group-item">
                NO VARIARON
                <div class="material-switch pull-right">
                  @if ($action == 'create')
                      <input type="checkbox" name="ingresos_no_variaron_16" id="ingresos_no_variaron_16">
                  @else
                      <input type="checkbox" name="ingresos_no_variaron_16" id="ingresos_no_variaron_16" {{$seguimiento->ingresos_no_variaron_16 == 'on'?"checked":''}}>
                  @endif
                    <label for="ingresos_no_variaron_16" class="label-primary"></label>
                </div>
            </li>

          </ul>    
    </div>
    <div class="form-group col-sm-5">
          EN QUE PROPORCIÓN
          {!! Form::text('16_ingresos_proporcion', null, ['class' => 'form-control']) !!}
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
                          @if ($action == 'create')
                            <input type="checkbox" name="precio_productos_si_no_16_1" id="precio_productos_si_no_16_1">
                          @else
                              <input type="checkbox" name="precio_productos_si_no_16_1" id="precio_productos_si_no_16_1" {{$seguimiento->precio_productos_si_no_16_1 == 'on'?"checked":''}}>
                          @endif
                          <label style="margin-left:25px" for="precio_productos_si_no_16_1" class="label-primary"></label>
                           
                      </div>
                      <div class="form-group col-sm-3">
                          <td> {!! Form::text('16_1_precio_productos_variacion', null, ['class' => 'form-control']) !!} </td>
                      </div>
                 </div>
            </li>


            <li class="list-group-item">
                <div class="row">
                      <div style="margin-top:10px" class="form-group col-sm-7 material-switch">
                        Volúmen de Ventas
                          @if ($action == 'create')
                            <input type="checkbox" name="volumen_vta_si_no_16_1" id="volumen_vta_si_no_16_1">
                          @else
                              <input type="checkbox" name="volumen_vta_si_no_16_1" id="volumen_vta_si_no_16_1" {{$seguimiento->volumen_vta_si_no_16_1 == 'on'?"checked":''}}>
                          @endif
                          <label style="margin-left:25px" for="volumen_vta_si_no_16_1" class="label-primary"></label>
                           
                      </div>
                      <div class="form-group col-sm-3">
                          <td> {!! Form::text('16_1_volumen_vta_variacion', null, ['class' => 'form-control']) !!} </td>
                      </div>
                 </div>
            </li>


            <li class="list-group-item">
                <div class="row">
                      <div style="margin-top:10px" class="form-group col-sm-7 material-switch">
                        Gastos de comercialización
                          @if ($action == 'create')
                            <input type="checkbox" name="gtos_comercializacion_si_no_16_1" id="gtos_comercializacion_si_no_16_1">
                          @else
                              <input type="checkbox" name="gtos_comercializacion_si_no_16_1" id="gtos_comercializacion_si_no_16_1" {{$seguimiento->gtos_comercializacion_si_no_16_1 == 'on'?"checked":''}}>
                          @endif
                          <label style="margin-left:25px" for="gtos_comercializacion_si_no_16_1" class="label-primary"></label>
                           
                      </div>
                      <div class="form-group col-sm-3">
                          <td> {!! Form::text('16_1_gtos_comercializacion_variacion', null, ['class' => 'form-control']) !!} </td>
                      </div>
                 </div>
            </li>



            <li class="list-group-item">
                <div class="row">
                      <div style="margin-top:10px" class="form-group col-sm-7 material-switch">
                        Niveles de Producción
                          @if ($action == 'create')
                            <input type="checkbox" name="nivel_prod_si_no_16_1" id="nivel_prod_si_no_16_1">
                          @else
                              <input type="checkbox" name="nivel_prod_si_no_16_1" id="nivel_prod_si_no_16_1" {{$seguimiento->nivel_prod_si_no_16_1 == 'on'?"checked":''}}>
                          @endif
                          <label style="margin-left:25px" for="nivel_prod_si_no_16_1" class="label-primary"></label>
                           
                      </div>
                      <div class="form-group col-sm-3">
                          <td> {!! Form::text('16_1_nivel_prod_variacion', null, ['class' => 'form-control']) !!} </td>
                      </div>
                 </div>
            </li>

            <li class="list-group-item">
                <div class="row">
                      <div style="margin-top:10px" class="form-group col-sm-7 material-switch">
                        Otros (especificar)
                          @if ($action == 'create')
                            <input type="checkbox" name="otros_si_no_16_1" id="otros_si_no_16_1">
                          @else
                              <input type="checkbox" name="otros_si_no_16_1" id="otros_si_no_16_1" {{$seguimiento->otros_si_no_16_1 == 'on'?"checked":''}}>
                          @endif
                          <label style="margin-left:25px" for="otros_si_no_16_1" class="label-primary"></label>
                           
                      </div>
                      <div class="form-group col-sm-3">
                          <td> {!! Form::text('16_1_otros_variacion', null, ['class' => 'form-control']) !!} </td>
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
          {!! Form::textarea('16_2_observaciones', null, ['class' => 'form-control', 'rows' => 3, 'data-toggle'=>'tooltip', 'data-placement'=>'bottom']) !!}
          
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
                    @if ($action == 'create')
                      <input type="checkbox" name="p_a_ingresos_aumentaron_16_3" id="p_a_ingresos_aumentaron_16_3">
                    @else
                        <input type="checkbox" name="p_a_ingresos_aumentaron_16_3" id="p_a_ingresos_aumentaron_16_3" {{$seguimiento->p_a_ingresos_aumentaron_16_3 == 'on'?"checked":''}}>
                    @endif
                    <label for="p_a_ingresos_aumentaron_16_3" class="label-primary"></label>
                </div>
            </li>
            <li class="list-group-item">
                DISMINUYERON
                <div class="material-switch pull-right">
                    @if ($action == 'create')
                      <input type="checkbox" name="p_a_ingresos_disminuyeron_16_3" id="p_a_ingresos_disminuyeron_16_3">
                    @else
                        <input type="checkbox" name="p_a_ingresos_disminuyeron_16_3" id="p_a_ingresos_disminuyeron_16_3" {{$seguimiento->p_a_ingresos_disminuyeron_16_3 == 'on'?"checked":''}}>
                    @endif
                    <label for="p_a_ingresos_disminuyeron_16_3" class="label-primary"></label>
                </div>
            </li>

            <li class="list-group-item">
                NO VARIARON
                <div class="material-switch pull-right">
                  @if ($action == 'create')
                      <input type="checkbox" name="p_a_ingresos_no_variaron_16_3" id="p_a_ingresos_no_variaron_16_3">
                  @else
                      <input type="checkbox" name="p_a_ingresos_no_variaron_16_3" id="p_a_ingresos_no_variaron_16_3" {{$seguimiento->p_a_ingresos_no_variaron_16_3 == 'on'?"checked":''}}>
                  @endif
                    <label for="p_a_ingresos_no_variaron_16_3" class="label-primary"></label>
                </div>
            </li>

          </ul>    
    </div>
    <div class="form-group col-sm-5">
          EN QUE PROPORCIÓN
          {!! Form::text('16_3_p_a_ingresos_proporcion', null, ['class' => 'form-control']) !!}
    </div>
</div>



<div class="row">
  <div class="form-group col-sm-10">
    16.4. POR QUE?
  </div>
</div>

<div class="row">
    <div class="form-group col-sm-11">
          {!! Form::textarea('16_4_periodo_anterior_ingresos_porque', null, ['class' => 'form-control', 'rows' => 3, 'data-toggle'=>'tooltip', 'data-placement'=>'bottom']) !!}
          
    </div>
</div>
