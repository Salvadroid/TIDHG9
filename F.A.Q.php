<?php
 session_start();
//var_dump($_SESSION);
//var_dump($_COOKIE);
?>
<!DOCTYPE html>
<html id="htmlFAQ"lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">
  <title>FAQ</title>
</head>

<body id="bodyFAQ">
  <?php require 'header.php';  ?> 
  <section class="sectionFaq">
    <div class="container">

        <div class="accordion-item" id="pregunta1">
          <a class="accordion-link" href="#pregunta1">¿De qué trata Piensa-Sapien?
          </a>
          <div class="respuesta">
            <p> Piensa-Sapien es una plataforma web pensada para que te diviertas mientras aprendés.
              Contestándo los quizzes, sumás puntos y escalás en el ranking de jugadores!
           </p>
          </div>
        </div>

    </div>
    <div class="container">

        <div class="accordion-item" id="pregunta2">
          <a class="accordion-link" href="#pregunta2"> ¿Como empizo a jugar?
          </a>
          <div class="respuesta">
            <p> Solamente necesitás crear un usuario completando el formulario de registro con tus datos
              y ya podes empezar a jugar!
           </p>
          </div>
        </div>
    </div>
    <div class="container">

        <div class="accordion-item" id="pregunta3">
          <a class="accordion-link" href="#pregunta3"> ¿Quienes estan detras de Piensa-Sapien?
          </a>
          <div class="respuesta">
            <p>
               El mundialmente renombrado "Grupo 9" se une en esta ocasión para llevar adelante
               este complejo proyecto... complejo, pero muy divertido.
           </p>
          </div>
        </div>
      <!-- </div> -->
    </div>
    <div class="container">
      <!-- <div class="accordion"> -->
        <div class="accordion-item" id="pregunta4">
          <a class="accordion-link" href="#pregunta4">¿La hermenéutica telúrica incaica transtrueca la
            peripatética anotrética de la filosofía aristotélica,
            por la inicuidad fáctica de los diálogos socráticos no dogmáticos?
          </a>
          <div class="respuesta">
            <p>No.
           </p>
          </div>
        </div>
      <!-- </div> -->
    </div>
  </section>
</body>

</html>
