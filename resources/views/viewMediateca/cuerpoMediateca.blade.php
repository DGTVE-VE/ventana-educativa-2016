<style>
	.textoTitulo{
		color: black;
		font-family:'Ubuntu';
		font-size:2em;
	}
	.telesecundaria{
		position: absolute; top:10%; left:65%; width:70%; height: 90%; z-index:1;
	}
	.telebachillerato{
		position: absolute; top:100%; left:65%; width:70%; height: 90%; z-index:1;
	}
	.bajaFila{
		position:relative; top:80px; z-index:10;
	}
	.telebachilleratoCentro{
		position: absolute; top:35%; left:72%; width:55%; height: 120%;	z-index:0; visibility: hidden;
	}
	.telesecundariaCentro{
		position: absolute; top:35%; left:73%; width:55%; height: 120%; z-index:0; visibility: hidden;
	}
</style>
<script>
	function muestraImgCentral(idImg){
		var idImgHover = "imagenes/mediateca/Inicio/" + idImg + "Hover.png";
		document.getElementById(idImg).src = idImgHover;
		var idImgCentro = "#" + idImg + "Centro";
		$(idImgCentro).addClass("bounceIn");
		$(idImgCentro).addClass("animated");
		$(idImgCentro).css("visibility", "visible");
		$(idImgCentro).fadeIn();
	}
	function ocultaImgCentral(idImg){
		var idImgHover = "imagenes/mediateca/Inicio/" + idImg + ".png";
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
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 bajaFila" style="padding:10%;">
	<a href="{{url('mediateca/telesecundaria')}}">
		{{ HTML::image('imagenes/mediateca/Inicio/telesec.png','Telesecundaria',['class'=>'telesecundaria', 'id'=>'telesec', 'onmouseover'=>'muestraImgCentral("telesec")', 'onmouseout'=>'ocultaImgCentral("telesec")'])}}
	</a>
	<a href="{{url('mediateca/telebachillerato')}}">
		{{HTML::image('imagenes/mediateca/Inicio/telebach.png','Telebachillerato',['class'=>'telebachillerato', 'id'=>'telebach', 'onmouseover'=>'muestraImgCentral("telebach")', 'onmouseout'=>'ocultaImgCentral("telebach")'])}}
	</a>
	{{HTML::image('imagenes/mediateca/Inicio/TelebachilleratoCentro.png','Telebachillerato Central',['class'=>'telebachilleratoCentro', 'id'=>'telebachCentro'])}}
	{{HTML::image('imagenes/mediateca/Inicio/TelesecundariaCentro.png','Telesecundaria Central',['class'=>'telesecundariaCentro', 'id'=>'telesecCentro'])}}
</div>