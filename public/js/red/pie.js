/*	------	sdk twitter	-------	*/
    window.twttr = (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0],
                    t = window.twttr || {};
            if (d.getElementById(id))
                return t;
            js = d.createElement(s);
            js.id = id;
            js.src = "https://platform.twitter.com/widgets.js";
            fjs.parentNode.insertBefore(js, fjs);

            t._e = [];
            t.ready = function (f) {
                t._e.push(f);
            };

            return t;
        }(document, "script", "twitter-wjs"));

/*	------	compartir twitter	-------	*/
    !function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
        if (!d.getElementById(id)) {
            js = d.createElement(s);
            js.id = id;
            js.src = p + '://platform.twitter.com/widgets.js';
            fjs.parentNode.insertBefore(js, fjs);
        }
    }(document, 'script', 'twitter-wjs');
		
/*	-------	sdk facebook	-------	*/
    window.fbAsyncInit = function () {
        FB.init({
            appId: '1408909052733113',
            xfbml: true,
            version: 'v2.6'
        });
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
		
/************ Valida correo existente en el formulario ****************************************************/
	function muestraError(flag, mensaje, componente) {
		if (flag) {
			document.getElementById(componente).style.backgroundColor = 'lightpink';
			document.getElementById('btnEnviar').disabled = true;
			document.getElementById('mensaje-error').innerText = mensaje;
			$('#mensaje-error').removeClass('hidden');
		} else {
			document.getElementById(componente).style.backgroundColor = 'white';
			document.getElementById('btnEnviar').disabled = false;
			document.getElementById('mensaje-error').innerText = '';
			$('#mensaje-error').addClass('hidden');
		}
	}
	function consultaCorreo(url, mensaje, componente) {
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function () {
			if (xhttp.readyState == 4 && xhttp.status == 200) {
				if (xhttp.responseText == '1') { // el correo ya existe
					muestraError(true, 'el correo ya existe', componente);
				} else {
					muestraError(false, '', componente);
				}
			}
		};
		xhttp.open("GET", url, true);
		xhttp.send();
	}
	/*$("#correoElectronico").on('input', function () {
		muestraError(false, '', 'email');
	});*/