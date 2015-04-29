
app.controller("servicioConfiguracionController",function($scope){
	$scope.servicio = {}
	$scope.etiquetas = [];
		
	
	

	function cargar_mapa(){
		var map;
	    $(document).ready(function(){
	      
	      map = new GMaps({
	        div: '#mapa',
	        lat: -12.043333,
	        lng: -77.028333
	      });

	      GMaps.geolocate({
	        success: function(position){
	          map.setCenter(position.coords.latitude, position.coords.longitude);
	        },
	        error: function(error){
	          //alert('Geolocation failed: '+error.message);
	        },
	        not_supported: function(){
	          //alert("Your browser does not support geolocation");
	        },
	        always: function(){
	          //alert("Done!");
	        }
	      });



	    });
	}
	cargar_mapa();

	$scope.crear_etiquetas = function(){
		var arreglo = $scope.servicio.clave;

		$scope.etiquetas = arreglo.split(",");
	}
	
});