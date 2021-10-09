
<?php
// el siguiete codigo realza la verificacion del inicio de sesion como admin
session_start(); 
  if(isset($_SESSION['admin']))
    {
      //  echo 'Bienvenido! '.$_SESSION['admin'];
       // echo '<br><a href="cerrar.php">Cerrar sesion</a>';
    }
    else{
         header('Location:index.php'); // En caso de que falle el usuario  se redirigira a la agina del index
       }
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
     <link rel="stylesheet" href="css/estilos.css">
    <title>Inicio</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <div class="container">
        <div class="row">
          <div class="col-md-4">
          <a class="navbar-brand" href="#">Sistema Web</a>
          </div>
          <div class="col-md-1 offset-md-6">
          <div class="collapse navbar-collapse d-flex" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-4 mb-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <?php  echo ''.$_SESSION['admin'];?>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Perfil</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="cerrar.php">Cerrar Sesión</a></li>
                </ul>
              </li>
            </ul>
          </div>
          </div>
        </div>
      </div>
    </nav>
      </br>
      </br>
         <H2 style="text-align: center; color:azure">Bienvenido</H2>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

  </body>
</html>