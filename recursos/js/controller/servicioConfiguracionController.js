
app.controller("servicioConfiguracionController",function($scope,categoriaServicio,factoryServicio,$location){
	$scope.servicio = {};
	$scope.etiquetas = [];
	$scope.categoria_servicios = {};
	$scope.ubicacion = {};


	$scope.map = null;
	$scope.infoWindow = null;


	function getAllCategorias(){
		categoriaServicio.getAll().success(function(data){
		
		
			$scope.categoria_servicios = data.categorias;
			
		});

	}

	
	$scope.submit = function(){
		
		$scope.servicio.ubicacion = $scope.ubicacion;

		console.log($scope.servicio);
		factoryServicio.actualizar($scope.servicio).success(function(data){
			console.log(data);
		});
	}
	


	function selectById(){
		var url  = $location.absUrl();
		var url = url.split("/");
		var id = url[url.length-1];
		$scope.servicio.id = id;

		factoryServicio.selectById($scope.servicio).success(function(data){
			getAllCategorias();

			$scope.servicio.nombre = data.servicio[0].ser_nombre;
			$scope.servicio.descripcion = data.servicio[0].ser_descripcion;
			$scope.servicio.categoria = data.servicio[0].categoria_servicio_cs_id;
			$scope.servicio.palabras_clave = data.servicio[0].ser_palabras_clave;
			$scope.crear_etiquetas();
			
			$scope.ubicacion = data.ubicacion;
			cargar_mapa();
		});
	}

	selectById();

	
	
	$("#btn_search").click(function(){
		
		 var address = $scope.buscar
		    // Creamos el Objeto Geocoder
		    var geocoder = new google.maps.Geocoder();
		    // Hacemos la petición indicando la dirección e invocamos la función
		    // geocodeResult enviando todo el resultado obtenido
		    geocoder.geocode({ 'address': address}, geocodeResult);

	});
	
	function geocodeResult(results, status) {
    // Verificamos el estatus
	    if (status == 'OK') {
	    	$scope.ubicacion.lat = results[0].geometry.location.lat();
	    	$scope.ubicacion.lng = results[0].geometry.location.lng();
	        // Si hay resultados encontrados, centramos y repintamos el mapa
	        // esto para eliminar cualquier pin antes puesto
	        var mapOptions = {
	            center: results[0].geometry.location,
	            mapTypeId: google.maps.MapTypeId.ROADMAP
	        };

	        infoWindow = new google.maps.InfoWindow();
	        map = new google.maps.Map($("#mapa").get(0), mapOptions);
	        // fitBounds acercará el mapa con el zoom adecuado de acuerdo a lo buscado
	        map.fitBounds(results[0].geometry.viewport);
	        // Dibujamos un marcador con la ubicación del primer resultado obtenido
	        var markerOptions = { 
	        	position: results[0].geometry.location,
	            draggable: true 
	        }
	        var marker = new google.maps.Marker(markerOptions);

	        marker.setMap(map);

	        google.maps.event.addListener(marker, 'dragend', function(){ openInfoWindow(marker); });
			google.maps.event.addListener(marker, 'click', function(){ openInfoWindow(marker); });
	    } else {
	        // En caso de no haber resultados o que haya ocurrido un error
	        // lanzamos un mensaje con el error
	        alert("Geocoding no tuvo éxito debido a: " + status);
	    }
	}
	

	function openInfoWindow(marker) {
	    var markerLatLng = marker.getPosition();
	    infoWindow.setContent([
	        '<strong>La posicion del marcador es:</strong><br/>',
	        markerLatLng.lat(),
	        ', ',
	        markerLatLng.lng(),
	        '<br/>Arrástrame para actualizar la posición.'
	    ].join(''));

	    $scope.ubicacion.lat = markerLatLng.lat();
	    $scope.ubicacion.lng = markerLatLng.lng();

	    infoWindow.open(map, marker);
	}

	function cargar_mapa(){
		var myLatlng;
		var myOptions;
		console.log($scope.ubicacion.length);
		if($scope.ubicacion.length == 0){
			

			if (navigator.geolocation) {

				navigator.geolocation.getCurrentPosition(function(position) {
				  
				   	myLatlng = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
				  	$scope.ubicacion.lat = position.coords.latitude;
	    			$scope.ubicacion.lng = position.coords.longitude;
				  	myOptions = {
				      zoom: 13,
				      center: myLatlng,
				      mapTypeId: google.maps.MapTypeId.ROADMAP
				    }

				    map = new google.maps.Map($("#mapa").get(0), myOptions);
		 
					infoWindow = new google.maps.InfoWindow();
					 
					var marker = new google.maps.Marker({
					    position: myLatlng,
					    draggable: true,
					    map: map,
					    title:"Ejemplo marcador arrastrable"
					});
					
					google.maps.event.addListener(marker, 'dragend', function(){ openInfoWindow(marker); });
					google.maps.event.addListener(marker, 'click', function(){ openInfoWindow(marker); });

				});
			}else{

			}

		}else{

		}




	}
	

	$scope.crear_etiquetas = function(){
		var arreglo = $scope.servicio.palabras_clave;

		$scope.etiquetas = arreglo.split(",");
	}
	
});