
<!-- INICIO PAGINA 4 -->

<div class="row">
  <div class="form-group col-sm-10">
    11.3. LAS INVERSIONES REALIZADAS, SE HAN PODIDO VERIFICAR <br>
    (Con factuas y/o comprobantes de pago, títulos de propiedad, observación directa, etc)
  </div>
</div>

<div class="row">
    <div class="form-group col-sm-3">
          {!! Form::select('inv_verificacion_si_no', [''=>'Seleccione', 'SI'=>'SI', 'NO'=>'NO'], null, ['class' => 'form-control', 'id' => 'inv_verificacion_si_no', 'data-live-search' => 'true', 'data-max-options' => '1']  )  !!}
    </div>
</div>

<div class="row">
  <div class="form-group col-sm-7">

      <table id="table" class="table table-striped table-bordered">
          <thead>
          <tr>
              <th>* FORMA DE VERIFICACION</th>
          </tr>
          </thead>
         
          <tbody>
              <tr>
                  <td> {!! Form::text('forma_de_verificacion', null, ['class' => 'form-control']) !!} </td>
                  
              </tr>
            
          </tbody>
      </table>
  </div>
</div>

<div class="row">
  <div class="form-group col-sm-10">
    11.4. LAS INVERSIONES REALIZADAS CON EL CREDITO, SON LAS PROYECTADAS <br>
  
  </div>
</div>



<div class="row">
    <div class="form-group col-sm-3">
        <table id="table" class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>SI / NO* / PARCIAL*</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td> {!! Form::select('inv_proyectadas_si_no', [''=>'Seleccione', 'SI'=>'SI', 'NO'=>'NO', 'PARCIAL' => 'PARCIAL'], null, ['class' => 'form-control', 'id' => 'inv_proyectadas_si_no', 'data-live-search' => 'true', 'data-max-options' => '1']  )  !!} </td> 
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="row">
  <div class="form-group col-sm-10">
    11.5. DESCRIBIR LAS RAZONES
  </div>
</div>

<div class="row">
    <div class="form-group col-sm-11">
          {!! Form::textarea('11_5_inv_proyectadas_razones', null, ['class' => 'form-control', 'rows' => 3, 'data-toggle'=>'tooltip', 'data-placement'=>'bottom']) !!}
          
    </div>
</div>



<div class="row">
  <div class="form-group col-sm-5">
    12  SE HAN REGISTRADO NUEVAS INVERSIONES
  </div>
</div>

<div class="row">
  <div class="form-group col-sm-5">
      <table id="table" class="table table-striped table-bordered">
          <thead>
          <tr>
              <th class="text-center">SI / NO</th>
              <th class="text-center">MONTO APROXIMADO</th>
          </tr>
          </thead>
          <tbody>
              <tr>
                  <td> {!! Form::select('nuevas_inv_si_no', [''=>'Seleccione', 'SI'=>'SI', 'NO'=>'NO', 'PARCIAL' => 'PARCIAL'], null, ['class' => 'form-control', 'id' => 'nuevas_inv_si_no', 'data-live-search' => 'true', 'data-max-options' => '1']  )  !!} </td> 
                  <td> {!! Form::text('monto_aprox_nuevas_inversiones', null, ['class' => 'form-control']) !!} </td> 
              </tr>
          </tbody>
      </table>
</div>
</div>


<div class="row">
  <div class="form-group col-sm-10">
    12.1. CUALES?
  </div>
</div>

<div class="row">
    <div class="form-group col-sm-9">
          {!! Form::textarea('12_1_detalle_nuevas_inversiones', null, ['class' => 'form-control', 'rows' => 3, 'data-toggle'=>'tooltip', 'data-placement'=>'bottom']) !!}
          
    </div>
</div>



<div class="row">
  <div class="form-group col-sm-10">
    12.2. LAS NUEVAS INVERSIONES FUERON VERIFICADAS <br>
    (Con factuas y/o comprobantes de pago, títulos de propiedad, observación directa, etc)
  </div>
</div>

<div class="row">
    <div class="form-group col-sm-3">
          {!! Form::select('nuevas_inv_verificacion_si_no', [''=>'Seleccione', 'SI'=>'SI', 'NO'=>'NO'], null, ['class' => 'form-control', 'id' => 'nuevas_inv_verificacion_si_no', 'data-live-search' => 'true', 'data-max-options' => '1']  )  !!}
    </div>
    <div class="form-group col-sm-5">
        <table id="table" class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>* FORMA DE VERIFICACION</th>
            </tr>
            </thead>
           
            <tbody>
                <tr>
                    <td> {!! Form::text('forma_verificacion_nuevas_inv', null, ['class' => 'form-control']) !!} </td>
                    
                </tr>
              
            </tbody>
        </table>
    </div>
</div>

<div class="row">
  <div class="form-group col-sm-9">
    12.3. COMO PREVEE QUE LAS NUEVAS INVERSIONES REALIZADAS INCIDIRAN EN EL DESARRROLLO DE LA EMPRESA?
  </div>
</div>




<div class="row">
    <div class="form-group col-sm-7">
        <ul class="list-group">
            <li class="list-group-item">
                Aumento de la Producción
                <div class="material-switch pull-right">
                    @if ($action == 'create')
                      <input type="checkbox" name="pagina4_12_3_aumento_produccion" id="pagina4_12_3_aumento_produccion">
                    @else
                        <input type="checkbox" name="pagina4_12_3_aumento_produccion" id="pagina4_12_3_aumento_produccion" {{$seguimiento->pagina4_12_3_aumento_produccion == 'on'?"checked":''}}>
                    @endif
                    <label for="pagina4_12_3_aumento_produccion" class="label-primary"></label>
                </div>
            </li>
            <li class="list-group-item">
                Mejora en la calidad de los productos
                <div class="material-switch pull-right">
                    @if ($action == 'create')
                      <input type="checkbox" name="pagina4_12_3_calidad_productos" id="pagina4_12_3_calidad_productos">
                    @else
                        <input type="checkbox" name="pagina4_12_3_calidad_productos" id="pagina4_12_3_calidad_productos" {{$seguimiento->pagina4_12_3_calidad_productos == 'on'?"checked":''}}>
                    @endif
                    <label for="pagina4_12_3_calidad_productos" class="label-primary"></label>
                </div>
            </li>

            <li class="list-group-item">
                Disminución de los costos
                <div class="material-switch pull-right">
                  @if ($action == 'create')
                      <input type="checkbox" name="pagina4_12_3_disminucion_costos" id="pagina4_12_3_disminucion_costos">
                  @else
                      <input type="checkbox" name="pagina4_12_3_disminucion_costos" id="pagina4_12_3_disminucion_costos" {{$seguimiento->pagina4_12_3_disminucion_costos == 'on'?"checked":''}}>
                  @endif
                    <label for="pagina4_12_3_disminucion_costos" class="label-primary"></label>
                </div>
            </li>


            <li class="list-group-item">
                Otros (especificar)
                <div class="material-switch pull-right">
                  @if ($action == 'create')
                      <input type="checkbox" name="pagina4_12_3_otros" id="pagina4_12_3_otros">
                  @else
                      <input type="checkbox" name="pagina4_12_3_otros" id="pagina4_12_3_otros" {{$seguimiento->pagina4_12_3_otros == 'on'?"checked":''}}>
                  @endif
                    <label for="pagina4_12_3_otros" class="label-primary"></label>
                </div>
            </li>

          </ul>    

    </div>
</div>


<!-- FIN PAGINA 4 -->
