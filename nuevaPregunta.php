<?php
 session_start();
//var_dump($_SESSION);
//var_dump($_COOKIE);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


        <title>JUEGO</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
    </head>
    <body class="bodyJuego">
      <?php require 'header.php';  ?> 
        <br>
    <section>
        <!-- MODIFICAR PREGUNTAS -->
        <article class="container preguntas">
            <div class= "row p-2">
              <div> PREGUNTA </div>
            </div>
            <div class= "row justify-content-center">
                <input class ="col-10 text-center"  type="text" name="pregunta" id="pregunta">
            </div>
            <div class= "row p-1 justify-content-center">
                    <div> RESPUESTAS </div>
            </div>
            <div class= "row p-1 justify-content-center">
                <input class ="col-3 text-center"  type="text" name="respuesta1" id="respuesta1">
                <input class ="col-3 text-center"  type="text" name="respuesta2" id="respuesta2">
                <input class ="col-3 text-center"  type="text" name="respuesta3" id="respuesta3">
                <input class ="col-3 text-center"  type="text" name="respuesta4" id="respuesta4">
            </div>
            <div class= "row p-1 justify-content-center">
                    <div> RESPUESTA CORRECTA </div>
            </div>
            <div class= "row p-1 justify-content-center">
                <div class="col-3 text-center text-success"><input type="radio" name="primero" value="2">  </div>
                <div class="col-3 text-center text-success"><input type="radio" name="primero" value="2">  </div>
                <div class="col-3 text-center text-success"><input type="radio" name="primero" value="3">  </div>
                <div class="col-3 text-center text-success"> <input type="radio" name="primero" value="4">  </div>
            </div>
          </article>

          <article class= "container">
                <!-- BOTON GUARDAR -->
                  <form action= "nuevaPregunta.html" method="GET" class = "row justify-content-center p-1">
                    <button type="submit" class="btn btn-success col-3 botonjugar "> <b>GUARDAR</b> </button>
                  </form>
                <!-- BOTON VOLVER -->
                <form action="Home.html" method="GET" class="row justify-content-center p-2">
                  <button type="submit" class="btn btn-success col-3 botonjugar"> <b>HOME</b></a> </button>
                </form>
              </article>
          <br>
    </section>
    </body>
</html>
