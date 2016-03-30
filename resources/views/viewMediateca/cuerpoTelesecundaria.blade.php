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
		position:relative; top:80px;
	}
</style>
<script>
	function muestraImgCentral(idImg){
		var idImgHover = "/ventana-educativa-2016/public/imagenes/mediateca/telesecundaria/Inicio/" + idImg + "Hover.png";
		document.getElementById(idImg).src = idImgHover;
		/*var idImgCentro = idImg + "Centro";
		document.getElementById(idImgCentro).style.visibility = "visible";*/
		
	}
	function ocultaImgCentral(idImg){
		var idImgHover = "/ventana-educativa-2016/public/imagenes/mediateca/telesecundaria/Inicio/" + idImg + ".png";
		document.getElementById(idImg).src = idImgHover;
		/*var idImgCentro = idImg + "Centro";
		document.getElementById(idImgCentro).style.visibility = "hidden";*/
	}
</script>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center textoTitulo bajaFila">
	MEDIATECA
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2" style="padding:10%;">
	<a href="{{url('mediateca/telesecundaria/primergrado')}}">
		{{HTML::image('imagenes/mediateca/telesecundaria/Inicio/primerGrado.png','Telesecundaria Primero',['class'=>'telesecPrimero', 'id'=>'primerGrado', 'onmouseover'=>'muestraImgCentral("primerGrado")', 'onmouseout'=>'ocultaImgCentral("primerGrado")'])}}
	</a>
	<a href="{{url('mediateca/telesecundaria/segundogrado')}}">
		{{HTML::image('imagenes/mediateca/telesecundaria/Inicio/segundoGrado.png','Telesecundaria Segundo',['class'=>'teleSecSegundo', 'id'=>'segundoGrado', 'onmouseover'=>'muestraImgCentral("segundoGrado")', 'onmouseout'=>'ocultaImgCentral("segundoGrado")'])}}
	</a>
	<a href="{{url('mediateca/telesecundaria/tercergrado')}}">
		{{HTML::image('imagenes/mediateca/telesecundaria/Inicio/tercerGrado.png','Telesecundaria Tercero',['class'=>'telesecTercero', 'id'=>'tercerGrado', 'onmouseover'=>'muestraImgCentral("tercerGrado")', 'onmouseout'=>'ocultaImgCentral("tercerGrado")'])}}
	</a>
</div>
