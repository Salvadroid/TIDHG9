<?php
// Formulario para crear un quizz.
include('./autoload.php');

if ($_POST) {
		$nuevaPregunta = new Pregunta($_POST['Pregunta'],$_POST['respuestaCorrecta'],$_POST['respuestaErronea1'],$_POST['respuestaErronea2'],$_POST['respuestaErronea3']);
    $datos= $nuevaPregunta->verQA();
		$guardarPregunta = PiensaSapien::guardarPreguntaEnBBDD($datos);

	}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">


    <title>Crea tu quiz!</title>
</head>
<body>
   <head>
    <?php require 'header.php';  ?>
   </head>
   <section>
       <main class=mainCrearQuiz>
           <form action="" method="post">
            <div class="preguntaAIngresar">
             <div class="question">
              <h3 class="">Ingresa una nueva pregunta:</h3>
              <input type="text" name="Pregunta" id="" style="width: 300px; padding:10px;" placeholder="Ingrese la pregunta">
             </div>
            <div class="answers">
              <div class="answer">
                <input class=""  type="text" name="respuestaCorrecta" style="padding: 10px; background-color:rgb(148, 253, 106); width: 300px;" placeholder="Ingresa la resuesta correcta aquí">
              </div>
              <div class="answer">
                <input class=""  type="text" name="respuestaErronea1" style="padding: 10px; background-color:rgb(250, 102, 102); width: 300px;" placeholder="Ingresa una respuesta incorrecta aquí">
              </div>
              <div class="answer">
                <input class=""  type="text" name="respuestaErronea2" style="padding: 10px; background-color:rgb(250, 102, 102); width: 300px;" placeholder="Ingresa una respuesta incorrecta aquí">
              </div>
              <div class="answer">
                <input class=""  type="text" name="respuestaErronea3" style="padding: 10px; background-color:rgb(250, 102, 102); width: 300px;" placeholder="Ingresa una respuesta incorrecta aquí">
              </div>
           </div>
           </div>


           <!-- <div class="preguntaAIngresar">
            <div class="question">
             <h3 class="">Ingresa la pregunta numero 2:</h3>
             <input type="text" name="Pregunta" id="" style="width: 300px; padding:10px;" placeholder="Ingrese la pregunta">
            </div>
           <div class="answers">
             <div class="answer">
               <input class=""  type="text" name="respuestaCorrecta" style="padding: 10px; background-color:rgb(148, 253, 106); width: 300px;" placeholder="Ingresa la resuesta correcta aquí">
             </div>
             <div class="answer">
               <input class=""  type="text" name="respuestaErronea1" style="padding: 10px; background-color:rgb(250, 102, 102); width: 300px;" placeholder="Ingresa una respuesta incorrecta aquí">
             </div>
             <div class="answer">
               <input class=""  type="text" name="respuestaErronea2" style="padding: 10px; background-color:rgb(250, 102, 102); width: 300px;" placeholder="Ingresa una respuesta incorrecta aquí">
             </div>
             <div class="answer">
               <input class=""  type="text" name="respuestaErronea3" style="padding: 10px; background-color:rgb(250, 102, 102); width: 300px;" placeholder="Ingresa una respuesta incorrecta aquí">
             </div>
          </div>
          </div>

          <div class="preguntaAIngresar">
             <div class="question">
              <h3 class="">Ingresa la pregunta numero 3:</h3>
              <input type="text" name="Pregunta" id="" style="width: 300px; padding:10px;" placeholder="Ingrese la pregunta">
             </div>
            <div class="answers">
              <div class="answer">
                <input class=""  type="text" name="respuestaCorrecta" style="padding: 10px; background-color:rgb(148, 253, 106); width: 300px;" placeholder="Ingresa la resuesta correcta aquí">
              </div>
              <div class="answer">
                <input class=""  type="text" name="respuestaErronea1" style="padding: 10px; background-color:rgb(250, 102, 102); width: 300px;" placeholder="Ingresa una respuesta incorrecta aquí">
              </div>
              <div class="answer">
                <input class=""  type="text" name="respuestaErronea2" style="padding: 10px; background-color:rgb(250, 102, 102); width: 300px;" placeholder="Ingresa una respuesta incorrecta aquí">
              </div>
              <div class="answer">
                <input class=""  type="text" name="respuestaErronea3" style="padding: 10px; background-color:rgb(250, 102, 102); width: 300px;" placeholder="Ingresa una respuesta incorrecta aquí">
              </div>
           </div>
           </div> -->
