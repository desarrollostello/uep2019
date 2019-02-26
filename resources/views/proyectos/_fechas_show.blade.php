<div class="col-md-11">
<div class="row">
    <div class="form-group col-sm-3" style="min-height: 50px; max-height: 50px; border: 1px solid #ccc; padding: 5px; text-align: center">
        <span style="position: relative; float: left; width: 100%; text-align: center;">Envío Banco:</span><br>
        <span class="respuesta_show">{{ $proyecto->fechaEnvioBanco }}</span>
    </div>
    <div class="form-group col-sm-3" style="min-height: 50px; max-height: 50px; border: 1px solid #ccc; padding: 5px; text-align: center">
        <span style="position: relative; float: left; width: 100%; text-align: center;">Respuesta Banco:</span><br>
        <span class="respuesta_show">{{ $proyecto->fechaRespuestaBanco }}</span>
    </div>
    <div class="form-group col-sm-3" style="min-height: 50px; max-height: 50px; border: 1px solid #ccc; padding: 5px; text-align: center">
        <span style="position: relative; float: left; width: 100%; text-align: center;">En Titular:</span><br>
        <span class="respuesta_show">{{ $proyecto->fechaTitular }}</span>
    </div>
</div>

<div class="row">
    <div class="form-group col-sm-3" style="min-height: 50px; max-height: 50px; border: 1px solid #ccc; padding: 5px; text-align: center">
        <span style="position: relative; float: left; width: 100%; text-align: center;">Caduco Banco:</span><br>
        <span class="respuesta_show">{{ $proyecto->fechaCaducoBanco }}</span>
    </div>
    <div class="form-group col-sm-3" style="min-height: 50px; max-height: 50px; border: 1px solid #ccc; padding: 5px; text-align: center">
        <span style="position: relative; float: left; width: 100%; text-align: center;">Aprobado UEP:</span><br>
        <span class="respuesta_show">{{ $proyecto->fechaAprobadoUep }}</span>
    </div>
    <div class="form-group col-sm-3" style="min-height: 50px; max-height: 50px; border: 1px solid #ccc; padding: 5px; text-align: center">
        <span style="position: relative; float: left; width: 100%; text-align: center;">Envío al CFI:</span><br>
        <span class="respuesta_show">{{ $proyecto->fechaEnviadoCfi }}</span>
    </div>

</div>
<div class="row">
    <div class="form-group col-sm-3" style="min-height: 50px; max-height: 50px; border: 1px solid #ccc; padding: 5px; text-align: center">
        <span style="position: relative; float: left; width: 100%; text-align: center;">Aprobado CFI:</span><br>
        <span class="respuesta_show">{{ $proyecto->fechaAprobadoCfi }}</span>
    </div>
    <div class="form-group col-sm-3" style="min-height: 50px; max-height: 50px; border: 1px solid #ccc; padding: 5px; text-align: center">
            <span style="position: relative; float: left; width: 100%; text-align: center;">TRAMDISPO:</span><br>
            <span class="respuesta_show">{{ $proyecto->fechaTramdispo }}</span>
    </div>
   <div class="form-group col-sm-3" style="min-height: 50px; max-height: 50px; border: 1px solid #ccc; padding: 5px; text-align: center">
           <span style="position: relative; float: left; width: 100%; text-align: center;">COMUNICATRAN:</span><br>
           <span class="respuesta_show">{{ $proyecto->fechaComunicaTran }}</span>
   </div>
</div>

<div class="row">
    <div class="form-group col-sm-3" style="min-height: 50px; max-height: 50px; border: 1px solid #ccc; padding: 5px; text-align: center">
           <span style="position: relative; float: left; width: 100%; text-align: center;">Desembolso:</span><br>
           <span class="respuesta_show">{{ $proyecto->fechaDesembolso }}</span>
    </div>
    <div class="form-group col-sm-3" style="min-height: 50px; max-height: 50px; border: 1px solid #ccc; padding: 5px; text-align: center">
           <span style="position: relative; float: left; width: 100%; text-align: center;">Efectivización:</span><br>
           <span class="respuesta_show">{{ $proyecto->fechaEfectivizacion }}</span>
    </div>
    <div class="form-group col-sm-3" style="min-height: 50px; max-height: 50px; border: 1px solid #ccc; padding: 5px; text-align: center">
            <span style="position: relative; float: left; width: 100%; text-align: center;">Desistido:</span><br>
            <span class="respuesta_show">{{ $proyecto->fechaDesistido }}
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-3" style="min-height: 50px; max-height: 50px; border: 1px solid #ccc; padding: 5px; text-align: center">
            <span style="position: relative; float: left; width: 100%; text-align: center;">JUDICIAL:</span><br><br>
            <span class="respuesta_show">{{ $proyecto->fechaJudicial }}</span>
    </div>

    <div class="form-group col-sm-3" style="min-height: 50px; max-height: 50px; border: 1px solid #ccc; padding: 5px; text-align: center">
          <span style="position: relative; float: left; width: 100%; text-align: center;">Cancelado:</span><br>
          <span class="respuesta_show">{{ $proyecto->fechaCancelado }}</span>
    </div>
    <div class="form-group col-sm-3" style="min-height: 50px; max-height: 50px; border: 1px solid #ccc; padding: 5px; text-align: center">
           <span style="position: relative; float: left; width: 100%; text-align: center;">Archivado:</span><br>
           <span class="respuesta_show">{{ $proyecto->fechaArchivado }}</span>
    </div>

