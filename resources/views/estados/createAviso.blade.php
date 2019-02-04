@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Estado
@endsection


@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Nuevo Estado
                  <p class="pull-right">
                    <a href="{{ route('estado.index') }}" class="btn btn-sm btn-primary pull-right">
                      Volver
                    </a>
                  </p>
                </div>

                <div class="panel-body">
                    <p> Para crear un nuevo ESTADO deberá comunicarse con el Administrador del Sistema</p>
                    <br>
                    <p> <strong>Nombre:</strong> Mauro Tello | <strong>mail:</strong> desarrollostello@gmail.com | <strong>Tél.:</strong> +54 2920 538998 </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
