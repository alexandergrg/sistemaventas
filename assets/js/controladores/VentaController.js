var ventaApp = angular.module('ventaApp',[]);

ventaApp.controller('ventaController',['$scope', '$http', '$filter',function($scope, $http, $filter){
  $scope.productos = [];
  $scope.productosAdd = [];
  $scope.producto ={};

  $scope.url = $('urlPrincipal').val();


  $scope.cargarProductos = function(){
    $http.get('../producto/todos').then(function($request){
      $scope.productos = $request.data;
      console.log($scope.productos);
    });
  };

  $scope.seleccionarProducto = function($id_producto){
    var prod = $filter('filter')($scope.productos,{
      id:$id_producto
    })[0];

    $scope.producto = {
      id: prod.id,
      nombre: prod.nombre,
      cantidad: 1,
      precio: prod.precio,
      subtotal: prod.precio
    };

    $scope.productosAdd.push($scope.producto);
    $('#listaProductos').modal('hide');

  };

  $scope.agregarProducto = function(){
  };


}]);
