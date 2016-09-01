
<!--	********	Parallax Capas	***********	-->
<!-- Behavioral Meta Data -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <div class="row">
			<div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
			  <section class="slider">
				<div class="flexslider">
				  <ul class="slides">
					<li>
						<div class="col-md-4">
							<img src="imagenes/ventana/conocenos/links/amexcid.png" alt="..." class="img-responsive">
						</div>
						<div class="col-md-4">
							<img src="imagenes/ventana/conocenos/links/canal6.png" alt="..." class="img-responsive">
						</div>
						<div class="col-md-4">
							<img src="imagenes/ventana/conocenos/links/csuca.png" alt="..." class="img-responsive">
						</div>
					</li>
					<li>
						<div class="col-md-4">
							<img src="imagenes/ventana/conocenos/links/sica.png" alt="..." class="img-responsive">
						</div>
						<div class="col-md-4">
							<img src="imagenes/ventana/conocenos/links/suyapa.png" alt="..." class="img-responsive">
						</div>
						<div class="col-md-4">
							<img src="imagenes/ventana/conocenos/links/UVeracruzana.png" alt="..." class="img-responsive">
						</div>
					</li>
				  </ul>
				</div>
			  </section>
		  </div>
		</div>

	<style>
		.slider{
			padding:50px !important;
		}
	</style>
	
	<!--	********* Incluir libreria flexslider	***************	-->
	<link rel="stylesheet" href="js/FlexSlider/flexslider.css" type="text/css" media="screen"/>
	<script src="js/FlexSlider/jquery.flexslider.js"></script>
	<script>
		
		<!--	***********	Activar slider colaboradores	*************	-->
		$('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
		  $('.flexslider').flexslider("stop");
        }
      });
	</script>
