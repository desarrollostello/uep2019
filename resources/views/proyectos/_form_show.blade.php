<div class="row">
    <div class="form-group col-sm-12">
        <div class="panel with-nav-tabs">
            <ul class="nav nav-pills">
                <li class="active" style="background-color: #3C8DBC; border-radius: 4px"><a href="#campos_obligatorios" data-toggle="tab" style=" color: #ffffff">Campos Obligatorios</a></li>
                <li style="background-color: #3C8DBC; border-radius: 4px"><a href="#datos_proyectos" data-toggle="tab" style=" color: #ffffff">Datos del Proyecto</a></li>
                <li style="background-color: #3C8DBC; border-radius: 4px"><a href="#condiciones" data-toggle="tab" style=" color: #ffffff">Inv. / Condiciones</a></li>
                <li style="background-color: #3C8DBC; border-radius: 4px"><a href="#fechas" data-toggle="tab" style=" color: #ffffff">Fechas</a></li>
                <li style="background-color: #3C8DBC; border-radius: 4px"><a href="#anexos" data-toggle="tab" style=" color: #ffffff">Anexos</a></li>
                <li style="background-color: #3C8DBC; border-radius: 4px"><a href="#observaciones" data-toggle="tab" style=" color: #ffffff">Observaciones</a></li>
            </ul>
        </div>
        <div class="panel-body">
            <div class="tab-content">
                  <div class="tab-pane fade in active" id="campos_obligatorios">
                        <div class="row">
                              <div class="form-group col-sm-2" style="border: 1px solid #ccc">
                                    Fecha Ingreso: <br />
                                    {{ $proyecto->fechaIngreso }}
                              </div>
                              <div class="form-group col-sm-6" style="border: 1px solid #ccc">
                                    Nombre Proyecto: <br />
                                    {{ $proyecto->nombre }}
                              </div>
                              <div class="form-group col-sm-3" style="border: 1px solid #ccc">
                                    Localidad:<br />
                                    {{ $proyecto->localidad->nombre }}
                              </div>
                        </div>
                        <div class="row">
                              <div class="form-group col-sm-4" style="border: 1px solid #ccc">
                                    Línea de Crédito:<br />
                                    {{ $proyecto->lineaCredito->nombre }}
                              </div>
                              <div class="form-group col-sm-3" style="border: 1px solid #ccc">
                                    Estado:<br />
                                    {{ $proyecto->estado->nombre }}
                              </div>
                              <div class="form-group col-sm-4" style="border: 1px solid #ccc">
                                    Estado Interno:<br />
                                    {{ $proyecto->estadoInterno->nombre }}
                              </div>
                        </div>
                        <div class="row">
                              <div class="form-group col-sm-3" style="border: 1px solid #ccc">
                                    Sector:<br />
                                    {{ $proyecto->sector->nombre }}
                              </div>
                              <div class="form-group col-sm-5" style="border: 1px solid #ccc"v>
                                    Titular:<br />
                                    @if($proyecto->titular)
                                        {{ $proyecto->titular }}
                                    @endif
                              </div>
                              <div class="form-group col-sm-3" style="border: 1px solid #ccc">
                                    Monto:<br />
                                    {{ $proyecto->monto }}
                              </div>

                        </div>
                  </div>
                  <!-- ******** FIN CAMPOS OBLIGATORIOS ****** -->
                  <div class="tab-pane fade" id="datos_proyectos" style="border: 1px solid #ccc">
                      @include('proyectos._datos_show')
                  </div>

                  <div class="tab-pane fade" id="condiciones" style="border: 1px solid #ccc">
                        @include('proyectos._condiciones_show')
                  </div>

                  <div class="tab-pane fade" id="fechas" style="border: 1px solid #ccc">
                      @include('proyectos._fechas_show')
                  </div>
                  <div class="tab-pane fade" id="anexos" style="border: 1px solid #ccc">
                    @include('proyectos._anexos_show')
                  </div>
                  <div class="tab-pane fade" id="observaciones" style="border: 1px solid #ccc">
                    {{ $proyecto->observaciones }}
                  </div>
            </div>
        </div>
    </div>
</div>
<br /><br />

@include('proyectos.edit_desembolso')
@include('proyectos.edit_sujeto')
