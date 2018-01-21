var app = angular.module('tmpApp',[]);

app.controller('tmpController', ['$scope', '$http', function($scope, $http){
  $scope.submenu = [];
  $scope.myclass = [];
  $scope.submenu[0] = false;
  $scope.myclass[0] = null;
}]);
