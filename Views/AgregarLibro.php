<?php
    require_once("templates/header2.php");
?>
<h1>Agregar Editorial</h1>
<form action="../Controllers/controlador.php" method="post" >
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Código Libro</label>
    <input type="text" class="form-control" id="codigo" name="codigo" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Titulo</label>
    <input type="text" class="form-control" id="titulo" name="titulo">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">ISBN </label>
    <input type="text" class="form-control" id="isbn" name="isbn">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Editorial</label>
    <input type="text" class="form-control" id="editorial" name="editorial">
  </div>
  <input type="hidden" name="Clase" value="LibrosModels">
  <input type="hidden" name="Funcion" value="insertar">
  <button type="submit" class="btn btn-primary" name="Boton">Guardar</button>
  <button type="reset" class="btn btn-primary">Cancelar</button>
</form>
<?php
    require_once("templates/footer.php");
?>