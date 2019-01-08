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
            Fecha
            {{ $seguimiento->fechaSeguimiento  }}
      </div>
      <div class="form-group col-sm-2">
            Nro Entrevista
            {{ $seguimiento->nro_entrevista  }}
      </div>
      <div class="form-group col-sm-2">
            Grado Morosidad
            {{ $seguimiento->grado_morosidad  }}
      </div>
      <div class="form-group col-sm-3">
          Tipo de Proyecto
          {{ $seguimiento->tipo_proyecto  }}
      </div>
</div>

<div class="row">
    <div class="form-group col-sm-5">
        2. EVALUADOR SECTORIAL DEL CFI
        {{ $seguimiento->profesional_cfi  }}
    </div>

     <div class="form-group col-sm-5">
        TÉCNICO UEP
        {{ $seguimiento->profesional_uep  }}
    </div>
</div>

<div class="row">
   <div class="form-group col-sm-10">
        3. LOCALIZACIÓN DEL PROYECTO
        {{ $seguimiento->localizacion  }}
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
                  <td class="text-center"> {{ $seguimiento->beneficiario1 }} </td>
                  <td class="text-center"> {{ $seguimiento->domicilio_beneficiario1 }} </td>
                  <td class="text-center"> {{ $seguimiento->telefono_beneficiario1 }} </td>
              </tr>
              <tr>
                  <td class="text-center"> {{ $seguimiento->beneficiario2 }} </td>
                  <td class="text-center"> {{ $seguimiento->domicilio_beneficiario2 }} </td>
                  <td class="text-center"> {{ $seguimiento->telefono_beneficiario2 }} </td>
              </tr>
              <tr>
                  <td class="text-center"> {{ $seguimiento->beneficiario3 }} </td>
                  <td class="text-center"> {{ $seguimiento->domicilio_beneficiario3 }} </td>
                  <td class="text-center"> {{ $seguimiento->telefono_beneficiario3 }} </td>
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