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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <title>RESULTADO</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">

</head>
<body  class="bodyJuego">
        <header>
        <?php require("nav.php");?>
              </header>
    <section>

        <!-- GIF APLAUSOS -->
        <article class="container">
            <div class="row justify-content-center m-4">
                <div class= "tenor-gif-embed" data-postid="10474493" data-share-method="host" data-width="50%" data-aspect-ratio="1.0774647887323943"><a href="https://tenor.com/view/excited-hockey-kid-gif-10474493">Excited Hockey GIF</a> from <a href="https://tenor.com/search/excited-gifs">Excited GIFs</a></div><script type="text/javascript" async src="https://tenor.com/embed.js"></script></div>
            </div>

        <!-- CIERRE DEL JUEGO -->
        <article class="container">
            <div class= "row">
              <div class= "col-md-5 col-sm-8  text-center text-success puntajes"> MUCHAS GRACIAS POR JUGAR CON NOSOTROS <br> EL RESULTADO LE LLEGARA POR CORREO </div>
            </div>
          <br>

    </section>
</body>
</html>
