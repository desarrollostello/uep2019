<div class="row">
     <div class="form-group col-sm-3" style="border: 1px solid #ccc">
            Nro Interno:<br />
            {{ $proyecto->numeroInterno }}
     </div>
     <div class="form-group col-sm-3" style="border: 1px solid #ccc">
            Nro CFI:<br />
            {{ $proyecto->numeroCfi }}
     </div>
     <div class="form-group col-sm-3" style="border: 1px solid #ccc">
            CIUU:<br />
            {{ $proyecto->ciuu }}
     </div>
     <div class="form-group col-sm-2" style="border: 1px solid #ccc">
            M.O.:<br />
            {{ $proyecto->mo }}
     </div>
</div>
<div class="row">
     <div class="form-group col-sm-5" style="border: 1px solid #ccc">
            Domicilio Legal:<br />
            {{ $proyecto->domicilioLegal }}
     </div>
     <div class="form-group col-sm-5" style="border: 1px solid #ccc">
            Domicilio Proyecto:<br />
            {{ $proyecto->domicilioProyecto }}
     </div>
</div>
<div class="row">
     <div class="form-group col-sm-4" style="border: 1px solid #ccc">
            Teléfono:<br />
            {{ $proyecto->telefono }}
     </div>
     <div class="form-group col-sm-3" style="border: 1px solid #ccc">
            E-mail:<br />
            {{ $proyecto->email }}
     </div> 
     <div class="form-group col-sm-4" style="border: 1px solid #ccc">
            Sitio Web:<br />
            {{ $proyecto->web }}
     </div>
</div>
<div class="row">
     <div class="form-group col-sm-6" style="border: 1px solid #ccc">
            Producto/s:<br />
            {{ $proyecto->productos }}
     </div>
  
     <div class="form-group col-sm-3" style="border: 1px solid #ccc">
            En _UEP:<br />
            {{ $proyecto->enuep }}
     </div>
</div>
<div class="row">
     <div class="form-group col-sm-3" style="border: 1px solid #ccc">
           Tamaño:<br />
           {{ $proyecto->tamanio }}
     </div>
</div>

<div class="row">
     <div class="form-group col-sm-11" style="border: 1px solid #ccc">
        Descripción:<br />
        {{ $proyecto->descripcion }}
     </div>
</div>
