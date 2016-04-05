<style>
	.textoTitulo{
		color: black;
		font-family:'Ubuntu';
		font-size:2em;
	}
	.bajaFila{
		position:relative; top:80px; z-index:10; z-index:10;
	}
	.ArtesII{
		position:absolute; top:146.8%; left:30.3%; width:26%; height: 64%;
	}
	.FormacionCivicaI{
		position: absolute; top:97.8%; left:24.2%; width:26%; height: 64%;
	}
	.OrientacionII{
		position:absolute; top:47%; left:30%; width:26%; height: 64%;
	}
	.HistoriaI{
		position:absolute; top:26%; left:47%; width:26%; height: 64%;
	}
	.EspanolII{
		position: absolute; top:32.5%; left:69.8%; width:26%; height: 64%;
	}
	.MatematicasII{
		position:absolute; top:66.4%; left:80.7%; width:26%; height: 64%;
	}
	.CienciasII{
		position:absolute; top:125%; left:80.8%; width:26%; height: 64%;
	}
	.InglesII{
		position: absolute; top:159.5%; left:70%; width:26%; height: 64%;
	}
	.EducacionFisicaII{
		position:absolute; top:166.5%; left:47.8%; width:26%; height: 64%;
	}
</style>
<script>
	function muestraImgCentro(idImg){
		var idImgHover = "/ventana-educativa-2016/public/imagenes/mediateca/tsecundaria/segundoGrado/" + idImg + "Hover.png";
		document.getElementById(idImg).src = idImgHover;
		/*var idImgCentro = idImg + "Centro";
		document.getElementById(idImgCentro).style.visibility = "visible";*/
		
	}
	function ocultaImgCentro(idImg){
		var idImgHover = "/ventana-educativa-2016/public/imagenes/mediateca/tsecundaria/segundoGrado/" + idImg + ".png";
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
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/ArtesII.png','Telesecundaria ArtesII',['class'=>'ArtesII', 'id'=>'ArtesII', 'onmouseover'=>'muestraImgCentro("ArtesII")', 'onmouseout'=>'ocultaImgCentro("ArtesII")'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/FormacionCivicaI.png','Telesecundaria FormacionCivicaI',['class'=>'FormacionCivicaI', 'id'=>'FormacionCivicaI', 'onmouseover'=>'muestraImgCentro("FormacionCivicaI")', 'onmouseout'=>'ocultaImgCentro("FormacionCivicaI")'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/OrientacionII.png','Telesecundaria OrientacionII',['class'=>'OrientacionII', 'id'=>'OrientacionII', 'onmouseover'=>'muestraImgCentro("OrientacionII")', 'onmouseout'=>'ocultaImgCentro("OrientacionII")'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/HistoriaI.png','Telesecundaria HistoriaI',['class'=>'HistoriaI', 'id'=>'HistoriaI', 'onmouseover'=>'muestraImgCentro("HistoriaI")', 'onmouseout'=>'ocultaImgCentro("HistoriaI")'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/EspanolII.png','Telesecundaria EspanolII',['class'=>'EspanolII', 'id'=>'EspanolII', 'onmouseover'=>'muestraImgCentro("EspanolII")', 'onmouseout'=>'ocultaImgCentro("EspanolII")'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/MatematicasII.png','Telesecundaria MatematicasII',['class'=>'MatematicasII', 'id'=>'MatematicasII', 'onmouseover'=>'muestraImgCentro("MatematicasII")', 'onmouseout'=>'ocultaImgCentro("MatematicasII")'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/CienciasII.png','Telesecundaria CienciasII',['class'=>'CienciasII', 'id'=>'CienciasII', 'onmouseover'=>'muestraImgCentro("CienciasII")', 'onmouseout'=>'ocultaImgCentro("CienciasII")'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/InglesII.png','Telesecundaria InglesII',['class'=>'InglesII', 'id'=>'InglesII', 'onmouseover'=>'muestraImgCentro("InglesII")', 'onmouseout'=>'ocultaImgCentro("InglesII")'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/EducacionFisicaII.png','Telesecundaria EducacionFisicaII',['class'=>'EducacionFisicaII', 'id'=>'EducacionFisicaII', 'onmouseover'=>'muestraImgCentro("EducacionFisicaII")', 'onmouseout'=>'ocultaImgCentro("EducacionFisicaII")'])}}
	</a>
</div>
