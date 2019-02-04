@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Alertas
@endsection
@section('main-content')

<div class="container-fluid">

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Sector
                    @role('admin_role')
                    <a href="{{ route('alerta.create') }}"
                    class="btn btn-sm btn-primary pull-right">
                        Crear
                    </a>
                    @endrole
                </div>
                @include('alertas._table')
            </div>
        </div>
    </div>
</div>
@endsection
