<?php
  include_once 'conexion.php';

//echo password_hash("Suastegui01", PASSWORD_DEFAULT)."\n";

// CAPTURA DE DATOS MEDIANTE METODO POST
$usuario_nuevo = $_POST['usuario_nuevo'];
$contrasena = $_POST['contrasena'];
$contrasena2 = $_POST['contrasena2'];

var_dump($usuario_nuevo);
var_dump($contrasena);
var_dump($contrasena2);

// VER SI EL USUARIO
$sql = 'SELECT * FROM usuario WHERE nombre = ?';
$sentencia = $pdo->prepare($sql);
$sentencia->execute(array($usuario_nuevo));
$resultado=$sentencia->fetch(); 

var_dump($resultado);



if($resultado)
{
    echo '</br>El nombre de usuario ya existe en la BD';
    die();
}

// HASH DE CONTRASEÑA
$contrasena = password_hash($contrasena, PASSWORD_DEFAULT);
echo '<pre>';
var_dump($usuario_nuevo);
var_dump($contrasena);
var_dump($contrasena2);
echo '</pre>';

if (password_verify($contrasena2, $contrasena)) 
    {
        echo '¡La contraseña es válida!';
      
       
            $sql_agregar = 'INSERT INTO usuario (nombre,contrasena)VALUES (?,?)';
            $sentencia_agregar = $pdo->prepare($sql_agregar);
            if($sentencia_agregar->execute(array($usuario_nuevo,$contrasena)) )
            {
                echo 'Agregado<br>';
            }
            else{
                echo 'Error !!<br>';
            }
          
            $sentencia_agregar = null; //Inicializa la sentencia de usuario
            $pdo = null; // Cierra conexion

            header('location:index.php'); // Indica que una vez ejecute la consulta se dedirija al index.php

    } else {
              echo 'La contraseña no es válida.';
           }