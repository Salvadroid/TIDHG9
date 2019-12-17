<?php
 session_start();
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
  <?php require 'header.php';  ?> 
  <main>
    <h1 class="seccion">Para contactarnos o enviar feedback:</h1>
    <article class="seccion">
        <h2>Nuestro mail:</h2><a href="mailto:homosapiens@gmail.com" class="datos">homosapiens@gmail.com</a>
        <h2>Nuestro numero:</h2><a href="tel:1132139528" class="datos">11-3213-9528</a>
        <h2 style="margin-bottom:10px;">Dejanos un comentario aqui:</h2><textarea name="com" cols="92" rows="15" class="com"></textarea>
        <button type="submit" name="com">Enviar</button>
    </article>
  </main>
</body>
</html>
