var ventaApp = angular.module('ventaApp',[]);
ventaApp.controller('ventaController',['$scope', '$http',function($scope, $http ){
  $scope.productos = [];
  $scope.cargarProductos = function(){
    $http.get('../producto/todos').then(function($request){
      $scope.productos = $request.data;
      console.log($scope.productos);
    });
  };

}]);
