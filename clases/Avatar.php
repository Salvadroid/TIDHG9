<?php 
class Avatar
{
    public function armarUrlAvatar(){
        if($_FILES){
            if($_FILES["imagen"]["error"] != 0){
              $errores["imagen"]="Hubo un error al cargar la imagen.";
            } else {
              $ext = pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION);
              if ($ext != "jpg" && $ext != "jpeg" && $ext != "png") {
                $errores["imagen"]= "La imagen debe ser jpg, jpeg o png.";
              } else {
                $nombreImagen = uniqid('img_') . '.' . $ext;
                $rutaImagen="imgUsuarios/" . $nombreImagen;
                move_uploaded_file($_FILES["imagen"]["tmp_name"], $rutaImagen );
      
              }
            }
          }
          return $rutaImagen;
    }

}
?>