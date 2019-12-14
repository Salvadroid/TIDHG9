<?php
 session_start(); 
//var_dump($_SESSION);"br";
//var_dump($_COOKIE);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">
    <title>Contacto</title>
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="Usuario.php" style="text-decoration:none;">Usuario</a></li>
        <li><a href="F.A.Q.html" style="text-decoration:none;">F.A.Q.</a></li>
        <li><a href="Registro.php" style="text-decoration:none;">Registro</a></li>
        <li><a href="Login.php" style="text-decoration:none;">Login</a></li>
        <li><a href="juego.html" style="text-decoration:none;">Juego</a></li>
        <li><a href="Home.php" style="text-decoration:none;">Home</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <h1 class="seccion">Para contactarnos o enviar feedback:</h1>
    <article class="seccion">
        <h2>Nuestro mail:</h2><a href="mailto:homosapiens@gmail.com" class="datos">homosapiens@gmail.com</a>
        <h2>Nuestro numero:</h2><a href="tel:1132139528" class="datos">11-3213-9528</a>
        <h2 style="margin-bottom:10px;">Dejanos un comentario aqui:</h2><textarea name="" cols="92" rows="15" class="com"></textarea>
    </article>
  </main>
</body>
</html>