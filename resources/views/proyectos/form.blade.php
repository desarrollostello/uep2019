<div class="row">
    <div class="form-group col-sm-12">
        <div class="panel with-nav-tabs">
            <ul class="nav nav-pills">
                <li class="active" style="background-color: #3C8DBC; border-radius: 4px"><a href="#campos_obligatorios" data-toggle="tab" style=" color: #ffffff">Campos Obligatorios</a></li>
                <li style="background-color: #3C8DBC; border-radius: 4px"><a href="#datos_proyectos" data-toggle="tab" style=" color: #ffffff">Datos del Proyecto</a></li>
                <li style="background-color: #3C8DBC; border-radius: 4px"><a href="#condiciones" data-toggle="tab" style=" color: #ffffff">Inv. / Condiciones</a></li>
                <li style="background-color: #3C8DBC; border-radius: 4px"><a href="#fechas" data-toggle="tab" style=" color: #ffffff">Fechas</a></li>
                @if ($action == 'edit')<li style="background-color: #3C8DBC; border-radius: 4px"><a href="#checklist" data-toggle="tab" style=" color: #ffffff">Checklist</a></li> @endif
                <li style="background-color: #3C8DBC; border-radius: 4px"><a href="#anexos" data-toggle="tab" style=" color: #ffffff">Anexos</a></li>
                <li style="background-color: #3C8DBC; border-radius: 4px"><a href="#observaciones" data-toggle="tab" style=" color: #ffffff">Observaciones</a></li>
            </ul>
        </div>
        <div class="panel-body">
            <div class="tab-content">
                  <div class="tab-pane fade in active" id="campos_obligatorios">
                        @include('proyectos._campos_obligatorios')
                  </div>
                  <!-- ******** FIN CAMPOS OBLIGATORIOS ****** -->
                  <div class="tab-pane fade" id="datos_proyectos">
                      @include('proyectos._datos')
                  </div>

                  <div class="tab-pane fade" id="condiciones">
                        @include('proyectos._condiciones')
                  </div>

                  <div class="tab-pane fade" id="fechas">
                      @include('proyectos._fechas')
                  </div>
                  @if ($action == 'edit')
                  <div class="tab-pane fade" id="checklist">
                    <!--@include('proyectos._checklists')-->
                    @include('checklists.form')
                  </div>
                  @endif
                  <div class="tab-pane fade" id="anexos">
                    @include('proyectos._anexos')
                  </div>

                  <div class="tab-pane fade" id="observaciones">
                    <div class="row">
                        <div class="form-group col-sm-12">
                              {!! Form::label('observaciones', 'Observaciones') !!}
                              {!! Form::textarea('observaciones', null, ['class' => 'form-control', 'cols' => 10, 'rows' =>3, 'rows' => 3]) !!}
                          </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
<br /><br />
<div class="row">
    <div class="form-group col-sm-11">
        {!! Form::submit('Guardar', ['class' => 'btn btn-success', 'id'=>'actualizarProyecto']) !!}

    </div>
</div>
@include('proyectos.edit_desembolso')
@include('proyectos.edit_sujeto')
