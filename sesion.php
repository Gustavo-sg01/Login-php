<?php
session_start(); //Etiqueta de inicio de sesion  

$login = $_POST['nombre_usuario'];
$contrasena_login = $_POST['contrasena'];

$_SESSION['admin'] = $login; // Constante de inisio de sesion

//Si la variable exsiste o no es nula entrara en la 
//condicion declarada
if(isset($_SESSION['admin'])) //atraves comprobamos si realmente existe 
   {
      
      header('Location:home.php');
   }
//echo '<br>';
//var_dump($_SESSION);
