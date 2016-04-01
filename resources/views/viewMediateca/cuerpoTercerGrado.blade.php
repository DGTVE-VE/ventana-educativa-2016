<style>
	.textoTitulo{
		color: black;
		font-family:'Ubuntu';
		font-size:2em;
	}
	.bajaFila{
		position:relative; top:80px; z-index:10;
	}
	.FormacionCivicaII{
		position:absolute; top:40.3%; left:25.6%; width:36%; height: 88%;
	}
	.HistoriaII{
		position: absolute; top:12%; left:49%; width:36%; height: 88%;
	}
	.EspanolIII{
		position:absolute; top:41%; left:72.1%; width:36%; height: 88%;
	}
	.MatematicasIII{
		position:absolute; top:117.3%; left:72%; width:36%; height: 88%;
	}
	.CienciasIII{
		position: absolute; top:145%; left:48.2%; width:36%; height: 88%;
	}
	.InglesIII{
		position:absolute; top:116.3%; left:25.4%; width:36%; height: 88%;
	}
</style>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center textoTitulo bajaFila">
	<?php
		$uri = $_SERVER['REQUEST_URI'];
		$uriActual = explode('/',$uri);
		$elemsURI= count($uriActual);
		echo '<a href="'?>{{url($uriActual[3])}}<?php echo '">'.strtoupper($uriActual[3]).'</a>';
		$hrefCompleta = $uriActual[3];
		for($i=4; $i<$elemsURI;$i++){
			$hrefCompleta = $hrefCompleta."/".$uriActual[$i];
			echo ' / ';
			echo '<a href="'?>{{url($hrefCompleta)}}<?php echo'">'.strtoupper($uriActual[$i]).'</a>';
		}
	?>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2" style="padding:10%;">
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tsecundaria/tercerGrado/FormacionCivicaII.png','Telesecundaria FormacionCivicaII',['class'=>'FormacionCivicaII'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tsecundaria/tercerGrado/HistoriaII.png','Telesecundaria HistoriaII',['class'=>'HistoriaII'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tsecundaria/tercerGrado/EspanolIII.png','Telesecundaria EspanolIII',['class'=>'EspanolIII'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tsecundaria/tercerGrado/MatematicasIII.png','Telesecundaria MatematicasIII',['class'=>'MatematicasIII'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tsecundaria/tercerGrado/CienciasIII.png','Telesecundaria CienciasIII',['class'=>'CienciasIII'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tsecundaria/tercerGrado/InglesIII.png','Telesecundaria InglesIII',['class'=>'InglesIII'])}}
	</a>
</div>
