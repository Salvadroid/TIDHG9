<?php
//helpers
function pre($unArray){
  echo "<pre>";
  var_dump($unArray);
  echo "</pre>";
}
function dnd($unArray){
  pre($unArray);
  exit;
}
//____________________________________________________________

// función para guardar datos de user en una variable
function datosDeNuevoUsuario($unArray){
  if($unArray){
    $usuario = [
      'nombre'=> trim($unArray['nombre']),
      'email'=> $unArray['email'],
      'password'=> password_hash($unArray['password'],PASSWORD_DEFAULT)
    ];
    return $usuario;
  }
}
//función para mandar el array con datos de user a un archivo json
function enviarABaseDeDatos($unArray){
  if ($unArray){
    $usuarioJson = json_encode($unArray);
    file_put_contents("usuarios.json",$usuarioJson . PHP_EOL, FILE_APPEND);
  }
}
//___________________________________________________________________________



//funciones para recuperar base de datos de un archivo Json.
function traerBaseDeDatosDesde_($unJson){ //acá obtengo el array de usuarios.
  $strJson = file_get_contents($unJson);
  $strJson = explode(PHP_EOL,$strJson,);
  return $strJson;
}
function BDDlimpia($unJson){ //acá elimino el usuario vacío que aparece por el PHP_EOL
  $arrayUsers = traerBaseDeDatosDesde_($unJson);
  array_pop($arrayUsers);
  return $arrayUsers;
}

//_____________________________________________________________________________

//función para armar lista de users desde de la base de datos.
// Queda como un array de arrays.
function listaDeUsersDe_($unaBDD){
  foreach ($unaBDD as $user) {
    $arrayDeUsers[]= json_decode($user,true);
    }
  return $arrayDeUsers;
}
//________________________________________________________________________

//acá función para buscar un usuario específico en una lista de usuarios descargada
// e imprimir sus datos en una variable(que inicializamos en login.php), puede modificarse. En caso de no coincidir
//los datos, retorna false. Ese dato false me sirve para insertar un msj de alerta en el php en caso de fallo.
//

function datosDe_En_($perfilBuscado,$arrayDeUsers){

  if($perfilBuscado){
    foreach ($arrayDeUsers as $user) {
    if ($user['email'] == $perfilBuscado['email'] && password_verify($perfilBuscado['password'],$user['password'])) {
      return $user;
    }
  }
}else{
  return false;
}
}
