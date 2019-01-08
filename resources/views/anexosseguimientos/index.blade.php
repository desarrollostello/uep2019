@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Anexos de los Seguimientos
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
                    Anexos Seguimientos
                    <!--@can('localidad.create') -->
                    <a href="{{ route('anexoSeguimiento.create') }}"
                    class="btn btn-sm btn-primary pull-right">
                        Crear
                    </a>
                    <!-- @endcan -->
                </div>
                @include('anexosseguimientos._table')
            </div>
        </div>
    </div>
</div>
@endsection
