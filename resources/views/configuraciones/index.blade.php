@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Configuración
@endsection
@section('main-content')
@if(Session::has('message'))
    {{Session::get('message')}}
@endif
<div class="container-fluid">

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Configuración
                    <!--@can('localidad.create') -->
                    <a href="{{ route('configuracion.create') }}"
                    class="btn btn-sm btn-primary pull-right">
                        Crear
                    </a>
                    <!-- @endcan -->
                </div>
                @include('configuraciones._table')
            </div>
        </div>
    </div>
</div>
@endsection
