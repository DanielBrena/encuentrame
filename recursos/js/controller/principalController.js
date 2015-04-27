
app.controller("principalController",function($scope){
	
	$scope.titulo = "Encuentrame";

	$scope.sub_nav = [
		{
			url:"",
			nombre:"Servicios recientes"
		},
		{
			url:"",
			nombre:"Sericios mas buscados"
		},
		{
			url:"",
			nombre:"Eventos de la semana"
		},
		{
			url:"",
			nombre:"Mejores promociones"
		},
		{
			url:"",
			nombre:"Los mejores eventos"
		}
	];
	

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
	
});