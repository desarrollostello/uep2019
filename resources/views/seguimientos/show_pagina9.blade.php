
<!-- INICIO PAGINA 9 -->


<div class="row">
  <div class="form-group col-sm-10">
   20.4. EN QUÉ TEMAS?
  </div>
</div>

<div class="row">
    <div class="form-group col-sm-11">
          {!! Form::textarea('20_3_en_que_temas', null, ['class' => 'form-control', 'rows' => 3, 'data-toggle'=>'tooltip', 'data-placement'=>'bottom']) !!}
          
    </div>
</div>




<div class="row">
  <div class="form-group col-sm-10">
    21. IMPORTANCIA DE LA ACTIVIDAD
  </div>
</div>

<div class="row">
      <div class="form-group col-sm-4">
          
          {!! Form::select(
                '21_importancia_actividad', 
                [
                    ''=>'Seleccione', 
                    'UNICA'=>'UNICA', 
                    'PRINCIPAL'=>'PRINCIPAL',
                    'SECUNDARIA'=>'SECUNDARIA'
                ], 
                null, 
                [
                    'class' => 'form-control',
                    'id' => '21_importancia_actividad', 
                    'data-live-search' => 'true', 
                    'data-max-options' => '1'
                ])  !!}
         
      </div>
</div>



<div class="row">
  <div class="form-group col-sm-10">
    21.1. EXISTEN PERSPECTIVAS PARA QUE SE CONVIERTA EN ACTIVIDAD PRINCIPAL?
  </div>
</div>

<div class="row">
      <div class="form-group col-sm-4">
          
          {!! Form::select(
                '21_1_actividad_ppal_perspectiva', 
                [
                    ''=>'Seleccione', 
                    'SI'=>'SI', 
                    'NO'=>'NO'
                ], 
                null, 
                [
                    'class' => 'form-control',
                    'id' => '21_1_actividad_ppal_perspectiva', 
                    'data-live-search' => 'true', 
                    'data-max-options' => '1'
                ])  !!}
         
      </div>
</div>




<div class="row">
  <div class="form-group col-sm-10">
   21.2.  OBSERVACIONES
  </div>
</div>

<div class="row">
    <div class="form-group col-sm-11">
          {!! Form::textarea('21_2_observaciones', null, ['class' => 'form-control', 'rows' => 3, 'data-toggle'=>'tooltip', 'data-placement'=>'bottom']) !!}
          
    </div>
</div>

