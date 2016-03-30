<style>
	.textoTitulo{
		color: black;
		font-family:'Ubuntu';
		font-size:2em;
	}
	.bachSemI{
		position: absolute; top:29.5%; left:60.8%; width:36.5%; height: 90%;
	}
	.bachSemII{
		position: absolute; top:15%; left:89%; width:36%; height: 90%;
	}
	.bachSemIII{
		position: absolute; top:58%; left:107%; width:36%; height: 90%;
	}
	.bachSemVI{
		position: absolute; top:2%; left:55.5%; width:36.5%; height: 90%;
	}
	.bachSemV{
		position: absolute; top:44%; left:73.8%; width:36%; height: 90%;
	}
	.bachSemIV{
		position: absolute; top:29%; left:102.2%; width:36%; height: 90%;
	}
	.bajaFila{
		position:relative; top:80px;
	}
</style>
<script>
	function muestraImgCentral(idImg){
		var idImgHover = "/ventana-educativa-2016/public/imagenes/mediateca/telebachillerato/Inicio/" + idImg + "Hover.png";
		document.getElementById(idImg).src = idImgHover;
		/*var idImgCentro = idImg + "Centro";
		document.getElementById(idImgCentro).style.visibility = "visible";*/
		
	}
	function ocultaImgCentral(idImg){
		var idImgHover = "/ventana-educativa-2016/public/imagenes/mediateca/telebachillerato/Inicio/" + idImg + ".png";
		document.getElementById(idImg).src = idImgHover;
		/*var idImgCentro = idImg + "Centro";
		document.getElementById(idImgCentro).style.visibility = "hidden";*/
	}
</script>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center textoTitulo bajaFila">
	MEDIATECA
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="padding:10%;">
	<a href="{{url('mediateca/telebachillerato/semestreI')}}">
		{{HTML::image('imagenes/mediateca/telebachillerato/Inicio/semestreI.png','Telebachillerato',['class'=>'bachSemI', 'id'=>'semestreI', 'onmouseover'=>'muestraImgCentral("semestreI")', 'onmouseout'=>'ocultaImgCentral("semestreI")'])}}
	</a>
	<a href="{{url('mediateca/telebachillerato/semestreII')}}">
		{{HTML::image('imagenes/mediateca/telebachillerato/Inicio/semestreII.png','Telebachillerato',['class'=>'bachSemII', 'id'=>'semestreII', 'onmouseover'=>'muestraImgCentral("semestreII")', 'onmouseout'=>'ocultaImgCentral("semestreII")'])}}
	</a>
	<a href="{{url('mediateca/telebachillerato/semestreIII')}}">
		{{HTML::image('imagenes/mediateca/telebachillerato/Inicio/semestreIII.png','Telebachillerato',['class'=>'bachSemIII', 'id'=>'semestreIII', 'onmouseover'=>'muestraImgCentral("semestreIII")', 'onmouseout'=>'ocultaImgCentral("semestreIII")'])}}
	</a>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="padding:10%;">
	<a href="{{url('mediateca/telebachillerato/semestreVI')}}">
		{{HTML::image('imagenes/mediateca/telebachillerato/Inicio/semestreVI.png','Telebachillerato',['class'=>'bachSemVI', 'id'=>'semestreVI', 'onmouseover'=>'muestraImgCentral("semestreVI")', 'onmouseout'=>'ocultaImgCentral("semestreVI")'])}}
	</a>
	<a href="{{url('mediateca/telebachillerato/semestreV')}}">
		{{HTML::image('imagenes/mediateca/telebachillerato/Inicio/semestreV.png','Telebachillerato',['class'=>'bachSemV', 'id'=>'semestreV', 'onmouseover'=>'muestraImgCentral("semestreV")', 'onmouseout'=>'ocultaImgCentral("semestreV")'])}}
	</a>
	<a href="{{url('mediateca/telebachillerato/semestreIV')}}">
		{{HTML::image('imagenes/mediateca/telebachillerato/Inicio/semestreIV.png','Telebachillerato',['class'=>'bachSemIV', 'id'=>'semestreIV', 'onmouseover'=>'muestraImgCentral("semestreIV")', 'onmouseout'=>'ocultaImgCentral("semestreIV")'])}}
	</a>
</div>
