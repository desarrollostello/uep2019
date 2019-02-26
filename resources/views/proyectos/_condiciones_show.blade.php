<div class="row">
      <div class="form-group col-sm-2" style="min-height: 50px; max-height: 50px; border: 1px solid #ccc; padding: 5px; text-align: center">
            <span style="position: relative; float: left; width: 100%; text-align: center;">Inversión Total (Monto):</span><br>
            <span class="respuesta_show">{{ $proyecto->inversionTotal }}</span>
      </div>
      <div class="form-group col-sm-3" style="min-height: 50px; max-height: 50px; border: 1px solid #ccc; padding: 5px; text-align: center">
            <span style="position: relative; float: left; width: 100%; text-align: center;">Inversión Realizada (Monto):</span><br>
            <span class="respuesta_show">{{ $proyecto->inversionRealizada }}</span>
      </div>
      <div class="form-group col-sm-3" style="min-height: 50px; max-height: 50px; border: 1px solid #ccc; padding: 5px; text-align: center">
            <span style="position: relative; float: left; width: 100%; text-align: center;">Inv. a Realizar (A.F.):</span><br>
            <span class="respuesta_show">{{ $proyecto->inversionARealizar_af }}</span>
      </div>
      <div class="form-group col-sm-3" style="min-height: 50px; max-height: 50px; border: 1px solid #ccc; padding: 5px; text-align: center">
            <span style="position: relative; float: left; width: 100%; text-align: center;">Inv. a Realizar (A.F.):</span><br>
            <span class="respuesta_show">{{ $proyecto->inversionARealizar_ct }}</span>
      </div>
</div>
<hr />
<div class="row">
      <div class="form-group col-sm-3" style="min-height: 50px; max-height: 50px; border: 1px solid #ccc; padding: 5px; text-align: center">
            <span style="position: relative; float: left; width: 100%; text-align: center;">Sucursal (Banco):</span><br>
            @if ($proyecto->sucursal)
                <span class="respuesta_show">{{ $proyecto->sucursal->nombre }}</span>
            @endif
      </div>
      <div class="form-group col-sm-3" style="min-height: 50px; max-height: 50px; border: 1px solid #ccc; padding: 5px; text-align: center">
            <span style="position: relative; float: left; width: 100%; text-align: center;">Figura Legal:</span><br>
             @if ($proyecto->figuraLegal)
                <span class="respuesta_show">{{ $proyecto->figuraLegal->nombre }}</span>
             @endif
      </div>
      <div class="form-group col-sm-3" style="min-height: 50px; max-height: 50px; border: 1px solid #ccc; padding: 5px; text-align: center">
            <span style="position: relative; float: left; width: 100%; text-align: center;">Periodicidad:</span><br>
             @if ($proyecto->periodicidad)
                <span class="respuesta_show">{{ $proyecto->periodicidad->nombre }}</span>
             @endif
      </div>
      <div class="form-group col-sm-2" style="min-height: 50px; max-height: 50px; border: 1px solid #ccc; padding: 5px; text-align: center">
            <span style="position: relative; float: left; width: 100%; text-align: center;">Tasa:</span><br>
            <span class="respuesta_show">{{ $proyecto->tasa }}</span>
      </div>
</div>
<div class="row">
    <div class="form-group col-sm-2" style="min-height: 50px; max-height: 50px; border: 1px solid #ccc; padding: 5px; text-align: center">
            <span style="position: relative; float: left; width: 100%; text-align: center;">Plazo de Gracia:</span><br>
            <span class="respuesta_show">{{ $proyecto->plazoGracia }}</span>
    </div>
    <div class="form-group col-sm-2" style="min-height: 50px; max-height: 50px; border: 1px solid #ccc; padding: 5px; text-align: center">
           <span style="position: relative; float: left; width: 100%; text-align: center;">Plazo de Amortización:</span><br>
           <span class="respuesta_show">{{ $proyecto->plazoAmortizacion }}</span>
    </div>
    <div class="form-group col-sm-2" style="min-height: 50px; max-height: 50px; border: 1px solid #ccc; padding: 5px; text-align: center">
            <span style="position: relative; float: left; width: 100%; text-align: center;">Cant. Desembolsos:</span><br>
            <span class="respuesta_show">{{ $proyecto->cantidadDesembolsos }}</span>
    </div>
    <div class="form-group col-sm-3" style="min-height: 50px; max-height: 50px; border: 1px solid #ccc; padding: 5px; text-align: center">
            <span style="position: relative; float: left; width: 100%; text-align: center;">Destino del Crédito:</span><br>
          @if ($proyecto->destinoCredito)
              <span class="respuesta_show">{{ $proyecto->destinoCredito->nombre }}</span>
          @endif
    </div>
    <div class="form-group col-sm-2" style="min-height: 50px; max-height: 50px; border: 1px solid #ccc; padding: 5px; text-align: center">
            <span style="position: relative; float: left; width: 100%; text-align: center;">Tipo de Garantia:</span><br>
          @if ($proyecto->tipoGarantia)
              <span class="respuesta_show">{{ $proyecto->tipoGarantia->nombre }}</span>
          @endif
    </div>
</div>
<div class="row">
      <div class="form-group col-sm-11" style="min-height: 50px; max-height: 50px; border: 1px solid #ccc; padding: 5px; text-align: center">
            <span style="position: relative; float: left; width: 100%; text-align: center;">Descripción Garantías:</span><br>
            <span class="respuesta_show">{{ $proyecto->descripcionGarantia }}</span>
      </div>
</div>
