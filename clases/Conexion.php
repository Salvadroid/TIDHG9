<?php

    class Conexion
    {
        static function conectar(){
           $dsn= "mysql:dbName=dbusers;host=127.0.0.1;port=3306";
           $usuario= "root";
           $pass="";
           $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
          try {
            $pdo = new PDO($dsn, $usuario, $pass, $options);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            return $pdo;
          } catch (PDOException $errores) {
              echo "No se puede conectar a la base de datos. <br> ". $errores->getmessage();
             exit;
          }
        }
    
    }
?>