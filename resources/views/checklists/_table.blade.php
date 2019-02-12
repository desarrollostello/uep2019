<table id="table" class="table table-responsive table-striped table-bordered">
    <thead>
    <tr>
        <th>Proyecto</th>
        <th>Estado Proyecto</th>
        <th>Fecha</th>
        <th style="width: 15%">Opciones</th>
    </tr>
    </thead>

    <tbody>
    @foreach(checklists as $td)
        <tr>
            <td>{{ $td->proyecto->nombre }}</td>
            <td>{{ $td->proyecto->estado->nombre }}</td>
            <td>{{ $td->created_at }}</td>
            <td>
                <a href="{{ route('checklist.edit', $td) }}" class="btn btn-info btn-xs pull-rigth">Editar</a>
                <a href="{{ route('checklist.delete', $td) }}" class="btn btn-danger btn-xs pull-rigth" onclick="return confirm('Está seguro que desea eliminar este ítem?')" class="btn btn-danger">Eliminar</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
