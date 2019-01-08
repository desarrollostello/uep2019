
<!-- INICIO PAGINA 3 -->

<div class="row">
  <div class="form-group col-sm-10">
    10. EL PROYECTO (EMPRESA NUEVA O AMPLIACIÓN) SE HA PUESTO EN MARCHA?
  </div>
</div>


<div class="row">
  <div class="form-group col-sm-8">
      <table id="table" class="table table-striped table-bordered">
          <thead>
          <tr>
              <th class="text-center">Nueva o Ampliación</th>
              <th class="text-center">SI / NO* / PARCIAL*</th>
              
          </tr>
          </thead>
         
          <tbody>
              <tr>
                  <td> {{ $seguimiento->puesta_en_marcha_nuevo_ampliacion }} </td> <!-- N o A -->
                  <td> {{ $seguimiento->puesta_en_marcha_si_no_parcial }} </td>
                  
              </tr>
            
          </tbody>
      </table>
  </div>
</div>
<div class="row">
  <div class="form-group col-sm-7">
    10.1. RAZONES (seleccione las más importantes)
  </div>
</div>



<div class="row">
    <div class="form-group col-sm-7">
        <ul class="list-group">
            <li class="list-group-item">
                1. Problemas para concretar inversiones
                <div class="material-switch pull-right">
                    
                    <input type="checkbox" name="problema_1" id="problema_1" {{$seguimiento->problema_1 == 'on'?"checked":''}}>
                    <label for="problema_1" class="label-primary"></label>
                </div>
            </li>
            <li class="list-group-item">
                2. Falta de Materia Primas e Insumos
                <div class="material-switch pull-right">
                    
                    <input type="checkbox" name="problema_2" id="problema_2" {{$seguimiento->problema_2 == 'on'?"checked":''}}>
                    <label for="problema_2" class="label-primary"></label>
                </div>
            </li>

            <li class="list-group-item">
                3. Falta de Mano de Obra
                <div class="material-switch pull-right">
                  
                    <input type="checkbox" name="problema_3" id="problema_3" {{$seguimiento->problema_3 == 'on'?"checked":''}}>
                    <label for="problema_3" class="label-primary"></label>
                </div>
            </li>


            <li class="list-group-item">
                4. Demora en el desembolso (estacionales)
                <div class="material-switch pull-right">
                 
                    <input type="checkbox" name="problema_4" id="problema_4" {{$seguimiento->problema_4 == 'on'?"checked":''}}>
                    <label for="problema_4" class="label-primary"></label>
                </div>
            </li>

            <li class="list-group-item">
                5. Fenómenos meteorológicos adversos
                <div class="material-switch pull-right">
                 
                    <input type="checkbox" name="problema_5" id="problema_5" {{$seguimiento->problema_5 == 'on'?"checked":''}}>
                    <label for="problema_5" class="label-primary"></label>
                </div>
            </li>

            <li class="list-group-item">
                6. Dificultades en la Habilitación
                <div class="material-switch pull-right">
                  
                    <input type="checkbox" name="problema_6" id="problema_6" {{$seguimiento->problema_6 == 'on'?"checked":''}}>
                    <label for="problema_6" class="label-primary"></label>
                </div>
            </li>

            <li class="list-group-item">
                7. Otros
                <div class="material-switch pull-right">
                 
                    <input type="checkbox" name="problema_7" id="problema_7" {{$seguimiento->problema_7 == 'on'?"checked":''}}>
                    <label for="problema_7" class="label-primary"></label>
                </div>
            </li>

          </ul>    

    </div>
</div>

<!--

<div class="switch">
     @if ($action == 'create')
          <input class="cmn-toggle cmn-toggle-round-flat"  type="checkbox" name="problema_4" id="problema_4">
      @else
          <input class="cmn-toggle cmn-toggle-round-flat"  type="checkbox" name="problema_4" id="problema_4" {{$seguimiento->problema_4 == 'on'?"checked":''}}>
      @endif
    <label for="problema_4"></label>
</div>

<div class="switch">
    @if ($action == 'create')
      <input class="cmn-toggle cmn-toggle-round-flat"  type="checkbox" name="problema_5" id="problema_5">
    @else
    <input class="cmn-toggle cmn-toggle-round-flat"  type="checkbox" name="problema_5" id="problema_5" {{$seguimiento->problema_5 == 'on'?"checked":''}}>
    @endif
    <label for="problema_5"></label>
</div>


<div class="switch">
  @if ($action == 'create')
      <input class="cmn-toggle cmn-toggle-round-flat"  type="checkbox" name="problema_6" id="problema_6">
  @else
      <input class="cmn-toggle cmn-toggle-round-flat"  type="checkbox" name="problema_6" id="problema_6" {{$seguimiento->problema_6 == 'on'?"checked":''}}>
  @endif
    <label for="problema_6"></label>
</div>


<div class="switch">
  @if ($action == 'create')
      <input class="cmn-toggle cmn-toggle-round-flat"  type="checkbox" name="problema_7" id="problema_7">
  @else
      <input class="cmn-toggle cmn-toggle-round-flat"  type="checkbox" name="problema_7" id="problema_7" {{$seguimiento->problema_7 == 'on'?"checked":''}}>
  @endif
    <label for="problema_6"></label>
