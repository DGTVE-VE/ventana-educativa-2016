	//        Script para Google Analytics de la red Mesoamericana	
	(function (i, s, o, g, r, a, m) {
		i['GoogleAnalyticsObject'] = r;
		i[r] = i[r] || function () {
			(i[r].q = i[r].q || []).push(arguments)
		}, i[r].l = 1 * new Date();
		a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
		a.async = 1;
		a.src = g;
		m.parentNode.insertBefore(a, m)
	})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

	ga('create', 'UA-75232922-1', 'auto');
	ga('send', 'pageview');

	/*		*****	Cambio de color iconos redes sociales		*****		*/
	if($(window).width()<'992'){
		$('.cambiacolorredesSociales').addClass('iconoBlanco');
		$('.cambiacolorredesSociales').removeClass('cambiacolorredesSociales');
	}
	/*if (navigator.userAgent.toLowerCase().indexOf('chrome') > -1 ){document.body.style.backgroundAttachment = 'scroll';}else{}*/

	