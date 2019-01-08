<table id="table" class="table table-responsive mdl-data-table">
    <thead>
    <tr>
        <th>Seguimiento</th>
        <th>Proyecto</th>
        <th>Fecha</th>
        <th>Nombre Archivo</th>
        <th style="width: 15%">Opciones</th>
    </tr>
    </thead>
    
    <tbody>
    @foreach($anexos as $p)
        <tr>

            <td>{{ \Carbon\Carbon::parse($p->seguimiento->fechaSeguimiento)->format('d-m-Y') }}</td>
            <td>{{ $p->seguimiento->proyecto->nombre }}</td>
            <td>{{ $x->nombre_archivo }}</td>
            <td>
                <a href="{{ route('anexoSeguimiento.edit', $p) }}" class="btn btn-info btn-xs pull-rigth">Editar</a>
                <a href="{{ route('anexoSeguimiento.show', $p) }}" class="btn btn-info btn-xs pull-rigth">Ver</a>
                <a href="{{ route('anexoSeguimiento.delete', $p) }}" class="btn btn-danger btn-xs pull-rigth" onclick="return confirm('Está seguro que desea eliminar este ítem?')" class="btn btn-danger">Eliminar</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
