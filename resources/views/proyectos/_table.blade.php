<table id="table-proyectos1" class="table table-responsive mdl-data-table" style="padding-left: 5px; font-size: 12px; vertical-align: middle; text-align: center;">
    <thead>
    <tr>

        @foreach($columnas as $c)
            @if ($c->descripcion == 'Último Mov')
                <td style="min-width: 68px;">{{ $c->descripcion  }}</td>
            @elseif($c->descripcion == 'Monto')
                <td style="min-width: 71px;">{{ $c->descripcion  }}</td>
            @else
                <td style="min-width: 70px;">{{ $c->descripcion  }}</td>

            @endif
        @endforeach
        <th style="width: 15%">Opciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach($proyectos as $x)
        <tr class="editrow" value="{{ $x->id }}" style="background-color: {{ $x->color }}">

             @foreach($columnas as $c)
               @php
               $nombre = $c->nombre
               @endphp
                @if ($c->nombre == 'localidad_id')
                    <td style="text-align:center">{{  $x->localidad->nombre }}</td>
                @elseif($c->nombre == 'estado_id')
                    <td style="text-align:center">{{ $x->estado->nombre }}</td>
                @elseif($c->nombre == 'estadoInterno_id')
                    <td style="text-align:center">{{ $x->estadoInrerno->nombre }}</td>
                @elseif($c->nombre == 'sector_id')
                    <td style="text-align:center">{{ $x->sector->nombre }}</td>
                @elseif($c->nombre == 'figuraLegal_id')
                    <td style="text-align:center">{{ $x->figuraLegal->nombre }}</td>
                @elseif($c->nombre == 'periodicidad_id')
                   <td style="text-align:center">{{ $x->periodicidad->nombre }}</td>
                @elseif($c->nombre == 'destinoCredito_id')
                   <td style="text-align:center">{{ $x->destinoCredito->nombre }}</td>
                @elseif($c->nombre == 'lineaCredito_id')
                   <td style="text-align:center">{{ $x->lineaCredito->nombre }}</td>
                @elseif($c->nombre == 'sucursal_id')
                   <td style="text-align:center">{{  $x->sucursal->nombre }}</td>

                @elseif($c->nombre == 'fechaIngreso')
                    <td style="text-align:center">{{ $x->fechaIngreso }}</td>
                @elseif($c->nombre == 'fechaUltimoMovimiento')
                    <td style="text-align:center; min-width: 68px;">{{ $x->fechaUltimoMovimiento }}</td>
                @elseif($c->nombre == 'fechaArchivado')
                    <td style="text-align:center">{{ $x->fechaArchivado }}</td>
                @elseif($c->nombre == 'fechaCancelado')
                    <td style="text-align:center">{{ $x->fechaCancelado }}</td>
                @elseif($c->nombre == 'fechaJudicial')
                    <td style="text-align:center">{{ $x->fechaJudicial }}</td>
                @elseif($c->nombre == 'fechaDesistido')
                    <td style="text-align:center">{{ $x->fechaDesistido }}</td>
                @elseif($c->nombre == 'fechaEfectivizacion')
                    <td style="text-align:center">{{ $x->fechaEfectivizacion }}</td>
                @elseif($c->nombre == 'fechaDesembolso')
                    <td style="text-align:center">{{ $x->fechaDesembolso }}</td>
                @elseif($c->nombre == 'fechaComunicaTran')
                   <td style="text-align:center">{{ $x->fechaComunicaTran }}</td>
                @elseif($c->nombre == 'fechaTramdispo')
                    <td style="text-align:center">{{ $x->fechaComunicaTran }}</td>
                @elseif($c->nombre == 'fechaAprobadoCfi')
                    <td style="text-align:center">{{ $x->fechaAprobadoCfi }}</td>
                @elseif($c->nombre == 'fechaEnviadoCfi')
                    <td style="text-align:center">{{ $x->fechaEnviadoCfi }}</td>
                @elseif($c->nombre == 'fechaAprobadoUep')
                    <td style="text-align:center">{{ $x->fechaAprobadoUep }}</td>
                @elseif($c->nombre == 'fechaCaducoBanco')
                    <td style="text-align:center">{{ $x->fechaCaducoBanco }}</td>
                @elseif($c->nombre == 'fechaRespuestaBanco')
                    <td style="text-align:center">{{ $x->fechaRespuestaBanco }}</td>
                @elseif($c->nombre == 'fechaEnvioBanco')
                   <td style="text-align:center">{{ $x->fechaEnvioBanco }}</td>
                @elseif($c->nombre == 'nombre')
                   <td class="nombre" style="text-align:center">{{ $x->nombre }}</td>

                @else
                    <td style="text-align:center">{{  $x->$nombre }}</td>
                @endif

             @endforeach

            <td>

                @can('proyecto.edit')
                    <a href="{{ route('proyecto.edit', $x) }}" class="btn btn-info btn-xs pull-rigth" style="margin-right: 3px"><i class="fa fa-edit" title="Editar Proyecto"></i></a>
                @endcan
                @can('proyecto.show')
                    <a href="{{ route('proyecto.show', $x) }}" class="btn btn-info btn-xs pull-rigth"  style="margin-right: 3px"><i class="fa fa-eye" title="Ver Proyecto"></i></a>
                @endcan
                @can('proyecto.delete')
                    <a href="{{ route('proyecto.delete', $x) }}" class="btn btn-danger btn-xs pull-rigth" onclick="return confirm('Está seguro que desea eliminar este ítem?')" class="btn btn-danger"><i class="fa fa-trash" title="Borrar Proyecto"></i></a>
                @endcan

                <button type="button" class="btn btn-info btn-xs pull-rigth" style="margin-left: 3px" data-toggle="modal" data-target="#addMovimiento" data-whatever="{{ $x->id }}"><i class="fa fa-edit" title="Agregar Movimiento"></i></button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
