app.controller("servicioController",function($scope){
	$scope.mi_pos = {};
	$scope.map;

	var mapa = null;

	var directionsDisplay = null;
	var directionsService = null;

	function cargarUbicacion(){
		/*GMaps.geolocate({
		  success: function(position) {
		    //map.setCenter(position.coords.latitude, position.coords.longitude);
		  	$scope.mi_pos.lat = position.coords.latitude;
		    $scope.mi_pos.lng = position.coords.longitude;
		   console.log($scope.mi_pos.lat + " : " + $scope.mi_pos.lng);
		  	mostrar_ruta();
		  },
		  error: function(error) {
		    alert('Geolocation failed: '+error.message);
		  },
		  not_supported: function() {
		    alert("Your browser does not support geolocation");
		  },
		  always: function() {
		    //alert("Done!");
		  }
		});
		*/
	}

	$(".evt_medio").click(function(){
		console.log( $(this).data("value"));
		$scope.mi_pos.mode = $(this).data("value");

		
		

		if(matchMedia("(max-width: 480px)").matches || matchMedia("(max-device-width: 480px)").matches){

		} else{
			$("#mapa").css("width","70%");
		}
		
		
		$("#ruta").css("display","block");
		mostrar_ruta();

	})

	function mostrar_ruta(){
		var myLatlng = new google.maps.LatLng(20.68009, -101.35403);
	    var myOptions = {
	        zoom: 4,
	        center: myLatlng,
	        mapTypeId: google.maps.MapTypeId.ROADMAP
	    };

	    mapa = new google.maps.Map($("#mapa").get(0), myOptions);
		directionsDisplay = new google.maps.DirectionsRenderer();
		directionsService = new google.maps.DirectionsService();


		var request = {
		        origin: new google.maps.LatLng($scope.mi_pos.lat, $scope.mi_pos.lng),
		        destination: new google.maps.LatLng(20.68009, -101.35403),
		        travelMode: google.maps.DirectionsTravelMode[$scope.mi_pos.mode],
		        unitSystem: google.maps.DirectionsUnitSystem["METRIC"],
		        provideRouteAlternatives: true
	    };
		directionsService.route(request, function(response, status) {
	        if (status == google.maps.DirectionsStatus.OK) {
	            directionsDisplay.setMap(mapa);
	            directionsDisplay.setPanel($("#ruta").get(0));
	            directionsDisplay.setDirections(response);
	        } else {
	            alert("There is no directions available between these two points");
	        }
	    });

		/*var directionsDisplay = new google.maps.DirectionsRenderer();
		var directionsService = new google.maps.DirectionsService();

		var request = {
		 origin: new google.maps.LatLng(41.850033, -87.6500523),
		 destination: new google.maps.LatLng(41.000033, -87.0000523),
		 travelMode: google.maps.DirectionsTravelMode[$scope.mi_pos.mode],
		 unitSystem: google.maps.DirectionsUnitSystem["METRIC"],
		 provideRouteAlternatives: true
		 };

		 directionsService.route(request, function(response, status) {
		    if (status == google.maps.DirectionsStatus.OK) {
		        directionsDisplay.setMap($scope.map);
		        directionsDisplay.setPanel($("#ruta").get(0));
		        directionsDisplay.setDirections(response);
		    } else {
		            alert("No existen rutas entre ambos puntos");
		    }
		});*/
	}
	
	

	function cargar_mapa(){
		
	    $(document).ready(function(){
	      
	      $scope.map = new GMaps({
	        div: '#mapa',
	        lat: -12.043333,
	        lng: -77.028333
	      });

	      GMaps.geolocate({
	        success: function(position){
	          $scope.map.setCenter(position.coords.latitude, position.coords.longitude);
	        	$scope.mi_pos.lat = position.coords.latitude;
		    	$scope.mi_pos.lng = position.coords.longitude;
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