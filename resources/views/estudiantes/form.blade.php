
<br>
<form class="row g-3">
   <!--  textbox para el codigo de estudiante -->
  <div class="col-md-6">
    <label for="codigo" class="form-label">Codigo del estudiante: </label>
    <input type="text" class="form-control" name="codigo" id="codigo" placeholder="Escribe aqui tu codigo de estudiante" wire:model = "codigo">
  </div>
  <br>

  <!--  textbox para el nombre del estudante -->
  <div class="col-md-6">
    <label for="nombre" class="form-label">Nombre del estudiante:</label>
    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Escribe aqui tu nombre completo" wire:model = "nombre">
  </div>
  <br>
  
  <!--  textbox para la direccion -->
  <div class="col-8">
    <label for="direccion" class="form-label">Direccion de residencia:</label>
    <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Ejemplo: Col. *** Casa #**, Dept. **** , Pais ****" wire:model = "direccion">
  </div>
  <br>

  <!--  textbox para el numero de telefono -->
  <div class="col-6">
    <label for="telefono" class="form-label">Numero de teléfono: </label>
    <input type="number" class="form-control" name="telefono" id="telefono" placeholder="Ejemplo: +*** (**** - ****)" wire:model = "telefono">
  </div>
    <br>

    <!--  textbox para el numero de telefono -->
  <div class="col-md-6">
    <label for="email" class="form-label">Correo Electronico: </label>
    <input type="text" class="form-control" name="email" id="email" placeholder="Ejemplo: blancaNieves7enanos@gmail.com" wire:model = "email">
  </div>
  <br>
  
  <div class="col-12 ">
    <button  wire:click.prevent ="guardar() "  class="btn btn-primary">GUARDAR REGISTRO</button>
  </div>
  <div class="col-13 " >
    <button  wire:click.prevent ="cerrarModal() " class="btn btn-secondary" >CERRAR REGISTRO</button>
  </div>
  
</form>