	<video data-keepplaying class="videoFondo" id="videoFondo" oncanplay="reproduceVideo()" onplay="bajaImgProyectos()">
		<source src="imagenes/ventana/conocenos/DJI_0008.mp4" type="video/mp4"/>
	</video>
	<img id="textoProyectos" class="muestra animated" src="imagenes/ventana/conocenos/proyecto.png"/>
	<img id="textoObjetivos" class="oculta animated" src="imagenes/ventana/conocenos/objetivos.png"/>
	<a href="#"><img id="botonPlay" class="oculta animated" src="imagenes/ventana/conocenos/botonPlay.png"/></a>
	<div class="col-md-12"></div>
	<div class="divFlechaBrinca col-md-2 col-md-offset-4">
		CONTINUA NAVEGANDO
	</div>
	<div class="col-md-12"></div>
	<div class="divFlechaBrinca col-md-1 col-md-offset-4 text-center">
		<img id="flechaBrinca" class="flechaBrinca" src="imagenes/educaplay/flechaDetalle.png" onclick="avanzaSeccion('2')"/>
	</div>
	<script>
		$(document).ready(function() {
		//	************	Activación de elemento fullPage (desplazamiento vertical) 	***********
			$('#fullpage').fullpage(
				{navigation:true, scrollOverflow:true, loopTop:true, 
					onLeave: 
					function(index, nextIndex, direction){
						var leavingSection = $(this);
						if(index == 1 && nextIndex == 7){
							if($('#textoObjetivos').css('display') == 'block'){
								cambiaImagenesAbajo('textoProyectos','textoObjetivos');
								return false;
							}
							else if($('#botonPlay').css('display') == 'block'){
								cambiaImagenesAbajo('textoObjetivos','botonPlay');
								return false;
							}
							else{
								return false;
							}
						}
						else if(index == 1 && nextIndex == 2){
							if($('#textoProyectos').css('display') == 'block'){
								cambiaImagenesArriba('textoObjetivos','textoProyectos');
								return false;
							}
							else if($('#textoObjetivos').css('display') == 'block'){
								cambiaImagenesArriba('botonPlay','textoObjetivos');
								return false;
							}
						}
					}
				}
			);
		});

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
			return true;
		});

		function cambiaImagenesArriba(imgEntrante, imgSaliente){
			var imagenEntrante = '#' + imgEntrante;
			var imagenSaliente = '#' + imgSaliente;
			$(imagenEntrante).removeClass('slideOutDown');
			$(imagenSaliente).removeClass('slideInDown');
			$(imagenSaliente).addClass('slideOutUp');
			$(imagenSaliente).removeClass('slideInUp');
			setTimeout(function(){ 
				$(imagenSaliente).removeClass('muestra');
				$(imagenSaliente).addClass('oculta');
				$(imagenEntrante).removeClass('oculta');
				$(imagenEntrante).addClass('muestra'); 
				$(imagenEntrante).addClass('slideInUp');
			}, 500);
		}

		function cambiaImagenesAbajo(imgEntrante, imgSaliente){
			var imagenEntrante = '#' + imgEntrante;
			var imagenSaliente = '#' + imgSaliente;
			$(imagenEntrante).removeClass('slideOutUp');
			$(imagenSaliente).removeClass('slideInUp');
			$(imagenSaliente).addClass('slideOutDown');
			setTimeout(function(){
				$(imagenSaliente).removeClass('muestra');
				$(imagenSaliente).addClass('oculta');
				$(imagenEntrante).removeClass('oculta');
				$(imagenEntrante).addClass('muestra');
				$(imagenEntrante).addClass('slideInDown');
			}, 500);
		}
		
		//	**********	Comenzar reproducción de video de fondo	***********	
		
		function reproduceVideo(){
			document.getElementById('videoFondo').play();
			document.getElementById('videoFondo').loop = true;
		}
		function bajaImgProyectos(){
			$('#textoProyectos').css('visibility','visible');
			$('#textoProyectos').addClass('slideInDown');
		}
		function avanzaSeccion(seccion){
			$('#fullPage').fullpage.moveTo(seccion);
		}
	</script>
	<style>
		.fondo1{
			background-color:gray;
		}
		.fondo2{
			background:#00ff80;
		}
		.fondo3{
			background:#79738c;
		}
		.fondo4{
			background:#bf4060;
		}
		.oculta{
			display: none;
		}
		.muestra{
			 display:block;
		}
		.flechaBrinca{
			width:60px; height:18px; position: absolute; cursor:pointer;
		}
		.divFlechaBrinca{
			position: absolute; bottom: 50px;
		}
		.videoFondo{
			position: absolute; right: 0; bottom: 0;
			min-width: 100%; min-height: 100%;
			width: auto; height: auto; z-index: 0;
			background: url(polina.jpg) no-repeat;
			background-size: cover;
		}
		#textoProyectos{
			visibility:hidden;
		}
	</style>