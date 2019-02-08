<div class="row">
    <div class="form-group col-sm-10">
        {!! Form::label('titulo', 'Ingrese el Título del Sistema') !!}
        {!! Form::text('titulo', null, ['class' => 'form-control', 'required', 'minlength' =>'4', 'maxlength' =>'100'])
        !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-sm-10">
        {!! Form::label('domicilio', 'Ingrese el Domicilio de la UEP') !!}
        {!! Form::text('domicilio', null, ['class' => 'form-control'])
        !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-sm-10">
        {!! Form::label('telefono', 'Ingrese el Teléfono de la UEP') !!}
        {!! Form::text('telefono', null, ['class' => 'form-control'])
        !!}
    </div>
</div>


<div class="row">
    <div class="form-group col-sm-5">
            {!! Form::label('usuarioAdministrador_id', 'Administrador') !!}
            {!! Form::select('usuarioAdministrador_id', $usuarios, null, ['placeholder'=>'Seleccione', 'class' => 'form-control',  'id' => 'select_usuarios', 'data-live-search' => 'true', 'data-max-options' => '1']  )  !!}
    </div>
    <div class="form-group col-sm-5">
            {!! Form::label('provincia_id', 'Provincia') !!}
            {!! Form::select('provincia_id', $provincias, null, ['placeholder'=>'Seleccione', 'class' => 'form-control',  'id' => 'select_usuarios', 'data-live-search' => 'true', 'data-max-options' => '1']  )  !!}
    </div>
</div>

<div class="row" style="margin-bottom: 35px;">
    <div class="form-group col-sm-9">
        <h4>Seleccione Logo de la Provincia</h4>
        <div class="control-group input-group" style="margin-top:5px">
            <input id="file" type="file" class="form-control " name="file" multiple />
        </div>
    </div>
</div>
<div class="form-group col-md-6 col-sm-12">
    {!! Form::submit('Enviar', ['class' => 'btn btn-success']) !!}
</div>
