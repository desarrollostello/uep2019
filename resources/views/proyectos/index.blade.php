@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Proyectos
@endsection
@section('main-content')
@if(Session::has('message'))
    {{Session::get('message')}}
@endif

<div class="row" style="margin-top: 20px; margin-bottom: 50px;">
    <div class="col-md-3" style="margin-left: 50px">
        <button id="search" type="button" class="btn btn-primary" style="float: left; position: relative; overflow: hidden; width: 100%;">Búsqueda Avanzada</button><br />
    </div>
    <div id="output"></div>
</div>
<div class="row busqueda_avanzada" style="display: none">
    <div class="row">
        <div class="col-md-11" style="margin-left: 125px">
                    {{ Form::open(['route' => 'proyecto.search']) }}
                        <div class="row">
                            <div class="col-md-3">
                                <span class="etiqueta">Fecha Ingreso desde<input class="form-control" type="text" id="fechaIngreso_desde" name="fechaIngreso_desde"></span>
                            </div>
                            <div class="col-md-3">
                                <span class="etiqueta">Fecha Ingreso hasta<input class="form-control hasta" type="text" id="fechaIngreso_hasta" name="fechaIngreso_hasta"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <span class="etiqueta">Envío Banco desde<input class="form-control" type="text" id="fechaEnvioBanco_desde" name="fechaEnvioBanco_desde"></span>
                            </div>
                            <div class="col-md-3">
                                <span class="etiqueta">Envío Banco hasta<input class="form-control hasta" type="text" id="fechaEnvioBanco_hasta" name="fechaEnvioBanco_hasta"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <span class="etiqueta">Respuesta Banco desde<input class="form-control" type="text" id="fechaRespuestaBanco_desde" name="fechaRespuestaBanco_desde"></span>
                            </div>
                            <div class="col-md-3">
                                <span class="etiqueta">Respuesta Banco hasta<input class="form-control hasta" type="text" id="fechaRespuestaBanco_hasta" name="fechaRespuestaBanco_hasta"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <span class="etiqueta">Caduco Banco desde<input class="form-control" type="text" id="fechaCaducoBanco_desde" name="fechaCaducoBanco_desde"></span>
                            </div>
                            <div class="col-md-3">
                                <span class="etiqueta">Caduco Banco hasta<input class="form-control hasta" type="text" id="fechaCaducoBanco_hasta" name="fechaCaducoBanco_hasta"></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <span class="etiqueta">Aprobado UEP desde<input class="form-control" type="text" id="fechaAprobadoUep_desde" name="fechaAprobadoUep_desde"></span>
                            </div>
                            <div class="col-md-3">
                                <span class="etiqueta">Aprobado UEP hasta<input class="form-control hasta" type="text" id="fechaAprobadoUep_hasta" name="fechaAprobadoUep_hasta"></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <span class="etiqueta">Fecha Enviado CFI desde<input class="form-control" type="text" id="fechaEnviadoCfi_desde" name="fechaEnviadoCfi_desde"></span>
                            </div>
                            <div class="col-md-3">
                                <span class="etiqueta">Fecha Enviado CFI hasta<input class="form-control hasta" type="text" id="fechaEnviadoCfi_hasta" name="fechaEnviadoCfi_hasta"></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <span class="etiqueta">Aprobado CFI desde<input class="form-control" type="text" id="fechaAprobadoCfi_desde" name="fechaAprobadoCfi_desde"></span>
                            </div>
                            <div class="col-md-3">
                                <span class="etiqueta">Aprobado CFI hasta<input class="form-control hasta" type="text" id="fechaAprobadoCfi_hasta" name="fechaAprobadoCfi_hasta"></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <span class="etiqueta">TRAMDISPO desde<input class="form-control" type="text" id="fechaTramdispo_desde" name="fechaTramdispo_desde"></span>
                            </div>
                            <div class="col-md-3">
                                <span class="etiqueta">TRAMDISPO hasta<input class="form-control hasta" type="text" id="fechaTramdispo_hasta" name="fechaTramdispo_hasta"></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <span class="etiqueta">COMUNICATRAN desde<input class="form-control" type="text" id="fechaComunicaTran_desde" name="fechaComunicaTran_desde"></span>
                            </div>
                            <div class="col-md-3">
                                <span class="etiqueta">COMUNICATRAN hasta<input class="form-control hasta" type="text" id="fechaComunicaTran_hasta" name="fechaComunicaTran_hasta"></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <span class="etiqueta">DESEMBOLSO desde<input class="form-control" type="text" id="fechaDesembolso_desde" name="fechaDesembolso_desde"></span>
                            </div>
                            <div class="col-md-3">
                                <span class="etiqueta">DESEMBOLSO hasta<input class="form-control hasta" type="text" id="fechaDesembolso_hasta" name="fechaDesembolso_hasta"></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <span class="etiqueta">Fecha Efectivizacón desde<input class="form-control" type="text" id="fechaEfectivizacion_desde" name="fechaEfectivizacion_desde"></span>
                            </div>
                            <div class="col-md-3">
                                <span class="etiqueta">Fecha Efectivizacón hasta<input class="form-control hasta" type="text" id="fechaEfectivizacion_hasta" name="fechaEfectivizacion_hasta"></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <span class="etiqueta">Desistido desde<input class="form-control" type="text" id="fechaDesistido_desde" name="fechaDesistido_desde"></span>
                            </div>
                            <div class="col-md-3">
                                <span class="etiqueta">Desistido hasta<input class="form-control hasta" type="text" id="fechaDesistido_hasta" name="fechaDesistido_hasta"></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <span class="etiqueta">Cancelado desde<input class="form-control" type="text" id="fechaCancelado_desde" name="fechaCancelado_desde"></span>
                            </div>
                            <div class="col-md-3">
                                <span class="etiqueta">Cancelado hasta<input class="form-control hasta" type="text" id="fechaCancelado_hasta" name="fechaCancelado_hasta"></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <span class="etiqueta">Archivado desde<input class="form-control" type="text" id="fechaArchivado_desde" name="fechaArchivado_desde"></span>
                            </div>
                            <div class="col-md-3">
                                <span class="etiqueta">Archivado hasta<input class="form-control hasta" type="text" id="fechaArchivado_hasta" name="fechaArchivado_hasta"></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <span class="etiqueta">Último Judicial desde<input class="form-control" type="text" id="fechaJudicial_desde" name="fechaJudicial_desde"></span>
                            </div>
                            <div class="col-md-3">
                                <span class="etiqueta">Último Judicial hasta<input class="form-control hasta" type="text" id="fechaJudicial_hasta" name="fechaJudicial_hasta"></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <span class="etiqueta">Último Movimiento desde<input class="form-control" type="text" id="fechaUltimoMovimiento_desde" name="fechaUltimoMovimiento_desde"></span>
                            </div>
                            <div class="col-md-3">
                                <span class="etiqueta">Último Movimiento hasta<input class="form-control hasta" type="text" id="fechaUltimoMovimiento_hasta" name="fechaUltimoMovimiento_hasta"></span>
                            </div>
                        </div>

                        <div class="form-group col-sm-11" style="margin-top: 20px">
                            {!! Form::submit('Filtrar', ['class' => 'btn btn-success filtrar', 'id'=>'filtrarDatos']) !!}
                        </div>
                    {{ Form::close() }}
        </div>
    </div>
