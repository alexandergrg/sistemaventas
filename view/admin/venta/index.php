<!DOCTYPE html>
<html lang="es">
<head>
      <?php include (VISTA_RUTA .'admininclude/head.php') ?>
</head>
<body>

    <div id="wrapper">
        <?php include (VISTA_RUTA .'admininclude/menu.php') ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Listados de Ventas | <a href="<?php url('venta/crear')?>" class ="btn btn-primary" ><i class="fa fa-plus-circle"></i> Nueva Venta</a></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!--  INICIO DEL  CONTENIDO -->
            <table class="table table-hover">
             <thead>
              <tr>
                <th>#</th>
                <th>Cliente</th>
                <th>Fecha</th>
              </tr>
             </thead>
             <tbody>
               <?php foreach ($productos as $producto) { ?>
                 <tr>
                   <td><?php echo $producto->id_producto ?></td>
                   <td><?php echo $producto->nombre ?></td>
                   <td><?php echo $producto->descripcion ?></td>
                   <td>
                     <a href="<?php url('producto/editar/' . $producto->id_producto)  ?>" class="btn btn-primary btn-sm">Editar</a>
                     <button onclick="confirmar('<?php url('producto/eliminar/' . $producto->id_producto)  ?>')" class="btn btn-danger btn-sm">Eliminar</button>
                   </td>
                 </tr>
               <?php } ?>
             </tbody>
            </table>
            <!--  TERMINO DEL CONTENIDO -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <?php include (VISTA_RUTA .'admininclude/scripts.php') ?>
</body>

</html>
