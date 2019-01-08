
<!--- INICIO PAGINA 2 --->

<div class="row">
  <div class="form-group col-sm-6">
        <table id="table" class="table table-striped table-bordered">
            <thead>
            <tr>
                <th style="width: 33%; color: #555555; background-color: #fff;background-image: none; border: 1px solid #ccc;" class="text-center">Cant. de Cuotas</th>
                <th style="width: 33%; color: #555555; background-color: #fff;background-image: none; border: 1px solid #ccc;" class="text-center">Frec. Cap.</th>
                <th style="width: 33%; color: #555555; background-color: #fff;background-image: none; border: 1px solid #ccc;" class="text-center">Frec. Int.</th>
            </tr>
            </thead>
           
            <tbody>
                <tr>
                    <td style="width: 33%; height: 34px; padding: 6px 12px; font-size: 12px; line-height: 1.42857143; color: #555555; background-color: #fff;background-image: none; border: 1px solid #ccc;" class="text-center"> {{ $seguimiento->cant_cuotas }} </td>
                    <td style="width: 33%; height: 34px; padding: 6px 12px; font-size: 12px; line-height: 1.42857143; color: #555555; background-color: #fff;background-image: none; border: 1px solid #ccc;" class="text-center"> {{ $seguimiento->frecuencia_amortizacion }} </td>
                    <td style="width: 33%; height: 34px; padding: 6px 12px; font-size: 12px; line-height: 1.42857143; color: #555555; background-color: #fff;background-image: none; border: 1px solid #ccc;" class="text-center"> {{ $seguimiento->frecuencia_gracia }} </td>
                </tr>
              
            </tbody>
        </table>
  </div>
</div>

<div class="row">
  <div class="form-group col-sm-3">
      7. LA EMPRESA ESTA
      <span class="form-control">   {{ $seguimiento->empresa_activa_inactiva_parcial }} </span>
  </div>
   <div class="form-group col-sm-8">
      8.1. SE HAN REGISTRADO CAMBIOS EN LA NÓMINA DE BENEFICIARIOS Y/O EN EL TIPO DE SOLICITUD?
      <span class="form-control">  {{ $seguimiento->cambios_localizacion }} </span>
  </div>
</div>



<div class="row">
  <div class="form-group col-sm-5">
      * TALES CAMBIOS AFECTAN EL DESARROLLO DE LA EMPRESA
      <span class="form-control">  {{ $seguimiento->cambios_localizacion }} </span>
  </div>
</div>

<div class="row">
  <div class="form-group col-sm-10">
    *  EN QUE MEDIDA?
  </div>
</div>

<div class="row">
    <div class="form-group col-sm-11">
          <span class="form-control">   {{ $seguimiento->cambio_afectan_empresa_medida }} </span>
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
              <th style="color: #555555; background-color: #fff;background-image: none; border: 1px solid #ccc;" class="text-center" width="50%">NUEVA RAZÓN SOCIAL O APELLIDO Y NOMBRES</th>
              <th style="color: #555555; background-color: #fff;background-image: none; border: 1px solid #ccc;" class="text-center" width="50%">DOMICILIO Y TELEFONO</th>
              
          </tr>
          </thead>
         
          <tbody>
              <tr>
                  <td style="width: 50%; height: 34px; padding: 6px 12px; font-size: 12px; line-height: 1.42857143; color: #555555; background-color: #fff;background-image: none; border: 1px solid #ccc;" class="text-center"> {{ $seguimiento->especificar_nombre1 }} </td>
                  <td style="width: 50%; height: 34px; padding: 6px 12px; font-size: 12px; line-height: 1.42857143; color: #555555; background-color: #fff;background-image: none; border: 1px solid #ccc;" class="text-center"> {{ $seguimiento->especificar_domicilio_telefono1 }} </td>
                  
              </tr>
              <tr>
                  <td style="width: 50%; height: 34px; padding: 6px 12px; font-size: 12px; line-height: 1.42857143; color: #555555; background-color: #fff;background-image: none; border: 1px solid #ccc;" class="text-center"> {{ $seguimiento->especificar_nombre2 }} </td>
                  <td style="width: 50%; height: 34px; padding: 6px 12px; font-size: 12px; line-height: 1.42857143; color: #555555; background-color: #fff;background-image: none; border: 1px solid #ccc;" class="text-center"> {{ $seguimiento->especificar_domicilio_telefono2 }} </td>
                  
              </tr>
              <tr>
                <td style="width: 50%; height: 34px; padding: 6px 12px; font-size: 12px; line-height: 1.42857143; color: #555555; background-color: #fff;background-image: none; border: 1px solid #ccc;" class="text-center"> {{ $seguimiento->especificar_nombre3 }} </td>
                <td style="width: 50%; height: 34px; padding: 6px 12px; font-size: 12px; line-height: 1.42857143; color: #555555; background-color: #fff;background-image: none; border: 1px solid #ccc;" class="text-center"> {{ $seguimiento->especificar_domicilio_telefono3 }} </td>
                
              </tr>
              <tr>
                <td style="width: 50%; height: 34px; padding: 6px 12px; font-size: 12px; line-height: 1.42857143; color: #555555; background-color: #fff;background-image: none; border: 1px solid #ccc;" class="text-center"> {{ $seguimiento->especificar_nombre4 }} </td>
                <td style="width: 50%; height: 34px; padding: 6px 12px; font-size: 12px; line-height: 1.42857143; color: #555555; background-color: #fff;background-image: none; border: 1px solid #ccc;" class="text-center"> {{ $seguimiento->especificar_domicilio_telefono4 }} </td>
              </tr>
          </tbody>
      </table>
  </div>
</div>

<div class="row">
  <div class="form-group col-sm-5">
    9. SE REGISTRAN CAMBIOS EN LA LOCALIZACIÓN DEL PROYECTO?
    <span class="form-control">  {{ $seguimiento->cambios_localizacion }} </span>
  </div>
</div>


<div class="row">
  <div class="form-group col-sm-10">
    9.1. CAUSAS?
  </div>
</div>

<div class="row">
    <div class="form-group col-sm-11">
      <span class="form-control">  {{ $seguimiento->cambios_localizacion_causas }} </span>
         
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
            <span class="form-control">  {{ $seguimiento->nueva_localizacion_domicilio }} </span>

      </div>
</div>
<div class="row col-span-3">
      <div class="form-group col-sm-5">
            <label style="border: none; margin-bottom: 0" class="form-control" for="nueva_localizacion_localidad">Localidad</label>
            <span class="form-control">   {{ $seguimiento->nueva_localizacion_localidad }} </span>
      </div>
      <div class="form-group col-sm-5">
            <label style="border: none; margin-bottom: 0" class="form-control" for="nueva_localizacion_cp">C. P. </label>
            <span class="form-control">   {{ $seguimiento->nueva_localizacion_cp }} </span>
      </div>
</div>
<div class="row col-span-3">
      <div class="form-group col-sm-5">
            <label style="border: none; margin-bottom: 0" class="form-control" for="nueva_localizacion_provincia">Provincia</label>
           <span class="form-control">  {{ $seguimiento->nueva_localizacion_provincia }} </span>
      </div>
      <div class="form-group col-sm-5">
            <label style="border: none; margin-bottom: 0" class="form-control" for="nueva_localizacion_telefono">Teléfono</label>
            <span class="form-control">  {{ $seguimiento->nueva_localizacion_telefono }} </span>
      </div>
</div>

<!-- FIN PAGINA 2 -->
