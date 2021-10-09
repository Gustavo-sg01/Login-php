<?php
// el siguiete codigo realza la verificacion del inicio de sesion como admin
session_start(); 
  if(isset($_SESSION['admin']))
    {
        echo 'Bienvenido! '.$_SESSION['admin'];
        echo '<br><a href="cerrar.php">Cerrar sesion</a>';
    }
    else{
         header('Location:index.php'); // En caso de que falle el usuario  se redirigira a la agina del index
       }
?>

<!--VISTA DE LA PAGINA DE HOME -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
       <h3>Bienvenido </h3>
</body>
</html>