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
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center textoTitulo bajaFila">
	<?php
		generaBreadCrumbs();
	?>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2" style="padding:10%;">
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/ArtesII.png','Telesecundaria ArtesII',['class'=>'ArtesII'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/FormacionCivicaI.png','Telesecundaria FormacionCivicaI',['class'=>'FormacionCivicaI'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/OrientacionII.png','Telesecundaria OrientacionII',['class'=>'OrientacionII'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/HistoriaI.png','Telesecundaria HistoriaI',['class'=>'HistoriaI'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/EspanolII.png','Telesecundaria EspanolII',['class'=>'EspanolII'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/MatematicasII.png','Telesecundaria MatematicasII',['class'=>'MatematicasII'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/CienciasII.png','Telesecundaria CienciasII',['class'=>'CienciasII'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/InglesII.png','Telesecundaria InglesII',['class'=>'InglesII'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/EducacionFisicaII.png','Telesecundaria EducacionFisicaII',['class'=>'EducacionFisicaII'])}}
	</a>
</div>
