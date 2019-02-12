<div class="row">
    <div class="form-group col-sm-5">
        {!! Form::label('proyecto_id', 'Proyecto') !!}
        {!! Form::select('proyecto_id', $proyectos, null, ['placeholder'=>'Seleccione', 'class' => 'form-control',  'id' => 'select_proyectos', 'data-live-search' => 'true', 'data-max-options' => '1']  )  !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('nota_oficial', 'Nota oficial') !!}
        {!! Form::checkbox('nota_oficial', null, ['class' =>'form-control'] ) !!}
    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('nota_oficial_c', 'Comentario') !!}
        {!! Form::text('nota_oficial_c', null, ['class' =>'form-control'] ) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('solicitud_financiamiento', 'Sol. Financiamiento') !!}
        {!! Form::checkbox('solicitud_financiamiento', null, ['class' =>'form-control'] ) !!}
    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('solicitud_financiamiento_c', 'Comentario') !!}
        {!! Form::text('solicitud_financiamiento_c', null, ['class' =>'form-control'] ) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('fotocopia_dni', 'Fotocopia DNI') !!}
        {!! Form::checkbox('fotocopia_dni', null, ['class' =>'form-control'] ) !!}
    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('fotocopia_dni_c', 'Comentario') !!}
        {!! Form::text('fotocopia_dni_c', null, ['class' =>'form-control'] ) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('certificado_domicilio', 'Certificado Domicilio') !!}
        {!! Form::checkbox('certificado_domicilio', null, ['class' =>'form-control'] ) !!}
    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('certificado_domicilio_c', 'Comentario') !!}
        {!! Form::text('certificado_domicilio_c', null, ['class' =>'form-control'] ) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('inscripcion_afip_rentas', 'AFIP-RENTAS') !!}
        {!! Form::checkbox('inscripcion_afip_rentas', null, ['class' =>'form-control'] ) !!}
    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('inscripcion_afip_rentas_c', 'Comentario') !!}
        {!! Form::text('inscripcion_afip_rentas_c', null, ['class' =>'form-control'] ) !!}
    </div>
</div>


<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('estado_civil', 'Estado Civil') !!}
        {!! Form::checkbox('estado_civil', null, ['class' =>'form-control'] ) !!}
    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('estado_civil_c', 'Comentario') !!}
        {!! Form::text('estado_civil_c', null, ['class' =>'form-control'] ) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('ddjj', 'DD JJ') !!}
        {!! Form::checkbox('ddjj', null, ['class' =>'form-control'] ) !!}
    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('ddjj_c', 'Comentario') !!}
        {!! Form::text('ddjj_c', null, ['class' =>'form-control'] ) !!}
    </div>
</div>


<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('nota_banco', 'Nota al Banco') !!}
        {!! Form::checkbox('nota_banco', null, ['class' =>'form-control'] ) !!}
    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('nota_banco_c', 'Comentario') !!}
        {!! Form::text('nota_banco_c', null, ['class' =>'form-control'] ) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('respuesta_banco', 'Respuesta del Banco') !!}
        {!! Form::checkbox('respuesta_banco', null, ['class' =>'form-control'] ) !!}
    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('respuesta_banco_c', 'Comentario') !!}
        {!! Form::text('respuesta_banco_c', null, ['class' =>'form-control'] ) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('titulo_propiedad_inmuebles', 'Propiedades Inmuebles') !!}
        {!! Form::checkbox('titulo_propiedad_inmuebles', null, ['class' =>'form-control'] ) !!}
    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('titulo_propiedad_inmuebles_c', 'Comentario') !!}
        {!! Form::text('titulo_propiedad_inmuebles_c', null, ['class' =>'form-control'] ) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('habilitaciones', 'Habilitaciones') !!}
        {!! Form::checkbox('habilitaciones', null, ['class' =>'form-control'] ) !!}
    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('habilitaciones_c', 'Comentario') !!}
        {!! Form::text('habilitaciones_c', null, ['class' =>'form-control'] ) !!}
    </div>
</div>


<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('titulo_propiedad_muebles', 'Propiedades Muebles') !!}
        {!! Form::checkbox('titulo_propiedad_muebles', null, ['class' =>'form-control'] ) !!}
    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('titulo_propiedad_muebles_c', 'Comentario') !!}
        {!! Form::text('titulo_propiedad_muebles_c', null, ['class' =>'form-control'] ) !!}
    </div>
</div>


<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('proformas', 'Proformas') !!}
        {!! Form::checkbox('proformas', null, ['class' =>'form-control'] ) !!}
    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('proformas_c', 'Comentario') !!}
        {!! Form::text('proformas_c', null, ['class' =>'form-control'] ) !!}
    </div>
</div>


<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('guia_proyecto', 'Guía Proyecto') !!}
        {!! Form::checkbox('guia_proyecto', null, ['class' =>'form-control'] ) !!}
    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('guia_proyecto_c', 'Comentario') !!}
        {!! Form::text('guia_proyecto_c', null, ['class' =>'form-control'] ) !!}
    </div>
</div>


<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('estadisticas', 'Estadísticas') !!}
        {!! Form::checkbox('estadisticas', null, ['class' =>'form-control'] ) !!}
    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('estadisticas_c', 'Comentario') !!}
        {!! Form::text('estadisticas_c', null, ['class' =>'form-control'] ) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('promeva', 'Promeva') !!}
        {!! Form::checkbox('promeva', null, ['class' =>'form-control'] ) !!}
    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('promeva_c', 'Comentario') !!}
        {!! Form::text('promeva_c', null, ['class' =>'form-control'] ) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('informe_uep', 'Informe UEP') !!}
        {!! Form::checkbox('informe_uep', null, ['class' =>'form-control'] ) !!}
    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('informe_uep_c', 'Comentario') !!}
        {!! Form::text('informe_uep_c', null, ['class' =>'form-control'] ) !!}
    </div>
</div>

<br /><br />
<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::submit('GUARDAR', ['class' => 'btn btn-success']) !!}
    </div>
</div>
