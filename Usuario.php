<?php
include('./autoload.php');
//var_dump($_SESSION);
 ?>
<!DOCTYPE html>
<html lang="en" class="usuario">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d5aa8d86cb.js" crossorigin="anonymous"></script>
    <title>Usuario</title>
</head>
<body id="bodyUser">
  <?php require 'header.php';  ?>
  <section id="perfil">

  <div class="circulo">
    <h1 class="nombre"><?php echo isset($_SESSION["nombre"])?$_SESSION["nombre"]:"Inicia Sesion";?></h1>
    <img src="<?php echo isset($_SESSION["imagen"])?$_SESSION["imagen"]:"img/Foto_Usuario.png";?>" width="250" height="250" alt="Foto_De_Perfil.png" class="logo">
    <p class="puntos">345 puntos
    </p>

  </div>

  <section class="rankingSection">
    <div class="tituloRanking">
      <span>ranking!</span>
  </div>
    <div class="puesto" id="p1">
       <div class="avatar">
        <img src="img/Foto_Usuario.png" alt="foto de usuario">
      </div>
       <div class="datos">
        <div class="_nombre">
          <span>Jose Perez</span>
        </div>
        <div class="puntos">
          <span>1500 pts.</span>
        </div>
      </div>
    </div>
      <div class="puesto" id="p2">
        <div class="avatar">
         <img src="img/cebollita.jpg" alt="foto de usuario">
      </div>
           <div class="datos">
        <div class="_nombre">
            <span>Cebollita</span>
         </div>
        <div class="puntos">
           <span>687 pts.</span>
        </div>
     </div>
    </div>
      <div class="puesto"id="p3">
      <div class="avatar">
         <img src="img/Foto_Usuario.png" alt="foto de usuario">
      </div>
      <div class="datos">
         <div class="_nombre">
           <span>Elza Pato</span>
         </div>
         <div class="puntos">
           <span>345 pts.</span>
         </div>
     </div>
    </div>
      <div class="puesto"id="p4">
      <div class="avatar">
         <img src="img/Foto_Usuario.png" alt="foto de usuario">
      </div>
      <div class="datos">
         <div class="_nombre">
           <span>RandomBoy</span>
         </div>
         <div class="puntos">
           <span>150 pts</span>
         </div>
     </div>
    </div>
      <div class="puesto"id="p5">
      <div class="avatar">
         <img src="img/Foto_Usuario.png" alt="foto de usuario">
      </div>
      <div class="datos">
         <div class="_nombre">
           <span>Modesto Rosado</span>
         </div>
         <div class="puntos">
           <span>45 pts.</span>
         </div>
     </div>
    </div>
  </section>
  </section>
</body>
</html>
