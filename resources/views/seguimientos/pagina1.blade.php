
@if ($action == 'create')
    <div class="row">
            <div class="form-group col-sm-6">
                    {!! Form::label('proyecto_id', '1. NOMBRE DEL PROYECTO') !!}
                    {!! Form::select('proyecto_id', $proyectos,  null, ['placeholder'=>'SELECCIONE PROYECTO...', 'class' => 'form-control','required']) !!}
            </div>
            <div class="form-group col-sm-5">
                <div class="alert alert-danger error-seguimiento" style="display: none">
                    <p><strong>¡ATENCIÓN!</strong> No es posible cargarle un SEGUIMIENTO a este proyecto <br>
                    Por favor verifique  los sigientes datos</p>
                    <ul>
                        <li>La fecha de Efectivización no esté vacía</li>
                        <li>La fecha de Desembolso no esté vacía</li>
                        <li>La fecha Desistido no tenga datos</li>
                        <li>La fecha Cancelado no tenga datos</li>
                        <li>La fecha Archivado no tenga datos</li>
                        <li>El Estado del Proyecto sea 'AMORTIZANDO'</li>
                    </ul>
                    
                </div>
            </div>
    </div>
@else
    <div class="row">
        <div class="form-group col-sm-10">
            {!! Form::label('proyecto_id', 'Proyecto') !!}
            <input type="text" id="proyecto_nombre" class="form-control" name="proyecto_nombre" value="{{ $proyecto->nombre  }}" disabled />
            <input style="visibility:hidden" type="text" id="proyecto_id" class="form-control" name="proyecto_id" value="{{ $proyecto->id }}" />
        </div>
    </div>
    
@endif


<br>
<div class="row">
      <div class="form-group col-sm-2">
            {!! Form::label('fechaSeguimiento', 'Fecha') !!}
            {!! Form::text('fechaSeguimiento', null, ['class' =>'form-control fechas', 'required', 'minlength' =>'10'] ) !!}
      </div>
      <div class="form-group col-sm-2">
            {!! Form::label('nro_entrevista', 'Nro Entrevista') !!}
            {!! Form::text('nro_entrevista', null, ['class' => 'form-control','required']) !!}
      </div>
      <div class="form-group col-sm-2">
            {!! Form::label('grado_morosidad', 'Grado Morosidad') !!}
            {!! Form::text('grado_morosidad', null, ['class' => 'form-control','required']) !!}
      </div>
      <div class="form-group col-sm-3">
          {!! Form::label('tipo_proyecto', 'Tipo de Proyecto') !!}
          {!! Form::select('tipo_proyecto', [''=>'Seleccione', 'AMPLIACION'=>'AMPLIACION', 'NUEVO'=>'NUEVO'], null, ['class' => 'form-control', 'id' => 'tipo_proyecto', 'data-live-search' => 'true', 'data-max-options' => '1']  )  !!}
      </div>
</div>

