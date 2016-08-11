<?php

  namespace vista;

  class Vista{

    public function crear($path, $key = null , $value = null){
      if ($path!='') {
        //Convertimos a un array separados por puntos on el explode
        $paths = explode('.',$path);
        //var_dump($paths);
        //Inicializamos la ruta
        $ruta='';
        //recorreomos el paths con el for
        for ($i=0; $i < count($paths); $i++) {
          //preguntamos si es el ultimo registros del array para concatenar .phph
          if ($i=== count($paths)-1) {
            $ruta .= $paths[$i] .'.php';
          }else{
            $ruta .= $paths[$i] .'/';
          }
        }
        //echo VISTA_RUTA.$ruta;
        //Comprobamos el si archivo existe
        if (file_exists(VISTA_RUTA.$ruta)) {
          //Comprobamos si existe el KEY
          if (!is_null($key)) {
            if (is_array($key)) {
              //Extrae los key del array los transforma en variable y asigna los values que reciben los keys.
              extract($key, EXTR_PREFIX_SAME,'');
            }else{
              //creamos una variable con el nombre del key y asiganmos un valor

              ${$key} =$value;
            }
          }
          include_once VISTA_RUTA.$ruta;
        }else{
          die('No existe al vista');
        }

      }
      return null;
    }
  }


 ?>
