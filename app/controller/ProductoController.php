<?php

use vista\Vista;
use app\model\Producto;

class ProductoController
{

  public function index(){
    $productos =  Producto::all();
    return Vista::crear('admin.producto.index', array(
      'productos'=>$productos
        ));
  }

  public function todos(){
    $productos =  Producto::all();
    echo json_response($productos);
  }

  public function nuevo(){
    return Vista::crear('admin.producto.nuevo');
  }
  public function agregar(){
    try {
      if (input('id_producto')) {
        $producto = Producto::find(input('id_producto'),'id_producto');
        //echo input('id_producto');
        //var_dump($producto);
      }else{
        $producto = new Producto();
      }

      $producto->nombre= input('nombre');
      $producto->precio= input('precio');
      $producto->descripcion= input('descripcion');
      $producto->categoria= input('categoria');
      $producto->guardar();
      redirecciona()->to('producto');
    } catch (Exception $e) {
      echo $e-getMessage();
    }
  }

  public function editar($id){
    $producto =  Producto::find($id, 'id_producto');
    var_dump($productos);
    if (count($producto)) {
        return Vista::crear('admin.producto.nuevo',array('producto'=>$producto));
    }
    return redirecciona()->to('producto');

  }

  public function eliminar($id){
    $producto =  Producto::find($id, 'id_producto');
    if (count($producto)) {
      $producto->eliminar($id,'id_producto');
      return redirecciona()->to('producto');
    }
    return redirecciona()->to('producto');
  }

}

?>
