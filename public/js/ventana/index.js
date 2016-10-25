	/*	**********************	agregar google Analytics	**************************	*/
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
			
	/* ********** Verificar si el navegador visitante es chrome o firefox u otro, para mostrar aviso de uso de navegador	*********	*/
		if (navigator.userAgent.toLowerCase().indexOf('chrome') < 0 && navigator.userAgent.toLowerCase().indexOf('firefox') < 0){
			window.setTimeout(function () {
				$("#browserWarning").fadeIn(1000).delay(3000).fadeOut(2000);
			},3000);
		}
		
	/*	*****	Script para mensaje emergente de actualización de navegador	*****	*/
		var $buoop = {c:2};
		function $buo_f(){
		 var e = document.createElement("script");
		 e.src = "//browser-update.org/update.min.js";
		 document.body.appendChild(e);
		};
		try {document.addEventListener("DOMContentLoaded", $buo_f,false)}
		catch(e){window.attachEvent("onload", $buo_f)}
		
	/*	*****	Script para mensaje emergente de actualización de navegador	*****	*/
		var $buoop = {c:2};
		function $buo_f(){
		 var e = document.createElement("script");
		 e.src = "//browser-update.org/update.min.js";
		 document.body.appendChild(e);
		};
		try {document.addEventListener("DOMContentLoaded", $buo_f,false)}
		catch(e){window.attachEvent("onload", $buo_f)}