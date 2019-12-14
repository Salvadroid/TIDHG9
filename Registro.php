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
    if($_FILES){
      if($_FILES["imagen"]["error"] != 0){
        $errores["imagen"]="Hubo un error al cargar la imagen.";
      } else {
        $ext = pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION);
        if ($ext != "jpg" && $ext != "jpeg" && $ext != "png") {
          $errores["imagen"]= "La imagen debe ser jpg, jpeg o png.";
        } else {
          $nombreImagen = uniqid('img_') . '.' . $ext;
          $rutaImagen=dirname(__FILE__) . "/imgUsuarios/" . $nombreImagen;
          move_uploaded_file($_FILES["imagen"]["tmp_name"], $rutaImagen );
          
        }
      }
    }
    if(!$errores){ // si no hay errores, guardamos los datos del usuario en el archivo .json
      $arrayUsuario=[
        "nombre" => trim($_POST["nombre"]),
        "email" => $_POST["email"],
        "password" => password_hash($_POST["password"],PASSWORD_DEFAULT),
        "imagen" => $rutaImagen
      ];
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

          <form class="" action="Registro.php" method="POST"  enctype="multipart/form-data">

<div class="">
    <h2>Registrarse con nombre de usuario</h2>
</div>
<div class="">
    <label class="" for="nombre">Nombre <br></label>
    <input type='text' name="nombre" value="<?= isset($_POST["nombre"]) ? $_POST["nombre"] : '' ?>"> <br>
      <?php if(isset($errores["nombre"])): ?> 
      <span  style= "color:red; font-size:12px;"><?= $errores["nombre"]?></span>
      <?php endif; ?>
</div>
<div class="">
    <label class="" for="email">Email <br></label>
    <input  type='text' name='email' value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>"><br/>
      <?php if(isset($errores['email'])): ?>
      <span style= "color:red; font-size:12px;"  ><?= $errores['email']?></span>
      <?php endif; ?>
</div>
<div class="">
    <label class="" for="password">Contraseña<br></label>
    <input  type='password' name='password'><br>
      <?php if(isset($errores['contra'])): ?>
      <span  style= "color:red; font-size:12px;"><?= $errores['contra']?></span>
      <?php endif; ?>
</div>
<div class="">
    <label class="" for="repetirpass">Repetir contraseña<br></label>
    <input  type="password" name="repetirpass"><br>
     
</div>
<div>
     <label class="" for="imagen">Foto de usuario:<br></label>
     <input  type="file" name="imagen"><br>
      <?php if(isset($errores["imagen"])): ?>
      <span  style= "color:red; font-size:12px;"><?= $errores["imagen"]?></span>
      <?php endif; ?>
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
