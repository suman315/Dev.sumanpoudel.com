if ($(window).width() < 767) {
		$('.menu').hide();
		$('.mobilebtn').click(function(){
			$('.menu').toggle();
		});
	}
else{
	$('.menu').show();
}