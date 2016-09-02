	<video data-keepplaying class="videoFondo" id="videoFondo" oncanplay="reproduceVideo()">
		<source src="imagenes/ventana/conocenos/presentacion/institucional-bn.mp4" type="video/mp4"/>
	</video>
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12">
			<img id="textoProyectos" class="muestra animated centra img-responsive" src="imagenes/ventana/conocenos/presentacion/proyecto.png"/>
			<img id="textoObjetivos" class="oculta animated centra img-responsive" src="imagenes/ventana/conocenos/presentacion/objetivos.png"/>
			<a href="#" data-toggle="modal" data-target="#modalVideo" onfocus="this.blur()">
				<img id="botonPlay" class="oculta animated centra img-responsive" src="imagenes/ventana/conocenos/presentacion/botonPlay.png"/>
			</a>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12"></div>
		<div class="divFlechaBrinca col-sm-12 col-md-12 col-lg-12">
			<div class="txtContinua text-center">
				CONTINUA NAVEGANDO
			</div>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12"></div>
		<div class="divFlechaBrinca col-sm-12 col-md-12 col-lg-12 text-center">
			<img id="flechaBrinca" class="flechaBrinca" src="imagenes/educaplay/flechaDetalle.png" onclick="avanzaSeccion('2')"/>
		</div>
	</div>
	<div class="modal fade" id="modalVideo" tabindex="-1" role="dialog" aria-labelledby="etiquetaModalVideo" data-backdrop="false">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="etiquetaModalVideo">Conocenos</h4>
				</div>
				<div clas="modal-body">
					<video style="width:100%;" controls>
						<source src="imagenes/ventana/conocenos/presentacion/institucional.mp4" type="video/mp4"/>
					</video>
				</div>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function() {
		//	************	Activación de elemento fullPage (desplazamiento vertical) 	***********
			$('#fullpage').fullpage(
				{navigation:true, scrollOverflow:false, loopTop:true, 
					onLeave: 
					function(index, nextIndex, direction){
						var leavingSection = $(this);
						if(index == 1 && nextIndex == 6){
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
							else{
								$('#imagenLogoVentana').attr('src','imagenes/ventana/encabezado/logoNegro/logoventana.png');
								$('#iconoManuApps').attr('src','imagenes/ventana/encabezado/logoNegro/iconoApps.png');
								$('.hamburgerConocenos.is-closed .hamb-top, .hamburgerConocenos.is-closed .hamb-middle, .hamburgerConocenos.is-closed .hamb-bottom').css('background-color','#1a1a1a');
								$('#scene').css('top','-50px');
								$('#fullpage').fullpage.setFitToSection(false);
								$('#fullpage').fullpage.setAutoScrolling(false);
							}
						}
						else if(index== 4 && nextIndex == 3){
							$('#fullpage').fullpage.setFitToSection(false);
						}
						else if(index== 3 && nextIndex == 2){
							$('#fullpage').fullpage.setFitToSection(true);
						}
						else if(index == 2 && nextIndex == 1){
							$('#imagenLogoVentana').attr('src','imagenes/ventana/encabezado/logoventana.png');
							$('#iconoManuApps').attr('src','imagenes/ventana/encabezado/iconoApps.png');
							$('.hamburgerConocenos.is-closed .hamb-top, .hamburgerConocenos.is-closed .hamb-middle, .hamburgerConocenos.is-closed .hamb-bottom').css('background-color','#f2f2f2');
							$('#scene').css('top','50px');
							$('#fullpage').fullpage.setAutoScrolling(true);
						}
						else if(index== 3 && nextIndex == 4){
							$('#fullpage').fullpage.setFitToSection(true);
						}
						else if(index== 2 && nextIndex == 3){
							$('#fullpage').fullpage.setFitToSection(false);
						}
					}
				}
			);
			bajaImgProyectos()
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
                .fondo5{
			background:#f1f1f1;
		}
		.fondo4{
			background:white;
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
			position: absolute; bottom: 80px;
		}
		.txtContinua{
			font-size:1.2em;
			position: relative;
			left: 25px;
			width:200px;
			margin: 0 auto;
			color: white;
		}
		.videoFondo{
			position: absolute; right: 0; bottom: 0;
			min-width: 100%; min-height: 100%;
			width: auto; height: auto; z-index: 0;
			/*background: url(polina.jpg) no-repeat;*/
			background-size: cover;
		}
		#textoProyectos{
			visibility:hidden;
		}
		.centra{
			position: relative;
			top:-30px;
			max-width:100%;
			margin: 0 auto;
		}
	</style>