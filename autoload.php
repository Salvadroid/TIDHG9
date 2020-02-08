<?php
require_once ('Registro.php');
  require_once('funciones.php');
  require_once('clases/Validador.php');
  require_once ('clases/Jugador.php');
  require_once('clases/Avatar.php');
  require_once('clases/PiensaSapien.php');

  require_once ('clases/Conexion.php');
/*
$host = "localhost";
$bd = "register";
$usuario = "root";
$password = "root";
$puerto = "3306";
$charset = "utf8mb4";


$pdo =Conexion::conectar($host,$bd,$usuario,$password,$puerto,$charset);*/

$errores = Validador::validar($_POST);
if(!$errores){
    $jugador = Jugador::agregarUsuario($_POST, $_FILES);
    return true;
} else{
    echo 'El jugador no ha sido agregado a db';
}
?>