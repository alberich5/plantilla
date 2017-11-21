@extends('administrador.layout')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/css/bootstrap-datetimepicker.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

@endsection


@section('content')
<!-- Inicio del body del panel -->
<div id="usuarioCRUD" class="container-fluid" style="background-color:#f5f9fd;box-shadow: -4px -2px 44px 0px rgba(171,94,171,0.7);">
        <center><h2>Usuarios</h2></center>
        <div class="formulario">
            @include('administrador.usuario.partials.formulario')
        </div>

    <div class="tabla" >
      @include('administrador.usuario.partials.tabla')
    </div>

 <!-- pruebas -->
         <div class="row">
            <div class="col-xs-12">
              <pre>@{{$data}}</pre>
            </div>
          </div>
<!-- fin de pruebas -->

</div>

<!-- Fin del body del panel -->

@endsection
@section('js')
<!-- INCLUYE LAS LIBRERIAS EXTERNAS DE JAVASCRIPT-->
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/js/bootstrap-datetimepicker.min.js"></script>

<script type="text/javascript">

$(document).ready(function(){
    $("#buscar").tooltip({
    });
    $("#agregar").tooltip({
    });
    $("#editar").tooltip({
    });
    $("#editar2").tooltip({
    });
    $("#ver").tooltip({
    });
    $("#cancelar").tooltip({
    });
    $("#eliminar").tooltip({
    });
    $("#guardar").tooltip({
    });
});


Vue.component('icono',{
  template:"<i class='material-icons'><slot></slot></i>"
});


    var vm = new Vue({
            //id asignado al div en el que funcionara vue
            el: '#usuarioCRUD',
            //funcion al crear el objeto
            created:function(){
                this.getUsuarios();
                //llamada al metodo
            },
            data:{
                errors:[],
                usuarios:[],
                searchUsuario:{'username':'','nombre':'','paterno':'','materno':''},
                    },
            methods:{
                    getUsuarios:function () {
                    var url='/administrador/usuarios';
                    //variable que hace referencia a la URI de la ruta
                    axios.get(url).then(response=>{
                    this.usuarios=response.data;
                    });
                },
                    busquedaUsuario:function()
                    {
                    var url='/administrador/usuario/search';
                    axios.post(url,{
                        usuario:this.searchUsuario
                    }).then(response=>{
                      this.usuarios=response.data;
                      this.errors=[];//listado de errores
                      this.searchUsuario={'username':'','nombre':'','paterno':'','materno':''}
                        toastr.success('Busqueda exitosa');//mensaje de alerta de funcion exitosa
                        toastr.info(response.data);//mensaje de alerta de funcion exitosa
                    }).catch(error=>{
                      this.errors=error.response.data
                    });
                },
                mostrarEliminar:function(){
                    toastr.eliminar('Eliminado');
                },
                mostrarCancelar:function(){
                    toastr.success('Eliminado');
                },
        }});
</script>
@endsection
