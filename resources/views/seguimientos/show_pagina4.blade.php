
<!-- INICIO PAGINA 4 -->

<div class="row">
  <div class="form-group col-sm-10">
    11.3. LAS INVERSIONES REALIZADAS, SE HAN PODIDO VERIFICAR <br>
    (Con factuas y/o comprobantes de pago, títulos de propiedad, observación directa, etc)
  </div>
</div>

<div class="row">
    <div class="form-group col-sm-3">
        {{ $seguimiento->inv_verificacion_si_no }}
    </div>
</div>

<div class="row">
  <div class="form-group col-sm-7">

      <table id="table" class="table table-striped table-bordered">
          <thead>
          <tr>
              <th>* FORMA DE VERIFICACION</th>
          </tr>
          </thead>
         
          <tbody>
              <tr>
                  <td> {{ $seguimiento->forma_de_verificacion }}</td>
              </tr>
            
          </tbody>
      </table>
  </div>
</div>

<div class="row">
  <div class="form-group col-sm-10">
    11.4. LAS INVERSIONES REALIZADAS CON EL CREDITO, SON LAS PROYECTADAS <br>
  
  </div>
</div>



<div class="row">
    <div class="form-group col-sm-3">
        <table id="table" class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>SI / NO* / PARCIAL*</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td> {{ $seguimiento->inv_proyectadas_si_no }}   </td> 
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="row">
  <div class="form-group col-sm-10">
    11.5. DESCRIBIR LAS RAZONES
  </div>
</div>

<div class="row">
    <div class="form-group col-sm-11">
         {{ $seguimiento->11_5_inv_proyectadas_razones }}  
          
    </div>
</div>



<div class="row">
  <div class="form-group col-sm-5">
    12  SE HAN REGISTRADO NUEVAS INVERSIONES
  </div>
</div>

<div class="row">
  <div class="form-group col-sm-5">
      <table id="table" class="table table-striped table-bordered">
          <thead>
          <tr>
              <th class="text-center">SI / NO</th>
              <th class="text-center">MONTO APROXIMADO</th>
          </tr>
          </thead>
          <tbody>
              <tr>
                  <td> {{ $seguimiento->nuevas_inv_si_no }}   </td> 
                  <td> {{ $seguimiento->monto_aprox_nuevas_inversiones }}  </td> 
              </tr>
          </tbody>
      </table>
</div>
</div>


<div class="row">
  <div class="form-group col-sm-10">
    12.1. CUALES?
  </div>
</div>

<div class="row">
    <div class="form-group col-sm-9">
      {{ $seguimiento->12_1_detalle_nuevas_inversiones }}   
          
    </div>
</div>



<div class="row">
  <div class="form-group col-sm-10">
    12.2. LAS NUEVAS INVERSIONES FUERON VERIFICADAS <br>
    (Con factuas y/o comprobantes de pago, títulos de propiedad, observación directa, etc)
  </div>
</div>

<div class="row">
    <div class="form-group col-sm-3">
        {{ $seguimiento->nuevas_inv_verificacion_si_no }} 
    </div>
    <div class="form-group col-sm-5">
        <table id="table" class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>* FORMA DE VERIFICACION</th>
            </tr>
            </thead>
           
            <tbody>
                <tr>
                    <td>  {{ $seguimiento->forma_verificacion_nuevas_inv }} </td>
                    
                </tr>
              
            </tbody>
        </table>
    </div>
</div>

<div class="row">
  <div class="form-group col-sm-9">
    12.3. COMO PREVEE QUE LAS NUEVAS INVERSIONES REALIZADAS INCIDIRAN EN EL DESARRROLLO DE LA EMPRESA?
  </div>
</div>




<div class="row">
    <div class="form-group col-sm-7">
        <ul class="list-group">
            <li class="list-group-item">
                Aumento de la Producción
                <div class="material-switch pull-right">
                    <input type="checkbox" name="pagina4_12_3_aumento_produccion" id="pagina4_12_3_aumento_produccion" {{$seguimiento->pagina4_12_3_aumento_produccion == 'on'?"checked":''}}>
                    <label for="pagina4_12_3_aumento_produccion" class="label-primary"></label>
                </div>
            </li>
            <li class="list-group-item">
                Mejora en la calidad de los productos
                <div class="material-switch pull-right">
                    <input type="checkbox" name="pagina4_12_3_calidad_productos" id="pagina4_12_3_calidad_productos" {{$seguimiento->pagina4_12_3_calidad_productos == 'on'?"checked":''}}>
                    <label for="pagina4_12_3_calidad_productos" class="label-primary"></label>
                </div>
            </li>

            <li class="list-group-item">
                Disminución de los costos
                <div class="material-switch pull-right">
                   <input type="checkbox" name="pagina4_12_3_disminucion_costos" id="pagina4_12_3_disminucion_costos" {{$seguimiento->pagina4_12_3_disminucion_costos == 'on'?"checked":''}}>
                   <label for="pagina4_12_3_disminucion_costos" class="label-primary"></label>
                </div>
            </li>


            <li class="list-group-item">
                Otros (especificar)
                <div class="material-switch pull-right">
                   <input type="checkbox" name="pagina4_12_3_otros" id="pagina4_12_3_otros" {{$seguimiento->pagina4_12_3_otros == 'on'?"checked":''}}>
                   <label for="pagina4_12_3_otros" class="label-primary"></label>
                </div>
            </li>

          </ul>    

    </div>
</div>


<!-- FIN PAGINA 4 -->
