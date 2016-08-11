<?php

use \vista\Vista;
use App\model\User;
use libreria\ORM\EtORM;


class AdminController
{

  public function index(){
    return vista::crear('admin.index');
  }

}

?>
