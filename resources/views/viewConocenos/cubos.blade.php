<!--script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script-->
<script src="js/conocenos/jquery.plugin.js"></script>
<script src="js/conocenos/jquery.imagecube.js"></script>
<style>
	.padLado{
		padding-left: 0px; padding-right:0px; padding-top:5%;
	}
	.medidaCubo{
		width: 101%; height: 250px; z-index:1;
	}
	.medidaFrente{
		width: 100%;
		position: absolute;
		top:0px;
		z-index:1;
	}
	.detectaEvento{
		position: absolute;
		top:0px;
		min-width: 100%;
		z-index:2;
	}
</style>
    <div class="row">
	
		<div class="col-sm-12 col-md-12 col-lg-12 contenedorMapa">
			<div class="text-center"><h4>COMUNIDAD EDUCATIVA</h4></div>
		</div>
		<div class="col-md-4 col-lg-4 padLado">
			<div id="Cubo1" class="medidaCubo">
				<img src="imagenes/conocenos/cubos/docentesComp.png" alt="" title="docentes1"/>
				<img src="imagenes/conocenos/cubos/docentesComp.png" alt="" title="docentes2"/>
			</div>
			<img id="frenteDocentes" src="imagenes/conocenos/cubos/docentesFrente.png" class="medidaFrente img-responsive" alt="" title="docentesFrente"/>
			<img id="eventoDocentes" src="imagenes/conocenos/cubos/frenteEvento.png" class="detectaEvento img-responsive" alt="" title="docentesFrente"/>
		</div>
		<div class="col-md-4 col-lg-4 padLado">
			<div id="Cubo2" class="medidaCubo">
				<img src="imagenes/conocenos/cubos/estudiantesComp.png" alt="" title="estudiantes1"/>
				<img src="imagenes/conocenos/cubos/estudiantesComp.png" alt="" title="estudiantes2"/>
			</div>
			<img id="frenteEstudiantes" src="imagenes/conocenos/cubos/estudiantesFrente.png" alt="" class="medidaFrente img-responsive" title="estudiantesFrente"/>
			<img id="eventoEstudiantes" src="imagenes/conocenos/cubos/frenteEvento.png" alt="" class="detectaEvento img-responsive" title="estudiantesFrente"/>
		</div>
		<div class="col-md-4 col-lg-4 padLado">
			<div id="Cubo3" class="medidaCubo">
				<img src="imagenes/conocenos/cubos/padresComp.png" alt="" title="padres1"/>
				<img src="imagenes/conocenos/cubos/padresComp.png" alt="" title="padres2"/>
			</div>
			<img id="frentePadres" src="imagenes/conocenos/cubos/padresFrente.png" alt="" class="medidaFrente img-responsive" title="padresFrente"/>
			<img id="eventoPadres" src="imagenes/conocenos/cubos/frenteEvento.png" alt="" class="detectaEvento img-responsive" title="padresFrente"/>
		</div>
    </div>

<script>

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
</script>