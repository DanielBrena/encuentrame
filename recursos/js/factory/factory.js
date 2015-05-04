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

app.factory("accederUsuario",function($http,mensajeFlash){
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
				mensajeFlash.show(data.server.msg);
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