<div class="row">
    <div class="form-group col-sm-5">
        {!! Form::label('profesional_cfi', '2. EVALUADOR SECTORIAL DEL CFI') !!}
        {!! Form::text('profesional_cfi', null, ['class' => 'form-control']) !!}
    </div>

     <div class="form-group col-sm-5">
        {!! Form::label('profesional_uep', 'TÉCNICO UEP') !!}
        {!! Form::text('profesional_uep', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="row">
   <div class="form-group col-sm-10">
        {!! Form::label('localizacion', '3. LOCALIZACIÓN DEL PROYECTO') !!}
        {!! Form::text('localizacion', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="row">
  <div class="form-group col-sm-10">
      4. BENEFICIARIOS
  </div>
</div>

<div class="row">
  <div class="form-group col-sm-10">
      <table id="table" class="table table-striped table-bordered">
          <thead>
          <tr>
              <th class="text-center">SOCIEDAD O APELLIDO Y NOMBRES</th>
              <th class="text-center">DOMICILIO</th>
              <th class="text-center">TELÉFONO</th>
          </tr>
          </thead>
         
          <tbody>
              <tr>
                  <td class="text-center"> {!! Form::text('beneficiario1', null, ['class' => 'form-control']) !!} </td>
                  <td class="text-center"> {!! Form::text('domicilio_beneficiario1', null, ['class' => 'form-control']) !!} </td>
                  <td class="text-center"> {!! Form::text('telefono_beneficiario1', null, ['class' => 'form-control']) !!} </td>
              </tr>
              <tr>
                  <td class="text-center"> {!! Form::text('beneficiario2', null, ['class' => 'form-control']) !!} </td>
                  <td class="text-center"> {!! Form::text('domicilio_beneficiario2', null, ['class' => 'form-control']) !!} </td>
                  <td class="text-center"> {!! Form::text('telefono_beneficiario2', null, ['class' => 'form-control']) !!} </td>
              </tr>
              <tr>
                  <td class="text-center"> {!! Form::text('beneficiario3', null, ['class' => 'form-control']) !!} </td>
                  <td class="text-center"> {!! Form::text('domicilio_beneficiario3', null, ['class' => 'form-control']) !!} </td>
                  <td class="text-center"> {!! Form::text('telefono_beneficiario3', null, ['class' => 'form-control']) !!} </td>
              </tr>
          </tbody>
      </table>
  </div>
</div>

<div class="row">
  <div class="form-group col-sm-10">
      4.1. CANTIDAD DE PERSONAS DEL PROYECTO
  </div>
</div>

<div class="row">
  <div class="form-group col-sm-8">
        <table id="table" class="table table-striped table-bordered">
            <thead>
            <tr>
                <th class="text-center">Permanentes</th>
                <th class="text-center">Temporario</th>
                <th class="text-center">A Incorporar</th>
            </tr>
            </thead>
           
            <tbody>
                <tr>
                    <td class="text-center"> {!! Form::text('personal_permanente', null, ['class' => 'form-control']) !!} </td>
                    <td class="text-center"> {!! Form::text('personal_temporario', null, ['class' => 'form-control']) !!} </td>
                    <td class="text-center"> {!! Form::text('personal_a_incorporar', null, ['class' => 'form-control']) !!} </td>
                </tr>
              
            </tbody>
        </table>
  </div>
</div>

<div class="row">
  <div class="form-group col-sm-10">
      5. INVERSIONES A VERIFICAR
  </div>
</div>

<div class="row">
      <div class="form-group col-sm-4" style="text-align: right">
            <label style="border: none; margin-bottom: 0" class="form-control" for="credito_cfi">Crédito CFI</label>
            <label style="border: none; margin-bottom: 0" class="form-control" for="credito_otros_bancos">Crédito Otros Bancos</label>
            <label style="border: none; margin-bottom: 0" class="form-control" for="aporte_propio">Aporte Propio</label>
            <label style="border: none; margin-bottom: 0" class="form-control" for="credito_proveedores">Crédito Proveedores</label>
        
            
      </div>
      <div class="form-group col-sm-2">
            {!! Form::text('credito_cfi', null, ['class' =>'form-control', 'required', 'minlength' =>'6'] ) !!}
            {!! Form::text('credito_otros_bancos', null, ['class' =>'form-control'] ) !!}
            {!! Form::text('aporte_propio', null, ['class' =>'form-control', 'required', 'minlength' =>'1'] ) !!}
            {!! Form::text('credito_proveedores', null, ['class' =>'form-control'] ) !!}
      </div>
      <div class="form-group col-sm-3" style="text-align: right">
            <label style="border: none; margin-bottom: 0" class="form-control" for="inv_preinversion">Preinversión</label>
            <label style="border: none; margin-bottom: 0" class="form-control" for="inv_activo_fijo">Activo Fijo</label>
            <label style="border: none; margin-bottom: 0" class="form-control" for="inv_ct">Capital de Trabajo</label>
            <label style="border: none; margin-bottom: 0" class="form-control" for="prefinanciacion">Prefinanciación</label>
        
            
      </div>
      <div class="form-group col-sm-2">
            {!! Form::text('inv_preinversion', null, ['class' =>'form-control'] ) !!}
            {!! Form::text('inv_activo_fijo', null, ['class' =>'form-control', 'required', 'minlength' =>'4'] ) !!}
            {!! Form::text('inv_ct', null, ['class' =>'form-control', 'required', 'minlength' =>'1'] ) !!}
            {!! Form::text('prefinanciacion', null, ['class' =>'form-control'] ) !!}
      </div>
     
</div>

<div class="row">
  <div class="form-group col-sm-10">
      5.1. DETALLE DE LAS INVERSIONES A REALIZAR
  </div>
</div>
<div class="row">
    <div class="form-group col-sm-11">
          {!! Form::textarea('detalle_inversiones', null, ['class' => 'form-control', 'rows' => 3, 'data-toggle'=>'tooltip', 'data-placement'=>'bottom']) !!}
    </div>
</div>


<div class="row">
  <div class="form-group col-sm-10">
      6. PLAZOS Y FRECUENCIAS VIGENTES DEL CRÉDITO (Total, Gracia y Amortización) 
  </div>
</div>

<div class="row">
    <div class="form-group col-sm-11">
          {!! Form::textarea('plazos_frecuencias_vigentes', null, ['class' => 'form-control', 'rows' => 3, 'data-toggle'=>'tooltip', 'data-placement'=>'bottom']) !!}
    </div>
</div>