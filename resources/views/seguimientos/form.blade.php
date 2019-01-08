<div class="row">
    <div class="form-group col-sm-12">
        <div class="panel with-nav-tabs">
            <ul class="nav nav-pills">
                <li class="active" style="background-color: #3C8DBC; border-radius: 4px"><a href="#pagina1" data-toggle="tab" style=" color: #ffffff">PAGINA 1</a></li>
                <li style="background-color: #3C8DBC; border-radius: 4px"><a href="#pagina2" data-toggle="tab" style=" color: #ffffff">PAGINA 2</a></li>
                <li style="background-color: #3C8DBC; border-radius: 4px"><a href="#pagina3" data-toggle="tab" style=" color: #ffffff">PAGINA 3</a></li>
                <li style="background-color: #3C8DBC; border-radius: 4px"><a href="#pagina4" data-toggle="tab" style=" color: #ffffff">PAGINA 4</a></li>

                <li style="background-color: #3C8DBC; border-radius: 4px"><a href="#pagina5" data-toggle="tab" style=" color: #ffffff">PAGINA 5</a></li>
                <li style="background-color: #3C8DBC; border-radius: 4px"><a href="#pagina6" data-toggle="tab" style=" color: #ffffff">PAGINA 6</a></li>
                <li style="background-color: #3C8DBC; border-radius: 4px"><a href="#pagina7" data-toggle="tab" style=" color: #ffffff">PAGINA 7</a></li>
                <li style="background-color: #3C8DBC; border-radius: 4px"><a href="#pagina8" data-toggle="tab" style=" color: #ffffff">PAGINA 8</a></li>
                <li style="background-color: #3C8DBC; border-radius: 4px"><a href="#pagina9" data-toggle="tab" style=" color: #ffffff">PAGINA 9</a></li>
                <li style="background-color: #3C8DBC; border-radius: 4px"><a href="#pagina10" data-toggle="tab" style=" color: #ffffff">PAGINA 10</a></li>
                <li style="background-color: #3C8DBC; border-radius: 4px"><a href="#anexos" data-toggle="tab" style=" color: #ffffff">Anexos</a></li>
               
            </ul>
        </div>
        <div class="panel-body">
            <div class="tab-content">
                  <div class="tab-pane fade in active" id="pagina1">
                        @include('seguimientos.pagina1')
                  </div>
                  <!-- ******** FIN CAMPOS OBLIGATORIOS ****** -->
                  <div class="tab-pane fade" id="pagina2">
                      @include('seguimientos.pagina2')
                  </div>

                  <div class="tab-pane fade" id="pagina3">
                        @include('seguimientos.pagina3')
                  </div>

                  <div class="tab-pane fade" id="pagina4">
                      @include('seguimientos.pagina4')
                  </div>
                   <div class="tab-pane fade" id="pagina5">
                      @include('seguimientos.pagina5')
                  </div>

                   <div class="tab-pane fade" id="pagina6">
                      @include('seguimientos.pagina6')
                  </div>

                   <div class="tab-pane fade" id="pagina7">
                      @include('seguimientos.pagina7')
                  </div>

                   <div class="tab-pane fade" id="pagina8">
                      @include('seguimientos.pagina8')
                  </div>

                   <div class="tab-pane fade" id="pagina9">
                      @include('seguimientos.pagina9')
                  </div>

                   <div class="tab-pane fade" id="pagina10">
                      @include('seguimientos.pagina10')
                  </div>

                  <div class="tab-pane fade" id="anexos">
                    @include('seguimientos.anexos')
                  </div>
                  
            </div>
        </div>
    </div>
</div>
<br /><br />
<div class="row">
    <div class="form-group col-sm-11">
        {!! Form::submit('Guardar', ['class' => 'btn btn-success', 'id'=>'actualizarSeguimiento']) !!}
    </div>
</div>
