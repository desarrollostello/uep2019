<div class="row">
    <div class="form-group col-sm-12">
        <div class="panel with-nav-tabs">
            <ul class="nav nav-pills">
                <li class="active" style="background-color: #3C8DBC; border-radius: 4px"><a href="#campos_obligatorios" data-toggle="tab" style=" color: #ffffff">Campos Obligatorios</a></li>
                <li style="background-color: #3C8DBC; border-radius: 4px"><a href="#datos_proyectos" data-toggle="tab" style=" color: #ffffff">Datos del Proyecto</a></li>
                <li style="background-color: #3C8DBC; border-radius: 4px"><a href="#condiciones" data-toggle="tab" style=" color: #ffffff">Inv. / Condiciones</a></li>
                <li style="background-color: #3C8DBC; border-radius: 4px"><a href="#fechas" data-toggle="tab" style=" color: #ffffff">Fechas</a></li>
                <li style="background-color: #3C8DBC; border-radius: 4px"><a href="#checklist" data-toggle="tab" style=" color: #ffffff">Checklist</a></li>
                <li style="background-color: #3C8DBC; border-radius: 4px"><a href="#anexos" data-toggle="tab" style=" color: #ffffff">Anexos</a></li>
                <li style="background-color: #3C8DBC; border-radius: 4px"><a href="#observaciones" data-toggle="tab" style=" color: #ffffff">Observaciones</a></li>
            </ul>
        </div>
        <div class="panel-body">
            <div class="tab-content">
                  <div class="tab-pane fade in active" id="campos_obligatorios">
                        <div class="row">
                              <div class="form-group col-sm-2" style="line-height: 180%; border: 1px solid #ccc; padding: 5px; text-align: center">
                                    <span style="margin-bottom: 5px;">Fecha Ingreso:</span> <br>
                                    <span class="respuesta_show">{{ $proyecto->fechaIngreso }}</span>
                              </div>
                              <div class="form-group col-sm-6" style="line-height: 180%; border: 1px solid #ccc; padding: 5px; text-align: center">
                                    <span style="margin-bottom: 5px;">Nombre Proyecto: </span><br />
                                    <span class="respuesta_show">{{ $proyecto->nombre }}</span>
                              </div>
                              <div class="form-group col-sm-3" style="line-height: 180%; border: 1px solid #ccc; padding: 5px; text-align: center">
                                    <span style="margin-bottom: 5px;">Localidad:</span><br />
                                    <span class="respuesta_show">{{ $proyecto->localidad->nombre }}</span>
                              </div>
                        </div>
                        <div class="row">
                              <div class="form-group col-sm-4" style="line-height: 180%; border: 1px solid #ccc; padding: 5px; text-align: center">
                                    <span style="margin-bottom: 5px;">Línea de Crédito:</span><br />
                                    <span class="respuesta_show">{{ $proyecto->lineaCredito->nombre }}</span>
                              </div>
                              <div class="form-group col-sm-3" style="line-height: 180%; border: 1px solid #ccc; padding: 5px; text-align: center">
                                    <span style="margin-bottom: 5px;">Estado:</span><br />
                                    <span class="respuesta_show">{{ $proyecto->estado->nombre }}</span>
                              </div>
                              <div class="form-group col-sm-4" style="line-height: 180%; border: 1px solid #ccc; padding: 5px; text-align: center">
                                    <span style="margin-bottom: 5px;">Estado Interno:</span><br />
                                    <span class="respuesta_show">{{ $proyecto->estadoInterno->nombre }}</span>
                              </div>
                        </div>
                        <div class="row">
                              <div class="form-group col-sm-3" style="line-height: 180%; border: 1px solid #ccc; padding: 5px; text-align: center">
                                    <span style="margin-bottom: 5px;">Sector:</span><br />
                                    <span class="respuesta_show">{{ $proyecto->sector->nombre }}</span>
                              </div>
                              <div class="form-group col-sm-5" style="line-height: 180%; border: 1px solid #ccc; padding: 5px; text-align: center">
                                    <span style="margin-bottom: 5px;">Titular:</span><br />
                                    @if($proyecto->titular)
                                        <span class="respuesta_show">{{ $proyecto->titular }}</span>
                                    @endif
                              </div>
                              <div class="form-group col-sm-3" style="line-height: 180%; border: 1px solid #ccc; padding: 5px; text-align: center">
                                    <span style="margin-bottom: 5px;">Monto:</span><br />
                                    <span class="respuesta_show">{{ $proyecto->monto }}</span>
                              </div>

                        </div>
                  </div>
                  <!-- ******** FIN CAMPOS OBLIGATORIOS ****** -->
                  <div class="tab-pane fade" id="datos_proyectos" style="padding: 5px; text-align: center">
                      @include('proyectos._datos_show')
                  </div>

                  <div class="tab-pane fade" id="condiciones" style="padding: 5px; text-align: center">
                        @include('proyectos._condiciones_show')
                  </div>

                  <div class="tab-pane fade" id="fechas" style="padding: 5px; text-align: center">
                      @include('proyectos._fechas_show')
                  </div>
                  <div class="tab-pane fade" id="checklist">
                    <!--@include('proyectos._checklists')-->
                    @include('checklists.show')
                  </div>
                  <div class="tab-pane fade" id="anexos" style="padding: 5px; text-align: center">
                    @include('proyectos._anexos_show')
                  </div>
                  <div class="tab-pane fade" id="observaciones" style="border: 1px solid #ccc; padding: 5px; text-align: center">
                      <span style="position: relative; float: left; width: 100%; text-align: center;">Observaciones</span><br>
                      <span class="respuesta_show">{{ $proyecto->observaciones }}</span>
                  </div>
            </div>
        </div>
    </div>
</div>
<br /><br />

@include('proyectos.edit_desembolso')
@include('proyectos.edit_sujeto')
