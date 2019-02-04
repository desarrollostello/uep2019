@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Anexos de Seguimientos
@endsection


@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Nuevo Anexo al Seguimiento
                  <p class="pull-right">
                    <a href="{{ route('anexoSeguimiento.index') }}" class="btn btn-sm btn-primary pull-right">
                      Volver
                    </a>
                  </p>
                </div>

                <div class="panel-body">
                    {!! Form::open(['route' => ['anexoSeguimiento.store'], 'enctype' => 'multipart/form-data']) !!}
                        @include('anexosseguimientos.form')
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
