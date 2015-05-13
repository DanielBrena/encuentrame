
app.controller("administradorController",function($scope,categoriaServicio,factoryServicio){
	$scope.servicio = {};
	$scope.categoria_servicios = {};
	$scope.valido = false;


	$scope.submit = function(){
		factoryServicio.agregar($scope.servicio);
	}

	categoriaServicio.getAll().success(function(data){
		
		
		$scope.categoria_servicios = data.categorias;
		$scope.servicio.categoria = data.categorias[0].cs_id;
	});
	

	$scope.validar_nombre = function(){

		if($scope.servicio.nombre == ""){
			$scope.valido = false;
		}else{
			var resultado =categoriaServicio.validName($scope.servicio);
			if(resultado.status == "success"){
				$scope.valido = true;
			}else{
				$scope.valido = false;
			}
		}
		
	}


});

app.controller("administradorControllerEvent",function($scope){
	$scope.form_ser = false;



	$("#servicio").click(function(){
		
		$(this).slideToggle("slow",function(){

        });
        $scope.form_ser = true;
	})

});