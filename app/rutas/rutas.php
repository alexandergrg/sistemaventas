<?php

/**
 * Rodas las rutas disponibles en nuestra aplicacion
 */

 $ruta = new Ruta();
 $ruta->controladores(array(
   "/"=>"WelcomeController",
    "/login"=>"AuthController",
    "/usuario"=>"UsuarioController",
    "/venta"=>"VentaController",
    "/producto"=>"ProductoController",
    "/admin"=>"AdminController",
 ));


 ?>
