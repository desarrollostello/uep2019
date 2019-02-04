<div class="row">
    <div class="form-group col-sm-4">
        {!! Form::label('nombre', 'Nombre') !!}
        {!! Form::text('nombre', null, ['class' => 'form-control', 'required', 'minlength' =>'4', 'maxlength' =>'200'])
        !!}
    </div>
    <div class="form-group col-sm-4">
        {!! Form::label('codigo', 'Código') !!}
        {!! Form::text('codigo', null, ['class' => 'form-control'])
        !!}
    </div>
</div>

<div class="form-group col-sm-12">
    {!! Form::submit('Enviar', ['class' => 'btn btn-success']) !!}
</div>
