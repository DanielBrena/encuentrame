app.controller("administradorController",function($scope){

	$scope.form_ser = false;



	$("#servicio").click(function(){
		$(this).slideToggle("slow",function(){

        });
        $scope.form_ser = true;
	})

});