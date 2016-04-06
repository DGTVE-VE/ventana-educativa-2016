<style>
	.textoTitulo{
		color: black;
		font-family:'Ubuntu';
		font-size:2em;
	}
	.bajaFila{
		position:relative; top:80px; z-index:10;
	}
	.FormacionCivicaII{
		position:absolute; top:40.3%; left:25.6%; width:36%; height: 88%;
	}
	.HistoriaII{
		position: absolute; top:12%; left:49%; width:36%; height: 88%;
	}
	.EspanolIII{
		position:absolute; top:41%; left:72.1%; width:36%; height: 88%;
	}
	.MatematicasIII{
		position:absolute; top:117.3%; left:72%; width:36%; height: 88%;
	}
	.CienciasIII{
		position: absolute; top:145%; left:48.2%; width:36%; height: 88%;
	}
	.InglesIII{
		position:absolute; top:116.3%; left:25.4%; width:36%; height: 88%;
	}
</style>
<script>
	function muestraImgCentro(idImg){
		var idImgHover = "{{url('imagenes/mediateca/tsecundaria/tercerGrado')}}" + "/" + idImg + "Hover.png";
		document.getElementById(idImg).src = idImgHover;
		/*var idImgCentro = idImg + "Centro";
		document.getElementById(idImgCentro).style.visibility = "visible";*/
		
	}
	function ocultaImgCentro(idImg){
		var idImgHover = "{{url('imagenes/mediateca/tsecundaria/tercerGrado')}}" + "/" + idImg + ".png";
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
		{{HTML::image('imagenes/mediateca/tsecundaria/tercerGrado/FormacionCivicaII.png','Telesecundaria FormacionCivicaII',['class'=>'FormacionCivicaII', 'id'=>'FormacionCivicaII', 'onmouseover'=>'muestraImgCentro("FormacionCivicaII")', 'onmouseout'=>'ocultaImgCentro("FormacionCivicaII")'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tsecundaria/tercerGrado/HistoriaII.png','Telesecundaria HistoriaII',['class'=>'HistoriaII', 'id'=>'HistoriaII', 'onmouseover'=>'muestraImgCentro("HistoriaII")', 'onmouseout'=>'ocultaImgCentro("HistoriaII")'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tsecundaria/tercerGrado/EspanolIII.png','Telesecundaria EspanolIII',['class'=>'EspanolIII', 'id'=>'EspanolIII', 'onmouseover'=>'muestraImgCentro("EspanolIII")', 'onmouseout'=>'ocultaImgCentro("EspanolIII")'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tsecundaria/tercerGrado/MatematicasIII.png','Telesecundaria MatematicasIII',['class'=>'MatematicasIII', 'id'=>'MatematicasIII', 'onmouseover'=>'muestraImgCentro("MatematicasIII")', 'onmouseout'=>'ocultaImgCentro("MatematicasIII")'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tsecundaria/tercerGrado/CienciasIII.png','Telesecundaria CienciasIII',['class'=>'CienciasIII', 'id'=>'CienciasIII', 'onmouseover'=>'muestraImgCentro("CienciasIII")', 'onmouseout'=>'ocultaImgCentro("CienciasIII")'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tsecundaria/tercerGrado/InglesIII.png','Telesecundaria InglesIII',['class'=>'InglesIII', 'id'=>'InglesIII', 'onmouseover'=>'muestraImgCentro("InglesIII")', 'onmouseout'=>'ocultaImgCentro("InglesIII")'])}}
	</a>
</div>
