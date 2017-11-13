@extends('administrador.layout')



@section('content')
<!-- Inicio del body del panel -->
<div id="usuarioCRUD">
            <div class="row" >
              <div class="col-sm-10 col-sm-offset-1">
                  <!--      inicio Wizard container        -->
                  <div class="wizard-container">
                      <div class="card wizard-card" data-color="azul" id="wizard">
                          <div class="wizard-header">
                                    <h2>Usuarios</h2>
                          </div>


                  @include('administrador.usuario.partials.formulario')

                  @include('administrador.usuario.partials.tabla')


                  </div>
                </div> <!-- fin del wizard container -->
              </div>
          </div> <!-- row -->


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




        new Vue({
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
                        usuario:this.searchUsuario//new keep es e input
                    }).then(response=>{
                      this.usuarios=response.data;
                      this.errors=[];//listado de errores
                      this.searchUsuario={'username':'','nombre':'','paterno':'','materno':''}
                        toastr.success('Busqueda exitosa');//mensaje
                       alert(response.data);
                    }).catch(error=>{
                      this.errors=error.response.data

                    });

                },








        }});
</script>


@endsection
