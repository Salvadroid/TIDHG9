<?php
abstract class Validador
{
 static private function validarFormulario(){
    $errores=[]; // En este array se acumulan los posibles errores.
    if($_POST){
        if(isset($_POST["nombre"])){ // Validación del nombre ingresado en el formulario de registro
            if(empty($_POST["nombre"])){
            $errores["nombre"]= "El nombre esta vacio<br>";
            }
            elseif(strlen($_POST["nombre"]) < 3){
                $errores["nombre"]= "Nombre mas largo porfa!<br>";
            }

        }
        if(isset($_POST["email"])){ // Validación del email ingresado en el formulario de registro
            if(empty($_POST["email"])){
                $errores["email"]= "El mail esta vacio<br>";
            }
            elseif(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
            $errores["email"]= "Email no valido!<br>";
            }
        }
        if(isset($_POST["password"])){ // Validación del password ingresado en el formulario de registro
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
        if($_FILES){ //Validación de la imagen ingresada al formulario de registro.
          if($_FILES["imagen"]["error"] != 0){
            $errores["imagen"]="Hubo un error al cargar la imagen.";
          } else {
            $ext = pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION);
            if ($ext != "jpg" && $ext != "jpeg" && $ext != "png") {
              $errores["imagen"]= "La imagen debe ser jpg, jpeg o png.";
            } else {
              $nombreImagen = uniqid('img_') . '.' . $ext;
              $rutaImagen="imgUsuarios/" . $nombreImagen;
              move_uploaded_file($_FILES["imagen"]["tmp_name"], $rutaImagen );
            }
          }
        }
        return $errores; // Si existen errores en el formulario, se almacenan acá.
      }
 }

 static private function generarArrayDeUsuario(){
  //si el validador no retorna errores, con esta funcion armamos un array
  //con los datos del usuario en proceso de registro.
  $errores= self::validarFormulario();// uso self para llamar a un metodo de la propia clase(abstracta)

  if (!$errores && $_POST) {

      $arrayUsuario['nombre']= $_POST['nombre'];
      $arrayUsuario['email']= $_POST['email'];
      $arrayUsuario['password']= password_hash($_POST["password"],PASSWORD_DEFAULT);

      if (!$errores && $_FILES) { //si hay foto, la guarda en el array, sino le asigna una por defecto.
        $arrayUsuario['imagen'] = dirname(__FILE__);
      }else{
        $arrayUsuario['imagen'] = 'img\Foto_Usuario.png';
      }

      return $arrayUsuario;
  }

 }

 public static function getDatosDeUser(){ //de acá saco el array completo
   $usuario = self::generarArrayDeUsuario();
   return $usuario;
 }

}



// probando... probandoo... ejem ejem
// $test='Validador';
// $elArray = $test::getDatosDelUser();
// var_dump($elArray);

?>
