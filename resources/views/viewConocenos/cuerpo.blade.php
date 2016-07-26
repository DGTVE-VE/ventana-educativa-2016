<link rel="stylesheet" type="text/css" href="js/fullPage/jquery.fullPage.css"/>
<script type="text/javascript" src="js/fullPage/vendors/scrolloverflow.min.js"></script>
<script type="text/javascript" src="js/fullPage/jquery.fullPage.js"></script>
<script>
$(document).ready(function() {
    $('#fullpage').fullpage(
		{navigation:true, scrollOverflow:true, loopTop:true, 
			onLeave: 
			function(index, nextIndex, direction){
				var leavingSection = $(this);
				if(index == 1 && nextIndex == 4){
					return false;
				}
				else if(index == 1 && nextIndex == 2){
				}
			}
		}
	);
});
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
</style>
<div id="fullpage">
    <div class="section fondo1">
		<img id="textoObjetivos" class="animated" src="imagenes/ventana/conocenos/objetivos.png"/>
		<img id="textoProyecto" class="oculta animated" src="imagenes/ventana/conocenos/proyecto.png"/>
	</div>
    <div class="section fondo2">Some section 2</div>
    <div class="section fondo3">Some section 3</div>
    <div class="section fondo4"> <div class="slide"> Slide 1 </div>
		<div class="slide"> Slide 2 </div>
		<div class="slide"> Slide 3 </div>
		<div class="slide"> Slide 4 </div></div>
</div>
