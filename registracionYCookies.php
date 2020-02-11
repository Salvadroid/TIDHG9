<?php
  require_once 'Registro.php';
  require_once 'autoload.php';
   // si hay post:
  if (isset($_POST)) {
    //realiza la validacion de lo ingresado por el form
    $errores = Validador::validar($_POST);
    //si no hay errores:
    if(!$errores){
      //Define las variables
        $userName = trim($_POST['nombre']);
        $email = $_POST['email'];
        $passwordHash= password_hash($_POST["password"],PASSWORD_DEFAULT);
        $avatar = Avatar::armarUrlAvatar($_FILES);
        //realiza la conexion con la db
        $pdo = Conexion::conectar();
        //se pasan las variables y la conexion($pdo) como parametros al metodo agregarUsuario
        $jugador = Jugador::agregarUsuario($userName,$email, $passwordHash, $avatar, $pdo);
        return $jugador;
    } else{
      //Si lo anterior falla deberia imprimer esto
        echo 'El jugador no ha sido agregado a db';
    }
  } else {
    //en caso de no existir post, lo redirige Registro.php
    header('Location:Registro.php');
  }

  //cookies y session para registro
  session_start();
  if($jugador && isset($_POST["recordarme"])){
   crearSesionPara_($jugador);
   crearCookiePara_($jugador);
   header('location:usuario.php');
  } elseif($_POST && $jugador){
   crearSesionPara_($jugador);
   enviarABaseDeDatos($jugador);
   header("location:Usuario.php");
  }else{
   pre($errores);
  }
  
?>