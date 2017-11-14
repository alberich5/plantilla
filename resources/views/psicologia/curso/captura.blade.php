@extends('Psicologia.plantillaPsicologia')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
@endsection
@section('psicologia')

<div id="sucursal">

  @include('Psicologia.curso.partials.formularioProgramacionLoc')

  @include('Psicologia.curso.partials.tablaElementos')




   <!-- pruebas -->
         <div class="row">
            <div class="col-xs-12">
              <pre>@{{$data}}</pre>
            </div>
          </div>
<!-- fin de pruebas -->
</div>


</div>

@endsection
@section('js')
<script>
	new Vue({
	el: '#sucursal',
	created: function() {
		this.mostrarSucursales();
	},
	data: {
		sucursales: [],
    elementosEncontrados: [],
		delegacionActual:'',
    imparte:'',
    fecha:'',
    numero:''
	},
	methods: {
		mostrarSucursales: function() {
			var urlSucursal = 'sucursal';

			axios.get(urlSucursal).then(response => {
				this.sucursales = response.data
			});
		},
    mostrarModal: function() {
     alert('dentro del metodo');
      $('#mostrar').modal('show');
    },
    busquedaElemento: function() {
      //var urlBuscarElemento = 'buscarElemento?delegacion=Pinotepa%20Nacional';
      var urlBuscarElemento = 'buscarElemento?delegacion=' + this.delegacionActual;
			axios.get(urlBuscarElemento).then(response => {
				this.elementosEncontrados = response.data
			});
		},
	}
});
</script>
@endsection
