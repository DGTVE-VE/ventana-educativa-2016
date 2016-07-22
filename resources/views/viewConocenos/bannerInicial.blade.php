<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">

	<title>Parallax.js | Simple Example</title>

	<!-- Behavioral Meta Data -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="js/parallaxCapas/examples/styles/styles.css"/>

</head>
<body>

	<div id="container" class="container">
		<ul id="scene" class="scene">
			<li class="layer" data-depth="1.00"><img src="imagenes/ventana/parallaxCapas/layer1.png"></li>
			<li class="layer" data-depth="0.80"><img src="imagenes/ventana/parallaxCapas/layer2.png"></li>
			<li class="layer" data-depth="0.60"><img src="imagenes/ventana/parallaxCapas/layer3.png"></li>
			<li class="layer" data-depth="0.40"><img src="imagenes/ventana/parallaxCapas/layer4.png"></li>
			<li class="layer" data-depth="0.20"><img src="imagenes/ventana/parallaxCapas/layer5.png"></li>
			<li class="layer" data-depth="0.00"><img src="imagenes/ventana/parallaxCapas/layer6.png"></li>
		</ul>
	</div>
	<div class="container">
		<div style="height:200px;">
			<img id="flechaBrinca" src="imagenes/educaplay/flechaDetalle.png" style="width:100px; height:30px; position: absolute;"/>
		</div>
	</div>
	<!-- Scripts -->
	<script src="js/parallaxCapas/source/parallax.js"></script>
	<script>

	// *************	Activa parallax		****************
	var scene = document.getElementById('scene');
	var parallax = new Parallax(scene);
	
	//	************	Efecto de salto de la flecha 	***********
	function mueveFlecha(dir){
		if(dir=='abajo'){
			tiempoEspera="400";
			desplaza = "+=20px";
			dir = 'arriba';
		}
		else{
			tiempoEspera="1200";
			desplaza = "-=20px";
			dir = 'abajo';
		}
		$('#flechaBrinca').animate({ "top": desplaza }, "slow");
		
		setTimeout(function(){ mueveFlecha(dir); }, tiempoEspera);
	}
	$( document ).ready(function() {
		mueveFlecha('abajo');
	});
	
	</script>

</body>
</html>
