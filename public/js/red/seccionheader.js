/*	----------	Ajustes de visualización del menú incluido de ventana educativa y menú de apps	----------	*/
	if($(window).width()>'1799'){
		$('#btnIngresa').addClass('btn-lg');
	}
/*	$('#navegacionVentana').removeClass('navbar-fixed-top');*/
	$('#navegacionVentana').addClass('navbar-inverse');
	$('#navegacionVentana').css('zIndex','11');
	$('#navegacionVentana').css('margin-bottom','0');
	$('#dropdownApps').addClass('col-xs-2');
	$('#dropdownSesion').addClass('col-xs-4');