</div>

<div class="container-fluid">
<div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box bg-yellow">
                            <span class="info-box-icon"><i class="fa fa-calendar"></i></span>
                            <div class="info-box-content">
                                <a href="{{  route('proyecto.filtrar', "uep") }}">
                                    <span class="info-box-text">Proyectos</span>
                                    <span class="info-box-number">en UEP</span>
                                </a>
                                    <span class="progress-description">
                                        Proyectos en la Unidad
                                    </span>
                            </div>
                          </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box bg-yellow">
                            <span class="info-box-icon"><i class="fa fa-calendar"></i></span>
                            <div class="info-box-content">
                                <a href="{{  route('proyecto.filtrar', "solicitante") }}">
                                    <span class="info-box-text">Proyectos</span>
                                    <span class="info-box-number">SOLICITANTE</span>
                                </a>
                                    <span class="progress-description">
                                        Proyectos en Solicitante
                                    </span>
                            </div>
                          </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box bg-yellow">
                            <span class="info-box-icon"><i class="fa fa-calendar"></i></span>
                            <div class="info-box-content">
                                <a href="{{  route('proyecto.filtrar', "banco") }}">
                                    <span class="info-box-text">Proyectos</span>
                                    <span class="info-box-number">BANCO</span>
                                </a>
                                    <span class="progress-description">
                                        Proyectos en Banco
                                    </span>
                            </div>
                          </div>
                    </div>

</div>

<div class="row">
    <div class="col-md-12">
        <a href="{{  route('proyecto.filtroAnual') }}">Ingresados este año</a>
    </div>

    <div class="col-md-12">

    </div>
</div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">

                <div class="panel-heading" style="padding-bottom: 20px;">
                    <div class="row">
                        <div class="col-md-5 pull-left"><h4>Proyectos</h4></div>
                        <div class="col-md-5 pull-right">
                          @can('proyecto.create')
                            <a href="{{ route('proyecto.create') }}" class="btn btn-sm btn-primary pull-right">
                            Nuevo Proyecto
                            </a>
                          @endcan
                        </div>
                    </div>
                </div>
                @include('proyectos._table')
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('js/admin.js') }}"></script>
@endpush
@include('proyectos.create_movimiento_index')
