<?php


/**
 *Clase conexion, permite la conexion de los datos
 */

class Conexion
{
  /**
   * Metodo Conectar
   */
  public static function conectar (){
    try {
        $cn = new PDO('mysql:host=' . HOST . ';dbname=' . DB , USER , PASSWORD);
        return $cn;
    } catch (PDOException $ex) {
      die($ex->getMessage());
    }
  }


}


 ?>
