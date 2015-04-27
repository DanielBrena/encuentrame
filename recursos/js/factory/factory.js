app.factory("registroUsuario",function($http){
	return{
		newRegistro: function(usuario){
			return $http({
				url:"http://localhost:8888/encuentrame/usuario/registro",
				method:"POST",
				data:usuario,
				headers:{"Content-Type":"application/x-www-form-urlenconded"},
				type:"json"
			}).success(function(data){
				console.log(data.data);
			}).error(function(){

			});
		}
	}
})