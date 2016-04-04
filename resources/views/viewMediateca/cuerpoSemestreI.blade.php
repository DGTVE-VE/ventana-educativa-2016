<style>
	.textoTitulo{
		color: black;
		font-family:'Ubuntu';
		font-size:2em;
	}
	.bajaFila{
		position:relative; top:80px; z-index:10;
	}
	/*.telesecPrimero{
		position:absolute; top:10%; left:12%; width:77%; height: 197%;
	}
	.teleSecSegundo{
		position: absolute; top:57%; left:51%; width:77%; height: 195%;
	}
	.telesecTercero{
		position:absolute; top:116%; left:15.5%; width:77%; height: 194%;
	}*/
</style>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center textoTitulo bajaFila">
	<?php
		generaBreadCrumbs();
	?>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:10%;">
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2" style="padding:10%;">
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tbachillerato/SemestreI/InformaticaI.png','Telebachillerato InformaticaI',['class'=>'telesecPrimero'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tbachillerato/SemestreI/TallerLectura.png','Telebachillerato TallerLectura',['class'=>'teleSecSegundo'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tbachillerato/SemestreI/IntroCS.png','Telebachillerato IntroCS',['class'=>'telesecTercero'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tbachillerato/SemestreI/EticaValoresI.png','Telebachillerato EticaValoresI',['class'=>'telesecTercero'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tbachillerato/SemestreI/MatematicasI.png','Telebachillerato MatematicasI',['class'=>'telesecTercero'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tbachillerato/SemestreI/LenguaAdicionalI.png','Telebachillerato LenguaAdicionalI',['class'=>'telesecTercero'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tbachillerato/SemestreI/QuimicaI.png','Telebachillerato QuimicaI',['class'=>'telesecTercero'])}}
	</a>
</div>
