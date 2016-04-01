<style>
	.textoTitulo{
		color: black;
		font-family:'Ubuntu';
		font-size:2em;
	}
	.bajaFila{
		position:relative; top:80px; z-index:10;
	}
	.ArtesI{
		position:absolute; top:146.5%; left:28.1%; width:24.5%; height: 63%;
	}
	.OrientacionI{
		position: absolute; top:96.6%; left:21.4%; width:26%; height: 64%;
	}
	.GeografiaI{
		position:absolute; top:47%; left:27%; width:26.3%; height: 64%;
	}
	.EspanolI{
		position:absolute; top:26%; left:44%; width:27%; height: 64%;
	}
	.MatematicasI{
		position: absolute; top:32.5%; left:67.8%; width:26%; height: 64%;
	}
	.CienciasI{
		position:absolute; top:66%; left:78.7%; width:26%; height: 64%;
	}
	.InglesI{
		position:absolute; top:124.7%; left:78.8%; width:26%; height: 64%;
	}
	.EducacionFisicaI{
		position: absolute; top:159%; left:68.2%; width:26%; height: 64%;
	}
	.TecnologiaI{
		position:absolute; top:165.8%; left:44.5%; width:28%; height: 64%;
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
		{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/ArtesI.png','Telesecundaria ArtesI',['class'=>'ArtesI'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/OrientacionI.png','Telesecundaria OrientacionI',['class'=>'OrientacionI'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/GeografiaI.png','Telesecundaria GeografiaI',['class'=>'GeografiaI'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/EspanolI.png','Telesecundaria EspanolI',['class'=>'EspanolI'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/MatematicasI.png','Telesecundaria MatematicasI',['class'=>'MatematicasI'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/CienciasI.png','Telesecundaria CienciasI',['class'=>'CienciasI'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/LenguaI.png','Telesecundaria InglesI',['class'=>'InglesI'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/EducacionFisicaI.png','Telesecundaria EducacionFisicaI',['class'=>'EducacionFisicaI'])}}
	</a>
	<a href="{{('')}}">
		{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/TecnologiaI.png','Telesecundaria TecnologiaI',['class'=>'TecnologiaI'])}}
	</a>
</div>
