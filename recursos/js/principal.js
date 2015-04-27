


$(document).ready(function(){
	$(".click_service_map").on("click",function(){
	// var a = $(this).attr("href");
	 

	var map = new GMaps({
        div: '#map',
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
$(document).foundation();

});
