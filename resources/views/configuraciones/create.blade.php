@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Configuración
@endsection


@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Nueva Configuración
                  <p class="pull-right">
                    <a href="{{ route('configuracion.index') }}" class="btn btn-sm btn-primary pull-right">
                      Volver
                    </a>
                  </p>
                </div>

                <div class="panel-body">
                    {!! Form::open(['route' => ['configuracion.store'], 'enctype' => 'multipart/form-data']) !!}
                        @include('configuraciones.form')
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
