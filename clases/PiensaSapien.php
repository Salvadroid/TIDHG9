<?php
include_once('Conexion.php');
class PiensaSapien
{

   public static function listarJugadores()
        {
            global $connection;
            $stmt = $connection->prepare("SELECT userName
                        FROM jugadores");
            $stmt->execute();

            $listadoUsuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return($listadoUsuarios);
        }
        
    public static function registrarJugadores($unArray){

      global $connection;
      $sentencia = $connection->prepare("INSERT INTO jugadores(userName,passworHash,email,imagen)
                                VALUES(:name,:pass,:email,:img)");
      $sentencia->bindParam(':name', $unArray['nombre']);
      $sentencia->bindParam(':pass', $unArray['password']);
      $sentencia->bindParam(':email', $unArray['email']);
      $sentencia->bindParam(':img', $unArray['imagen']);

      $sentencia->execute();
      echo "Datos guardados con éxito";


    }
}
    $prueba= new PiensaSapien;
    $prueba::listarJugadores();
?>
