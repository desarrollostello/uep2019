<div class="row">
    <div class="form-group col-sm-11">
        {!! Form::label('proyecto_id', 'Proyecto') !!}
        <input type="text" id="proyecto_nombre" class="form-control" name="proyecto_nombre" value="{{ $proyecto->nombre  }}" />
        <input style="visibility:hidden" type="text" id="proyecto_id" class="form-control" name="proyecto_id" value="{{ $proyecto->id }}" />
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('nota_oficial', 'Nota oficial') !!}
        {!! Form::hidden('checklist[nota_oficial]','NO') !!}
        <input type="checkbox" name="checklist[nota_oficial]" id="nota_oficial" value="SI" {{ $checklist[0]['nota_oficial'] == 'SI'?"checked":''}} >


    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('nota_oficial_c', 'Comentario') !!}
        <input type="text" name="checklist[nota_oficial_c]" id="nota_oficial_c" class="form-control" value="{{ $checklist[0]['nota_oficial_c'] }}" >

    </div>
</div>

<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('solicitud_financiamiento', 'Sol. Financiamiento') !!}
        {!! Form::hidden('checklist[solicitud_financiamiento]','NO') !!}
        <input type="checkbox" name="checklist[solicitud_financiamiento]" id="solicitud_financiamiento" value="SI" {{ $checklist[0]['solicitud_financiamiento'] == 'SI'?"checked":''}} >

    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('solicitud_financiamiento_c', 'Comentario') !!}
        <input type="text" name="checklist[solicitud_financiamiento_c]" id="solicitud_financiamiento_c" class="form-control" value="{{ $checklist[0]['solicitud_financiamiento_c'] }}" >

    </div>
</div>

<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('fotocopia_dni', 'Fotocopia DNI') !!}
        {!! Form::hidden('checklist[fotocopia_dni]','NO') !!}
        <input type="checkbox" name="checklist[fotocopia_dni]" id="fotocopia_dni" value="SI" {{ $checklist[0]['fotocopia_dni'] == 'SI'?"checked":''}} >

    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('fotocopia_dni_c', 'Comentario') !!}
        <input type="text" name="checklist[fotocopia_dni_c]" id="fotocopia_dni_c" class="form-control" value="{{ $checklist[0]['fotocopia_dni_c'] }}" >

    </div>
</div>

<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('certificado_domicilio', 'Certificado Domicilio') !!}
        {!! Form::hidden('checklist[certificado_domicilio]','NO') !!}
        <input type="checkbox" name="checklist[certificado_domicilio]" id="certificado_domicilio" value="SI" {{ $checklist[0]['certificado_domicilio'] == 'SI'?"checked":''}} >

    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('certificado_domicilio_c', 'Comentario') !!}
        <input type="text" name="checklist[certificado_domicilio_c]" id="certificado_domicilio_c" class="form-control" value="{{ $checklist[0]['certificado_domicilio_c'] }}" >

    </div>
</div>

<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('inscripcion_afip_rentas', 'AFIP-RENTAS') !!}
        {!! Form::hidden('checklist[inscripcion_afip_rentas]','NO') !!}
        <input type="checkbox" name="checklist[inscripcion_afip_rentas]" id="inscripcion_afip_rentas" value="SI" {{ $checklist[0]['inscripcion_afip_rentas'] == 'SI'?"checked":''}} >

    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('inscripcion_afip_rentas_c', 'Comentario') !!}
        <input type="text" name="checklist[inscripcion_afip_rentas_c]" id="inscripcion_afip_rentas_c" class="form-control" value="{{ $checklist[0]['inscripcion_afip_rentas_c'] }}" >

    </div>
</div>


<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('estado_civil', 'Estado Civil') !!}
        {!! Form::hidden('checklist[estado_civil]','NO') !!}
        <input type="checkbox" name="checklist[estado_civil]" id="estado_civil" value="SI" {{ $checklist[0]['estado_civil'] == 'SI'?"checked":''}} >

    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('estado_civil_c', 'Comentario') !!}
        <input type="text" name="checklist[estado_civil_c]" id="estado_civil_c" class="form-control" value="{{ $checklist[0]['estado_civil_c'] }}" >

    </div>
</div>

<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('ddjj', 'DD JJ') !!}
        {!! Form::hidden('checklist[ddjj]','NO') !!}
        <input type="checkbox" name="checklist[ddjj]" id="ddjj" value="SI" {{ $checklist[0]['ddjj'] == 'SI'?"checked":''}} >

    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('ddjj_c', 'Comentario') !!}
        <input type="text" name="checklist[ddjj_c]" id="ddjj_c" class="form-control" value="{{ $checklist[0]['ddjj_c'] }}" >

    </div>
</div>


<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('nota_banco', 'Nota al Banco') !!}
        {!! Form::hidden('checklist[nota_banco]','NO') !!}
        <input type="checkbox" name="checklist[nota_banco]" id="nota_banco" value="SI" {{ $checklist[0]['nota_banco'] == 'SI'?"checked":''}} >

    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('nota_banco_c', 'Comentario') !!}
        <input type="text" name="checklist[nota_banco_c]" id="nota_banco_c" class="form-control" value="{{ $checklist[0]['nota_banco_c'] }}" >

    </div>
</div>

