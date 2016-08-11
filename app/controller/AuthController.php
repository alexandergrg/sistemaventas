<?php


use \vista\Vista;
use App\model\User;
use libreria\ORM\EtORM;
/**
 *
 */
  class AuthController
  {

    public function index(){
      return Vista::crear('auth.login');
    }


    public function ingresar(){
    //echo 'Funcion ingresar del metodo login';
    if (val_csrf()) {
      //echo 'esta bién logueado' ;
      //echo input('email') . '</br>';
      //echo input('password') . '</br>';
      $user= input('email');
      $password = encriptar(input('password'));
      $objOrm= new EtORM();
      $data = $objOrm->Ejecutar('login',array($user,$password));
      if (count($data) > 0) {
        $_SESSION['usuario'] = $data[0]['usuario'];
        $_SESSION['email'] = $data[0]['email'];
        $_SESSION['privilegio'] = $data[0]['privilegio'];

        redirecciona()->to('admin');
      }else{
        redirecciona( )->to('login')->withMessage(array(
          'estado'=>'False',
          'mensaje'=>'Usuario | Password incorrectos'
        ));
      }
    }else{
      echo 'Mensaje esta mal';
      // redirecciona( )->to('login')->withMessage(array(
      //   'estado'=>'False',
      //   'mensaje'=>'Sesión a caducado vuelva a iniciar'
      // ));
    }

    }
  }
 ?>