</div>

-->


<div class="row">
  <div class="form-group col-sm-10">
    10.2. DESCRIBIR LAS RAZONES CONSIGNADAS
  </div>
</div>

<div class="row">
    <div class="form-group col-sm-11">
          {{ $seguimiento->10_2_describir_razones_consignadas }}
         
    </div>
</div>


<div class="row" style="margin-top: 20px;">
  <div class="form-group col-sm-10">
    11. LAS INVERSIONES REALIZADAS, SON LAS PREVISTAS POR EL PROYECTO (Refiere a las inversiones totales)
  </div>
</div>

<div class="row">
  <div class="form-group col-sm-7">
      <table id="table" class="table table-striped table-bordered">
          <thead>
          <tr>
              <th>SI / NO* / PARCIAL*</th>
              <th>% del Desvío</th>
          </tr>
          </thead>
         
          <tbody>
              <tr>
                  
                  <td> {{ $seguimiento->inv_previstas_si_no }}   </td>
                  <td id="porcentaje_desvio"> {{ $seguimiento->inv_previstas_desvios }} </td> 
              </tr>
            
          </tbody>
      </table>
  </div>
</div>

<div class="row">
  <div class="form-group col-sm-7">
    11. RAZONES (seleccione las más importantes)
  </div>
</div>

<div class="row">
    <div class="form-group col-sm-7">
        <ul class="list-group">
            <li class="list-group-item">
                1. Aumento precio maquinarias y equipos
                <div class="material-switch pull-right">
                   
                    <input type="checkbox" name="desvio_inv_problema_1" id="desvio_inv_problema_1" {{$seguimiento->desvio_inv_problema_1 == 'on'?"checked":''}}>
                    <label for="desvio_inv_problema_1" class="label-primary"></label>
                </div>
            </li>
            <li class="list-group-item">
                2. Aumento Costo Obra Civil
                <div class="material-switch pull-right">
                    
                    <input type="checkbox" name="desvio_inv_problema_2" id="desvio_inv_problema_2" {{$seguimiento->desvio_inv_problema_2 == 'on'?"checked":''}}>
                    <label for="desvio_inv_problema_2" class="label-primary"></label>
                </div>
            </li>

            <li class="list-group-item">
                3. Aumento Costo Instalaciones
                <div class="material-switch pull-right">
                  
                  <input type="checkbox" name="desvio_inv_problema_3" id="desvio_inv_problema_3" {{$seguimiento->desvio_inv_problema_3 == 'on'?"checked":''}}>
                  <label for="desvio_inv_problema_3" class="label-primary"></label>
                </div>
            </li>


            <li class="list-group-item">
                4. Inversiones nuevas no previstas
                <div class="material-switch pull-right">
                  
                    <input type="checkbox" name="desvio_inv_problema_4" id="desvio_inv_problema_4" {{$seguimiento->desvio_inv_problema_4 == 'on'?"checked":''}}>
                    <label for="desvio_inv_problema_4" class="label-primary"></label>
                </div>
            </li>

            <li class="list-group-item">
                5. Ausencia de equipos en el mercado
                <div class="material-switch pull-right">
                  
                  <input type="checkbox" name="desvio_inv_problema_5" id="desvio_inv_problema_5" {{$seguimiento->desvio_inv_problema_5 == 'on'?"checked":''}}>
                  <label for="desvio_inv_problema_5" class="label-primary"></label>
                </div>
            </li>

            <li class="list-group-item">
                6. Dificultades en la constitución del Activo de Trabajo
                <div class="material-switch pull-right">
                 
                  <input type="checkbox" name="desvio_inv_problema_6" id="desvio_inv_problema_6" {{$seguimiento->desvio_inv_problema_6 == 'on'?"checked":''}}>
                  <label for="desvio_inv_problema_6" class="label-primary"></label>
                </div>
            </li>

            <li class="list-group-item">
                7. Inv. diferentes a las proyectadas
                <div class="material-switch pull-right">
                 
                  <input type="checkbox" name="desvio_inv_problema_7" id="desvio_inv_problema_7" {{$seguimiento->desvio_inv_problema_7 == 'on'?"checked":''}}>
                  <label for="desvio_inv_problema_7" class="label-primary"></label>
                </div>
            </li>
            <li class="list-group-item">
                8. Otras (especificar)
                <div class="material-switch pull-right">
              
                  <input type="checkbox" name="desvio_inv_problema_8" id="desvio_inv_problema_8" {{$seguimiento->desvio_inv_problema_7 == 'on'?"checked":''}}>
                  <label for="desvio_inv_problema_8" class="label-primary"></label>
                </div>
            </li>

          </ul>    

    </div>
</div>


<div class="row">
  <div class="form-group col-sm-10">
    11.2. DESCRIBIR LAS RAZONES CONSIGNADAS
  </div>
</div>

<div class="row">
    <div class="form-group col-sm-11">
          {{ $seguimiento->11_2_describir_razones_consignadas }}
        
    </div>
</div>

<!-- FIN PAGINA 3 -->

