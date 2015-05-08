app.controller("administradorController",function($scope,categoriaServicio){
	$scope.servicio = {};

	


	$scope.submit = function(){
		console.log($scope.servicio);
	}

	var a = categoriaServicio.getAll();
	a.success(function(d){
		console.log(d);
	});
	
});

app.controller("administradorControllerEvent",function($scope){
	$scope.form_ser = false;



	$("#servicio").click(function(){
		$(this).slideToggle("slow",function(){

        });
        $scope.form_ser = true;
	})

});