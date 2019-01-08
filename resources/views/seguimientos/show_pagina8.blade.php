
<!-- INICIO PAGINA 8 -->

<div class="row">
  <div class="form-group col-sm-10">
    20. EL EMPRESARIO TIENE NECESIDAD DE ASISTENCIA TÉCNICA Y/O CAPACITACIÓN EN BASE <br>A LOS PROBLEMAS DETECTADOS EN LA ENTREVISTA?
  </div>
</div>

<div class="row">
      <div class="form-group col-sm-4">
          {{ $seguimiento->20_asistencia_financiera }}
      </div>
      <div class="form-group col-sm-4">
        {{ $seguimiento->20_asistencia_financiera_en_que }} 
      </div>
</div>



<div class="row">
  <div class="form-group col-sm-10">
    20.1. DETALLAR LOS ASPECTOS CONSIGNADOS, Y LA MODALIDAD EN QUE SE VERIFICARÍA LA ASISTENCIA <br> TÉCNICA Y/O CAPACITACIÓN
  </div>
</div>

<div class="row">
    <div class="form-group col-sm-11">
      {{ $seguimiento->20_1_asistencia_financiera_ampliacion }} 
          
    </div>
</div>




<div class="row">
  <div class="form-group col-sm-10">
    20.2. HA RECIBIDO ANTERIORMENTE ALGÚN TIPO DE ASISTENCIA TÉCNICA Y/O CAPACITACIÓN?
  </div>
</div>

<div class="row">
      <div class="form-group col-sm-4">
          {{ $seguimiento->20_2_anteriormente_capacitacion }} 
      </div>
</div>


<div class="row">
  <div class="form-group col-sm-10">
   * DESCRIBIR EL TIPO Y A CARGO DE QUIÉN ESTUVO
  </div>
</div>

<div class="row">
    <div class="form-group col-sm-11">
      {{ $seguimiento->20_2_anteriormente_capac_tipo_cargo }} 
    </div>
</div>




<div class="row">
  <div class="form-group col-sm-10">
    20.3. EL EMPRESARIO ESTARÍA INTERESADO EN EFECTUAR Y/O RECIBIR CAPACITACIÓN  Y/O ASIST. TÉCNICA?
  </div>
</div>

<div class="row">
      <div class="form-group col-sm-4">
          {{ $seguimiento->20_3_recibir_capacitacion }} 
      </div>
</div>


