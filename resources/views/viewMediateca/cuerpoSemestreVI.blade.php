<style>
	.textoTitulo{
		color: black;
		font-family:'Ubuntu';
		font-size:2em;
	}
	.Ecologia{
		position:absolute; top:8%; left:20.6%; width:65%; height: 166%;
	}
	.Filosofia{
		position: absolute; top:22.7%; left:57.4%; width:65%; height: 166%;
	}
	.Metodologia{
		position:absolute; top:98%; left:32.8%; width:65.5%; height: 166%;
	}
	.bajaFila{
		position:relative; top:80px; z-index:10;
	}
</style>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center textoTitulo bajaFila">
	<?php
		generaBreadCrumbs();
	?>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:1%;">
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2" style="padding:10%;">
	{{HTML::image('imagenes/mediateca/tbachillerato/SemestreVI/Ecologia.png','Telebachillerato Ecologia',['class'=>'Ecologia'])}}
	{{HTML::image('imagenes/mediateca/tbachillerato/SemestreVI/Filosofia.png','Telebachillerato Filosofia',['class'=>'Filosofia'])}}
	{{HTML::image('imagenes/mediateca/tbachillerato/SemestreVI/Metodologia.png','Telebachillerato Geografia',['class'=>'Metodologia'])}}
</div>
