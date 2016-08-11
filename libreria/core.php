<?php



  //require_once 'help/class.inputfilter.php';
  require_once 'help/helps.php';
  //El archivo core contendra todoas las variables de entorno
  define('APP_RUTA', RUTA_BASE . 'app/');
  define('VISTA_RUTA', RUTA_BASE . 'view/');
  define('ASSETS_PATH',RUTA_BASE . 'assets/');
  define('LIBRERIA', RUTA_BASE . 'libreria/');
  define('RUTA', APP_RUTA . 'rutas/');
  define('MODELS', APP_RUTA . 'model/');

  //CONFIGURACIONES
  require_once RUTA_BASE .'config/config.php';
  require_once 'ORM/Conexion.php';
  require_once 'ORM/EtORM.php';
  require_once 'ORM/Modelo.php';
  require_once 'help/class.inputfilter.php';


  //librerias
  require_once("vendor/Redirecciona.php");
  require_once("vendor/Session.php");


  //Llamada a la función includemodels, del archivo helps.php
  includeModels();


  //Inclusion el proceso del ruteo con los archivos y la clase Ruta.php
  require_once 'Vista.php';
  require_once 'Ruta.php';
  require_once RUTA .'rutas.php';

?>
