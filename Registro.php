<?php
require 'funciones.php';
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
    if(!$errores){ // si no hay errores, guardamos los datos del usuario en el archivo .json

        $arrayUsuario=datosDeNuevoUsuario($_POST);
        enviarABaseDeDatos($arrayUsuario);
        header("location:Usuario.php");
    }
    else{
      var_dump($errores);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">
    <title>Registro</title>
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="Usuario.html" style="text-decoration:none;">Usuacontra"rio</a></li>
        <li><a href="Contacto.html" style="text-decoration:none;">Contacto</a></li>
        <li><a href="F.A.Q.html" style="text-decoration:none;">F.A.Q.</a></li>
        <li><a href="Login.html" style="text-decoration:none;">Login</a></li>
        <li><a href="juego.html" style="text-decoration:none;">Juego</a></li>
        <li><a href="Home.html" style="text-decoration:none;">Home</a></li>
      </ul>
    </nav>
      <h1 class="seccion">Registrarse</h1>
    </header>
    <section>
      <main class="seccion">
       <div>

        <article class="">
          <div class="subzona">

            <form class="" action="Registro.php" method="POST">

              <div class="">
                  <h2>Registrarse con nombre de usuario</h2>
              </div>
              <div class="">
                  <label class="" for="nombre">Nombre <br></label>
                  <input class="" type="text" name="nombre" value="<?=$username ?>" required>
              </div>
              <div class="">
                  <label class="" for="email">Email <br></label>
                  <input class="" type="email" name="email" value="<?=$email ?>" required>
              </div>
              <div class="">
                  <label class="" for="password">Contraseña<br></label>
                  <input class="" type="password" name="password" value="" required>
              </div>
              <div class="">
                  <label class="" for="repetirpass">Repetir contraseña<br></label>
                  <input class="" type="password" name="repetirpass" value="" required >
              </div>
              <div class="">
                  <button id="botEnviar" type="submit" name="button">Enviar</button>
              </div>
              <div class="">
                  <h2 class="">Registrarse con Facebook</h2>

              </div>
              <div class="">
                  <button id="botonFacebook" type="submit" name="button">Registrarse con Facebook</button>
              </div>

           </form>
         </div>
        </article>
        </div>
      </main>
    </section>
</body>
</html>
