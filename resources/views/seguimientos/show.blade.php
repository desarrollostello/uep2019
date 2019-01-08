@extends('adminlte::layouts.app')
@section('htmlheader_title')
    Seguimientos
@endsection

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading" style="padding-bottom: 20px;">
                    <div class="row">
                        <div class="col-md-5 pull-left"><h4>Editando Proyecto</h4></div>
                        <div class="col-md-5 pull-right">

                            <a href="{{ route('seguimiento.index') }}" class="btn btn-sm btn-primary pull-right">
                            Volver
                            </a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                            <div class="form-group col-sm-12">
                                <div class="panel with-nav-tabs">
                                    <ul class="nav nav-pills">
                                        <li class="active" style="background-color: #3C8DBC; border-radius: 4px"><a href="#show_pagina1" data-toggle="tab" style=" color: #ffffff">PAGINA 1</a></li>
                                        <li style="background-color: #3C8DBC; border-radius: 4px"><a href="#show_pagina2" data-toggle="tab" style=" color: #ffffff">PAGINA 2</a></li>
                                        <li style="background-color: #3C8DBC; border-radius: 4px"><a href="#show_pagina3" data-toggle="tab" style=" color: #ffffff">PAGINA 3</a></li>
                                        <li style="background-color: #3C8DBC; border-radius: 4px"><a href="#show_pagina4" data-toggle="tab" style=" color: #ffffff">PAGINA 4</a></li>

                                        <li style="background-color: #3C8DBC; border-radius: 4px"><a href="#show_pagina5" data-toggle="tab" style=" color: #ffffff">PAGINA 5</a></li>
                                        <li style="background-color: #3C8DBC; border-radius: 4px"><a href="#show_pagina6" data-toggle="tab" style=" color: #ffffff">PAGINA 6</a></li>
                                        <li style="background-color: #3C8DBC; border-radius: 4px"><a href="#show_pagina7" data-toggle="tab" style=" color: #ffffff">PAGINA 7</a></li>
                                        <li style="background-color: #3C8DBC; border-radius: 4px"><a href="#show_pagina8" data-toggle="tab" style=" color: #ffffff">PAGINA 8</a></li>
                                        <li style="background-color: #3C8DBC; border-radius: 4px"><a href="#show_pagina9" data-toggle="tab" style=" color: #ffffff">PAGINA 9</a></li>
                                        <li style="background-color: #3C8DBC; border-radius: 4px"><a href="#show_pagina10" data-toggle="tab" style=" color: #ffffff">PAGINA 10</a></li>
                                        <li style="background-color: #3C8DBC; border-radius: 4px"><a href="#show_anexos" data-toggle="tab" style=" color: #ffffff">Anexos</a></li>
                                       
                                    </ul>
                                </div>
                                
                                    <div class="tab-content">
                                          <div class="tab-pane fade in active" id="show_pagina1">
                                                @include('seguimientos.show_pagina1')
                                          </div>
                                          <!-- ******** FIN CAMPOS OBLIGATORIOS ****** -->
                                          <div class="tab-pane fade" id="show_pagina2">
                                              @include('seguimientos.show_pagina2')
                                          </div>

                                          <div class="tab-pane fade" id="show_pagina3">
                                                @include('seguimientos.show_pagina3')
                                          </div>

                                          <div class="tab-pane fade" id="show_pagina4">
                                              @include('seguimientos.show_pagina4')
                                          </div>
                                           <div class="tab-pane fade" id="show_pagina5">
                                              @include('seguimientos.show_pagina5')
                                          </div>

                                           <div class="tab-pane fade" id="show_pagina6">
                                              @include('seguimientos.show_pagina6')
                                          </div>

                                           <div class="tab-pane fade" id="show_pagina7">
                                              @include('seguimientos.show_pagina7')
                                          </div>

                                           <div class="tab-pane fade" id="show_pagina8">
                                              @include('seguimientos.show_pagina8')
                                          </div>

                                           <div class="tab-pane fade" id="show_pagina9">
                                              @include('seguimientos.show_pagina9')
                                          </div>

                                           <div class="tab-pane fade" id="show_pagina10">
                                              @include('seguimientos.show_pagina10')
                                          </div>

                                          <div class="tab-pane fade" id="show_anexos">
                                            @include('seguimientos.show_anexos')
                                          </div>
                                          
                                    </div>
                                
                            </div>
                        </div>
                        <br /><br />
                </div><!-- panel-body-->

            </div>
        </div>
    </div>
</div>

@endsection

