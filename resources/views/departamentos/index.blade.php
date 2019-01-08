@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Departamentos
@endsection
@section('main-content')
@if(Session::has('message'))
    {{Session::get('message')}}
@endif

	<div class="">
		<div class="box">
			<div class="box-header">
				    <h3 class="box-title">Todos los Departamentos</h3>
            @can('departamento.create')
                <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">Nueva</button>
            @endcan
			</div>

			<div class="box-body">
				<table class="table table-responsive table-striped table-bordered">
          <thead>
          <tr>
              <th>Nombre</th>
              <th style="width: 15%">Opciones</th>
          </tr>
          </thead>
          <tfoot>
          <tr>
              <th>Nombre</th>
          </tr>
          </tfoot>
          <tbody>

						@foreach($departamentos as $x)
							<tr>
								<td>{{$x->nombre}}</td>
								<td>
                  @can('departamento.edit')
									     <button class="btn btn-info" data-nombre="{{ $x->nombre }}" data-id={{$x->id}} data-toggle="modal" data-target="#edit">Editar</button>
                  @endcan
                  @can('departamento.destroy')
									       <button class="btn btn-danger" onclick="return confirm('Está seguro que desea eliminar este ítem?')"  data-id={{$x->id}} data-toggle="modal" data-target="#delete">Borrar</button>
                  @endcan
								</td>
							</tr>

						@endforeach
					</tbody>


				</table>
			</div>
		</div>
	</div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nuevo Departamento</h4>
      </div>
      <form action="{{ route('departamento.store') }}" method="post">
      		{{csrf_field()}}
	      <div class="modal-body">
				@include('departamentos.form')
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
	        <button type="submit" class="btn btn-primary">Guardar</button>
	      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Editar Departamento</h4>
      </div>
      <form action="{{route('departamento.update','test')}}" method="post">
      		{{method_field('patch')}}
      		{{csrf_field()}}
	      <div class="modal-body">
	      		<input type="hidden" name="id" id="id" value="">
				    @include('departamentos.form')
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
	        <button type="submit" class="btn btn-primary">Guardar cambios</button>
	      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Confirmación</h4>
      </div>
      <form action="{{route('departamento.destroy','test')}}" method="post">
      		{{method_field('delete')}}
      		{{csrf_field()}}
	      <div class="modal-body">
				<p class="text-center">
					Está seguro que desea eliminar este item?
				</p>
	      		<input type="hidden" name="id" id="id" value="">

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancelar</button>
	        <button type="submit" class="btn btn-warning">SI, Borrar</button>
	      </div>
      </form>
    </div>
  </div>
</div>

@endsection
@push('scripts')
<script src="{{ asset('js/admin.js') }}"></script>

<script>
$(document).ready(function() {
    $('#table-banco').DataTable();
});
</script>
@endpush
