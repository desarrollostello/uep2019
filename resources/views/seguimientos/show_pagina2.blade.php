
<!--- INICIO PAGINA 2 --->

<div class="row">
  <div class="form-group col-sm-8">

        <table id="table" class="table table-striped table-bordered">
            <thead>
            <tr>
                <th class="text-center">Cant. de Cuotas</th>
                <th class="text-center">Frec. Cap.</th>
                <th class="text-center">Frec. Int.</th>
            </tr>
            </thead>
           
            <tbody>
                <tr>
                    <td class="text-center"> {{ $seguimiento->cant_cuotas }} </td>
                    <td class="text-center"> {{ $seguimiento->frecuencia_amortizacion }} </td>
                    <td class="text-center"> {{ $seguimiento->frecuencia_gracia }} </td>
                </tr>
              
            </tbody>
        </table>
  </div>
</div>

<div class="row">
  <div class="form-group col-sm-3">
      7. LA EMPRESA ESTA
      {{ $seguimiento->empresa_activa_inactiva_parcial }}
  </div>
   <div class="form-group col-sm-8">
      8.1. SE HAN REGISTRADO CAMBIOS EN LA NÓMINA DE BENEFICIARIOS Y/O EN EL TIPO DE SOLICITUD?
      {{ $seguimiento->cambios_localizacion }}
  </div>
</div>



<div class="row">
  <div class="form-group col-sm-5">
      * TALES CAMBIOS AFECTAN EL DESARROLLO DE LA EMPRESA
      {{ $seguimiento->cambios_localizacion }}
  </div>
</div>

<div class="row">
  <div class="form-group col-sm-10">
    *  EN QUE MEDIDA?
  </div>
</div>

<div class="row">
    <div class="form-group col-sm-11">
          {{ $seguimiento->cambio_afectan_empresa_medida }}
    </div>
</div>

<div class="row" style="margin-top: 20px;">
  <div class="form-group col-sm-10">
    <p style="font-size: 14px">8.4. CONSIGNAR LOS CAMBIOS</p>
  </div>
</div>


<div class="row">
  <div class="form-group col-sm-10">
      <table id="table" class="table table-striped table-bordered">
          <thead>
          <tr>
              <th  class="text-center" width="50%">NUEVA RAZÓN SOCIAL O APELLIDO Y NOMBRES</th>
              <th  class="text-center" width="50%">DOMICILIO Y TELEFONO</th>
              
          </tr>
          </thead>
         
          <tbody>
              <tr>
                  <td> {{ $seguimiento->especificar_nombre1 }} </td>
                  <td class="text-center"> {{ $seguimiento->especificar_domicilio_telefono1 }} </td>
                  
              </tr>
              <tr>
                  <td> {{ $seguimiento->especificar_nombre2 }} </td>
                  <td class="text-center"> {{ $seguimiento->especificar_domicilio_telefono2 }} </td>
                  
              </tr>
              <tr>
                <td> {{ $seguimiento->especificar_nombre3 }} </td>
                <td class="text-center"> {{ $seguimiento->especificar_domicilio_telefono3 }} </td>
                
              </tr>
              <tr>
                <td> {{ $seguimiento->especificar_nombre4 }} </td>
                <td class="text-center"> {{ $seguimiento->especificar_domicilio_telefono4 }} </td>
              </tr>
          </tbody>
      </table>
  </div>
</div>

<div class="row">
  <div class="form-group col-sm-5">
    9. SE REGISTRAN CAMBIOS EN LA LOCALIZACIÓN DEL PROYECTO?
    {{ $seguimiento->cambios_localizacion }}
  </div>
</div>


<div class="row">
  <div class="form-group col-sm-10">
    9.1. CAUSAS?
  </div>
</div>

<div class="row">
    <div class="form-group col-sm-11">
      {{ $seguimiento->cambios_localizacion_causas }}
         
    </div>
</div>

<div class="row">
  <div class="form-group col-sm-10">
    INDICAR NUEVA LOCALIZACIÓN
  </div>
</div>

<div class="row col-span-3">
      <div class="form-group col-sm-10">
            <label style="border: none; margin-bottom: 0" class="form-control" for="nueva_localizacion_domicilio">Domicilio</label>
             {{ $seguimiento->nueva_localizacion_domicilio }}

      </div>
</div>
<div class="row col-span-3">
      <div class="form-group col-sm-5">
            <label style="border: none; margin-bottom: 0" class="form-control" for="nueva_localizacion_localidad">Localidad</label>
            {{ $seguimiento->nueva_localizacion_localidad }}
      </div>
      <div class="form-group col-sm-5">
            <label style="border: none; margin-bottom: 0" class="form-control" for="nueva_localizacion_cp">C. P. </label>
            {{ $seguimiento->nueva_localizacion_cp }}
      </div>
</div>
<div class="row col-span-3">
      <div class="form-group col-sm-5">
            <label style="border: none; margin-bottom: 0" class="form-control" for="nueva_localizacion_provincia">Provincia</label>
           {{ $seguimiento->nueva_localizacion_provincia }}
      </div>
      <div class="form-group col-sm-5">
            <label style="border: none; margin-bottom: 0" class="form-control" for="nueva_localizacion_telefono">Teléfono</label>
            {{ $seguimiento->nueva_localizacion_telefono }}
      </div>
</div>

<!-- FIN PAGINA 2 -->
