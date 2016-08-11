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
                    <h1 class="page-header">Principal</h1>
                </div>

                <!-- /.col-lg-12 -->
            </div>
            <!--  INICIO DEL  CONTENIDO -->

            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Usuarios</h3>
              </div>
              <div class="panel-body">
                <a class ="btn btn-default" href="<?php url('usuario') ?>"> <i class="fa fa-users"></i> Listado de usuarios</a>
              </div>
            </div>

            <!--  TERMINO DEL CONTENIDO -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <?php include (VISTA_RUTA .'admininclude/scripts.php') ?>
</body>

</html>
