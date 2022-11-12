<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Bienvenido</title>
</head>
<body>
<nav class="navbar navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Oracle LocalDB</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Sistema web de Oracle 21c</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            
           <li class="nav-item dropdown">
            <a class="nav-link dropdown" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Tablespace
            </a>
            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
              <li><a class="dropdown-item" href="http://localhost/vscode21c/dbalocal/public/create-table">Crear</a></li>
              <li><a class="dropdown-item" href="http://localhost/vscode21c/dbalocal/public/show-tablespace">Mostrar</a></li>
              <li><a class="dropdown-item" href="http://localhost/vscode21c/dbalocal/public/update-tablespace">Editar</a></li>
              <li><a class="dropdown-item" href="http://localhost/vscode21c/dbalocal/public/delete-tablespace">Eliminar</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class=" nav-link disabled" href="#" value="">Temporales</a></li>
            
              <li><a class="dropdown-item" href="http://localhost/vscode21c/dbalocal/public/create-temporary">Crear</a></li>
              <li><a class="dropdown-item disabled" href="#" >Mostrar</a></li>
              <li><a class="dropdown-item" href="http://localhost/vscode21c/dbalocal/public/update-temporal">Editar</a></li>
              <li><a class="dropdown-item disabled" href="#">Eliminar</a></li>
            </ul>
            </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Consultas
            </a>
            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
              <li><a class="dropdown-item" href="#">Ejecución</a></li>
              <li><a class="dropdown-item" href="#">Estadística</a></li>
            </ul>
            </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Schemas
            </a>
            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
            </ul>
            </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Respaldos
            </a>
            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
              <li><a class="dropdown-item" href="#">Sistema oracle</a></li>
              <li><a class="dropdown-item" href="#">Esquema</a></li>
              <li><a class="dropdown-item" href="#">Base de datos Local</a></li>
            </ul>
            </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Indices
            </a>
            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
     <!---   <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Buscar</button>--->
        </form>
      </div>
    </div>
  </div>
</nav>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>