<?php

session_start();

include_once 'conexion.php';

$usuario_login = $_POST['nombre_usuario'];
$contrasena_login = $_POST['clave'];

echo '$contrasena_login';

echo '<pre>';
var_dump($usuario_login);
var_dump($contrasena_login);
echo '</pre>';

//VERIFICAR SI USUARIO EXISTE
$sql = 'SELECT nombre,contrasena FROM usuario WHERE nombre = ?';
$sentencia = $pdo->prepare($sql);
$sentencia->execute(array($usuario_login));
$resultado = $sentencia->fetch();

echo '<pre>';
var_dump($resultado);
echo '</pre>';

if(!$resultado){
    //matar la operación
    echo 'No exite usuario';
    die();
}

echo '<pre>';
var_dump($resultado['contrasena']);
echo '</pre>';

if( password_verify( $contrasena_login , $resultado['contrasena']) ){
    //las contraseñas son iguales
    $_SESSION['admin'] = $usuario_login;
    header('Location: home.php');

}else{
    echo 'No son iguales las contraseñas!';

    die();
}

