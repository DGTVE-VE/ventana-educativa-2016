	/*		*********	Activar giro de cubo con imagenes de fondo 	*********		*/
	function giraCubo(cubo, direccion){
		var cube = $(cubo); 
		var next = parseInt($('#next').val(), 10); 
		cube.imagecube('option', {direction: direccion}). 
			imagecube('rotate', next, function() { 
				$('#current').text($(cube.imagecube('current')).attr('title')); 
			}); 		
	}
	
	/*		*********	Girar imagen de frente con texto	*********		*/
	function flip(imgFrente) {
		var j = document.getElementById(imgFrente);
		j.style.transform = "translateY(-80px) rotatex(90deg) ";
		j.style.transitionDuration = "0.6s";
	}

	/*		*********	Regresar imagen de frente con texto	*********		*/
	function unflip(imgFrente) {
		var j = document.getElementById(imgFrente);
		j.style.transform = "translateY(0px) rotatex(0deg)";
		j.style.transitionDuration = "0.5s";
	}
	
	/*		*********	Activar funciones en eventos mouseenter y mouseleave	*********		*/
	$('#Cubo1').imagecube({repeat: false, full3D: false, speed:500});
	$('#eventoDocentes').mouseenter(function() { 
		giraCubo('#Cubo1','up');
		flip('frenteDocentes');
	});
	$('#eventoDocentes').mouseleave(function() { 
		giraCubo('#Cubo1','down');
		unflip('frenteDocentes');
	});
	$('#Cubo2').imagecube({repeat: false, full3D: false, speed:500});
	$('#eventoEstudiantes').mouseenter(function() { 
		giraCubo('#Cubo2','up');
		flip('frenteEstudiantes');
	});
	$('#eventoEstudiantes').mouseleave(function() {
		giraCubo('#Cubo2','down');
		unflip('frenteEstudiantes');
	});
	$('#Cubo3').imagecube({repeat: false, full3D: false, speed:500});
	$('#eventoPadres').mouseenter(function() { 
		giraCubo('#Cubo3','up');
		flip('frentePadres');
	});
	$('#eventoPadres').mouseleave(function() { 
		giraCubo('#Cubo3','down');
		unflip('frentePadres');
	});