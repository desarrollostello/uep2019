<table id="table" class="table table-striped table-bordered">
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
    @foreach($estados as $td)
        <tr>
            <td>{{ $td->nombre }}</td>
            <td>
                <a href="{{ route('estado.edit', $td) }}" class="btn btn-info btn-xs pull-rigth">Editar</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@push('scripts')
<script src="{{ asset('js/admin.js') }}"></script>

@endpush
