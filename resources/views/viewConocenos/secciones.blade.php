	<script src="js/ScrollMagic/scrollmagic/uncompressed/ScrollMagic.js"></script>
	<script src="js/ScrollMagic/js/lib/greensock/TweenMax.min.js"></script>
	<script src="js/ScrollMagic/js/lib/greensock/plugins/animation.gsap.js" ></script>
	<link rel="stylesheet" href="js/ScrollMagic/css/examples.css" type="text/css">
	<script>
		// init controller
		var controller = new ScrollMagic.Controller();
	</script>
	
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12 contenedorMapa">
			<div class="text-center"><h4>SECCIONES</h4></div>
		</div>
	</div>
<div id="content-wrapper" class="fondoBlanco">
	<div id="example-wrapper">
		<div class="scrollContent" style="overflow-x: hidden;">
			<section class="demo quitaPadding">
		<!--	****** Cultura 	/	Canal Iberoamericano *****		-->
					<!--div class="spacer s1"></div-->
				<div class="imgBkgd padTop col-xs-12 col-sm-12 col-md-6 col-lg-6" style="background-image: url({{url('imagenes/ventana/conocenos/secciones/backCultura.jpg')}});">
					<div id="trigger1" class="spacer s0"></div>
					<div id="animateImg1" class="box1">
						{{ HTML::image('imagenes/ventana/conocenos/secciones/iconoCultura.png','Cultura', ['class'=>'image-responsive imgLogoSeccion', 'id'=>'imgLogoCultura']) }}
						{{ HTML::image('imagenes/ventana/conocenos/secciones/txtCultura.png','Cultura', ['class'=>'image-responsive imgTxtDescr', 'id'=>'imgLogoCultura']) }}
					</div>
				</div>
				<div class="imgBkgd padTop col-xs-12 col-sm-12 col-md-6 col-lg-6" style="background-image: url({{url('imagenes/ventana/conocenos/secciones/backIbero.jpg')}});">
					<div id="trigger1" class="spacer s0"></div>
					<div id="animateTxt1" class="box1 ">
						{{ HTML::image('imagenes/ventana/conocenos/secciones/iconoCanalIbero.png','Canal Iberoamericano', ['class'=>'image-responsive imgLogoSeccion', 'id'=>'imgLogoCanalIbero']) }}
						{{ HTML::image('imagenes/ventana/conocenos/secciones/txtIbero.png','Canal Iberoamericano', ['class'=>'image-responsive imgTxtDescr', 'id'=>'imgLogoCanalIbero']) }}
					</div>
					<!--div class="spacer s1"></div-->
				</div>
		<!--	***** Educaplay	/	RedMite ******		-->
					<!--div class="spacer s1"></div-->
				<div class="imgBkgd padTop col-xs-12 col-sm-12 col-md-6 col-lg-6" style="background-image: url({{url('imagenes/ventana/conocenos/secciones/backEducaplay.jpg')}});">
					<div id="trigger2" class="spacer s0"></div>
					<div id="animateImg2" class="box1 ">
						{{ HTML::image('imagenes/ventana/conocenos/secciones/iconoEducaplay.png','Canal Iberoamericano', ['class'=>'image-responsive imgLogoSeccion', 'id'=>'imgLogoCultura']) }}
						{{ HTML::image('imagenes/ventana/conocenos/secciones/txtEducaplay.png','Canal Iberoamericano', ['class'=>'image-responsive imgTxtDescr', 'id'=>'imgLogoCultura']) }}
					</div>
				</div>
				<div class="imgBkgd padTop col-xs-12 col-sm-12 col-md-6 col-lg-6" style="background-image: url({{url('imagenes/ventana/conocenos/secciones/backRedmite.jpg')}});">
					<div id="trigger2" class="spacer s0"></div>
					<div id="animateTxt2" class="box1">
						{{ HTML::image('imagenes/ventana/conocenos/secciones/iconoRedmite.png','Canal Iberoamericano', ['class'=>'image-responsive imgLogoSeccion', 'id'=>'imgLogoCultura']) }}
						{{ HTML::image('imagenes/ventana/conocenos/secciones/txtRedmite.png','Canal Iberoamericano', ['class'=>'image-responsive imgTxtDescr', 'id'=>'imgLogoCultura']) }}
					</div>
					<!--div class="spacer s1"></div-->
				</div>
		
		<!--	***** Educamedia	/	Biblioteca ******		-->
					<!--div class="spacer s1"></div-->
				<div class="imgBkgd padTop col-xs-12 col-sm-12 col-md-6 col-lg-6" style="background-image: url({{url('imagenes/ventana/conocenos/secciones/backEducamedia.jpg')}});">
					<div id="trigger3" class="spacer s0"></div>
					<div id="animateImg3" class="box1">
						{{ HTML::image('imagenes/ventana/conocenos/secciones/iconoEducamedia.png','Canal Iberoamericano', ['class'=>'image-responsive imgLogoSeccion', 'id'=>'imgLogoCultura']) }}
						{{ HTML::image('imagenes/ventana/conocenos/secciones/txtEducamedia.png','Canal Iberoamericano', ['class'=>'image-responsive imgTxtDescr', 'id'=>'imgLogoCultura']) }}
					</div>
				</div>
				<div class="imgBkgd padTop col-xs-12 col-sm-12 col-md-6 col-lg-6" style="background-image: url({{url('imagenes/ventana/conocenos/secciones/backBiblioteca.jpg')}});">
					<div id="trigger3" class="spacer s0"></div>
					<div id="animateTxt3" class="box1">
						{{ HTML::image('imagenes/ventana/conocenos/secciones/iconoBilbio.png','Canal Iberoamericano', ['class'=>'image-responsive imgLogoSeccion', 'id'=>'imgLogoCultura']) }}
						{{ HTML::image('imagenes/ventana/conocenos/secciones/txtBiblioteca.png','Canal Iberoamericano', ['class'=>'image-responsive imgTxtDescr', 'id'=>'imgLogoCultura']) }}
					</div>
					<!--div class="spacer s1"></div-->
				</div>

		<!--	***** Mexico X	/	Salud ******		-->
					<!--div class="spacer s1"></div-->
				<div class="imgBkgd padTop col-xs-12 col-sm-12 col-md-6 col-lg-6" style="background-image: url({{url('imagenes/ventana/conocenos/secciones/backMexX.jpg')}});">
					<div id="trigger4" class="spacer s0"></div>
					<div id="animateImg4" class="box1">
						{{ HTML::image('imagenes/ventana/conocenos/secciones/iconoMexX.png','Canal Iberoamericano', ['class'=>'image-responsive imgLogoSeccion', 'id'=>'imgLogoCultura']) }}
						{{ HTML::image('imagenes/ventana/conocenos/secciones/txtMexX.png','Canal Iberoamericano', ['class'=>'image-responsive imgTxtDescr', 'id'=>'imgLogoCultura']) }}
					</div>
				</div>
				<div class="imgBkgd padTop col-xs-12 col-sm-12 col-md-6 col-lg-6" style="background-image: url({{url('imagenes/ventana/conocenos/secciones/backSalud.jpg')}});">
					<div id="trigger4" class="spacer s0"></div>
					<div id="animateTxt4" class="box1">
						{{ HTML::image('imagenes/ventana/conocenos/secciones/iconoSalud.png','Canal Iberoamericano', ['class'=>'image-responsive imgLogoSeccion', 'id'=>'imgLogoCultura']) }}
						{{ HTML::image('imagenes/ventana/conocenos/secciones/txtSalud.png','Canal Iberoamericano', ['class'=>'image-responsive imgTxtDescr', 'id'=>'imgLogoCultura']) }}
					</div>
					<!--div class="spacer s1"></div-->
				</div>
			</section>
		</div>
	</div>
</div>
