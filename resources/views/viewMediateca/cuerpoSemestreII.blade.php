<style>
	.textoTitulo{
		color: black;
		font-family:'Ubuntu';
		font-size:2em;
	}
	.bajaFila{
		position:relative; top:80px; z-index:10;
	}
	.InformaticaII{
		position: absolute; top:48.7%; left:29.6%; width:32.5%; height: 80%;
	}
	.TallerLecturaII{
		position: absolute; top:20%; left:49%; width:32%; height: 80%;
	}
	.HistoriaMexicoI{
		position: absolute; top:34.5%; left:74.7%; width:32%; height: 80%;
	}
	.EticaValoresII{
		position: absolute; top:96.7%; left:81.7%; width:32.5%; height: 80%;
	}
	.MatematicasII{
		position: absolute; top:146.5%; left:71.7%; width:32%; height: 80%;
	}
	.LenguaAdicionalII{
		position: absolute; top:153.5%; left:45%; width:32%; height: 80%;
	}
	.QuimicaII{
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
		{{HTML::image('imagenes/mediateca/tbachillerato/SemestreII/InformaticaII.png','Telebachillerato InformaticaII',['class'=>'InformaticaII'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tbachillerato/SemestreII/TallerLecturaII.png','Telebachillerato TallerLecturaII',['class'=>'TallerLecturaII'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tbachillerato/SemestreII/HistoriaMexicoI.png','Telebachillerato HistoriaMexicoI',['class'=>'HistoriaMexicoI'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tbachillerato/SemestreII/EticaValoresII.png','Telebachillerato EticaValoresII',['class'=>'EticaValoresII'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tbachillerato/SemestreII/MatematicasII.png','Telebachillerato MatematicasII',['class'=>'MatematicasII'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tbachillerato/SemestreII/LenguaAdicionalII.png','Telebachillerato LenguaAdicionalII',['class'=>'LenguaAdicionalII'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tbachillerato/SemestreII/QuimicaII.png','Telebachillerato QuimicaII',['class'=>'QuimicaII'])}}
	</a>
</div>
