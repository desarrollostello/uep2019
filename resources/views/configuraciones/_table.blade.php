<table id="table" class="table table-responsive mdl-data-table">
    <thead>
    <tr>
        <th>Provincia</th>
        <th>Administrador</th>
        <th>titulo</th>
        <th style="width: 15%">Opciones</th>
    </tr>
    </thead>

    <tbody>
    @foreach($configuracion as $p)
        <tr>
            <td>{{ $p->userAdmin->nombre }}</td>
            <td>{{ $p->user->nombre }}</td>
            <td>{{ $p->titulo }}</td>
            <td>
                <a href="{{ route('configuracion.edit', $p) }}" class="btn btn-info btn-xs pull-rigth">Editar</a>
                <a href="{{ route('configuracion.show', $p->id) }}" class="btn btn-info btn-xs pull-rigth">Ver</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
