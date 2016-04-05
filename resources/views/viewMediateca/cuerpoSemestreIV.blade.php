<style>
	.textoTitulo{
		color: black;
		font-family:'Ubuntu';
		font-size:2em;
	}
	.bajaFila{
		position:relative; top:80px; z-index:10;
	}
	.BiologiaII{
		position:absolute; top:95.5%; left:25.8%; width:36%; height: 88%;
	}
	.LiteraturaII{
		position: absolute; top:30%; left:34%; width:36%; height: 88%;
	}
	.Estructura{
		position:absolute; top:22.5%; left:64.6%; width:36%; height: 88%;
	}
	.FisicaII{
		position:absolute; top:72.9%; left:79.8%; width:36%; height: 88%;
	}
	.MatematicasIV{
		position: absolute; top:138.2%; left:71.5%; width:36%; height: 88%;
	}
	.LenguaAdicionalIV{
		position:absolute; top:145.6%; left:40.7%; width:36%; height: 88%;
	}
</style>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center textoTitulo bajaFila">
	<?php
		generaBreadCrumbs();
	?>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2" style="padding:10%;">
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIV/BiologiaII.png','Telebachillerato BiologiaII',['class'=>'BiologiaII'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIV/LiteraturaII.png','Telebachillerato LiteraturaII',['class'=>'LiteraturaII'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIV/Estructura.png','Telebachillerato Estructura',['class'=>'Estructura'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIV/FisicaII.png','Telebachillerato FisicaII',['class'=>'FisicaII'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIV/MatematicasIV.png','Telebachillerato MatematicasIV',['class'=>'MatematicasIV'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIV/LenguaAdicionalIV.png','Telebachillerato LenguaAdicionalIV ',['class'=>'LenguaAdicionalIV'])}}
	</a>
</div>
