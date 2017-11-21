<form method="POST" v-on:submit.prevent="busquedaUsuario">
  <div name="formulario busqueda" class="form-horizontal">

    <div class="row">
        <div class=" col-sm-6 form-group">
            <div class=" input-group col-md-8">
                <span class="input-group-addon" id="basic-addon1">
                  <i class="material-icons md-18">person</i>
                </span>
                <input id="nombre" type="nombre" class="form-control" name="nombre" value=""  autofocus placeholder="Nombre" aria-describedby="basic-addon1" style="text-transform:uppercase;" v-model="searchUsuario.nombre" >
           </div>
        </div>
    </div>

    <div class="row">
        <div class='col-sm-3'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class=" col-sm-6 form-group">
            <div class=" input-group col-md-8">
                <span class="input-group-addon" id="basic-addon1">
                  <i class="material-icons md-18">person</i>
                </span>
                <input id="nombre" type="nombre" class="form-control" name="nombre" value=""  autofocus placeholder="Nombre" aria-describedby="basic-addon1" style="text-transform:uppercase;" v-model="searchUsuario.nombre" >
           </div>
        </div>
    </div>

    <div class="row">
        <div class=" col-sm-6 form-group">
            <div class=" input-group col-md-8">
                <span class="input-group-addon" id="basic-addon1">
                  <i class="material-icons md-18">person</i>
                </span>
                <input id="paterno" type="paterno" class="form-control" name="paterno" value=""  autofocus placeholder="Apellido paterno" aria-describedby="basic-addon1" style="text-transform:uppercase;"  v-model="searchUsuario.paterno">
           </div>
        </div>
    </div>

    <div class="row">
        <div class=" col-sm-6 form-group">
            <div class=" input-group col-md-8">
                <span class="input-group-addon" id="basic-addon1">
                  <i class="material-icons md-18">person</i>
                </span>
                <input id="materno" type="materno" class="form-control" name="materno" value=""  autofocus placeholder="Apellido materno" aria-describedby="basic-addon1" style="text-transform:uppercase;"  v-model="searchUsuario.materno" >
           </div>
        </div>
    </div>

    <div class="row col-sm-offset-1">
            <input type="submit" class="btn btn-primary btn-sm"  id="buscar" title="Buscar Elemento" value="BUSCAR">

            <input type="submit" class="btn btn-aceptar btn-sm" id="agregar" title="Aceptar" value="agregar">
            <input type="submit" class="btn btn-editar btn-sm" id="editar" title="Editar" value="editar">
            <input type="submit" class="btn btn-editar2 btn-sm " id="editar2" title="Editar2" value="editar">
            <input type="submit" class="btn btn-ver btn-sm" id="ver" title="Ver" value="ver">
            <input type="submit" class="btn btn-cancelar btn-sm" id="cancelar" title="cancelar" value="cancelar">
            <input type="submit" class="btn btn-eliminar btn-sm" id="eliminar" title="eliminar" value="eliminar" v-on:click.prevent="mostrarEliminar()">
            <input type="submit" class="btn btn-guardar btn-sm" id="guardar" title="guardar" value="guardar">
    </div>
  </div>
  <!--es la parte final del documento-->

  </form>
