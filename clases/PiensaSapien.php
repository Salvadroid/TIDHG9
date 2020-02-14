<?php
// include('./Conexion.php');
// include('../funciones.php');
class PiensaSapien extends Validador
{

   public static function listarJugadores(){
            global $connection;
            $stmt = $connection->prepare("SELECT email, passwordHash,userName,imagen
                        FROM jugadores");
            $stmt->execute();

            $listadoUsuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return($listadoUsuarios);
   }

   public static function buscarUsuarioEnBBDD(){
     $usuarios = self::listarJugadores();//lista completa de usuarios en bbdd
     $usuarioBuscado=self::validarFormularioDeLogin($usuarios);//si existe, datos del usuario ingresado en login
     // if ($_POST && $usuarioBuscado) {
     //   crearSesionPara_($usuarioBuscado);
       //crearCookiePara_($usuarioBuscado);
     // } elseif (isset($_COOKIE['email'])){
     //   crearSesionPara_($_COOKIE);
     // } elseif ($_POST && $usuarioBuscado && !isset($_POST['recordar'])) {
     //   crearSesionPara_($usuarioBuscado);
    // }
     return $usuarioBuscado;
   }

   public static function registrarJugador($unArray){

     if($_POST){
      global $connection;
      $sentencia = $connection->prepare("INSERT INTO jugadores(userName,passwordHash,email,imagen)
                                VALUES(:userName,:passwordHash,:email,:imagen)");
      $sentencia->bindParam(':userName', $unArray['nombre']);
      $sentencia->bindParam(':passwordHash', $unArray['password']);
      $sentencia->bindParam(':email', $unArray['email']);
      $sentencia->bindParam(':imagen', $unArray['imagen']);

      $sentencia->execute();
     }

     }

   private static function crearSesionPara_($unArray){

       $_SESSION['nombre'] = $unArray['userName'];
       $_SESSION['imagen'] = $unArray['imagen'];
       $_SESSION['email'] = $unArray['email'];
       $_SESSION['password'] = $unArray['passwordHash'];
       header('Location:Usuario.php');

     }

   private static function crearCookiePara_($unArray){
       setcookie('email',$unArray['email'], time()+60*60*24*7);
       setcookie('password',$unArray['passwordHash'], time()+60*60*24*7);
       setcookie('nombre',$unArray['userName'], time()+60*60*24*7);
       setcookie('imagen',$unArray['imagen'], time()+60*60*24*7);


     }

   public static function redireccionarUsuario($unArray){
     if ($unArray){

       self::crearSesionPara_($unArray);

     }else if($unArray&&(isset($_POST['recordar']) && $_POST['recordar'] == '0')){
         self::crearSesionPara_($unArray);
         self::crearCookiePara_($unArray);
       }
     }


   public static function guardarPreguntaEnBBDD($unArray){
       if($_POST){
        global $connection;
        $sentencia = $connection->prepare("INSERT INTO preguntas(pregunta,respuestaCorrecta,respuestaErronea1,respuestaErronea2,respuestaErronea3)
                                  VALUES(:Pregunta,:respuestaCorrecta,:respuestaErronea1,:respuestaErronea2,:respuestaErronea3)");
        $sentencia->bindParam(':Pregunta', $unArray['Pregunta']);
        $sentencia->bindParam(':respuestaCorrecta', $unArray['respuestaCorrecta']);
        $sentencia->bindParam(':respuestaErronea1', $unArray['respuestaErronea1']);
        $sentencia->bindParam(':respuestaErronea2', $unArray['respuestaErronea2']);
        $sentencia->bindParam(':respuestaErronea3', $unArray['respuestaErronea3']);


        $sentencia->execute();
        echo "Pregunta guardada con éxito";
       }

     }





}

    // probando.. probandoo..
    // $usuario['nombre']='fulano';
    // $usuario['email']='prueba@prueba.com';
    // $usuario['password']='123123123';
    // $usuario['imagen']='una url';
    //PiensaSapien::buscarUsuarioEnBBDD();

?>
