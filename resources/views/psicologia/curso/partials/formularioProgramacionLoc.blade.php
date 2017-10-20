<form method="POST" v-on:submit.prevent="busquedaElemento()">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
              <label for="descripcion">Delegacion</label>
               <select name="delegacion" class="form-control selectpicker" v-model="delegacionActual" >
                   <option v-for="sucursal in sucursales" >
                      @{{ sucursal.nombre}}
                    </option>
                </select>
        </div>
    </div>

  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
              <label for="descripcion">Imparte</label>
              <input type="text" name="imparte"   class="form-control" placeholder="Nombre de quien Imparte" style="text-transform: uppercase;" v-model="imparte">
            </div>
  </div>

   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
              <label for="descripcion">Fecha</label>
              <input type="date" name="fecha"  class="form-control" v-model="fecha">
        </div>
  </div>

  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
              <label for="descripcion">No. de Elementos</label>
              <input type="number" name="numero"  value="{{old('numero')}}" class="form-control" placeholder="Numero de elementos" style="text-transform: uppercase;" v-model="numero">
            </div>
  </div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
              <input type="submit" name="enviar" value="buscar" class="btn btn-primary">
            </div>
  </div>
</form>
