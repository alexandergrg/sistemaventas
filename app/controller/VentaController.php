<?php

  use vista\Vista;
  use App\model\Venta;
  use libreria\ORM\EtORM;

  class VentaController{

    public function index(){
      return Vista::crear('admin.venta.index');
    }

    public function crear(){
      return Vista::crear('admin.venta.nuevo');
    }

    public function agregar(){
      try {
        $venta = new Venta();
        $venta->cliente= input('cliente');
        $venta->guardar();
        redirecciona()->to('venta');
      } catch (Exception $e) {
        echo $e-getMessage();
      }
    }


  }
?>
