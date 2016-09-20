$('#buscar').css('display', 'none');
$('#iconoBuscar').css('display', 'none');
$('#navegacionVentana').css('height', '55px');

$('#navegacionVentana').addClass('fondoDegradadoMenuInicial');
$(window).scroll(function(){
	var scroll_v = this.pageYOffset;
	if(scroll_v > 10){
		$('#navegacionVentana').removeClass('fondoDegradadoMenuInicial');
		$('#navegacionVentana').addClass('fondoDegradadoMenu');
	}
	if(scroll_v < 10){
		$('#navegacionVentana').removeClass('fondoDegradadoMenu');
		$('#navegacionVentana').addClass('fondoDegradadoMenuInicial');
	}
});