<?php 
class Validador
{
 static public function validar(){
    $username="";
    $email="";
    $errores=[];
    if($_POST){
        if(isset($_POST["nombre"])){
            if(empty($_POST["nombre"])){
            $errores["nombre"]= "El nombre esta vacio<br>";
            }
            elseif(strlen($_POST["nombre"]) < 3){
                $errores["nombre"]= "Nombre mas largo porfa!<br>";
            }
            else{
            $username=$_POST["nombre"];
            }
        }
        if(isset($_POST["email"])){
            if(empty($_POST["email"])){
                $errores["email"]= "El mail esta vacio<br>";
            }
            elseif(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
            $errores["email"]= "Email no valido!<br>";
            }
            else{
            $email=$_POST["email"];
            }
        }
        if(isset($_POST["password"])){
          if(empty($_POST["password"]) || empty($_POST["repetirpass"])){
              $errores["contra"]= "La contraseña esta vacia<br>";
          }
          elseif(strlen($_POST["password"])<6){
          $errores["contra"]= "La contraseña es demasiado corta!<br>";
          }
          elseif($_POST["password"]!=$_POST["repetirpass"]){
            $errores["contra"]="La contraseña no es igual a la repeticion!";
          }
        }
        return $errores;
 }
 } 
 

}
?>