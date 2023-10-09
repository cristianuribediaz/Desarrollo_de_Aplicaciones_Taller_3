<?php
    require_once("templates/header2.php");
?>
<div class="table-responsive">
  <br>    
  <h2>Tabla de Libros</h2>
  <br>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregarLibro">Agregar Libro</button>
    <br><br>
    <table border="1" width="80%" class="table">
        <thead>
            <tr class="table-primary">
                <th>Código Libro</th>
                <th>Titulo</th>
                <th>ISBN</th>
                <th>Editorial</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $db->fetch()):?>
                <tr>
                    <th><?php echo $row[0]; ?></th>
                    <th><?php echo $row[1]; ?></th>
                    <th><?php echo $row[2]; ?></th>
                    <th><?php echo $row[3]; ?></th>
                    <th><button type="button" value="<?php echo $row[0]; ?>" name="EditarLibro" data-bs-toggle="modal" data-bs-target="#exampleModal" class="modalEditar" >Editar</button></th>
                    <th><a href="../Controllers/controlador.php?C=LibrosModels&F=delete_libros&Parametro=1&codigo=<?php echo $row[0]; ?>&titulo=<?php echo $row[1]; ?>&isbn=<?php echo $row[2];?>&editorial=<?php echo $row[3];?>">Borrar</a></th>
                </tr>
            <?php endwhile;?>
        </tbody>
    </table>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Libro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="../Controllers/controlador.php" method="post">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Codigo:</label>
            <input type="text" class="form-control" id="codigo" name="codigo"> 
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Nombre:</label>
            <input type="text" class="form-control" id="titulo" name="titulo"></textarea>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">ISBN </label>
            <input type="text" class="form-control" id="isbn" name="isbn">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Editorial</label>
            <input type="text" class="form-control" id="editorial" name="editorial">
          </div>
          <div class="mb-3">
            <input type="hidden" name="Clase" value="LibrosModels">
            <input type="hidden" name="Funcion" value="actualizar">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary" name="Boton">Actualizar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="agregarLibro" tabindex="-1" aria-labelledby="agregarLibro" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="agregarLibro">Agregar Libro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="../Controllers/controlador.php" method="post">
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
          <div class="mb-3">
            <input type="hidden" name="Clase" value="LibrosModels">
            <input type="hidden" name="Funcion" value="insertar">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary" name="Boton">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php
    require_once("templates/footer.php");
?>