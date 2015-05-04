app.controller("accederController",function($scope,accederUsuario){
	$scope.usuario = {};

	$scope.submit = function(){
		accederUsuario.acceder($scope.usuario);
	}
	


});