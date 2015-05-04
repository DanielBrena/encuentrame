app.controller("registroController",function($scope,registroUsuario){
	$scope.usuario = {};

	$scope.submit = function(){
		registroUsuario.registro($scope.usuario);
	}
	


});