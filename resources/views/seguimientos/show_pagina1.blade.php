    <div class="row">
        <div class="form-group col-sm-10">
            Proyecto
          <p class="form-control" style="margin-bottom: 0px">  {{ $seguimiento->proyecto->nombre  }} </p>
        </div>
    </div>

<br>
<div class="row">
      <div class="form-group col-sm-2">
            Fecha
          <span class="form-control">  {{ $seguimiento->fechaSeguimiento  }} </span>
      </div>
      <div class="form-group col-sm-2">
            Nro Entrevista
            <span class="form-control"> {{ $seguimiento->nro_entrevista  }} </span>
      </div>
      <div class="form-group col-sm-2">
            Grado Morosidad
            <span class="form-control"> {{ $seguimiento->grado_morosidad  }} </span>
      </div>
      <div class="form-group col-sm-3">
          Tipo de Proyecto
          <span class="form-control"> {{ $seguimiento->tipo_proyecto  }} </span>
      </div>
</div>

<div class="row">
    <div class="form-group col-sm-5">
        2. EVALUADOR SECTORIAL DEL CFI
        <span class="form-control">    {{ $seguimiento->profesional_cfi  }} </span>
    </div>

     <div class="form-group col-sm-5">
        TÉCNICO UEP
        <span class="form-control">  {{ $seguimiento->profesional_uep  }} </span>
    </div>
</div>

<div class="row">
   <div class="form-group col-sm-10">
        3. LOCALIZACIÓN DEL PROYECTO
        <span class="form-control">  {{ $seguimiento->localizacion  }} </span>
    </div>
</div>

<div class="row">
  <div class="form-group col-sm-10">
      4. BENEFICIARIOS
  </div>
</div>

<div class="row">
  <div class="form-group col-sm-10">
      <table id="table" class="table table-striped table-bordered">
          <thead>
          <tr>
              <th class="text-center">SOCIEDAD O APELLIDO Y NOMBRES</th>
              <th class="text-center">DOMICILIO</th>
              <th class="text-center">TELÉFONO</th>
          </tr>
          </thead>
         
          <tbody>
              <tr>
                  <td class="text-center forn-control"> {{ $seguimiento->beneficiario1 }} </td>
                  <td class="text-center forn-control"> {{ $seguimiento->domicilio_beneficiario1 }} </td>
                  <td class="text-center forn-control"> {{ $seguimiento->telefono_beneficiario1 }} </td>
              </tr>
              <tr>
                  <td class="text-center forn-control"> {{ $seguimiento->beneficiario2 }} </td>
                  <td class="text-center forn-control"> {{ $seguimiento->domicilio_beneficiario2 }} </td>
                  <td class="text-center forn-control"> {{ $seguimiento->telefono_beneficiario2 }} </td>
              </tr>
              <tr>
                  <td class="text-center forn-control"> {{ $seguimiento->beneficiario3 }} </td>
                  <td class="text-center forn-control"> {{ $seguimiento->domicilio_beneficiario3 }} </td>
                  <td class="text-center forn-control"> {{ $seguimiento->telefono_beneficiario3 }} </td>
              </tr>
          </tbody>
      </table>
  </div>
</div>

<div class="row">
  <div class="form-group col-sm-10">
      4.1. CANTIDAD DE PERSONAS DEL PROYECTO
  </div>
</div>

<div class="row">
  <div class="form-group col-sm-8">
        <table id="table" class="table table-striped table-bordered">
            <thead>
            <tr>
                <th class="text-center forn-control">Permanentes</th>
                <th class="text-center forn-control">Temporario</th>
                <th class="text-center forn-control">A Incorporar</th>
            </tr>
            </thead>
           
            <tbody>
                <tr>
                    <td class="text-center forn-control"> {{ $seguimiento->personal_permanente }}   </td>
                    <td class="text-center forn-control"> {{ $seguimiento->personal_temporario }}  </td>
                    <td class="text-center forn-control"> {{ $seguimiento->personal_a_incorporar }}  </td>
                </tr>
              
            </tbody>
        </table>
  </div>
</div>

<div class="row">
  <div class="form-group col-sm-10">
      5. INVERSIONES A VERIFICAR
  </div>
</div>

<div class="row">
      <div class="form-group col-sm-4" style="text-align: right">
            <label style="border: none; margin-bottom: 0" class="form-control" for="credito_cfi">Crédito CFI</label>
            <label style="border: none; margin-bottom: 0" class="form-control" for="credito_otros_bancos">Crédito Otros Bancos</label>
            <label style="border: none; margin-bottom: 0" class="form-control" for="aporte_propio">Aporte Propio</label>
            <label style="border: none; margin-bottom: 0" class="form-control" for="credito_proveedores">Crédito Proveedores</label>
        
            
      </div>
      <div class="form-group col-sm-2">
          <p class="form-control" style="margin-bottom: 0px"> {{ $seguimiento->credito_cfi }}</p>
          <p class="form-control" style="margin-bottom: 0px">{{ $seguimiento->credito_otros_bancos }} </p>
          <p class="form-control" style="margin-bottom: 0px">{{ $seguimiento->aporte_propio }} </p>
          <p class="form-control" style="margin-bottom: 0px">{{ $seguimiento->credito_proveedores }} </p>
      </div>
      <div class="form-group col-sm-3" style="text-align: right">
            <label style="border: none; margin-bottom: 0" class="form-control" for="inv_preinversion">Preinversión</label>
            <label style="border: none; margin-bottom: 0" class="form-control" for="inv_activo_fijo">Activo Fijo</label>
            <label style="border: none; margin-bottom: 0" class="form-control" for="inv_ct">Capital de Trabajo</label>
            <label style="border: none; margin-bottom: 0" class="form-control" for="prefinanciacion">Prefinanciación</label>
        
            
      </div>
      <div class="form-group col-sm-2">
          <p class="form-control" style="margin-bottom: 0px">{{ $seguimiento->inv_preinversion }} </p>
          <p class="form-control" style="margin-bottom: 0px">{{ $seguimiento->inv_activo_fijo }} </p>
          <p class="form-control" style="margin-bottom: 0px">{{ $seguimiento->inv_ct }} </p>
          <p class="form-control" style="margin-bottom: 0px">{{ $seguimiento->prefinanciacion }} </p>

      </div>
     
</div>

<div class="row">
  <div class="form-group col-sm-10">
      5.1. DETALLE DE LAS INVERSIONES A REALIZAR
  </div>
</div>
<div class="row">
    <div class="form-group col-sm-11">
      <span class="form-control">   {{ $seguimiento->detalle_inversiones }}  </span>
    </div>
</div>


<div class="row">
  <div class="form-group col-sm-10">
      6. PLAZOS Y FRECUENCIAS VIGENTES DEL CRÉDITO (Total, Gracia y Amortización) 
  </div>
</div>

<div class="row">
    <div class="form-group col-sm-11">
      <span class="form-control">   {{ $seguimiento->plazos_frecuencias_vigentes }} </span>
    </div>
</div>