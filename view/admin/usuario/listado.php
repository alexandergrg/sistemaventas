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
                    <h1 class="page-header">Listado de Usuarios | <a href="<?php url('usuario/nuevo')?>" class ="btn btn-primary" ><i class="fa fa-plus-circle"></i> Nuevo Usuario</a></h1>
                </div>

                <!-- /.col-lg-12 -->
            </div>
            <!--  INICIO DEL  CONTENIDO -->

            <table class="table table-hover">
             <thead>
              <tr>
                <th>#</th>
                <th>Nombres</th>
                <th>Email</th>
                <th>Acción</th>
              </tr>
             </thead>
             <tbody>
               <?php foreach ($usuarios as $usuario) { ?>
                 <tr>
                   <td><?php echo $usuario->id ?></td>
                   <td><?php echo $usuario->usuario ?></td>
                   <td><?php echo $usuario->email ?></td>
                   <td>
                     <a href="<?php url('usuario/editar/' . $usuario->id)  ?>" class="btn btn-primary btn-sm">Editar</a>
                     <button onclick="confirmar('<?php url('usuario/eliminar/' . $usuario->id)  ?>')" class="btn btn-danger btn-sm">Eliminar</button>
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
