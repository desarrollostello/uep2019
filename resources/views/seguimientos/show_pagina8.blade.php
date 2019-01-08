
<!-- INICIO PAGINA 8 -->

<div class="row">
  <div class="form-group col-sm-10">
    20. EL EMPRESARIO TIENE NECESIDAD DE ASISTENCIA TÉCNICA Y/O CAPACITACIÓN EN BASE <br>A LOS PROBLEMAS DETECTADOS EN LA ENTREVISTA?
  </div>
</div>

<div class="row">
      <div class="form-group col-sm-4">
         <span class="form-control">  {{ $seguimiento->asistencia_financiera_20 }} </span>
      </div>
      <div class="form-group col-sm-4">
        <span class="form-control">  {{ $seguimiento->asistencia_financiera_en_que_20 }} </span>
      </div>
</div>



<div class="row">
  <div class="form-group col-sm-10">
    20.1. DETALLAR LOS ASPECTOS CONSIGNADOS, Y LA MODALIDAD EN QUE SE VERIFICARÍA LA ASISTENCIA <br> TÉCNICA Y/O CAPACITACIÓN
  </div>
</div>

<div class="row">
    <div class="form-group col-sm-11">
      <span class="form-control">  {{ $seguimiento->asistencia_financiera_ampliacion_20_1 }} </span>
          
    </div>
</div>




<div class="row">
  <div class="form-group col-sm-10">
    20.2. HA RECIBIDO ANTERIORMENTE ALGÚN TIPO DE ASISTENCIA TÉCNICA Y/O CAPACITACIÓN?
  </div>
</div>

<div class="row">
      <div class="form-group col-sm-4">
         <span class="form-control">  {{ $seguimiento->anteriormente_capacitacion_20_2 }}  </span>
      </div>
</div>


<div class="row">
  <div class="form-group col-sm-10">
   * DESCRIBIR EL TIPO Y A CARGO DE QUIÉN ESTUVO
  </div>
</div>

<div class="row">
    <div class="form-group col-sm-11">
      <span class="form-control">  {{ $seguimiento->anteriormente_capac_tipo_cargo_20_2 }} </span>
    </div>
</div>




<div class="row">
  <div class="form-group col-sm-10">
    20.3. EL EMPRESARIO ESTARÍA INTERESADO EN EFECTUAR Y/O RECIBIR CAPACITACIÓN  Y/O ASIST. TÉCNICA?
  </div>
</div>

<div class="row">
      <div class="form-group col-sm-4">
          <span class="form-control">  {{ $seguimiento->recibir_capacitacion_20_3 }} </span>
      </div>
</div>


