<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biblioteca</title>
    <link rel="stylesheet" href="./Assets/css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
  <div class="container">
        <!-- Area de Contenido -->
        <div id="titulo">
            <h1>Sistema de Bibliotecas</h1>
        </div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../Views/AgregarLibro.php">Ingresar Libro</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../Views/AgregarAutor.php">Ingresar Autor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../Views/AgregarEditorial.php">Ingresar Editorial</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../Views/AgregarUsuario.php">Ingresar Usuario</a>
            </li>
            
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
        <!-- Contenido -->