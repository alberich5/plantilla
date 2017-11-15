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
          <a href="#"  v-on:click.prevent="">
          <i class="material-icons">book</i></a>
           <a href="#"  v-on:click.prevent=""><i class="material-icons">remove_red_eye</i></a></a>
          <a href="#"  v-on:click.prevent=""><i class="material-icons">explicit</i></a>

          </td>
          <td >@{{usuario.id}}</td>

          <td>@{{usuario.username}}</td>
          <td>NOMBRE</td>
          <td>APELLIDO PATERNO</td>
          <td>APELLIDO PATERNO</td>


        </tr>
      </tbody>
</table>
