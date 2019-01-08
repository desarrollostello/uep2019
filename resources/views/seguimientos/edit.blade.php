@extends('adminlte::layouts.app')
@section('htmlheader_title')
    Seguimiento
@endsection

@if(Session::has('message'))
    {{Session::get('message')}}
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading" style="padding-bottom: 20px;">
                    <div class="row">
                        <div class="col-md-5 pull-left"><h4>Editando Seguimiento</h4></div>
                        <div class="col-md-5 pull-right">
                            <a href="{{ route('seguimiento.index') }}" class="btn btn-sm btn-primary pull-right">
                            Volver
                            </a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                  {!! Form::model($seguimiento, ['id'=>'editando_seguimiento', 'method' => 'PATCH', 'route' => ['seguimiento.update', $seguimiento], 'enctype' => 'multipart/form-data']) !!}
                        @include('seguimientos.form')
                  {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