<!--
           <div class="preguntaAIngresar">
             <div class="question">
              <h3 class="">Ingresa la pregunta numero 4:</h3>
              <input type="text" name="Pregunta" id="" style="width: 300px; padding:10px;" placeholder="Ingrese la pregunta">
             </div>
            <div class="answers">
              <div class="answer">
                <input class=""  type="text" name="respuestaCorrecta" style="padding: 10px; background-color:rgb(148, 253, 106); width: 300px;" placeholder="Ingresa la resuesta correcta aquí">
              </div>
              <div class="answer">
                <input class=""  type="text" name="respuestaErronea1" style="padding: 10px; background-color:rgb(250, 102, 102); width: 300px;" placeholder="Ingresa una respuesta incorrecta aquí">
              </div>
              <div class="answer">
                <input class=""  type="text" name="respuestaErronea2" style="padding: 10px; background-color:rgb(250, 102, 102); width: 300px;" placeholder="Ingresa una respuesta incorrecta aquí">
              </div>
              <div class="answer">
                <input class=""  type="text" name="respuestaErronea3" style="padding: 10px; background-color:rgb(250, 102, 102); width: 300px;" placeholder="Ingresa una respuesta incorrecta aquí">
              </div>
           </div>
           </div>

           <div class="preguntaAIngresar">
             <div class="question">
              <h3 class="">Ingresa la pregunta numero 5:</h3>
              <input type="text" name="Pregunta" id="" style="width: 300px; padding:10px;" placeholder="Ingrese la pregunta">
             </div>
            <div class="answers">
              <div class="answer">
                <input class=""  type="text" name="respuestaCorrecta" style="padding: 10px; background-color:rgb(148, 253, 106); width: 300px;" placeholder="Ingresa la resuesta correcta aquí">
              </div>
              <div class="answer">
                <input class=""  type="text" name="respuestaErronea1" style="padding: 10px; background-color:rgb(250, 102, 102); width: 300px;" placeholder="Ingresa una respuesta incorrecta aquí">
              </div>
              <div class="answer">
                <input class=""  type="text" name="respuestaErronea2" style="padding: 10px; background-color:rgb(250, 102, 102); width: 300px;" placeholder="Ingresa una respuesta incorrecta aquí">
              </div>
              <div class="answer">
                <input class=""  type="text" name="respuestaErronea3" style="padding: 10px; background-color:rgb(250, 102, 102); width: 300px;" placeholder="Ingresa una respuesta incorrecta aquí">
              </div>
           </div>
           </div>

           <div class="preguntaAIngresar">
             <div class="question">
              <h3 class="">Ingresa la pregunta numero 6:</h3>
              <input type="text" name="Pregunta" id="" style="width: 300px; padding:10px;" placeholder="Ingrese la pregunta">
             </div>
            <div class="answers">
              <div class="answer">
                <input class=""  type="text" name="respuestaCorrecta" style="padding: 10px; background-color:rgb(148, 253, 106); width: 300px;" placeholder="Ingresa la resuesta correcta aquí">
              </div>
              <div class="answer">
                <input class=""  type="text" name="respuestaErronea1" style="padding: 10px; background-color:rgb(250, 102, 102); width: 300px;" placeholder="Ingresa una respuesta incorrecta aquí">
              </div>
              <div class="answer">
                <input class=""  type="text" name="respuestaErronea2" style="padding: 10px; background-color:rgb(250, 102, 102); width: 300px;" placeholder="Ingresa una respuesta incorrecta aquí">
              </div>
              <div class="answer">
                <input class=""  type="text" name="respuestaErronea3" style="padding: 10px; background-color:rgb(250, 102, 102); width: 300px;" placeholder="Ingresa una respuesta incorrecta aquí">
              </div>
           </div>
           </div>

           <div class="preguntaAIngresar">
             <div class="question">
              <h3 class="">Ingresa la pregunta numero 7:</h3>
              <input type="text" name="Pregunta" id="" style="width: 300px; padding:10px;" placeholder="Ingrese la pregunta">
             </div>
            <div class="answers">
              <div class="answer">
                <input class=""  type="text" name="respuestaCorrecta" style="padding: 10px; background-color:rgb(148, 253, 106); width: 300px;" placeholder="Ingresa la resuesta correcta aquí">
              </div>
              <div class="answer">
                <input class=""  type="text" name="respuestaErronea1" style="padding: 10px; background-color:rgb(250, 102, 102); width: 300px;" placeholder="Ingresa una respuesta incorrecta aquí">
              </div>
              <div class="answer">
                <input class=""  type="text" name="respuestaErronea2" style="padding: 10px; background-color:rgb(250, 102, 102); width: 300px;" placeholder="Ingresa una respuesta incorrecta aquí">
              </div>
              <div class="answer">
                <input class=""  type="text" name="respuestaErronea3" style="padding: 10px; background-color:rgb(250, 102, 102); width: 300px;" placeholder="Ingresa una respuesta incorrecta aquí">
              </div>
           </div>
           </div>

           <div class="preguntaAIngresar">
             <div class="question">
              <h3 class="">Ingresa la pregunta numero 8:</h3>
              <input type="text" name="Pregunta" id="" style="width: 300px; padding:10px;" placeholder="Ingrese la pregunta">
             </div>
            <div class="answers">
              <div class="answer">
                <input class=""  type="text" name="respuestaCorrecta" style="padding: 10px; background-color:rgb(148, 253, 106); width: 300px;" placeholder="Ingresa la resuesta correcta aquí">
              </div>
              <div class="answer">
                <input class=""  type="text" name="respuestaErronea1" style="padding: 10px; background-color:rgb(250, 102, 102); width: 300px;" placeholder="Ingresa una respuesta incorrecta aquí">
              </div>
              <div class="answer">
                <input class=""  type="text" name="respuestaErronea2" style="padding: 10px; background-color:rgb(250, 102, 102); width: 300px;" placeholder="Ingresa una respuesta incorrecta aquí">
              </div>
              <div class="answer">
                <input class=""  type="text" name="respuestaErronea3" style="padding: 10px; background-color:rgb(250, 102, 102); width: 300px;" placeholder="Ingresa una respuesta incorrecta aquí">
              </div>
           </div>
           </div>

           <div class="preguntaAIngresar">
             <div class="question">
              <h3 class="">Ingresa la pregunta numero 9:</h3>
              <input type="text" name="Pregunta" id="" style="width: 300px; padding:10px;" placeholder="Ingrese la pregunta">
             </div>
            <div class="answers">
              <div class="answer">
                <input class=""  type="text" name="respuestaCorrecta" style="padding: 10px; background-color:rgb(148, 253, 106); width: 300px;" placeholder="Ingresa la resuesta correcta aquí">
              </div>
              <div class="answer">
                <input class=""  type="text" name="respuestaErronea1" style="padding: 10px; background-color:rgb(250, 102, 102); width: 300px;" placeholder="Ingresa una respuesta incorrecta aquí">
              </div>
              <div class="answer">
                <input class=""  type="text" name="respuestaErronea2" style="padding: 10px; background-color:rgb(250, 102, 102); width: 300px;" placeholder="Ingresa una respuesta incorrecta aquí">
              </div>
              <div class="answer">
                <input class=""  type="text" name="respuestaErronea3" style="padding: 10px; background-color:rgb(250, 102, 102); width: 300px;" placeholder="Ingresa una respuesta incorrecta aquí">
              </div>
           </div>
           </div> -->

           <!-- <div class="preguntaAIngresar">
             <div class="question">
              <h3 class="">Ingresa la pregunta numero 10:</h3>
              <input type="text" name="Pregunta" id="" style="width: 300px; padding:10px;" placeholder="Ingrese la pregunta">
             </div>
            <div class="answers">
              <div class="answer">
                <input class=""  type="text" name="respuestaCorrecta" style="padding: 10px; background-color:rgb(148, 253, 106); width: 300px;" placeholder="Ingresa la resuesta correcta aquí">
              </div>
              <div class="answer">
                <input class=""  type="text" name="respuestaErronea1" style="padding: 10px; background-color:rgb(250, 102, 102); width: 300px;" placeholder="Ingresa una respuesta incorrecta aquí">
              </div>
              <div class="answer">
                <input class=""  type="text" name="respuestaErronea2" style="padding: 10px; background-color:rgb(250, 102, 102); width: 300px;" placeholder="Ingresa una respuesta incorrecta aquí">
              </div>
              <div class="answer">
                <input class=""  type="text" name="respuestaErronea3" style="padding: 10px; background-color:rgb(250, 102, 102); width: 300px;" placeholder="Ingresa una respuesta incorrecta aquí">
              </div>
           </div>
           </div> -->


           <button type="submit" value="" style="padding:15px; width:100px;">Crear</button>

           </form>
       </main>
   </section>
   <footer>

   </footer>
</body>
</html>
