<?php
    require_once('Views/templates/header.php');
    require_once("Config/database.php");
?>

<form action="Controllers/controlador.php" method="post" >
  <input type="hidden" name="Clase" value="LibrosModels">
  <input type="hidden" name="Funcion" value="get_libros">
  <input type="hidden" name="codigo" value="">
  <input type="hidden" name="titulo" value="">
  <input type="hidden" name="isbn" value="">
  <input type="hidden" name="editorial" value="">
  <button type="submit" class="btn btn-primary" name="Boton">Consultar Libros</button>
 
</form>
<br> <br>
<form action="Controllers/controlador.php" method="post" >
  <input type="hidden" name="Clase" value="UsuarioModels">
  <input type="hidden" name="Funcion" value="get_usuario">
  <input type="hidden" name="codigo" value="">
  <input type="hidden" name="nombre" value="">
  <input type="hidden" name="telefono" value="">
  <input type="hidden" name="direccion" value="">
  <button type="submit" class="btn btn-primary" name="Boton">Consultar Usuarios</button>
 
</form>
<br> <br>
<form action="Controllers/controlador.php" method="post" >
  <input type="hidden" name="Clase" value="AutorModels">
  <input type="hidden" name="Funcion" value="get_autor">
  <input type="hidden" name="codigo" value="">
  <input type="hidden" name="nombre" value="">
  <button type="submit" class="btn btn-primary" name="Boton">Consultar Autor</button>
 
</form>
<br> <br>
<form action="Controllers/controlador.php" method="post" >
  <input type="hidden" name="Clase" value="EditorialModels">
  <input type="hidden" name="Funcion" value="get_editoriales">
  <input type="hidden" name="codigo" value="">
  <input type="hidden" name="nombre" value="">
  <button type="submit" class="btn btn-primary" name="Boton">Consultar Editorial</button>
 
</form>
<?php
    require_once('Views\templates\footer.php');
?>