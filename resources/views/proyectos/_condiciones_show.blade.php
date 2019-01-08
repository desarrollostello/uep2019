<div class="row">
      <div class="form-group col-sm-3" style="border: 1px solid #ccc">
             Inversión Total (Monto):<br />
             {{ $proyecto->inversionTotal }}
      </div>
      <div class="form-group col-sm-3" style="border: 1px solid #ccc">
             Inversión Realizada (Monto):<br />
             {{ $proyecto->inversionRealizada }}
      </div>
      <div class="form-group col-sm-3" style="border: 1px solid #ccc">
             Inv. a Realizar (A.F.):<br />
             {{ $proyecto->inversionARealizar_af }}
      </div>
      <div class="form-group col-sm-3" style="border: 1px solid #ccc">
             Inv. a Realizar (A.F.):<br />
             {{ $proyecto->inversionARealizar_ct }}
      </div>
</div>
<hr />
<div class="row">
      <div class="form-group col-sm-3" style="border: 1px solid #ccc">
            Sucursal (Banco):<br />
            @if ($proyecto->sucursal)
                {{ $proyecto->sucursal->nombre }}
            @endif
      </div>
      <div class="form-group col-sm-3" style="border: 1px solid #ccc">
             Figura Legal:<br />
             @if ($proyecto->figuraLegal)
                {{ $proyecto->figuraLegal->nombre }}
             @endif
      </div>
      <div class="form-group col-sm-3" style="border: 1px solid #ccc">
             Periodicidad:<br />
             @if ($proyecto->periodicidad)
                {{ $proyecto->periodicidad->nombre }}
             @endif
      </div>
      <div class="form-group col-sm-2" style="border: 1px solid #ccc">
            Tasa:<br />
            {{ $proyecto->tasa }}
      </div>
</div>
<div class="row">
    <div class="form-group col-sm-2" style="border: 1px solid #ccc">
          Plazo de Gracia:<br />
          {{ $proyecto->plazoGracia }}
    </div>
    <div class="form-group col-sm-2" style="border: 1px solid #ccc">
          Plazo de Amortización:<br />
          {{ $proyecto->plazoAmortizacion }}
    </div>
    <div class="form-group col-sm-2" style="border: 1px solid #ccc">
            Cant. Desembolsos:<br />
            {{ $proyecto->cantidadDesembolsos }}
    </div>
    <div class="form-group col-sm-3" style="border: 1px solid #ccc">
          Destino del Crédito:<br />
          @if ($proyecto->destinoCredito)
              {{ $proyecto->destinoCredito->nombre }}
          @endif
    </div>
    <div class="form-group col-sm-2" style="border: 1px solid #ccc">
          Tipo de Garantia:<br />
          @if ($proyecto->tipoGarantia)
              {{ $proyecto->tipoGarantia->nombre }}
          @endif
    </div>
</div>
<div class="row">
      <div class="form-group col-sm-11" style="border: 1px solid #ccc">
            Descripción Garantías:<br />
            {{ $proyecto->descripcionGarantia }}
      </div>
</div>
