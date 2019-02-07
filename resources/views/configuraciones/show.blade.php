@extends('adminlte::layouts.app')
@section('htmlheader_title')
    Configuración
@endsection


@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div style="overflow: hidden; margin-bottom: 20px;" class="panel-heading">
                	<div style="position: relative; float: left; width: 40%; overflow: hidden"><h5>Visualizando la Configuración</h5></div>
                	
                    <div style="position: relative; float: right; width: 20%; overflow: hidden"><a href="{{ route('configuracion.edit', $configuracion) }}" class="btn btn-sm btn-primary pull-right">Editar</a></div>

                </div>
                <div class="clearfix"></div>
    			<div class="divider"></div>

			    <div class="panel panel-success col-sm-12">
			        <div class="panel-heading">
			            <h3 class="panel-title  text-center"> <strong>Provincia : {{ $configuracion->provincia->nombre }}</strong></h3>
			        </div>
			        <div class="panel-body">
                        <div class="row">
				        	<div class="col-sm-12">
				            	<h5 class="text-left"><strong>Titulo del Ssitema: </strong> {{ $configuracion->titulo }}</h5>
				            </div>
			        	</div>
			        	<div class="row">
				        	<div class="col-sm-12">
				            	<h5 class="text-left"><strong>Domicilio: </strong> {{ $configuracion->domicilio }}</h5>
				            </div>
			        	</div>
			        	<hr>
			        	<div class="row">
				        	<div class="col-sm-6">
				            	<h5 class="text-left"><strong>Teléfono: </strong>{{ $configuracion->telefono }}</h5>
				            	<!-- $derivacion->created_at->format('d-m-Y') -->
				            </div>
				            <div class="col-sm-6">
				            	<h5 class="text-left"><strong>Administrador: </strong> {{ $configuracion->userAdmin->name }}</h5>
				            </div>
			            </div>

			            <div class="row">
				            <div class="col-sm-12">
				            	<h5 class="text-left"><strong>Logo: </strong> {{ $configuracion->logo }}</h5>
				            </div>
			            </div>


			            <div class="clearfix"></div>
			            <br />
			            <br />

			        </div>
		        </div>
            </div>
        </div>
    </div>
</div>
@endsection
