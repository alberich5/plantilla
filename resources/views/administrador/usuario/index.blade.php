@extends('administrador.layout')

@section('css')
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

@endsection


@section('content')
<!-- Inicio del body del panel -->
<div id="usuarioCRUD" class="container-fluid" style="background-color:;">
        <center><h2>Usuarios</h2></center>
    @include('administrador.usuario.partials.formulario')

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
<script src="{{ asset('js/jquery-ui.js') }}"></script>
<script src="{{ asset('js/wizard.js') }}"></script>
<script type="text/javascript">

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
                       alert(response.data);
                    }).catch(error=>{
                      this.errors=error.response.data

                    });

                },
        }});
</script>
@endsection
