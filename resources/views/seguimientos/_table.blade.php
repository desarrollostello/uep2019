<table id="table" class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>Fecha</th>
        <th>Número</th>
        <th>Proyecto</th>
      


        <th style="width: 20%">Opciones</th>
    </tr>
    </thead>
   
    <tbody>
    @foreach($seguimientos as $td)
        <tr>
            <td>{{ $td->fechaSeguimiento }}</td>
            <td>{{ $td->proyecto->numeroCfi }}</td>
            @if ($td->proyecto)
                <td>{{ $td->proyecto->nombre }}</td>
            @else
                <td></td>
            @endif
          
            <td>
                <a href="{{ route('seguimiento.show', $td) }}" class="btn btn-info btn-xs pull-rigth">Ver</a>
                @can('seguimiento.edit')
                <a href="{{ route('seguimiento.edit', $td) }}" class="btn btn-info btn-xs pull-rigth">Editar</a>
                @endcan
                @can('seguimiento.delete')
                    <a href="{{ route('seguimiento.delete', $td->slug) }}" class="btn btn-danger btn-xs pull-rigth" onclick="return confirm('Está seguro que desea eliminar este ítem?')" class="btn btn-danger">Eliminar</a>
                @endcan
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@push('scripts')
<script src="{{ asset('js/admin.js') }}"></script>

@endpush