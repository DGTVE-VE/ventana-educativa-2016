<link rel="stylesheet" type="text/css" href="js/fullPage/jquery.fullPage.css"/>
<script type="text/javascript" src="js/fullPage/vendors/scrolloverflow.min.js"></script>
<script type="text/javascript" src="js/fullPage/jquery.fullPage.js"></script>
<script>
	$(document).ready(function() {
	//	************	Activación de elemento fullPage (desplazamiento vertical) 	***********
		$('#fullpage').fullpage(
			{navigation:true, scrollOverflow:true, loopTop:true, 
				onLeave: 
				function(index, nextIndex, direction){
					var leavingSection = $(this);
					if(index == 1 && nextIndex == 4){
						if($('#textoProyectos').css('display') == 'none'){
							muestraProyectos();
							return false;
						}
						else{
							return false;
						}
					}
					else if(index == 1 && nextIndex == 2){
						if($('#textoObjetivos').css('display') == 'none'){
							muestraObjetivos();
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
	});
	
	function muestraProyectos(){
		$('#textoObjetivos').removeClass('slideInDown');
		$('#textoObjetivos').addClass('slideOutUp');
		$('#textoObjetivos').addClass('animated');
		$('#textoObjetivos').addClass('oculta');
		$('#textoObjetivos').removeClass('animated');
		$('#textoProyectos').removeClass('slideOutDown');
		$('#textoProyectos').addClass('slideInUp');
		$('#textoProyectos').addClass('animated');
		$('#textoProyectos').removeClass('oculta');
	}
	
	function muestraObjetivos(){
		$('#textoProyectos').removeClass('slideInUp');
		$('#textoProyectos').addClass('slideOutDown');
		$('#textoProyectos').addClass('oculta');
		$('#textoObjetivos').removeClass('oculta');
		$('#textoObjetivos').removeClass('slideOutUp');
		$('#textoObjetivos').addClass('slideInDown');
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
	.flechaBrinca{
		width:60px; height:18px; position: absolute; cursor:pointer;
	}
	.divFlechaBrinca{
		position: absolute; bottom: 50px; text-align: center;
	}
</style>
<div id="fullpage">
    <div class="section fondo1">
		<img id="textoObjetivos" class="oculta animated" src="imagenes/ventana/conocenos/objetivos.png"/>
		<img id="textoProyectos" class="animated" src="imagenes/ventana/conocenos/proyecto.png"/>
		<div style="" class="divFlechaBrinca">
			SCROLL DOWN
			<img id="flechaBrinca" class="flechaBrinca" src="imagenes/educaplay/flechaDetalle.png"/>
		</div>
	</div>
    <div class="section fondo2">Some section 2</div>
    <div class="section fondo3">Some section 3</div>
    <div class="section fondo4"> <div class="slide"> Slide 1 </div>
		<div class="slide"> Slide 2 </div>
		<div class="slide"> Slide 3 </div>
		<div class="slide"> Slide 4 </div></div>
</div>
