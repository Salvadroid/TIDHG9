<?php

require 'autoload.php';
//Todavia faltaria crear la sesion post registro. Hasta ahora solo mete los datos en la bbdd.
//Hay un error. Deja el array $nuevoUser vacío, si no se elije un archivo de avatar.
$nuevoUser = PiensaSapien::getDatosDeUser();
             PiensaSapien::registrarJugador($nuevoUser);
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
  <?php require 'header.php';  ?>
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
              <label for="recordar">Recordar contraseña</label>
              <input type="checkbox" name="recordarme" value="0">
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
