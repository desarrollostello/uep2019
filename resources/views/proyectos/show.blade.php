@extends('adminlte::layouts.app')
@section('htmlheader_title')
    Proyectos
@endsection

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-11">
            <div class="panel panel-default">
                <div class="panel-heading" style="padding-bottom: 20px;">
                    <div class="row">
                        <div class="col-md-5 pull-left"><h4>Editando Proyecto</h4></div>
                        <div class="col-md-5 pull-right">

                            <a href="{{ route('proyecto.index') }}" class="btn btn-sm btn-primary pull-right">
                            Volver
                            </a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    @include('proyectos._form_show')
                </div>
                <div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <!-- <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#addMovimiento" data-whatever="{{ $proyecto->id }}">Agregar Movimiento</button> -->

                            <h4>Listado de Movimientos</h4>
                        </div>
                    </div>
                    <table id="table" class="table table-striped table-bordered" style="margin-left: 15px; width: 95%;">
                        <thead>
                        <tr>

                            <th style="text-align: center">Fecha</th>
                            <th>Descripcion</th>
                            <th style="text-align: center">Usuario</th>

                        </tr>
                        </thead>

                        <tbody>
                        @foreach($movimientos as $x)
                            <tr>
                                <!--<td>-->
                                    <!--<button class="delete_movimiento1" id="delete_movimiento1" type="button" class="btn btn-info btn-xs pull-rigth" onclick="borrar_movimiento({{ $x->id  }});"><i class="fa fa-trash" title="Borrar Movimiento"></i></button>-->
                                <!--</td>-->
                                <td style="text-align: center">{{ \Carbon\Carbon::parse($x->fecha)->format('d-m-Y') }}</td>
                                <td>{{ $x->descripcion }}</td>
                                <td style="text-align: center">{{ $x->user->name }}</td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>


                <div style="margin-top: 85px;">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <!--<a href="{{ route('refinanciacion.create1', $proyecto->id) }}" type="button" class="btn btn-primary pull-right">Refinanciar Proyecto</a>-->

                            <h4>Refinanciación</h4>
                        </div>
                    </div>
                    <table id="table" class="table table-striped table-bordered" style="margin-left: 15px; width: 95%;">
                        <thead>
                        <tr>
                            <th style="text-align: center">Fecha</th>
                            <th style="text-align: center">Resolución</th>
                            <th style="text-align: center">Monto</th>
                            <th style="text-align: center">Plazo Gracia</th>
                            <th style="text-align: center">Plazo Amort.</th>

                        </tr>
                        </thead>

                        <tbody>
                        @if ($refinanciaciones)
                        @foreach($refinanciaciones as $td)
                            <tr>
                                <td style="text-align: center">{{ \Carbon\Carbon::parse($td->fecha)->format('d-m-Y') }}</td>
                                <td style="text-align: center">{{ $td->nroResolucion }}</td>
                                <td style="text-align: center">{{ $td->montoRefinanciar }}</td>
                                <td style="text-align: center">{{ $td->plazoGracia }}</td>
                                <td style="text-align: center">{{ $td->plazoAmortizacion }}</td>
                            </tr>
                        @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>


                <div style="margin-top: 85px;">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <!-- <a href="{{ route('titular.create1', $proyecto->id) }}" type="button" class="btn btn-primary pull-right">Nuevo Titular</a>-->

                            <h4>Titulares</h4>
                        </div>
                    </div>
                    <table id="table" class="table table-striped table-bordered" style="margin-left: 15px; width: 95%;">
                        <thead>
                        <tr>
                            <td></td>
                            <th style="text-align: center">Apellido y Nombre</th>
                            <th style="text-align: center">DNI</th>
                            <th style="text-align: center">Localidad</th>
                            <th style="text-align: center">Estado Civil</th>


                        </tr>
                        </thead>

                        <tbody>
                        @if ($titulares)
                        @foreach($titulares as $td)
                            <tr>
                            <!--    <td><button class="delete_titular1" id="delete_titular1" type="button" class="btn btn-info btn-xs pull-rigth" onclick="borrar_titular({{ $td->id  }});"><i class="fa fa-trash" title="Borrar Titular"></i></button></td>-->
                                <td style="text-align: center">{{ $td->apeynom }}</td>
                                <td style="text-align: center">{{ $td->dni }}</td>
                                @if($td->localidad)
                                    <td style="text-align: center">{{ $td->localidad->nombre }}</td>
                                @else
                                    <td style="text-align: center"></td>
                                @endif
                                @if($td->estadoCivil)
                                    <td style="text-align: center">{{ $td->estadoCivil->nombre }}</td>
                                @else
                                    <td style="text-align: center"></td>
                                @endif

                            </tr>
                        @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>




            </div>
        </div>
    </div>
</div>


<!--
@include('proyectos.create_movimiento')
@include('proyectos.create_desembolso')

-->
@endsection
