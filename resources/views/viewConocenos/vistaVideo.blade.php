	<link rel="stylesheet" type="text/css" href="css/conocenos/video.css"/>
	<script type="text/javascript" src="js/conocenos/video.js"></script>
	<video data-keepplaying class="videoFondo" id="videoFondo" oncanplay="reproduceVideo()">
		<source src="imagenes/ventana/conocenos/presentacion/institucional-bn.mp4" type="video/mp4"/>
	</video>
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12">
			<img id="textoProyectos" class="muestra animated centra img-responsive" src="imagenes/ventana/conocenos/presentacion/proyecto.png"/>
			<img id="textoObjetivos" class="oculta animated centra img-responsive" src="imagenes/ventana/conocenos/presentacion/objetivos.png"/>
			<a href="#" data-toggle="modal" data-target="#modalVideo" onfocus="this.blur()">
				<img id="botonPlay" class="oculta animated centra img-responsive" src="imagenes/ventana/conocenos/presentacion/botonPlay.png"/>
			</a>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12"></div>
		<div class="divFlechaBrinca col-sm-12 col-md-12 col-lg-12">
			<div class="txtContinua text-center">
				CONTINUA NAVEGANDO
			</div>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12"></div>
		<div class="divFlechaBrinca col-sm-12 col-md-12 col-lg-12 text-center">
			<img id="flechaBrinca" class="flechaBrinca" src="imagenes/educaplay/flechaDetalle.png" onclick="avanzaSeccion('2')"/>
		</div>
	</div>
	<div class="modal fade" id="modalVideo" tabindex="-1" role="dialog" aria-labelledby="etiquetaModalVideo" data-backdrop="false">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="etiquetaModalVideo">Conocenos</h4>
				</div>
				<div clas="modal-body">
					<video style="width:100%;" controls>
						<source src="imagenes/ventana/conocenos/presentacion/institucional.mp4" type="video/mp4"/>
					</video>
				</div>
			</div>
		</div>
	</div>