@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Checklists
@endsection

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="box-header panel-heading">
                      <h3 class="box-title">Nuevo Checklist</h3>
                      <a style="margin-right: 40px;" href="{{ route('checklist.index') }}"
                      class="btn btn-sm btn-primary pull-right">
                          Volver
                      </a>
                </div>

                <div class="panel-body">
                    {{ Form::open(['route' => 'checklist.store']) }}
                        @include('checklists.form0')
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
