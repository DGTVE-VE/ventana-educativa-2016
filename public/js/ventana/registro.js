/************ Valida formato CURP ****************************************************/
	function mensajeCURP(flag, mensaje, componente) {
		if (flag) {
			document.getElementById(componente).style.backgroundColor = 'lightpink';
			document.getElementById('mensaje-error').innerText = 'El ' + mensaje + ' tiene un formato incorrecto';
			$('#mensaje-error').removeClass('hidden');
			document.getElementById('btnEnviar').disabled = true;
		} else {
			document.getElementById(componente).style.backgroundColor = 'white';
			document.getElementById('mensaje-error').innerText = '';
			document.getElementById('btnEnviar').disabled = false;
			$('#mensaje-error').addClass('hidden');
		}
	}
	function ValidaCURP(curpStr) {
		if (curpStr != '') {
			var strCorrecta;
			strCorrecta = curpStr;
			var valid = "[A-Z]{1}[AEIOU]{1}[A-Z]{2}[0-9]{2}" +
					"(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])" +
					"[HM]{1}" +
					"(AS|BC|BS|CC|CS|CH|CL|CM|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)" +
					"[B-DF-HJ-NP-TV-Z]{3}" +
					"[0-9A-Z]{1}[0-9]{1}$";
			var validRfc = new RegExp(valid);
			var matchArray = strCorrecta.match(validRfc);

			if (matchArray == null) {
				mensajeCURP(true, 'C U R P', 'curpDocente');
			} else {
				mensajeCURP(false, 'C U R P', 'curpDocente');
			}
		}
	}
/************ Muestra campos de CURP y CCT para docente ****************************************************/
	function muestraDocente() {
		if ($("#is_teacher").is(':checked')) {
			$("#ocultaDocente").css('visibility', 'visible');
			document.getElementById("ocultaDocente").required = true;
			document.getElementById('basica').required = true;
		} else {
			document.getElementById("ocultaDocente").required = false;
			$("#ocultaDocente").css('visibility', 'hidden');
			$("#ocultaDiv").css('visibility', 'hidden');
			document.getElementById('OcultaNombreCCT').style.visibility = "hidden";
			document.getElementById('basica').required = false;
		}
	}
	function muestraAdicional() {
		if ($("#telesecundaria").is(':checked')) {
			$("#ocultaDiv").css('visibility', 'visible');
			document.getElementById("curpDocente").required = true;
			document.getElementById("cct").required = true;
		} else if ($("#basica").is(':checked')) {
			document.getElementById("curpDocente").required = false;
			document.getElementById("cct").required = false;
			$("#ocultaDiv").css('visibility', 'hidden');
		}
	}
	function ocultaAdicional() {
		document.getElementById("curpDocente").required = false;
		document.getElementById("cct").required = false;
		$("#ocultaDiv").css('visibility', 'hidden');
		document.getElementById('OcultaNombreCCT').style.visibility = "hidden";
	}
/************ Valida si existe CCT capturado ****************************************************/
	function resaltaCampo(flag, mensaje, componente) {
		if (flag) {
			document.getElementById(componente).style.backgroundColor = 'lightpink';
			document.getElementById('mensaje-error').innerText = 'El ' + mensaje + ' no existe';
			$('#mensaje-error').removeClass('hidden');
			document.getElementById('btnEnviar').disabled = true;
			document.getElementById('curpDocente').disabled = true;
		} else {
			document.getElementById(componente).style.backgroundColor = 'white';
			document.getElementById('mensaje-error').innerText = '';
			document.getElementById('btnEnviar').disabled = false;
			document.getElementById('curpDocente').disabled = false;
			$('#mensaje-error').addClass('hidden');
		}
	}

	function VerificaCCT() {
		document.getElementById('cct').value;
	}
	function consultaCCT(url, mensaje, componente) {
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function () {
			if (xhttp.readyState == 4 && xhttp.status == 200) {
				console.log('respuesta ' + xhttp.responseText);
				if (xhttp.responseText == 0) { // cct no existe
					resaltaCampo(true, mensaje, componente);
					document.getElementById('OcultaNombreCCT').style.visibility = "hidden";
				} else {
					resaltaCampo(false, mensaje, componente);
					document.getElementById('OcultaNombreCCT').style.visibility = "visible";
					document.getElementById('cctnombre').innerHTML = xhttp.responseText;
				}
			}
		};
		xhttp.open("GET", url, true);
		xhttp.send();
	}
/************ Valida correo existente en el formulario ****************************************************/
	function muestraError(flag, mensaje, componente) {
		console.log('entro a cambiar clase');
		if (flag) {
			document.getElementById(componente).style.backgroundColor = 'lightpink';
			document.getElementById('mensaje-error').innerText = 'El ' + mensaje + ' ya existe';
			$('#mensaje-error').removeClass('hidden');
			document.getElementById('btnEnviar').disabled = true;
		} else {
			document.getElementById(componente).style.backgroundColor = 'white';
			document.getElementById('mensaje-error').innerText = '';
			document.getElementById('btnEnviar').disabled = false;
			$('#mensaje-error').addClass('hidden');
		}
	}
	function loadDoc(url, mensaje, componente) {
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function () {
			if (xhttp.readyState == 4 && xhttp.status == 200) {
				if (xhttp.responseText != 'null') { // el correo ya existe
					muestraError(true, mensaje, componente);
				} else {
					muestraError(false, mensaje, componente);
				}
			}
		};
		xhttp.open("GET", url, true);
		xhttp.send();
	}
	$("#email").on('input', function () {
		muestraError(false, '', 'email');
	});
	$("#nick").on('input', function () {
		muestraError(false, '', 'nick');
	});
/************ Valida correo existente en el formulario ****************************************************/
	$(function () {
		$(document).tooltip({
			content: function () {
				return $(this).prop('title');
			},
			show: null,
			close: function (event, ui) {
				ui.tooltip.hover(
						function () {
							$(this).stop(true).fadeTo(400, 1);
						},
						function () {
							$(this).fadeOut("400", function () {
								$(this).remove();
							})
						});
			}
		});
	});

	$(function ($) {
		$.datepicker.regional['es'] = {
			closeText: 'Cerrar',
			prevText: '<Ant',
			nextText: 'Sig>',
			currentText: 'Hoy',
			monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
			monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
			dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
			dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'],
			dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
			weekHeader: 'Sm',
			dateFormat: 'yy/mm/dd',
			firstDay: 1,
			isRTL: false,
			showMonthAfterYear: false,
			changeYear: true,
			yearRange: 'c-100:c',
			yearSuffix: ''
		};
		$.datepicker.setDefaults($.datepicker.regional['es']);
		$('#datepicker').datepicker();
	});