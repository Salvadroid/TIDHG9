<?php
 session_start();
//var_dump($_SESSION);
//var_dump($_COOKIE);
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


  <title>JUEGO</title>
  </head>
  <body>
    <?php require 'header.php';  ?>
    
    <!-- HISTORIAL JUEGO DEL USUARIO -->
    <section>
      <article class="container-fluid">
        <div class="row justify-content-center m-1">
          <div class= "col-md-2 col-sm-8  text-center text-success puntajes" > <h6>PUNTOS</h6><h6>1500</h6></div>
          <div class= "col-md-2 col-sm-8  text-center text-success puntajes" > <h6>INTENTOS RESTANTES</h6> <h6>3</h6></div>
          <div class= "col-md-2 col-sm-8 text-center text-success puntajes" > <h6>PREGUNTAS RESPONDIDAS</h6><h6>5/20</h6></div>
        </div>
        <div class="row justify-content-center m-1">
            <div class= "col-md-2 col-sm-8  text-center text-success puntajes" > <h6>USUARIO</h6><h6>JOSE PEREZ</h6></div>
        </div>
      </article>
      <br>

      <!-- PREGUNTA NUMERO 1 -->
      <article class="container preguntas">
        <div class= "row">
          <div> PREGUNTA Nº 1</div>
        </div>
        <div class= "row">
          <div> ¿En qué año comenzó la segunda guerra mundial?</div>
        </div>
        <div class= "row">
            <div class="col-1 text-center text-success">  1929 <br> <input type="radio" name="primero" value="1">  </div>
            <div class="col-1 text-center text-success">  1939 <br><input type="radio" name="primero" value="2">  </div>
            <div class="col-1 text-center text-success">  1949 <br><input type="radio" name="primero" value="3">  </div>
            <div class="col-1 text-center text-success">  1959 <br><input type="radio" name="primero" value="4">  </div>
        </div>
      </article>
      <br>

      <!-- PREGUNTA NUMERO 2 -->
      <article class="container preguntas">
        <div class= "row">
          <div> PREGUNTA Nº 2</div>
        </div>
        <div class= "row">
          <div> ¿En qué año fue el primer mundial de fútbol?</div>
        </div>
        <div class= "row p-2">
          <div class="col-1 text-center text-success">  1920 <br> <input type="radio" name="segundo" value="1">  </div>
          <div class="col-1 text-center text-success">  1930 <br><input type="radio" name="segundo" value="2">  </div>
          <div class="col-1 text-center text-success">  1940 <br><input type="radio" name="segundo" value="3">  </div>
          <div class="col-1 text-center text-success">  1950 <br><input type="radio" name="segundo" value="4">  </div>
        </div>
      </article>
      <br>

      <!-- PREGUNTA NUMERO 3 -->
      <article class="container preguntas">
        <div class= "row">
          <div> PREGUNTA Nº 3</div>
        </div>
        <div class= "row">
          <div> ¿En qué año se creó la primer computadora?</div>
        </div>
        <div class= "row">
          <div class="col-1 text-center text-success">  1926 <br> <input type="radio" name="tercero" value="1">  </div>
          <div class="col-1 text-center text-success">  1936 <br><input type="radio" name="tercero" value="2">  </div>
          <div class="col-1 text-center text-success">  1946 <br><input type="radio" name="tercero" value="3">  </div>
          <div class="col-1 text-center text-success">  1956 <br><input type="radio" name="tercero" value="4">  </div>
        </div>
      </article>
      <br>


      <!-- PREGUNTA NUMERO 4 -->
      <article class="container preguntas">
        <div class= "row">
          <div> PREGUNTA Nº 4</div>
        </div>
        <div class= "row">
          <div> ¿En qué año comenzó la primer guerra mundial?</div>
        </div>
        <div class= "row">
          <div class="col-1 text-center text-success">  1904 <br> <input type="radio" name="cuarto" value="1">  </div>
          <div class="col-1 text-center text-success">  1914 <br><input type="radio" name="cuarto" value="2">  </div>
          <div class="col-1 text-center text-success">  1924 <br><input type="radio" name="cuarto" value="3">  </div>
          <div class="col-1 text-center text-success">  1934 <br><input type="radio" name="cuarto" value="4">  </div>
        </div>
      </article>
      <br>

      <!-- PREGUNTA NUMERO 5 -->
      <article class="container preguntas">
        <div class= "row">
          <div> PREGUNTA Nº 5</div>
        </div>
        <div class= "row">
          <div> ¿En qué año se creo el celular?</div>
        </div>
        <div class= "row">
          <div class="col-1 text-center text-success">  1963 <br> <input type="radio" name="quinto" value="1">  </div>
          <div class="col-1 text-center text-success">  1973 <br><input type="radio" name="quinto" value="2">  </div>
          <div class="col-1 text-center text-success">  1983 <br><input type="radio" name="quinto" value="3">  </div>
          <div class="col-1 text-center text-success">  1993 <br><input type="radio" name="quinto" value="4">  </div>
        </div>
      </article>
      <br>


      <article class= "container">
        <!-- BOTON JUGAR -->
          <form action= "resultado.php" method="GET" class = "row justify-content-center p-1">
            <button type="submit" class="btn btn-success col-3 botonjugar "> <b>JUGAR</b> </button>
          </form>
        <!-- BOTON REINICIAR -->
        <form action="juego.php" method="GET" class="row justify-content-center p-2">
          <button type="submit" class="btn btn-success col-3 botonjugar"> <b>REINICIAR</b></a> </button>
        </form>
        <!-- BOTON MODIFICAR PREGUNTA -->
        <form action="modificarPreguntas.php" method="GET" class="row justify-content-center p-2">
          <button type="submit" class="btn btn-success col-3 botonjugar"> <b>MODIFICAR</b></a> </button>
        </form>
        <!-- BOTON CREAR QUIZ -->
        <form action="crearQuiz.php" method="GET" class="row justify-content-center p-2">
          <button type="submit" class="btn btn-success col-3 botonjugar"> <b>CREAR QUIZZ</b></a> </button>
        </form>
      </article>

    </section>

  </body>
</html>
