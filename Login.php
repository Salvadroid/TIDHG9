<?php
require 'funciones.php';
session_start();
$miBaseDeDatos = BDDlimpia('usuarios.json');  //esto es un array asociativo.
$arrayDeUsuarios = listaDeUsersDe_($miBaseDeDatos);// esto es un array de arrays.
$usuarioBuscado = datosDe_En_($_POST,$arrayDeUsuarios);//si hay $_POST la función guarda los datos del usuario ingresado(con sus campos nombre, email y password)

pre($_SESSION);
//VALIDACION LOGIN
if($_POST){
  $erroresLogin = [];
if(empty($_POST["password"]) ) {
    $erroresLogin['password'] = "La contraseña es obligatoria";
  }elseif(empty($_POST["email"])){
    $erroresLogin['email'] = "El email es obligatorio";
  } elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    $erroresLogin['email'] = "El email ingresado no es válido";
  }

  
  if(!$erroresLogin){
    
    $_SESSION['nombre']= $usuarioBuscado['nombre']; //acá guardo en session, SOLAMENTE el nombre del usuario.
    $_SESSION['imagen']=$usuarioBuscado['imagen'];
    header('Location: Usuario.php');
    /*if(isset($_POST["recordarme"]) && $_POST["recordarme"] == "recordar"){
    //creo cookies
   setcookie("userEmail", $usuarioBuscado["email"], time()+ 60*60*24*7*30);
    setcookie("userPass", $usuarioBuscado["password"], time()+ 60*60*24*7*30);
    header('Location: Usuario.php');
  }else {
    header('Location: Usuario.php');
  }*/
 }
 }
 
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
    <?php require("nav.php");?>
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
              <input  type='text' name='email' value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>"><br/>
             <?php if(isset($erroresLogin['email'])): ?>
             <span style= "color:red; font-size:12px;"  ><?= $erroresLogin['email']?></span>
             <?php endif; ?>
            </div>
            <div class="">
              <label for="password">Contraseña <br></label>
              <input  type='password' name='password'><br>
              <?php if(isset($erroresLogin['password'])): ?>
              <span  style= "color:red; font-size:12px;"><?= $erroresLogin['password']?></span>
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
