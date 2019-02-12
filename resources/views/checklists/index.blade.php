@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Checklists
@endsection
@section('main-content')
@if(Session::has('message'))
    {{Session::get('message')}}
@endif

<div class="container-fluid">

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="box-header panel-heading">
                    <h3 class="box-title">Checklists</h3>

                </div>
                @include('checklists._table')
            </div>
        </div>
    </div>
</div>
@endsection
