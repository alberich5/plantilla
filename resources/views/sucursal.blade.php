
<form method="POST" v-on:submit.prevent="setSucursal(sucursal.id)">

<div class="modal fade" id="sucursal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
	<div class="modal-dialog  modal-sm">
		<div class="modal-content">
			<div class="modal-header" id="cabeceraModal">
				<button type="button" class="close" data-dismiss="modal">
					<span>&times;</span>
				</button>
				<center><h4>Seleccionar Sucursal</h4></center>
			</div>
			<div class="modal-body">
		<table>
			<thead>
				<tr>
					<th colspan="1"></th>
					<th colspan="1">
					</th>
				</tr>
			</thead>
			<tbody>
				<td>
					<select required v-model="sucursal" class="form-control" id="exampleFormControlSelect1">
  					<option v-for="sucursal in sucursales" v-bind:value="sucursal" class="selecionar" >
    					@{{ sucursal.nombre }}
  					</option>
					</select>
				</td>
					<td width="10px">
						<input type="submit" class="btn btn-primary btn-lg" value="Seleccionar" id="botonSucursal">
					</td>
			</tbody>
		</table>
			</div>
		</div>
	</div>
</div>
</form>
