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
		position:absolute; top:40%; left:25%; width:38%; height: 93%;
	}
	.HistoriaII{
		position: absolute; top:10%; left:49.5%; width:38%; height: 93%;
	}
	.EspanolIII{
		position:absolute; top:40.2%; left:73.8%; width:38%; height: 93%;
	}
	.MatematicasIII{
		position:absolute; top:121%; left:73.7%; width:38%; height: 93%;
	}
	.CienciasIII{
		position: absolute; top:150.5%; left:48.7%; width:38%; height: 93%;
	}
	.InglesIII{
		position:absolute; top:120.2%; left:24.7%; width:38%; height: 93%;
	}
	.imgPrimeroCentral{
		position: absolute; top:92%; left:54%; width:30%; height: 75%; z-index:0; visibility: hidden;
	}
</style>
<script>
	function muestraImgCentro(idImg){
		var idImgHover = "{{url('imagenes/mediateca/tsecundaria/tercerGrado')}}" + "/" + idImg + "Hover.png";
		document.getElementById(idImg).src = idImgHover;
		var idImgCentro = "#" + idImg + "Centro";
		$(idImgCentro).addClass("bounceIn");
		$(idImgCentro).addClass("animated");
		$(idImgCentro).css("visibility", "visible");
		$(idImgCentro).fadeIn();
		
	}
	function ocultaImgCentro(idImg){
		var idImgHover = "{{url('imagenes/mediateca/tsecundaria/tercerGrado')}}" + "/" + idImg + ".png";
		document.getElementById(idImg).src = idImgHover;
		var idImgCentro = "#" + idImg + "Centro";
		$(idImgCentro).css("visibility", "hidden");
		$(idImgCentro).fadeOut();
		$(idImgCentro).removeClass("animated");
		$(idImgCentro).removeClass("bounceIn");
	}
</script>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center textoTitulo bajaFila">
	<?php
		generaBreadCrumbs();
	?>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2" style="padding:10%;">
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tsecundaria/tercerGrado/formacionCivica.png','Telesecundaria FormacionCivicaII',['class'=>'FormacionCivicaII', 'id'=>'formacionCivica', 'onmouseover'=>'muestraImgCentro("formacionCivica")', 'onmouseout'=>'ocultaImgCentro("formacionCivica")'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tsecundaria/tercerGrado/historia.png','Telesecundaria HistoriaII',['class'=>'HistoriaII', 'id'=>'historia', 'onmouseover'=>'muestraImgCentro("historia")', 'onmouseout'=>'ocultaImgCentro("historia")'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tsecundaria/tercerGrado/espanol.png','Telesecundaria EspanolIII',['class'=>'EspanolIII', 'id'=>'espanol', 'onmouseover'=>'muestraImgCentro("espanol")', 'onmouseout'=>'ocultaImgCentro("espanol")'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tsecundaria/tercerGrado/matematicas.png','Telesecundaria MatematicasIII',['class'=>'MatematicasIII', 'id'=>'matematicas', 'onmouseover'=>'muestraImgCentro("matematicas")', 'onmouseout'=>'ocultaImgCentro("matematicas")'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tsecundaria/tercerGrado/ciencias.png','Telesecundaria CienciasIII',['class'=>'CienciasIII', 'id'=>'ciencias', 'onmouseover'=>'muestraImgCentro("ciencias")', 'onmouseout'=>'ocultaImgCentro("ciencias")'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tsecundaria/tercerGrado/lengua.png','Telesecundaria InglesIII',['class'=>'InglesIII', 'id'=>'lengua', 'onmouseover'=>'muestraImgCentro("lengua")', 'onmouseout'=>'ocultaImgCentro("lengua")'])}}
	</a>
	{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/formacionCivicaCentro.png','Telesecundaria central tecnologia',['class'=>'imgPrimeroCentral', 'id'=>'formacionCivicaCentro'])}}
	{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/historiaCentro.png','Telesecundaria central geografia',['class'=>'imgPrimeroCentral', 'id'=>'historiaCentro'])}}
	{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/espanolCentro.png','Telesecundaria central espanol',['class'=>'imgPrimeroCentral', 'id'=>'espanolCentro'])}}
	{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/matematicasCentro.png','Telesecundaria central matematicas',['class'=>'imgPrimeroCentral', 'id'=>'matematicasCentro'])}}
	{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/cienciasCentro.png','Telesecundaria central ciencias',['class'=>'imgPrimeroCentral', 'id'=>'cienciasCentro'])}}
	{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/lenguaCentro.png','Telesecundaria central lengua',['class'=>'imgPrimeroCentral', 'id'=>'lenguaCentro'])}}
</div>
