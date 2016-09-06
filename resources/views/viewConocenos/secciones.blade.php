
	<!-- Latest compiled and minified CSS -->
        <!--link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"-->
    <!--	********* Incluir Jquery	***************	-->
		<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script-->
		
    <!-- Latest compiled JavaScript -->
        <!--script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script-->

	<script src="js/ScrollMagic/scrollmagic/uncompressed/ScrollMagic.js"></script>
	<script src="js/ScrollMagic/js/lib/greensock/TweenMax.min.js"></script>
	<script src="js/ScrollMagic/js/lib/greensock/plugins/animation.gsap.js" ></script>
	<link rel="stylesheet" href="js/ScrollMagic/css/examples.css" type="text/css">
	<script>
		// init controller
		var controller = new ScrollMagic.Controller();
	</script>
	
	<style>
		.imgLogoSeccion{
			width:15%;
		}
		.imgTxtDescr{
			width:50%;
			position: relative;
			left:20px;
		}
		.contenedor1{
			left: -200px; top:20px;
		}
		.contenedor2{
			left: 200px; top:-60px;
		}
		.fondoBlanco{
			background-color:white;
		}
		.quitaPadding{
			padding-top: 0px; padding-bottom:0px;
		}
		.imgBkgd{
			 background-repeat:no-repeat; background-position:left top, right top; background-size:51% 100%;
		}
		@media(min-width:1800px){
			.imgBkgd{
				height:200px;
			}
			.contenedor2{
				left: 200px; top:50px;
			}
		}
	</style>
	
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
				<div class="imgBkgd" style="background-image: url({{url('imagenes/ventana/conocenos/secciones/backCultura.jpg')}}), url({{url('imagenes/ventana/conocenos/secciones/backIbero.jpg')}});">
					<!--div class="spacer s1"></div-->
					<div id="trigger1" class="spacer s0"></div>
					<div id="animateImg1" class="box1 contenedor1">
						{{ HTML::image('imagenes/ventana/conocenos/secciones/iconoCultura.png','Cultura', ['class'=>'image-responsive imgLogoSeccion', 'id'=>'imgLogoCultura']) }}
						{{ HTML::image('imagenes/ventana/conocenos/secciones/txtCultura.png','Cultura', ['class'=>'image-responsive imgTxtDescr', 'id'=>'imgLogoCultura']) }}
					</div>
					<div id="animateTxt1" class="box1 contenedor2">
						{{ HTML::image('imagenes/ventana/conocenos/secciones/iconoCanalIbero.png','Canal Iberoamericano', ['class'=>'image-responsive imgLogoSeccion', 'id'=>'imgLogoCanalIbero']) }}
						{{ HTML::image('imagenes/ventana/conocenos/secciones/txtIbero.png','Canal Iberoamericano', ['class'=>'image-responsive imgTxtDescr', 'id'=>'imgLogoCanalIbero']) }}
					</div>
					<!--div class="spacer s1"></div-->
				</div>

		<!--	***** Educaplay	/	RedMite ******		-->
				<div class="imgBkgd" style="background-image: url({{url('imagenes/ventana/conocenos/secciones/backEducaplay.jpg')}}), url({{url('imagenes/ventana/conocenos/secciones/backRedmite.jpg')}});">
					<!--div class="spacer s1"></div-->
					<div id="trigger2" class="spacer s0"></div>
					<div id="animateImg2" class="box1 contenedor1">
						{{ HTML::image('imagenes/ventana/conocenos/secciones/iconoEducaplay.png','Canal Iberoamericano', ['class'=>'image-responsive imgLogoSeccion', 'id'=>'imgLogoCultura']) }}
						{{ HTML::image('imagenes/ventana/conocenos/secciones/txtEducaplay.png','Canal Iberoamericano', ['class'=>'image-responsive imgTxtDescr', 'id'=>'imgLogoCultura']) }}
					</div>
					<div id="animateTxt2" class="box1 contenedor2">
						{{ HTML::image('imagenes/ventana/conocenos/secciones/iconoRedmite.png','Canal Iberoamericano', ['class'=>'image-responsive imgLogoSeccion', 'id'=>'imgLogoCultura']) }}
						{{ HTML::image('imagenes/ventana/conocenos/secciones/txtRedmite.png','Canal Iberoamericano', ['class'=>'image-responsive imgTxtDescr', 'id'=>'imgLogoCultura']) }}
					</div>
					<!--div class="spacer s1"></div-->
				</div>
		
		<!--	***** Educamedia	/	Biblioteca ******		-->
				<div class="imgBkgd" style="background-image: url({{url('imagenes/ventana/conocenos/secciones/backEducamedia.jpg')}}), url({{url('imagenes/ventana/conocenos/secciones/backBiblioteca.jpg')}});">
					<!--div class="spacer s1"></div-->
					<div id="trigger3" class="spacer s0"></div>
					<div id="animateImg3" class="box1 contenedor1">
						{{ HTML::image('imagenes/ventana/conocenos/secciones/iconoEducamedia.png','Canal Iberoamericano', ['class'=>'image-responsive imgLogoSeccion', 'id'=>'imgLogoCultura']) }}
						{{ HTML::image('imagenes/ventana/conocenos/secciones/txtEducamedia.png','Canal Iberoamericano', ['class'=>'image-responsive imgTxtDescr', 'id'=>'imgLogoCultura']) }}
					</div>
					<div id="animateTxt3" class="box1 contenedor2">
						{{ HTML::image('imagenes/ventana/conocenos/secciones/iconoBilbio.png','Canal Iberoamericano', ['class'=>'image-responsive imgLogoSeccion', 'id'=>'imgLogoCultura']) }}
						{{ HTML::image('imagenes/ventana/conocenos/secciones/txtBiblioteca.png','Canal Iberoamericano', ['class'=>'image-responsive imgTxtDescr', 'id'=>'imgLogoCultura']) }}
					</div>
					<!--div class="spacer s1"></div-->
				</div>

		<!--	***** Mexico X	/	Salud ******		-->
				<div class="imgBkgd" style="background-image: url({{url('imagenes/ventana/conocenos/secciones/backMexX.jpg')}}), url({{url('imagenes/ventana/conocenos/secciones/backSalud.jpg')}});">
					<!--div class="spacer s1"></div-->
					<div id="trigger4" class="spacer s0"></div>
					<div id="animateImg4" class="box1 contenedor1">
						{{ HTML::image('imagenes/ventana/conocenos/secciones/iconoMexX.png','Canal Iberoamericano', ['class'=>'image-responsive imgLogoSeccion', 'id'=>'imgLogoCultura']) }}
						{{ HTML::image('imagenes/ventana/conocenos/secciones/txtMexX.png','Canal Iberoamericano', ['class'=>'image-responsive imgTxtDescr', 'id'=>'imgLogoCultura']) }}
					</div>
					<div id="animateTxt4" class="box1 contenedor2">
						{{ HTML::image('imagenes/ventana/conocenos/secciones/iconoSalud.png','Canal Iberoamericano', ['class'=>'image-responsive imgLogoSeccion', 'id'=>'imgLogoCultura']) }}
						{{ HTML::image('imagenes/ventana/conocenos/secciones/txtSalud.png','Canal Iberoamericano', ['class'=>'image-responsive imgTxtDescr', 'id'=>'imgLogoCultura']) }}
					</div>
					<!--div class="spacer s1"></div-->
				</div>
			</section>
		</div>
	</div>
