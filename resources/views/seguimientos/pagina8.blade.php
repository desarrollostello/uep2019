
<!-- INICIO PAGINA 8 -->

<div class="row">
  <div class="form-group col-sm-10">
    20. EL EMPRESARIO TIENE NECESIDAD DE ASISTENCIA TÉCNICA Y/O CAPACITACIÓN EN BASE <br>A LOS PROBLEMAS DETECTADOS EN LA ENTREVISTA?
  </div>
</div>

<div class="row">
      <div class="form-group col-sm-4">
          
          {!! Form::select(
                '20_asistencia_financiera', 
                [
                    ''=>'Seleccione', 
                    'SI'=>'SI', 
                    'NO'=>'NO'
                ], 
                null, 
                [
                    'class' => 'form-control', 
                    'id' => '20_asistencia_financiera', 
                    'data-live-search' => 'true', 
                    'data-max-options' => '1'
                ])  !!}
         
      </div>
      <div class="form-group col-sm-4">
          {!! Form::select(
                '20_asistencia_financiera_en_que', 
                [
                    ''=>'Seleccione', 
                    'TÉCNICO - PRODUCTIVOS'=>'TÉCNICO - PRODUCTIVOS', 
                    'GESTION ADMINISTRATIVA-FINANCIERA'=>'GESTION ADMINISTRATIVA-FINANCIERA',
                    'MERCADO Y COMERCIALIZACION'=>'MERCADO Y COMERCIALIZACION', 
                ], 
                null, 
                [
                    'class' => 'form-control', 
                    'id' => '20_asistencia_financiera_en_que', 
                    'data-live-search' => 'true', 
                    'data-max-options' => '1'
                ])  !!}
      </div>
</div>



<div class="row">
  <div class="form-group col-sm-10">
    20.1. DETALLAR LOS ASPECTOS CONSIGNADOS, Y LA MODALIDAD EN QUE SE VERIFICARÍA LA ASISTENCIA <br> TÉCNICA Y/O CAPACITACIÓN
  </div>
</div>

<div class="row">
    <div class="form-group col-sm-11">
          {!! Form::textarea('20_1_asistencia_financiera_ampliacion', null, ['class' => 'form-control', 'rows' => 3, 'data-toggle'=>'tooltip', 'data-placement'=>'bottom']) !!}
          
    </div>
</div>




<div class="row">
  <div class="form-group col-sm-10">
    20.2. HA RECIBIDO ANTERIORMENTE ALGÚN TIPO DE ASISTENCIA TÉCNICA Y/O CAPACITACIÓN?
  </div>
</div>

<div class="row">
      <div class="form-group col-sm-4">
          
          {!! Form::select(
                '20_2_anteriormente_capacitacion', 
                [
                    ''=>'Seleccione', 
                    'SI'=>'SI', 
                    'NO'=>'NO'
                ], 
                null, 
                [
                    'class' => 'form-control',
                    'id' => '20_2_anteriormente_capacitacion', 
                    'data-live-search' => 'true', 
                    'data-max-options' => '1'
                ])  !!}
         
      </div>
</div>


<div class="row">
  <div class="form-group col-sm-10">
   * DESCRIBIR EL TIPO Y A CARGO DE QUIÉN ESTUVO
  </div>
</div>

<div class="row">
    <div class="form-group col-sm-11">
          {!! Form::textarea('20_2_anteriormente_capac_tipo_cargo', null, ['class' => 'form-control', 'rows' => 3, 'data-toggle'=>'tooltip', 'data-placement'=>'bottom']) !!}
          
    </div>
</div>




<div class="row">
  <div class="form-group col-sm-10">
    20.3. EL EMPRESARIO ESTARÍA INTERESADO EN EFECTUAR Y/O RECIBIR CAPACITACIÓN  Y/O ASIST. TÉCNICA?
  </div>
</div>

<div class="row">
      <div class="form-group col-sm-4">
          
          {!! Form::select(
                '20_3_recibir_capacitacion', 
                [
                    ''=>'Seleccione', 
                    'SI'=>'SI', 
                    'NO'=>'NO',
                    'NO SABE'=>'NO SABE'

                ], 
                null, 
                [
                    'class' => 'form-control', 
                    'id' => '20_3_recibir_capacitacion', 
                    'data-live-search' => 'true', 
                    'data-max-options' => '1'
                ])  !!}
         
      </div>
</div>


