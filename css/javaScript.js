

if($(document).ready()){
	$(function() {
    $(".loading").fadeOut();
});

}

if ($(window).width() < 767) {
		$('.menu').hide();
		$('.mobilebtn').click(function(){
			$('.menu').toggle();
		});
		$(".loading").fadeOut();
	}
else{
	$('.menu').show();
}

/* for google maps */
$(document).ready(function () {
var myCenter=new google.maps.LatLng(51.2933854,-0.7601123999999999);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:10,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  icon:'./img/houseimg.png',
  animation:google.maps.Animation.BOUNCE
  });

marker.setMap(map);

}

google.maps.event.addDomListener(window, 'load', initialize);

});