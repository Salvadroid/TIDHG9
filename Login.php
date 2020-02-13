<?php
include('./autoload.php');

$usuarioBuscado = PiensaSapien::buscarUsuarioEnBBDD();
                  PiensaSapien::redireccionarUsuario($usuarioBuscado);
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
    <title>Login</title>
</head>
<body>
  <?php require 'header.php';  ?>

  <section>
    <main>
      <div class="seccion">


      <article class="">
        <div class="subzona">
          <form class="" action="Login.php" method="post">
            <div class="">
              <h2>Ingresar con Email</h2>
            </div>
            <div class="">
              <label for="email">Email <br></label>
              <input type="email" name="email" value="">
            </div>
            <div class="">
              <label for="password">Contraseña <br></label>
              <input type="password" name="password" value="">
            <?php if($_POST && !$usuarioBuscado): ?>  <!--  ← Acá, si $_POST existe, pero $usuarioBuscado es false, entonces se deniega el acceso. -->
                <small style="color:red;"><br>El nombre de usuario o contraseña son incorrectos.<br>Por favor inténtalo de nuevo.</small>
              <?php else:?>
                <small></small>
              <?php endif ?>
            </div>
            <div class="">
              <label for="recordar">Recordar contraseña</label>
              <input type="checkbox" name="recordar" value="0">
            </div>
            <div class="">
              <button id="botIngresar"type="submit" name="button">Ingresar</button>
            </div>
            <!-- <div class="">
                <h2 class="">Ingresar con Facebook</h2>
            </div>
            <div class="">
              <button id="BotonFacebookIngreso"type="submit" name="button">Ingresar con Facebook</button>
            </div> -->
          </form>
        </div>
      </article>
      </div>
    </main>
  </section>

</body>
</html>
