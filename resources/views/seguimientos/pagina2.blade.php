
<!--- INICIO PAGINA 2 --->

<div class="row">
  <div class="form-group col-sm-8">

        <table id="table" class="table table-striped table-bordered">
            <thead>
            <tr>
                <th class="text-center">Cant. de Cuotas</th>
                <th class="text-center">Frec. Cap.</th>
                <th class="text-center">Frec. Int.</th>
            </tr>
            </thead>
           
            <tbody>
                <tr>
                    <td class="text-center"> {!! Form::text('cant_cuotas', null, ['class' => 'form-control']) !!} </td>
                    <td class="text-center"> {!! Form::text('frecuencia_amortizacion', null, ['class' => 'form-control']) !!} </td>
                    <td class="text-center"> {!! Form::text('frecuencia_gracia', null, ['class' => 'form-control']) !!} </td>
                </tr>
              
            </tbody>
        </table>
  </div>
</div>

<div class="row">
  <div class="form-group col-sm-3">
      7. LA EMPRESA ESTA 
      {!! Form::select('empresa_activa_inactiva_parcial', [''=>'Seleccione', 'ACTIVA'=>'ACTIVA', 'INACTIVA'=>'INACTIVA', 'PARCIAL'=>'PARCIAL'], null, ['class' => 'form-control', 'id' => 'empresa_activa_inactiva_parcial', 'data-live-search' => 'true', 'data-max-options' => '1']  )  !!}
  </div>
   <div class="form-group col-sm-8">
      8.1. SE HAN REGISTRADO CAMBIOS EN LA NÓMINA DE BENEFICIARIOS Y/O EN EL TIPO DE SOLICITUD?
      {!! Form::select('cambios_localizacion', [''=>'Seleccione', 'SI'=>'SI', 'NO'=>'NO'], null, ['class' => 'form-control', 'id' => 'cambio_nomina', 'data-live-search' => 'true', 'data-max-options' => '1']  )  !!}
  </div>
</div>



<div class="row">
  <div class="form-group col-sm-5">
      * TALES CAMBIOS AFECTAN EL DESARROLLO DE LA EMPRESA
      {!! Form::select('cambios_localizacion', [''=>'Seleccione', 'SI'=>'SI', 'NO'=>'NO'], null, ['class' => 'form-control', 'id' => 'cambio_afectan_empresa', 'data-live-search' => 'true', 'data-max-options' => '1']  )  !!}
  </div>
</div>

<div class="row">
  <div class="form-group col-sm-10">
    *  EN QUE MEDIDA?
  </div>
</div>

<div class="row">
    <div class="form-group col-sm-11">
          {!! Form::textarea('cambio_afectan_empresa_medida', null, ['class' => 'form-control', 'rows' => 3, 'data-toggle'=>'tooltip', 'data-placement'=>'bottom']) !!}
          
    </div>
</div>

<div class="row" style="margin-top: 20px;">
  <div class="form-group col-sm-10">
    <p style="font-size: 14px">8.4. CONSIGNAR LOS CAMBIOS</p>
  </div>
</div>


<div class="row">
  <div class="form-group col-sm-10">
      <table id="table" class="table table-striped table-bordered">
          <thead>
          <tr>
              <th  class="text-center" width="50%">NUEVA RAZÓN SOCIAL O APELLIDO Y NOMBRES</th>
              <th  class="text-center" width="50%">DOMICILIO Y TELEFONO</th>
              
          </tr>
          </thead>
         
          <tbody>
              <tr>
                  <td> {!! Form::text('especificar_nombre1', null, ['class' => 'form-control']) !!} </td>
                  <td class="text-center"> {!! Form::text('especificar_domicilio_telefono1', null, ['class' => 'form-control']) !!} </td>
                  
              </tr>
              <tr>
                  <td> {!! Form::text('especificar_nombre2', null, ['class' => 'form-control']) !!} </td>
                  <td class="text-center"> {!! Form::text('especificar_domicilio_telefono2', null, ['class' => 'form-control']) !!} </td>
                  
              </tr>
              <tr>
                  <td> {!! Form::text('especificar_nombre3', null, ['class' => 'form-control']) !!} </td>
                  <td class="text-center"> {!! Form::text('especificar_domicilio_telefono3', null, ['class' => 'form-control']) !!} </td>
                  
              </tr>
              <tr>
                  <td> {!! Form::text('especificar_nombre4', null, ['class' => 'form-control']) !!} </td>
                  <td class="text-center"> {!! Form::text('especificar_domicilio_telefono4', null, ['class' => 'form-control']) !!} </td>
                  
              </tr>
          </tbody>
      </table>
  </div>
</div>

<div class="row">
  <div class="form-group col-sm-5">
    9. SE REGISTRAN CAMBIOS EN LA LOCALIZACIÓN DEL PROYECTO?
    {!! Form::select('cambios_localizacion', [''=>'Seleccione', 'SI'=>'SI', 'NO'=>'NO'], null, ['class' => 'form-control', 'id' => 'cambios_localizacion', 'data-live-search' => 'true', 'data-max-options' => '1']  )  !!}
  </div>
</div>


<div class="row">
  <div class="form-group col-sm-10">
    9.1. CAUSAS?
  </div>
</div>

<div class="row">
    <div class="form-group col-sm-11">
          {!! Form::textarea('cambios_localizacion_causas', null, ['class' => 'form-control', 'rows' => 3, 'data-toggle'=>'tooltip', 'data-placement'=>'bottom']) !!}
        
    </div>
</div>

<div class="row">
  <div class="form-group col-sm-10">
    INDICAR NUEVA LOCALIZACIÓN
  </div>
</div>

<div class="row col-span-3">
      <div class="form-group col-sm-10">
            <label style="border: none; margin-bottom: 0" class="form-control" for="nueva_localizacion_domicilio">Domicilio</label>
            {!! Form::text('nueva_localizacion_domicilio', null, ['class' =>'form-control'] ) !!}    
      </div>
</div>
<div class="row col-span-3">
      <div class="form-group col-sm-5">
            <label style="border: none; margin-bottom: 0" class="form-control" for="nueva_localizacion_localidad">Localidad</label>
            {!! Form::text('nueva_localizacion_localidad', null, ['class' =>'form-control'] ) !!}
      </div>
      <div class="form-group col-sm-5">
            <label style="border: none; margin-bottom: 0" class="form-control" for="nueva_localizacion_cp">C. P. </label>
            {!! Form::text('nueva_localizacion_cp', null, ['class' =>'form-control'] ) !!}
      </div>
</div>
<div class="row col-span-3">
      <div class="form-group col-sm-5">
            <label style="border: none; margin-bottom: 0" class="form-control" for="nueva_localizacion_provincia">Provincia</label>
            {!! Form::text('nueva_localizacion_provincia', null, ['class' =>'form-control'] ) !!}
      </div>
      <div class="form-group col-sm-5">
            <label style="border: none; margin-bottom: 0" class="form-control" for="nueva_localizacion_telefono">Teléfono</label>
            {!! Form::text('nueva_localizacion_telefono', null, ['class' =>'form-control'] ) !!}
      </div>
</div>

<!-- FIN PAGINA 2 -->