</div>
<div class="row">
    <div class="form-group col-sm-3" style="min-height: 50px; max-height: 50px; border: 1px solid #ccc; padding: 5px; text-align: center">
           <span style="position: relative; float: left; width: 100%; text-align: center;">Último Movimiento:</span><br>
           <span class="respuesta_show">{{ $proyecto->fechaUltimoMovimiento }}</span>
    </div>
    <div class="form-group col-sm-3" style="min-height: 50px; max-height: 50px; border: 1px solid #ccc; padding: 5px; text-align: center">
           <span style="position: relative; float: left; width: 100%; text-align: center;">Baja:</span><br>
           <span class="respuesta_show">{{ $proyecto->fechaBaja }}</span>
    </div>
    <div class="form-group col-sm-3" style="min-height: 50px; max-height: 50px; border: 1px solid #ccc; padding: 5px; text-align: center">
           <span style="position: relative; float: left; width: 100%; text-align: center;">Refinanciado?:</span><br>
           <span class="respuesta_show">{{ $proyecto->refinanciado }}</span>
    </div>

</div>

<div class="row">
    <div class="form-group col-sm-3" style="min-height: 50px; max-height: 50px; border: 1px solid #ccc; padding: 5px; text-align: center">
           <span style="position: relative; float: left; width: 100%; text-align: center;">Cant. Desembolsos:</span><br>
           <span class="respuesta_show">{{ $proyecto->cantidadDesembolsos }}</span>
    </div>
</div>
</div>
<div class="col-md-11" style="margin-top: 25px; border-bottom: 2px solid #cccccc; margin-bottom: 20px">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>Desembolsos</h4>
        </div>
    </div>
      <table id="table" class="table table-responsive mdl-data-table">
          <thead>
          <tr>
              <th style="width: 10%;  text-align: center">Fecha</th>
              <th style="width: 5%;  text-align: center">Nro</th>
              <th style="width: 10%;  text-align: center">Monto</th>
              <th style="width: 65%;  text-align: center">Descripción</th>
          </tr>
          </thead>
          <tbody>
              @php
              $modal = 0;
              @endphp
          @foreach($desembolsos as $x)
              <tr>
                  <th style="width: 10%;  text-align: center">{{ \Carbon\Carbon::parse($x->fecha)->format('d-m-Y') }}</td>
                  <th style="width: 5%;  text-align: center">{{ $x->nro }}</td>
                  <th style="width: 10%;  text-align: center">{{ $x->monto }}</td>
                  <th style="width: 65%;  text-align: center">{{ $x->descripcion }}</th>
              </tr>
          @endforeach
          </tbody>
      </table>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Sujetos de Créditos</h4>
            </div>
        </div>
        <table class="table table-responsive mdl-data-table">
          <thead>
          <tr>

              <th style="width: 55%;  text-align: center">Sucursal</th>
              <th style="width: 15%;  text-align: center">Envío</th>
              <th style="width: 15%;  text-align: center">Respuesta</th>
              <th style="width: 10%; text-align: center">Aprobado?</th>
             <!--  <th style="width: 10%">Op.</th> -->
          </tr>
          </thead>
          <tbody>

            @foreach($sujetoCredito as $x)
                  <tr>
                    <th style="width: 55%;  text-align: center">{{ $x->sucursal->nombre }}</td>
                  @if ($x->fechaEnvioBanco)
                        <th style="width: 15%;  text-align: center">{{ \Carbon\Carbon::parse($x->fechaEnvioBanco)->format('d-m-Y') }}</td>
                  @else
                        <th style="width: 15%;  text-align: center"></th>
                  @endif
                  @if ($x->fechaRespuestaBanco)
                        <th style="width: 15%;  text-align: center">{{ \Carbon\Carbon::parse($x->fechaRespuestaBanco)->format('d-m-Y') }}</td>
                  @else
                        <th style="width: 15%;  text-align: center"></th>
                  @endif
                  <th style="width: 10%;  text-align: center">{{ $x->sujeto_credito }}</td>

            </tr>
            @endforeach
      </tbody>
      </table>

</div>
