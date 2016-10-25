/*	----------	Ajustes de visualización del menú incluido de ventana educativa y menú de apps	----------	*/
	$('#buscar').css('visibility','hidden');
	$('#iconoBuscar').css('visibility','hidden');
	$('#navegacionVentana').removeClass('menuVentana');
	$('#navegacionVentana').addClass('menuVentanaRedmite');
	$('#navegacionVentana').addClass('navbar-inverse');
	$('#navegacionVentana').removeClass('navbar-fixed-top');
	$('#mueveTablaApps').removeClass('mueveTabla');
	$('#mueveTablaApps').addClass('tablaMenuApps');
	$('#menuVentanaRegistro').removeClass('fondoRegistro');
	$('#menuVentanaRegistro').addClass('fondoRegistroMedia');
	$('#frmBuscarMenu').addClass('hidden-xs');
	$('#navegacionVentana').css('zIndex','11');
	if($(window).width()>'1799'){
		$('#navegacionVentana').css('height','85px');
		$('#btnIngresa').addClass('btn-lg');
	}
	else if($(window).width()<'767'){
		$('#navegacionVentana').css('height','0px');
	}
	else{
		$('#navegacionVentana').css('height','55px');
	}