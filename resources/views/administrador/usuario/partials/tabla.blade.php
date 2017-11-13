<!--      tabla usuarios      -->
<table class="table table-hover table-striped">
      <thead>
        <tr>
          <th >OPCIONES</th>
          <th>ID</th>
          <th>USUARIO</th>
          <th>NOMBRE</th>
          <th>APELLIDO PATERNO</th>
          <th>APELLIDO MATERNO</th>

          <th>ADTVO.</th>
          <th>DELEGACION</th>
        </tr>
      </thead>


      <tbody>
        <tr v-for="usuario in usuarios">
          <td>
          <a href="#" class="btm btn-warning btn-sm" v-on:click.prevent="editKeep(keep)">H</a>
           <a href="#" class="btm btn-danger btn-sm" v-on:click.prevent="deleteKeep(keep)">V</a>



          <a href="#" class="btm btn-warning btn-sm" v-on:click.prevent="deleteKeep(keep)">E</a>

          </td>
          <td >@{{usuario.id}}</td>

          <td>@{{usuario.username}}</td>
          <td>NOMBRE</td>
          <td>APELLIDO PATERNO</td>
          <td>APELLIDO PATERNO</td>


        </tr>
      </tbody>
</table>
