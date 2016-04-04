<style>
	.textoTitulo{
		color: black;
		font-family:'Ubuntu';
		font-size:2em;
	}
	.telesecPrimero{
		position:absolute; top:5%; left:25%; width:65%; height: 166%;
	}
	.teleSecSegundo{
		position: absolute; top:44.7%; left:58%; width:65%; height: 166%;
	}
	.telesecTercero{
		position:absolute; top:94%; left:27.8%; width:65.5%; height: 166%;
	}
	.bajaFila{
		position:relative; top:80px; z-index:10;
	}
</style>
<script>
	function muestraImgCentral(idImg){
		var idImgHover = "/ventana-educativa-2016/public/imagenes/mediateca/tsecundaria/Inicio/" + idImg + "Hover.png";
		document.getElementById(idImg).src = idImgHover;
		/*var idImgCentro = idImg + "Centro";
		document.getElementById(idImgCentro).style.visibility = "visible";*/
		
	}
	function ocultaImgCentral(idImg){
		var idImgHover = "/ventana-educativa-2016/public/imagenes/mediateca/tsecundaria/Inicio/" + idImg + ".png";
		document.getElementById(idImg).src = idImgHover;
		/*var idImgCentro = idImg + "Centro";
		document.getElementById(idImgCentro).style.visibility = "hidden";*/
	}
</script>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center textoTitulo bajaFila">
	<?php
		generaBreadCrumbs();
	?>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2" style="padding:10%;">
	<map name="mapaTelesecPrimer">
		<area alt="" shape="poly" coords="41,347,38,222,149,108,273,73,385,103,341,189,240,184,159,244,137,336,41,347" href="{{url('mediateca/telesecundaria/primergrado')}}" onmouseover="muestraImgCentral('primerGrado')" onmouseout="ocultaImgCentral('primerGrado')">
	</map>
	{{HTML::image('imagenes/mediateca/tsecundaria/Inicio/primerGrado.png','Telesecundaria Primero',['class'=>'telesecPrimero', 'id'=>'primerGrado', 'usemap'=>'#mapaTelesecPrimer'])}}
	<map name="mapaTelesecSegundo">
		<area alt="" shape="poly" coords="121,88,167,0,149,253,302,141,311,253,273,349,205,415,149,335,189,284,187,147,121,88" href="{{url('mediateca/telesecundaria/segundogrado')}}" onmouseover="muestraImgCentral('segundoGrado')" onmouseout="ocultaImgCentral('segundoGrado')">
	</map>
	{{HTML::image('imagenes/mediateca/tsecundaria/Inicio/segundoGrado.png','Telesecundaria Segundo',['class'=>'teleSecSegundo', 'id'=>'segundoGrado','usemap'=>'#mapaTelesecSegundo'])}}
	<map name="mapaTelesecTercero">
		<area alt="" shape="poly" coords="41,347,38,222,149,108,273,73,385,103,341,189,240,184,159,244,137,336,41,347" href="{{url('mediateca/telesecundaria/tercergrado')}}" onmouseover="muestraImgCentral('tercerGrado')" onmouseout="ocultaImgCentral('tercerGrado')">
	</map>
		{{HTML::image('imagenes/mediateca/tsecundaria/Inicio/tercerGrado.png','Telesecundaria Tercero',['class'=>'telesecTercero', 'id'=>'tercerGrado', 'usemap'=>'#mapaTelesecTercero'])}}
</div>
