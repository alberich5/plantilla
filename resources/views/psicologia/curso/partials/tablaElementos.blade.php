<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Status</th>
      <th>Nombre</th>
      <th>apellido paterno</th>
      <th>apellido materno</th>
      <th>Delegacion</th>
      <th>Rfc</th>
      <th>Curp</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="elemento in elementosEncontrados">
      <td width="10px">@{{ elemento.id }}</td>
      <td>@{{ elemento.status }}</td>
      <td>@{{ elemento.nombre }}</td>
      <td>@{{ elemento.apellido_paterno }}</td>
      <td>@{{ elemento.apellido_materno }}</td>
      <td>@{{ elemento.delegacion }}</td>
      <td>@{{ elemento.rfc }}</td>
      <td>@{{ elemento.curp }}</td>
    </tr>
  </tbody>
</table>
