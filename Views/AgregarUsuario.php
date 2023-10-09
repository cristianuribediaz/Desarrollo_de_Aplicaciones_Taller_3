<?php
    require_once("templates/header2.php");
?>
<h1>Agregar Usuario</h1>
<form action="../Controllers/controlador.php" method="post" >
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Código</label>
    <input type="text" class="form-control" id="codigo" name="codigo" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nombre Completo</label>
    <input type="text" class="form-control" id="nombre" name="nombre">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Telefono </label>
    <input type="text" class="form-control" id="telefono" name="telefono">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Direccion</label>
    <input type="text" class="form-control" id="direccion" name="direccion">
  </div>
  <input type="hidden" name="Clase" value="UsuarioModels">
  <input type="hidden" name="Funcion" value="insertar">
  <button type="submit" class="btn btn-primary" name="Boton">Guardar</button>
  <button type="reset" class="btn btn-primary">Cancelar</button>
</form>
<?php
    require_once("templates/footer.php");
?>