</div>
<script>
	// build tween Cultura 	/	Canal Iberoamericano	****************************
	var animateLeft11 = -1000;
	var animateLeft12 = -300;
	var animateLeft21 = 1000;
	var animateLeft22 = 300;
	var tween = TweenMax.fromTo("#animateImg1", 1,
								{left: animateLeft11},
								{left: animateLeft12, repeat: 0, yoyo: true, ease: Circ.easeInOut}
							);
	var tween2 = TweenMax.fromTo("#animateTxt1", 1,
								{left: animateLeft21},
								{left: animateLeft22, repeat: 0, yoyo: true, ease: Circ.easeInOut}
							);
		// build scene
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger1", duration: 200, offset: -50})
					.setTween(tween)
					.addTo(controller);
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger1", duration: 200, offset: -50})
					.setTween(tween2)
					.addTo(controller);

	// build tween Educaplay	/	RedMite	****************************
	var tween3 = TweenMax.fromTo("#animateImg2", 1,
								{left: animateLeft11},
								{left: animateLeft12, repeat: 0, yoyo: true, ease: Circ.easeInOut}
							);
	var tween4 = TweenMax.fromTo("#animateTxt2", 1,
								{left: animateLeft21},
								{left: animateLeft22, repeat: 0, yoyo: true, ease: Circ.easeInOut}
							);
		// build scene
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger2", duration: 200, offset: -50})
					.setTween(tween3)
					.addTo(controller);
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger2", duration: 200, offset: -50})
					.setTween(tween4)
					.addTo(controller);

	// build tween Educamedia	/	Biblioteca	****************************
	var tween5 = TweenMax.fromTo("#animateImg3", 1,
								{left: animateLeft11},
								{left: animateLeft12, repeat: 0, yoyo: true, ease: Circ.easeInOut}
							);
	var tween6 = TweenMax.fromTo("#animateTxt3", 1,
								{left: animateLeft21},
								{left: animateLeft22, repeat: 0, yoyo: true, ease: Circ.easeInOut}
							);
		// build scene
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger3", duration: 200, offset: -50})
					.setTween(tween5)
					.addTo(controller);
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger3", duration: 200, offset: -50})
					.setTween(tween6)
					.addTo(controller);

	// build tween Mexico X	/	Salud	****************************
	var tween7 = TweenMax.fromTo("#animateImg4", 1,
								{left: animateLeft11},
								{left: animateLeft12, repeat: 0, yoyo: true, ease: Circ.easeInOut}
							);
	var tween8 = TweenMax.fromTo("#animateTxt4", 1,
								{left: animateLeft21},
								{left: animateLeft22, repeat: 0, yoyo: true, ease: Circ.easeInOut}
							);
		// build scene
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger4", duration: 200, offset: -50})
					.setTween(tween7)
					.addTo(controller);
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger4", duration: 200, offset: -50})
					.setTween(tween8)
					.addTo(controller);
</script>
