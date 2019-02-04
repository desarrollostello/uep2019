@extends('adminlte::layouts.app')
@section('htmlheader_title')
    Estados
@endsection
@section('main-content')
@if(Session::has('message'))
    {{Session::get('message')}}
@endif
      <div style="padding-left: 50px; padding-right: 50px;">
            <div class="box">
                <div class="box-header panel-default panel-heading">
                    <h3 class="box-title">Todos los Estados</h3>
      	        </div>
	            <div class="box-body">
                  <table class="table table-responsive table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Nombre</th>
                          <th>Código</th>
                          <th style="width: 15%">Opciones</th>
                        </tr>
                      </thead>
                  <tbody>
                        @foreach($estados as $x)
                            <tr>
                                <td>{{$x->nombre}}</td>
                                <td>{{$x->codigo}}</td>
                                <td>
                                @can('estado.edit')
                                    <a href="{{ route('estado.edit', $x) }}" class="btn btn-info btn-xs pull-rigth">Editar</a>

                                @endcan
                                </td>
                            </tr>
                        @endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

@endsection
