

<!-- INICIO PAGINA 7 -->

<div class="row">
  <div class="form-group col-sm-10">
    17.  COMO CALIFICARÍA LA PERSPECTIVA FUTURA DE LA ACTIVIDAD?
  </div>
</div>

<div class="row">
      <div class="form-group col-sm-5">
      <span class="form-control">   {{ $seguimiento->perspectiva_futuro_17 }} </span>
      </div>
</div>

<div class="row">
  <div class="form-group col-sm-10">
    17. POR QUE?
  </div>
</div>

<div class="row">
    <div class="form-group col-sm-11">
      <span class="form-control">   {{ $seguimiento->perspectiva_futuro_porque_17 }} </span>
    </div>
</div>





<div class="row">
  <div class="form-group col-sm-10">
    18. LA EMPRESA TIENE PROBLEMAS PARA EL PAGO DEL CREDITO SOLICITADO AL CFI?
  </div>
</div>

<div class="row">
      <div class="form-group col-sm-4">
      <span class="form-control">   {{ $seguimiento->problemas_pago_credito_18 }} </span>

      </div>
      <div class="form-group col-sm-4">
      <span class="form-control">   {{ $seguimiento->problemas_pago_si_actuales_futuros_18 }} </span>
         
      </div>
</div>


<div class="row">
  <div class="form-group col-sm-10">
    18.1. RAZONES?
  </div>
</div>

<div class="row">
    <div class="form-group col-sm-11">
        <span class="form-control">  {{ $seguimiento->problmeas_pago_razones_18 }} </span>
          
    </div>
</div>




<div class="row">
  <div class="form-group col-sm-10">
    19. LOS PROBLEMAS PLANTEADOS EN LA ENTREVISTA ANTERIOR, HAN SIDO SOLUCIONADOS
  </div>
</div>

<div class="row">
      <div class="form-group col-sm-4">
        <span class="form-control">   {{ $seguimiento->problemas_entrevista_anterior_19 }} </span>
          
      </div>
      <div class="form-group col-sm-7">
          * COMO?
          <span class="form-control">  {{ $seguimiento->problemas_entrevista_anterior_como_19 }}  </span>
      </div>
</div>



<div class="row">
  <div class="form-group col-sm-10">
    19.1. RAZONES
  </div>
</div>

<div class="row">
    <div class="form-group col-sm-11">
        <span class="form-control">  {{ $seguimiento->entrevista_anterior_razones_19_1 }} </span>
    </div>
</div>
