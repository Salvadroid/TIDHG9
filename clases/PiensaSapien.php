<?php 
class PiensaSapien 
{
   protected $quizzes;
   protected $jugadores;
   protected $ranking;
   protected $categorias;

   public function listarJugadores()
        {
            $pdo = Conexion::conectar();
            $sql = "SELECT userName, imagen, puntaje 
                        FROM usuarios";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();

            $listadoUsuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $listadoUsuarios;
        }
       
}
?>