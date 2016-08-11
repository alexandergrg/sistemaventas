<?php

use vista\Vista;
use app\model\User;

class UsuarioController{

  public function index(){
    $usuarios = User::all();
    return Vista::crear('admin.usuario.listado',array(
      'usuarios'=>$usuarios,
    ));

  }

  public function nuevo(){
    return Vista::crear('admin.usuario.crear');
  }

  public function agregar(){
    try {

      if (input('usuario_id')) {
        $user = User::find(input('usuario_id'));
      }else{
        $user = new User();
      }

      $user->usuario= input('usuario');
      $user->email= input('email');
      if (input('pass')) {
        $user->pass= crypt(input('pass'),'$2a$07$usesomesillystringforsalt$');
      }
      $user->privilegio= input('privilegio');
      $user->guardar();
      redirecciona()->to('usuario');
    } catch (Exception $e) {
      echo $e-getMessage();
    }
  }
  /**
   * Metodo para editar usuario recibe el id enviado del boton editar por el url
   */
  public function editar($id){
    $usuario = User::find($id);
    if (count($usuario)) {
        return Vista::crear('admin.usuario.crear',array('usuario'=>$usuario));
    }
    return redirecciona()->to('usuario');
  }


  public function eliminar($id){
    $usuario = User::find($id);
    if (count($usuario)) {
      $usuario->eliminar($id,'id');
      return redirecciona()->to('usuario');
    }
    return redirecciona()->to('usuario');
  }

}

 ?>
