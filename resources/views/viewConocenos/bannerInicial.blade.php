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
	<link rel="stylesheet" type="text/css" href="css/red/animate.css"/>
	<style>
		.flechaBrinca{
			width:60px; height:18px; position: absolute; cursor:pointer;
		}
		.divFlechaBrinca{
			position: fixed; bottom: 50px; text-align: center;
		}
		#textoMarca{
			-webkit-animation-duration: 4s;
			-moz-animation-duration: 4s;
			-MS-animation-duration: 4s;
			-o-animation-duration: 4s;
			-animation-duration: 4s;
		}
	</style>
</head>
<body>
	<div id="container" class="container">
		<img id="textoMarca" class="animated" src="imagenes/ventana/conocenos/marcaTransparente.png" onclick="agregaClasesAnimate()"/>
	</div>
	<!--div id="container" class="container">
		<ul id="scene" class="scene">
			<li class="layer" data-depth="1.00"><img src="imagenes/ventana/parallaxCapas/layer1.png"></li>
			<li class="layer" data-depth="0.80"><img src="imagenes/ventana/parallaxCapas/layer2.png"></li>
			<li class="layer" data-depth="0.60"><img src="imagenes/ventana/parallaxCapas/layer3.png"></li>
			<li class="layer" data-depth="0.40"><img src="imagenes/ventana/parallaxCapas/layer4.png"></li>
			<li class="layer" data-depth="0.20"><img src="imagenes/ventana/parallaxCapas/layer5.png"></li>
			<li class="layer" data-depth="0.00"><img src="imagenes/ventana/parallaxCapas/layer6.png"></li>
		</ul>
	</div-->
	<div class="container">
		<div style="" class="divFlechaBrinca">
			SCROLL DOWN
			<img id="flechaBrinca" class="flechaBrinca" src="imagenes/educaplay/flechaDetalle.png"/>
		</div>
	</div>
	<!-- Scripts -->
	<script src="js/parallaxCapas/source/parallax.js"></script>
	<script>

	// *************	Activa parallax		****************
	/*var scene = document.getElementById('scene');
	var parallax = new Parallax(scene);*/
	
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

	var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
	$('#textoMarca').on(animationEnd, function() {
		$('#textoMarca').removeClass('slideOutUp');
		$('#textoMarca').addClass('slideInDown');
	});
	
	function agregaClasesAnimate(){
		$('#textoMarca').removeClass('slideInDown');
		$('#textoMarca').addClass('slideOutUp');
	}
	</script>

</body>
</html>
