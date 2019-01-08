

<!-- INICIO PAGINA 7 -->

<div class="row">
  <div class="form-group col-sm-10">
    17.  COMO CALIFICARÍA LA PERSPECTIVA FUTURA DE LA ACTIVIDAD?
  </div>
</div>

<div class="row">
      <div class="form-group col-sm-5">
        {{ $seguimiento->17_perspectiva_futuro }} 
      </div>
</div>

<div class="row">
  <div class="form-group col-sm-10">
    17. POR QUE?
  </div>
</div>

<div class="row">
    <div class="form-group col-sm-11">
        {{ $seguimiento->17_perspectiva_futuro_porque }} 
    </div>
</div>





<div class="row">
  <div class="form-group col-sm-10">
    18. LA EMPRESA TIENE PROBLEMAS PARA EL PAGO DEL CREDITO SOLICITADO AL CFI?
  </div>
</div>

<div class="row">
      <div class="form-group col-sm-4">
        {{ $seguimiento->18_problemas_pago_credito }}

      </div>
      <div class="form-group col-sm-4">
        {{ $seguimiento->18_problemas_pago_si_actuales_futuros }}
         
      </div>
</div>


<div class="row">
  <div class="form-group col-sm-10">
    18.1. RAZONES?
  </div>
</div>

<div class="row">
    <div class="form-group col-sm-11">
         {{ $seguimiento->18_problmeas_pago_razones }}
          
    </div>
</div>




<div class="row">
  <div class="form-group col-sm-10">
    19. LOS PROBLEMAS PLANTEADOS EN LA ENTREVISTA ANTERIOR, HAN SIDO SOLUCIONADOS
  </div>
</div>

<div class="row">
      <div class="form-group col-sm-4">
          {{ $seguimiento->19_problemas_entrevista_anterior }}
          
      </div>
      <div class="form-group col-sm-7">
          * COMO?
          {{ $seguimiento->19_problemas_entrevista_anterior_como }} 
      </div>
</div>



<div class="row">
  <div class="form-group col-sm-10">
    19.1. RAZONES
  </div>
</div>

<div class="row">
    <div class="form-group col-sm-11">
        {{ $seguimiento->19_1_entrevista_anterior_razones }}           
    </div>
</div>
