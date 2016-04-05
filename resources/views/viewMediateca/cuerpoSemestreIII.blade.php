<style>
	.textoTitulo{
		color: black;
		font-family:'Ubuntu';
		font-size:2em;
	}
	.bajaFila{
		position:relative; top:80px; z-index:10;
	}
	.BiologiaI{
		position:absolute; top:95.5%; left:25.8%; width:36%; height: 88%;
	}
	.LiteraturaI{
		position: absolute; top:30%; left:34%; width:36%; height: 88%;
	}
	.HistoriaMexicoII{
		position:absolute; top:22.5%; left:64.6%; width:36%; height: 88%;
	}
	.FisicaI{
		position:absolute; top:72.9%; left:79.8%; width:36%; height: 88%;
	}
	.MatematicasIII{
		position: absolute; top:138.2%; left:71.5%; width:36%; height: 88%;
	}
	.LenguaAdicionalIII{
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
		{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIII/BiologiaI.png','Telebachillerato BiologiaI',['class'=>'BiologiaI'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIII/LiteraturaI.png','Telebachillerato LiteraturaI',['class'=>'LiteraturaI'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIII/HistoriaMexicoII.png','Telebachillerato HistoriaMexicoII',['class'=>'HistoriaMexicoII'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIII/FisicaI.png','Telebachillerato FisicaI',['class'=>'FisicaI'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIII/MatematicasIII.png','Telebachillerato MatematicasIII',['class'=>'MatematicasIII'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIII/LenguaAdicionalIII.png','Telebachillerato LenguaAdicionalIII ',['class'=>'LenguaAdicionalIII'])}}
	</a>
</div>
