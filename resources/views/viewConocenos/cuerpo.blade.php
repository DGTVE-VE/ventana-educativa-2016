<link rel="stylesheet" type="text/css" href="js/fullPage/jquery.fullPage.css"/>
<script type="text/javascript" src="js/fullPage/vendors/scrolloverflow.min.js"></script>
<script type="text/javascript" src="js/fullPage/jquery.fullPage.js"></script>
<link rel="stylesheet" type="text/css" href="css/red/animate.css"/>
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

	function muestraObjetivos(){
		$('#textoObjetivos').removeClass('slideOutDown');
		$('#textoProyectos').removeClass('slideInDown');
		$('#textoProyectos').addClass('slideOutUp');
		setTimeout(function(){ 
			$('#textoProyectos').addClass('oculta');
			$('#textoObjetivos').removeClass('oculta');
			$('#textoObjetivos').addClass('slideInUp'); 
		}, 500);
	}

	function muestraProyectos(){
		$('#textoProyectos').removeClass('slideOutUp');
		$('#textoObjetivos').removeClass('slideInUp');
		$('#textoObjetivos').addClass('slideOutDown');
		setTimeout(function(){ $('#textoObjetivos').addClass('oculta');
			$('#textoProyectos').removeClass('oculta');
			$('#textoProyectos').addClass('slideInDown');
		}, 500);
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

<div id="wrapperConocenos">
    <div class="overlayConocenos"></div>

    <!-- Sidebar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapperConocenos" role="navigation">
        <ul class="nav sidebar-nav">
            <h4 class="etiquetaMenu">MENÚ</h4>
            <li>
                <a href="#">BLOG</a>
            </li>
            <li>
                <a href="#">ACERCA DE</a>
            </li>
        </ul>
    </nav>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapperConocenos">
        <button type="button" class="hamburgerConocenos is-closed" data-toggle="offcanvas">
            <span class="hamb-top"></span>
            <span class="hamb-middle"></span>
            <span class="hamb-bottom"></span>
        </button>
        <div class="container-fluid">
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
        </div>
        <!-- /#wrapper -->
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/jquery.fullpage/2.5.9/jquery.fullPage.min.js"></script>