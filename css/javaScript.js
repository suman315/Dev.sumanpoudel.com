

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