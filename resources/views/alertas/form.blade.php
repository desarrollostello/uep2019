<div class="row">
    <div class="form-group col-sm-4">
        {!! Form::label('nombre', 'Nombre') !!}
        {!! Form::text('nombre', null, ['class' =>'form-control', 'required'] ) !!}
    </div>
    <div class="form-group col-sm-3">
        {!! Form::label('estado', 'Estado') !!}
        {!! Form::select('estado', [''=>'Seleccione',
                'activada'=>'ACTIVADA',
                'desactivada'=>'DESACTIVADA',
                ],
                null,
                ['class' => 'form-control', 'id' => 'estado', 'data-live-search' => 'true', 'data-max-options' => '1', 'required']  )
        !!}
    </div>
    <div class="form-group col-sm-2">
        {!! Form::label('dias', 'Dias') !!}
        {!! Form::text('dias', null, ['class' =>'form-control', 'required'] ) !!}
    </div>

</div>

<div class="form-group col-sm-4">
    <div class="input-group colorpicker-component formcolorpicker">
        {!! Form::label('color', 'Color') !!}
        <div class="input-group-append">
            {!! Form::text('color', null, ['id'=>'color', 'class' =>'input-group-text input-group-addon form-control', 'style'=>'width=100'] ) !!}
        </div>

    </div>

</div>

@role('admin_role')
<div class="form-group col-sm-4">
    {!! Form::label('codigo', 'Código') !!}
    {!! Form::text('codigo', null, ['class' =>'form-control', 'required'] ) !!}
</div>
@endrole
<div class="row">
    <div class="form-group col-sm-11">
        {!! Form::label('mensaje', 'Mensaje') !!}
        {!! Form::textarea('mensaje', null, ['class' => 'form-control', 'rows' => 3, 'data-toggle'=>'tooltip', 'data-placement'=>'bottom']) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-11">
        {!! Form::label('observaciones', 'Observaciones') !!}
        {!! Form::textarea('observaciones', null, ['class' => 'form-control', 'rows' => 3, 'data-toggle'=>'tooltip', 'data-placement'=>'bottom']) !!}
    </div>
</div>

<br><br>

<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::submit('GUARDAR', ['class' => 'btn btn-success']) !!}
    </div>
</div>
