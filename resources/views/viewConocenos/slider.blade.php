<link rel="stylesheet" type="text/css" href="css/conocenos/slider.css"/>
<!--	********	Parallax Capas	***********	-->
<!-- Behavioral Meta Data -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<ul id="scene" class="scene" style="position:absolute; top:50px; left:-100px; width:100%">
		<li class="layer" data-depth="0.20"><img src="imagenes/ventana/conocenos/slider/red1.png" style="height:70%; width:90%;"/></li>
	</ul>
	<ul id="scene2" class="scene" style="position:absolute; top:100px; left:250px; width:100%">
		<li class="layer" data-depth="0.40"><img src="imagenes/ventana/conocenos/slider/red2.png" style="height:90%; width:90%;"/></li>
	</ul>
        <div class="row" style="margin:0px;">
			<div class="col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
				<img class="img-responsive marcoNegro" id="imgMarcoNegro" src="imagenes/ventana/conocenos/slider/marcoNegro.png"/>
				<img class="img-responsive imgEdificio" id="imgApartadoEdificio" src="imagenes/ventana/conocenos/slider/antecedentes.png"/>
				<div id="divTriangulo" class="trianguloDerecha opaco homologaColor"></div>
				<div id="divFigura" class="opaco"></div>
			</div>
		</div>
        <div class="row" style="margin:0px;">
			 <div class="col-sm-4 col-md-4 col-lg-4 altura50Celda" onclick="tranformaFigura(1)" id="contenedorClic1">
				<a class="first after txtNegro acomodaLigas punteroMano" id="contenedorTxt1">Colaboradores</a>
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4 altura50Celda" onclick="tranformaFigura(2)" id="contenedorClic2">
				<a class="first after txtNegro acomodaLigas punteroMano enfasis" id="contenedorTxt2">Antecedentes</a>
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4 altura50Celda" onclick="tranformaFigura(3)" id="contenedorClic3">
				<a class="first after txtNegro acomodaLigas punteroMano" id="contenedorTxt3">Alineación del Proyecto</a>
			</div>
		</div>
		<div class="row" style="position:relative; top:0px;">
			<div class="col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-1 col-lg-8 col-lg-offset-1">
					<br><br><br><br>
					<img id="imgTextoDescribe" class="img-responsive" src="imagenes/ventana/conocenos/slider/contenidos/textoAntecedentes.png" style="margin: auto; width:90%;"/>
					<br><br><br><br>
			</div>
		</div>

	<!--	********* Incluir libreria parallax	***************	-->
	<script src="js/librerias/parallaxCapas/deploy/parallax.js"></script>
	<!--	********* Incluir código JS***************	-->
	<script src="js/conocenos/slider.js"></script>
