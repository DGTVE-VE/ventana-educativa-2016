
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