		$('#navegacionVentana').css('height','55px');
		$('#navegacionVentana').addClass('fondoDegradadoMenuInicial');
		$('#navegacionVentana').addClass('navbar-fixed-top');
		$('#navegacionVentana').css('zIndex',900);
		$('#buttonColapse').removeClass('bordeBoton');
		$('#buttonColapse').addClass('bordeBotonBco');
		$('#dropdownApps').addClass('col-xs-2');
		$('#dropdownSesion').addClass('col-xs-4');
		$('.backNegro').addClass('backBlanco');
		$('.backNegro').removeClass('backNegro');
		$(window).scroll(function(){
			var scroll_v = this.pageYOffset;
			if(scroll_v > 10){
				$('#navegacionVentana').addClass('fondoDegradadoMenu');
				$('#navegacionVentana').removeClass('fondoDegradadoMenuInicial');
			}
			if(scroll_v < 10){
				$('#navegacionVentana').addClass('fondoDegradadoMenuInicial');
				$('#navegacionVentana').removeClass('fondoDegradadoMenu');
			}
		});