<?php
class PiensaSapien extends Validador
{

   public static function listarJugadores(){
            global $connection;
            $stmt = $connection->prepare("SELECT userName
                        FROM jugadores");
            $stmt->execute();

            $listadoUsuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return($listadoUsuarios);
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
      echo "Datos guardados con éxito";
     }

     }
}

    // probando.. probandoo..
    // $usuario['nombre']='fulano';
    // $usuario['email']='prueba@prueba.com';
    // $usuario['password']='123123123';
    // $usuario['imagen']='una url';
    // PiensaSapien::registrarJugador($usuario);

?>
