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
                    <h1 class="page-header"> <?php echo isset($usuario) ? 'Actualizar' : 'Nuevo'?> Usuario | <a href="<?php url('usuario')?>" class ="btn btn-default" ><i class="fa fa-users"></i> Ver listado</a></h1>
                </div>

                <!-- /.col-lg-12 -->
            </div>
            <!--  INICIO DEL  CONTENIDO -->
              <div class="row">
                <div class="col-md-6">

                  <div class="panel panel-default">
                    <div class="panel-body">
                      <form action="<?php url('usuario/agregar')?>" method="POST" role="form">
                             <legend>Datos del Usuario</legend>

                             <?php if (isset($usuario)) {?>
                               <input type="hidden" name="usuario_id" value="<?php echo $usuario->id ;?>">
                             <?php } ?>

                             <div class="form-group">
                              <label for="usuario">Usuario: </label>
                              <input value="<?php echo isset($usuario) ? $usuario->usuario : ''; ?>" required autofocus type="text" name="usuario" id="usuario" class="form-control" placeholder="Mi nombre de usuario">
                             </div>
                             <div class="form-group">
                              <label for="pass">Password: </label>
                              <input type="password" name="pass" id="pass" class="form-control" placeholder="Ingresar Contraseña">
                             </div>

                             <div class="form-group">
                              <label for="email">Email: </label>
                              <input value="<?php echo isset($usuario) ? $usuario->email : '' ;?>" required type="email" name="email" id="email" class="form-control" placeholder="micorreo@hotmail.com">
                             </div>
                             <div class="form-group">
                              <label for="inputPrivi">Privilegio: </label>
                              <select name="privilegio" id="inputPrivi"  class="form-control" required="required">
                                <option <?php echo isset($usuario) && $usuario->privilegio =='admin' ? 'selected' : '' ;?> value="admin">Administrador</option>
                                <option <?php echo isset($usuario) && $usuario->privilegio =='venta' ? 'selected' : '' ;?> value="venta">Vendedor</option>
                              </select>
                             </div>

                             <button type="submit" class="btn btn-primary">Registrar</button>
                      </form>
                    </div>
                  </div>

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
