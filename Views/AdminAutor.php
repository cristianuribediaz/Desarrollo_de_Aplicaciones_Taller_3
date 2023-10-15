<?php
    require_once("templates/header2.php");
?>
<div class="table-responsive">
<br>  <br>  
    <div class="row">
      <h6>Reporte de los autores ingresados al sistema en fechas determinadas</h6>
        <div class="col-md-12 text-center">
          <form action="../Views/DescargarReporte_x_autor.php" method="post" accept-charset="utf-8">
            <div class="row">
              <div class="col">
                <input type="date" name="fecha_ingreso" class="form-control"  placeholder="Fecha de Inicio" required>
              </div>
              <div class="col">
                <input type="date" name="fechaFin" class="form-control" placeholder="Fecha Final" required>
              </div>
              <div class="col">
                  <button type="submit" class="btn btn-danger mb-2">Descargar Reporte</button>
              </div>
            </div>
          </form>
        </div>

        <div class="col-md-12 text-center mt-5">     
          <span id="loaderFiltro">  </span>
        </div>
      </div>    
  <h2>Tabla de Autores</h2>
  <br>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregarLibro">Agregar Autor</button>
    <br><br>
    <table border="1" width="80%" class="table">
        <thead>
            <tr class="table-primary">
                <th>Código</th>
                <th>Nombre Autor</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $db->fetch()):?>
                <tr>
                    <th><?php echo $row[0]; ?></th>
                    <th><?php echo $row[1]; ?></th>
                    <th><button type="button" value="<?php echo $row[0]; ?>" name="EditarLibro" data-bs-toggle="modal" data-bs-target="#exampleModal" class="modalEditar" >Editar</button></th>
                    <th><a href="../Controllers/controlador.php?C=AutorModels&F=delete_autor&Parametro=1&codigo=<?php echo $row[0]; ?>&nombre=<?php echo $row[1];?>">Borrar</a></th>
                </tr>
            <?php endwhile;?>
        </tbody>
    </table>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Autor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="../Controllers/controlador.php" method="post">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Codigo:</label>
            <input type="text" class="form-control" id="codigo" name="codigo"> 
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Nombre del autor</label>
            <input type="text" class="form-control" id="nombre" name="nombre"></textarea>
          </div>
          <div class="mb-3">
            <input type="hidden" name="Clase" value="AutorModels">
            <input type="hidden" name="Funcion" value="actualizar">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary" name="Boton">Actualizar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="agregarLibro" tabindex="-1" aria-labelledby="agregarautor" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="agregarLibro">Agregar Autor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="../Controllers/controlador.php" method="post">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Código</label>
          <input type="text" class="form-control" id="codigo" name="codigo" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Nombre Autor</label>
          <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="mb-3">
            <input type="hidden" name="Clase" value="AutorModels">
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