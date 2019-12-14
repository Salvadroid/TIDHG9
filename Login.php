<?php
require 'funciones.php';
session_start();
$miBaseDeDatos = BDDlimpia('usuarios.json');  //esto es un array asociativo.
$arrayDeUsuarios = listaDeUsersDe_($miBaseDeDatos);// esto es un array de arrays.
$usuarioBuscado = datosDe_En_($_POST,$arrayDeUsuarios);//si hay $_POST la función guarda los datos del usuario ingresado(con sus campos nombre, email y password)
$_SESSION['nombre']= $usuarioBuscado['nombre']; //acá guardo en session, SOLAMENTE el nombre del usuario.
pre($_SESSION);
//La validación nueva está dentro del html. ↓↓↓↓↓
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
  <header>
    <nav>
      <ul>
        <li><a href="Usuario.php" style="text-decoration:none;">Usuario</a></li>
        <li><a href="Contacto.html" style="text-decoration:none;">Contacto</a></li>
        <li><a href="F.A.Q.html" style="text-decoration:none;">F.A.Q.</a></li>
        <li><a href="Registro.php" style="text-decoration:none;">Registro</a></li>
        <li><a href="juego.html" style="text-decoration:none;">Juego</a></li>
        <li><a href="Home.php" style="text-decoration:none;">Home</a></li>
      </ul>
    </nav>
    <h1 class="seccion">Ingresar</h1>
  </header>
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
              <!-- <?php if($_POST && !$usuarioBuscado): ?> ← Acá, si $_POST existe, pero $usuarioBuscado es false, entonces se deniega el acceso. -->
                <small style="color:red;"><br>El nombre de usuario o contraseña son incorrectos.<br>Por favor inténtalo de nuevo.</small>
              <!-- <?php else :header("location:Usuario.php"); ?> ← Si $_POST existe y $usuarioBuscado tambien, entonces se almacena(en la funcion de arriba) y se redirige al perfil. -->
              <?php endif; ?>
            </div>
            <div class="">
              <label for="recordar">Recordar contraseña</label>
              <input type="checkbox" name="" value="recordar">
            </div>
            <div class="">
              <button id="botInresar"type="submit" name="button">Ingresar</button>
            </div>
            <div class="">
                <h2 class="">Ingresar con Facebook</h2>
            </div>
            <div class="">
              <button id="BotonFacebookIngreso"type="submit" name="button">Ingresar con Facebook</button>
            </div>
          </form>
        </div>
      </article>
      </div>
    </main>
  </section>
</body>
</html>
