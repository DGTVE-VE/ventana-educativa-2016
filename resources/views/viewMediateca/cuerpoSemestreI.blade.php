<style>
	.textoTitulo{
		color: black;
		font-family:'Ubuntu';
		font-size:2em;
	}
	.bajaFila{
		position:relative; top:80px; z-index:10;
	}
	.InformaticaI{
		position: absolute; top:48.7%; left:29.6%; width:32.5%; height: 80%;
	}
	.TallerLectura{
		position: absolute; top:20%; left:49%; width:32%; height: 80%;
	}
	.IntroCS{
		position: absolute; top:34.5%; left:74.7%; width:32%; height: 80%;
	}
	.EticaValoresI{
		position: absolute; top:96.7%; left:81.7%; width:32.5%; height: 80%;
	}
	.MatematicasI{
		position: absolute; top:146.5%; left:71.7%; width:32%; height: 80%;
	}
	.LenguaAdicionalI{
		position: absolute; top:153.5%; left:45%; width:32%; height: 80%;
	}
	.QuimicaI{
		position: absolute; top:120.3%; left:28.6%; width:32%; height: 80%;
	}
</style>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center textoTitulo bajaFila">
	<?php
		generaBreadCrumbs();
	?>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2" style="padding:10%;">
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tbachillerato/SemestreI/InformaticaI.png','Telebachillerato InformaticaI',['class'=>'InformaticaI'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tbachillerato/SemestreI/TallerLectura.png','Telebachillerato TallerLectura',['class'=>'TallerLectura'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tbachillerato/SemestreI/IntroCS.png','Telebachillerato IntroCS',['class'=>'IntroCS'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tbachillerato/SemestreI/EticaValoresI.png','Telebachillerato EticaValoresI',['class'=>'EticaValoresI'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tbachillerato/SemestreI/MatematicasI.png','Telebachillerato MatematicasI',['class'=>'MatematicasI'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tbachillerato/SemestreI/LenguaAdicionalI.png','Telebachillerato LenguaAdicionalI',['class'=>'LenguaAdicionalI'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tbachillerato/SemestreI/QuimicaI.png','Telebachillerato QuimicaI',['class'=>'QuimicaI'])}}
	</a>
</div>
