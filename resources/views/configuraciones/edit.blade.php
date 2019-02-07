@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Configuración
@endsection

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">Editando Configuración
                  <p class="pull-right">
                    <a href="{{ route('configuracion.show', $configuracion->id) }}" class="btn btn-sm btn-primary pull-right">
                      Visualizar
                    </a>
                  </p>
                </div>

                <div class="panel-body">
                  {!! Form::model($configuracion, ['method' => 'PATCH', 'route' => ['configuracion.update', $configuracion], 'enctype' => 'multipart/form-data']) !!}
                        @include('configuraciones.form')
                  {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