<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('respuesta_banco', 'Respuesta del Banco') !!}
        {!! Form::hidden('checklist[respuesta_banco]','NO') !!}
        <input type="checkbox" name="checklist[respuesta_banco]" id="respuesta_banco" value="SI" {{ $checklist[0]['respuesta_banco'] == 'SI'?"checked":''}} >

    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('respuesta_banco_c', 'Comentario') !!}
        <input type="text" name="checklist[respuesta_banco_c]" id="respuesta_banco_c" class="form-control" value="{{ $checklist[0]['respuesta_banco_c'] }}" >

    </div>
</div>

<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('titulo_propiedad_inmuebles', 'Propiedades Inmuebles') !!}
        {!! Form::hidden('checklist[titulo_propiedad_inmuebles]','NO') !!}
        <input type="checkbox" name="checklist[titulo_propiedad_inmuebles]" id="titulo_propiedad_inmuebles" value="SI" {{ $checklist[0]['titulo_propiedad_inmuebles'] == 'SI'?"checked":''}} >

    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('titulo_propiedad_inmuebles_c', 'Comentario') !!}
        <input type="text" name="checklist[titulo_propiedad_inmuebles_c]" id="titulo_propiedad_inmuebles_c" class="form-control" value="{{ $checklist[0]['titulo_propiedad_inmuebles_c'] }}" >

    </div>
</div>

<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('habilitaciones', 'Habilitaciones') !!}
        {!! Form::hidden('checklist[habilitaciones]','NO') !!}
        <input type="checkbox" name="checklist[habilitaciones]" id="habilitaciones" value="SI" {{ $checklist[0]['habilitaciones'] == 'SI'?"checked":''}} >

    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('habilitaciones_c', 'Comentario') !!}
        <input type="text" name="checklist[habilitaciones_c]" id="habilitaciones_c" class="form-control" value="{{ $checklist[0]['habilitaciones_c'] }}" >

    </div>
</div>


<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('titulo_propiedad_muebles', 'Propiedades Muebles') !!}
        {!! Form::hidden('checklist[titulo_propiedad_muebles]','NO') !!}
        <input type="checkbox" name="checklist[titulo_propiedad_muebles]" id="titulo_propiedad_muebles" value="SI" {{ $checklist[0]['titulo_propiedad_muebles'] == 'SI'?"checked":''}} >

    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('titulo_propiedad_muebles_c', 'Comentario') !!}
        <input type="text" name="checklist[titulo_propiedad_muebles_c]" id="titulo_propiedad_muebles_c" class="form-control" value="{{ $checklist[0]['titulo_propiedad_muebles_c'] }}" >

    </div>
</div>


<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('proformas', 'Proformas') !!}
        {!! Form::hidden('checklist[proformas]','NO') !!}
        <input type="checkbox" name="checklist[proformas]" id="proformas" value="SI" {{ $checklist[0]['proformas'] == 'SI'?"checked":''}} >

    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('proformas_c', 'Comentario') !!}
        <input type="text" name="checklist[proformas_c]" id="proformas_c" class="form-control" value="{{ $checklist[0]['proformas_c'] }}" >

    </div>
</div>


<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('guia_proyecto', 'Guía Proyecto') !!}
        {!! Form::hidden('checklist[guia_proyecto]','NO') !!}
        <input type="checkbox" name="checklist[guia_proyecto]" id="guia_proyecto" value="SI" {{ $checklist[0]['guia_proyecto'] == 'SI'?"checked":''}} >

    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('guia_proyecto_c', 'Comentario') !!}
        <input type="text" name="checklist[guia_proyecto_c]" id="guia_proyecto_c" class="form-control" value="{{ $checklist[0]['guia_proyecto_c'] }}" >

    </div>
</div>


<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('estadisticas', 'Estadísticas') !!}
        {!! Form::hidden('checklist[estadisticas]','NO') !!}
        <input type="checkbox" name="checklist[estadisticas]" id="estadisticas" value="SI" {{ $checklist[0]['estadisticas'] == 'SI'?"checked":''}} >

    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('estadisticas_c', 'Comentario') !!}
        <input type="text" name="checklist[estadisticas_c]" id="estadisticas_c" class="form-control" value="{{ $checklist[0]['estadisticas_c'] }}" >

    </div>
</div>

<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('promeva', 'Promeva') !!}
        {!! Form::hidden('checklist[promeva]','NO') !!}
        <input type="checkbox" name="checklist[promeva]" id="promeva" value="SI" {{ $checklist[0]['promeva'] == 'SI'?"checked":''}} >

    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('promeva_c', 'Comentario') !!}
        <input type="text" name="checklist[promeva_c]" id="promeva_c" class="form-control" value="{{ $checklist[0]['promeva_c'] }}" >

    </div>
</div>

<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('informe_uep', 'Informe UEP') !!}
        {!! Form::hidden('checklist[informe_uep]','NO') !!}
        <input type="checkbox" name="checklist[informe_uep]" id="informe_uep" value="SI" {{ $checklist[0]['informe_uep'] == 'SI'?"checked":''}} >

    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('informe_uep_c', 'Comentario') !!}
        <input type="text" name="checklist[informe_uep_c]" id="informe_uep_c" class="form-control" value="{{ $checklist[0]['informe_uep_c'] }}" >

    </div>
</div>
