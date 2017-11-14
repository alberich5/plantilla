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
          <a href="#" class="btm btn-warning btn-sm" v-on:click.prevent="">
          <i class="material-icons">3d_rotation</i></a>

           <a href="#" class="btm btn-danger btn-sm" v-on:click.prevent="">V</a>



          <a href="#" class="btm btn-warning btn-sm" v-on:click.prevent="">E</a>

          </td>
          <td >@{{usuario.id}}</td>

          <td>@{{usuario.username}}</td>
          <td>NOMBRE</td>
          <td>APELLIDO PATERNO</td>
          <td>APELLIDO PATERNO</td>


        </tr>
      </tbody>
</table>
