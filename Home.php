<?php
 session_start();
//var_dump($_SESSION);
//var_dump($_COOKIE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
  <?php require 'header.php';  ?>
  
  <section id="HomeSection">
      <div class="titulo">
       <img src="img/piensasapien.png" alt="logo">
      </div>
      <div id="infoMasBotonJ" class="">

      <article class="">
      <p> En este juego podrás encontrar cuestionarios sobre diversas categorías y desafiar a tus amigos. <br>
          Jugá sólo o en grupo <br>
          Cuantas mas preguntas correctas y mas rápido respondas más puntos ganás.<br>
          Además podes crear tus propios cuestionarios la categoría que desees.<br>
          Demostrá tu conocimiento y continuá aprendiendo mientras jugás!!</p>
      </article>
      <article class="">
          <div id="botonJugar" class="">
            <button type="submit" name="button"> <a href="juego.php">Jugar</a> </button>
          </div>
        </article>
      </div>
    </section>
    <footer><p>Copyright 2019 | Canosa, Reale, Suarez, Yagusz. | Todos los derechos reservados.</p></footer>
</body>
</html>
