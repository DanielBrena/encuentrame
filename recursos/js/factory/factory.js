app.factory("registroUsuario",function($http,mensajeFlash){
	return{
		registro: function(usuario){
			return $http(
				{
					url:"http://localhost:8888/encuentrame/usuario/registro",
					method:"POST",
					data:$.param(usuario),
					headers: 
					{
						'Content-Type' : 'application/x-www-form-urlencoded'
					}
				}
			).success(function(data){
				mensajeFlash.show(data.server.msg);
			}).error(function(data){
				console.error(data);
			});
		}
	}
});

app.factory("accederUsuario",function($http,mensajeFlash,$window){
	return {
		acceder: function(usuario){
			return $http(
			{
				url 	: 	"http://localhost:8888/encuentrame/usuario/acceso",
				method 	: 	"POST",
				data    : 	$.param(usuario),
				headers: 
				{
					'Content-Type' 	:  'application/x-www-form-urlencoded'
				}
			
			}).success(function(data){
				if(data.server.status === "success"){
					$window.location.href = "http://localhost:8888/encuentrame/usuario";
					
				}else{
					mensajeFlash.show(data.server.msg);
				}
				
			}).error(function(data){
				console.error(data);
			});
		}
	}
});

app.factory("mensajeFlash",function($rootScope){
	return{
		show:function(m){
			$rootScope.flash = m;
		},
		clear:function(){
			$rootScope.flash = "";
		}
	}
});

app.factory("factoryServicio",function($http,$window){
	return{
		agregar: function(servicio){
			return $http(
				{
					url:"http://localhost:8888/encuentrame/servicio/agregar_servicio",
					method:"POST",
					data:$.param(servicio),
					headers: 
					{
						'Content-Type' : 'application/x-www-form-urlencoded'
					}
				}
			).success(function(data){
				if(data.server.status === "success"){
					
					$window.location.href = "http://localhost:8888/encuentrame/servicio/informacion/"+data.app.id;
					
				}else{
					mensajeFlash.show(data.server.msg);
				}
			}).error(function(data){
				console.error(data);
			});
		},
		selectById: function(servicio){
			return $http(
				{
					url:"http://localhost:8888/encuentrame/servicio/selectById",
					method:"POST",
					data:$.param(servicio),
					headers: 
					{
						'Content-Type' : 'application/x-www-form-urlencoded'
					}
				}
			)
		},
		actualizar: function(servicio){
			return $http(
				{
					url:"http://localhost:8888/encuentrame/servicio/update_servicio",
					method:"POST",
					data:$.param(servicio),
					headers: 
					{
						'Content-Type' : 'application/x-www-form-urlencoded'
					}
				}
			)
		}
	}
});
app.factory("categoriaServicio",function($http){
	return{
		getAll:function(){
			return $http(
			{
				url 	: 	"http://localhost:8888/encuentrame/categoriaservicio/getall",
				method 	: 	"GET",
				headers: 
				{
					'Content-Type' 	:  'application/x-www-form-urlencoded'
				}
			
			}); 
		},
		validName:function(servicio){
			return $http(
			{
				url 	: 	"http://localhost:8888/encuentrame/servicio/validar_nombre_servicio",
				method 	: 	"POST",
				data    : 	$.param(servicio),
				headers: 
				{
					'Content-Type' 	:  'application/x-www-form-urlencoded'
				}
			
			})
		}

	}
});

