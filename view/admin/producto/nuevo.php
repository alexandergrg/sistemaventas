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
                  <h1 class="page-header"> <?php echo isset($producto) ? 'Actualizar' : 'Nuevo'?> Producto | <a href="<?php url('producto')?>" class ="btn btn-default" ><i class="fa fa-users"></i> Ver listado</a></h1>
              </div>

                <!-- /.col-lg-12 -->
            </div>
            <!--  INICIO DEL  CONTENIDO -->
              <div class="row">
                <div class="col-md-6">

                  <div class="panel panel-default">
                    <div class="panel-body">
                      <form action="<?php url('producto/agregar')?>" method="POST" role="form">
                             <legend>Datos del Producto</legend>

                             <?php if (isset($producto)) {?>
                              <input type="hidden" name="id_producto" value="<?php echo $producto->id_producto ;?>">
                            <?php } ?>

                            <div class="form-group">
                             <label for="nombre">Producto: </label>
                             <input value="<?php echo isset($producto) ? $producto->nombre : ''; ?>" required autofocus type="text" name="nombre" id="nombre" class="form-control" placeholder="Mi nombre de producto">
                            </div>
                            <div class="form-group">
                             <label for="precio">Precio: </label>
                             <input value="<?php echo isset($producto) ? $producto->precio : ''; ?>" type="text" name="precio" id="precio" class="form-control" placeholder="123.56">
                            </div>
                            <div class="form-group">
                             <label for="categoria">Categoría: </label>
                             <input value="<?php echo isset($producto) ? $producto->categoria : ''; ?>" type="text" name="categoria" id="categoria" class="form-control" placeholder="Leche y Lacteos.">
                            </div>
                            <div class="form-group">
                             <label for="descripcion">Descripción: </label>
                             <textarea  id="descripcion" name="descripcion" rows="5" cols="40" class="form-control" placeholder="Leche de vaca, presentación en funda, unida por litro." ><?php echo isset($producto) ? $producto->descripcion : '';?></textarea>
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
