<!DOCTYPE html>
<html lang="es">
<head>
      <?php include (VISTA_RUTA .'admininclude/head.php') ?>
</head>
<body>

    <div id="wrapper" ng-app ="ventaApp" ng-controller="ventaController">
        <?php include (VISTA_RUTA .'admininclude/menu.php') ?>
        <div id="page-wrapper">
            <div class="row">
              <div class="col-lg-12">
                  <h1 class="page-header"> <?php echo isset($venta) ? 'Actualizar' : 'Nueva'?> Venta | <a href="<?php url('venta')?>" class ="btn btn-default" ><i class="fa fa-users"></i> Ver listado</a></h1>
              </div>

                <!-- /.col-lg-12 -->
            </div>
            <!--  INICIO DEL  CONTENIDO -->
              <div class="row">
                <form action="<?php url('venta/agregar')?>" method="POST" role="form">
                <div class="col-md-6">
                  <div class="panel panel-default">
                    <div class="panel-body">
                             <legend>Datos del cliente</legend>
                             <?php if (isset($venta)) {?>
                              <input type="hidden" name="id" value="<?php echo $venta->id ;?>">
                            <?php } ?>
                            <div class="form-group">
                             <label for="cliente">Cliente: </label>
                             <input value="<?php echo isset($venta) ? $venta->cliente : ''; ?>" required autofocus type="text" name="cliente" id="cliente" class="form-control" placeholder="Esteba Nano">
                            </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="panel panel-default">
                    <div class="panel-body">
                      <button ng-click="cargarProductos()" data-toggle="modal" data-target ="#listaProductos" type="button" class="btn btn-sm btn-primary">Agregar Producto</button>
                      <hr>
                      <table class="table table-hover">
                             <thead>
                              <tr>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th>Subtotal</th>
                              </tr>
                             </thead>
                             <tbody>
                              <tr ng-repeat="pd in productosAdd" >
                                <td>{{pd.nombre}}</td>
                                <td>{{pd.cantidad}}</td>
                                <td>{{pd.precio}}</td>
                                <td>{{pd.subtotal}}</td>
                              </tr>
                             </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </form>
              </div>

              <!-- Modal -->
              <div class="modal fade" id="listaProductos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">Listado de Productos</h4>
                    </div>
                    <div class="modal-body">
                      <!-- Inicio del contenido del modal -->
                      <input type="text" class="form-control" placeholder="Buscar Productos"ng-model="buscarProducto" >
                      <hr>
                      <table class="table table-hover">
                             <thead>
                              <tr>
                                <th>Producto</th>
                                <th>Precio</th>
                                <th>Accion</th>
                              </tr>
                             </thead>
                             <tbody>
                              <tr ng-repeat=" producto in productos | filter:buscarProducto" >
                                <td>{{producto.nombre}}</td>
                                <td>{{producto.precio | currency : 'USD./ ' }}</td>
                                <td>
                                  <button ng-click ="seleccionarProducto(producto.id)" type="button" class="btn btn-sm btn-primary">
                                    <i class="fa fa-plus-circle "></i>
                                  </button>
                                </td>
                              </tr>
                             </tbody>
                      </table>

                      <!-- Fin del contenido del modal -->
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
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
