<?php
    require_once("templates/header2.php");
?>
<div class="table-responsive">
  <br>    
  <h2>Tabla de Asuarios</h2>
  <br>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregarLibro">Agregar Usuario</button>
    <br><br>
    <table border="1" width="80%" class="table">
        <thead>
            <tr class="table-primary">
                <th>Código</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Direccion</th>
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
                    <th><button type="button" value="<?php echo $row[0]; ?>" name="EditarUsuario" data-bs-toggle="modal" data-bs-target="#exampleModal" class="modalEditar" >Editar</button></th>
                    <th><a href="../Controllers/controlador.php?C=UsuarioModels&F=delete_usuario&Parametro=1&codigo=<?php echo $row[0]; ?>&nombre=<?php echo $row[1]; ?>&telefono=<?php echo $row[2];?>&direccion=<?php echo $row[3];?>">Borrar</a></th>
                </tr>
            <?php endwhile;?>
        </tbody>
    </table>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
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
            <input type="text" class="form-control" id="nombre" name="nombre"></textarea>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Telefono </label>
            <input type="text" class="form-control" id="telefono" name="telefono">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Direccion</label>
            <input type="text" class="form-control" id="direccion" name="direccion">
          </div>
          <div class="mb-3">
            <input type="hidden" name="Clase" value="UsuarioModels">
            <input type="hidden" name="Funcion" value="actualizar">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary" name="Boton">Actualizar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="agregarLibro" tabindex="-1" aria-labelledby="agregarusuario" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="agregarLibro">Agregar Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="../Controllers/controlador.php" method="post">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Código</label>
          <input type="text" class="form-control" id="codigo" name="codigo" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Nombre</label>
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
          <div class="mb-3">
            <input type="hidden" name="Clase" value="UsuarioModels">
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