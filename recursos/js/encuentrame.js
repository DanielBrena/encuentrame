var app = angular.module("app",[]);

app.config(function($routeProvider){
	$routeProvider.when("/registro",{
		controller:"registroController",
		templateUrl:"template/registro.html"
	});
});