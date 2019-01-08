

<!-- INICIO PAGINA 7 -->

<div class="row">
  <div class="form-group col-sm-10">
    17.  COMO CALIFICARÍA LA PERSPECTIVA FUTURA DE LA ACTIVIDAD?
  </div>
</div>

<div class="row">
      <div class="form-group col-sm-5">
          {!! Form::select(
                '17_perspectiva_futuro', 
                [
                    ''=>'Seleccione', 
                    'MEJOR'=>'MEJOR', 
                    'ALGO MEJOR'=>'ALGO MEJOR',
                    'IGUAL'=>'IGUAL',
                    'ALGO PEOR'=>'ALGO PEOR',
                    'PEOR'=>'PEOR',
                ], 
                null, 
                [
                    'class' => 'form-control', 
                    'id' => '13_otros_si_no', 
                    'data-live-search' => 'true', 
                    'data-max-options' => '1'
                ])  !!}
          
      </div>
</div>

<div class="row">
  <div class="form-group col-sm-10">
    17. POR QUE?
  </div>
</div>

<div class="row">
    <div class="form-group col-sm-11">
          {!! Form::textarea('17_perspectiva_futuro_porque', null, ['class' => 'form-control', 'rows' => 3, 'data-toggle'=>'tooltip', 'data-placement'=>'bottom']) !!}
    </div>
</div>





<div class="row">
  <div class="form-group col-sm-10">
    18. LA EMPRESA TIENE PROBLEMAS PARA EL PAGO DEL CREDITO SOLICITADO AL CFI?
  </div>
</div>

<div class="row">
      <div class="form-group col-sm-4">
          
          {!! Form::select(
                '18_problemas_pago_credito', 
                [
                    ''=>'Seleccione', 
                    'SI'=>'SI', 
                    'NO'=>'NO'
                ], 
                null, 
                [
                    'class' => 'form-control', 
                    'id' => '18_problemas_pago_credito', 
                    'data-live-search' => 'true', 
                    'data-max-options' => '1'
                ])  !!}
         
      </div>
      <div class="form-group col-sm-4">
          {!! Form::select(
                '18_problemas_pago_si_actuales_futuros', 
                [
                    ''=>'Seleccione', 
                    'ACTUALES'=>'ACTUALES', 
                    'FUTURO'=>'FUTURO'
                ], 
                null, 
                [
                    'class' => 'form-control', 
                    'id' => '18_problemas_pago_si_actuales_futuros', 
                    'data-live-search' => 'true', 
                    'data-max-options' => '1'
                ])  !!}
      </div>
</div>


<div class="row">
  <div class="form-group col-sm-10">
    18.1. RAZONES?
  </div>
</div>

<div class="row">
    <div class="form-group col-sm-11">
          {!! Form::textarea('18_problmeas_pago_razones', null, ['class' => 'form-control', 'rows' => 3, 'data-toggle'=>'tooltip', 'data-placement'=>'bottom']) !!}
          
    </div>
</div>




<div class="row">
  <div class="form-group col-sm-10">
    19. LOS PROBLEMAS PLANTEADOS EN LA ENTREVISTA ANTERIOR, HAN SIDO SOLUCIONADOS
  </div>
</div>

<div class="row">
      <div class="form-group col-sm-4">
          
          {!! Form::select(
                '19_problemas_entrevista_anterior', 
                [
                    ''=>'Seleccione', 
                    'SI'=>'SI', 
                    'NO'=>'NO'
                ], 
                null, 
                [
                    'class' => 'form-control', 
                    'id' => '19_problemas_entrevista_anterior', 
                    'data-live-search' => 'true', 
                    'data-max-options' => '1'
                ])  !!}
         
      </div>
      <div class="form-group col-sm-7">
          {!! Form::label('19_problemas_entrevista_anterior_como', '* COMO?') !!}
          {!! Form::text('19_problemas_entrevista_anterior_como', null, ['class' => 'form-control']) !!}
      </div>
</div>



<div class="row">
  <div class="form-group col-sm-10">
    19.1. RAZONES
  </div>
</div>

<div class="row">
    <div class="form-group col-sm-11">
          {!! Form::textarea('19_1_entrevista_anterior_razones', null, ['class' => 'form-control', 'rows' => 3, 'data-toggle'=>'tooltip', 'data-placement'=>'bottom']) !!}
          
    </div>
</div>
