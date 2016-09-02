<!--	********* Incluir Jquery	***************	-->
<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script-->
<script src="js/ScrollMagic/scrollmagic/uncompressed/ScrollMagic.js"></script>
<!--script src="js/ScrollMagic/js/lib/greensock/plugins/debug.addIndicators.js" ></script-->
<script src="js/ScrollMagic/js/lib/greensock/TweenMax.min.js"></script>
<script src="js/ScrollMagic/js/lib/greensock/plugins/animation.gsap.js" ></script>
<!--link rel="stylesheet" href="js/ScrollMagic/css/style.css" type="text/css"-->
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
<div id="content-wrapper" style="background-color:white;">
	<div id="example-wrapper">
		<div class="scrollContent" style="overflow-x: hidden;">
			<section class="demo" style="padding-top: 0px; padding-bottom:0px;">

		<!--	****** Cultura *****		-->
				<div style="background-image: url({{url('imagenes/ventana/conocenos/secciones/backCultura.jpg')}}); background-repeat:no-repeat; background-position:center; background-size: cover;">
					<div class="spacer s1"></div>
					<div id="trigger1" class="spacer s0"></div>
					<div id="animateImg1" class="box1" style="left: -50px;">
						{{ HTML::image('imagenes/ventana/conocenos/secciones/iconoCultura.png','Cultura', ['class'=>'image-responsive imgLogo', 'id'=>'imgLogoCultura']) }}
					</div>
					<div id="animateTxt1" class="box1" style="left: -50px;">
						{{ HTML::image('imagenes/ventana/conocenos/secciones/txtCultura.png','Cultura', ['class'=>'image-responsive imgLogo', 'id'=>'imgLogoCultura']) }}

					</div>
					<div class="spacer s1"></div>
				</div>

		<!--	***** Canal Iberoamericano ******		-->
				<div style="background-image: url({{url('imagenes/ventana/conocenos/secciones/backIbero.jpg')}}); background-repeat:no-repeat; background-position:center; background-size: cover;">
					<div class="spacer s1"></div>
					<div id="trigger2" class="spacer s0"></div>
					<div id="animateImg2" class="box1" style="left: -100px;">
						{{ HTML::image('imagenes/ventana/conocenos/secciones/iconoCanalIbero.png','Canal Iberoamericano', ['class'=>'image-responsive imgLogo', 'id'=>'imgLogoCanalIbero']) }}
					</div>
					<div id="animateTxt2" class="box1" style="left: -100px;">
						{{ HTML::image('imagenes/ventana/conocenos/secciones/txtIbero.png','Canal Iberoamericano', ['class'=>'image-responsive imgLogo', 'id'=>'imgLogoCanalIbero']) }}
					</div>
					<div class="spacer s1"></div>
				</div>
		
		<!--	***** Educaplay ******		-->
				<div style="background-image: url({{url('imagenes/ventana/conocenos/secciones/backEducaplay.jpg')}}); background-repeat:no-repeat; background-position:center; background-size: cover;">
					<div class="spacer s1"></div>
					<div id="trigger3" class="spacer s0"></div>
					<div id="animateImg3" class="box1" style="left: -100px;">
						{{ HTML::image('imagenes/ventana/conocenos/secciones/iconoEducaplay.png','Canal Iberoamericano', ['class'=>'image-responsive imgLogo', 'id'=>'imgLogoCultura']) }}
					</div>
					<div id="animateTxt3" class="box1" style="left: -100px;">
						{{ HTML::image('imagenes/ventana/conocenos/secciones/txtEducaplay.png','Canal Iberoamericano', ['class'=>'image-responsive imgLogo', 'id'=>'imgLogoCultura']) }}
					</div>
					<div class="spacer s1"></div>
				</div>

		<!--	***** RedMite ******		-->
				<div style="background-image: url({{url('imagenes/ventana/conocenos/secciones/backRedmite.jpg')}}); background-repeat:no-repeat; background-position:center; background-size: cover;">
					<div class="spacer s1"></div>
					<div id="trigger4" class="spacer s0"></div>
					<div id="animateImg4" class="box1" style="left: -100px;">
						{{ HTML::image('imagenes/ventana/conocenos/secciones/iconoRedmite.png','Canal Iberoamericano', ['class'=>'image-responsive imgLogo', 'id'=>'imgLogoCultura']) }}
					</div>
					<div id="animateTxt4" class="box1" style="left: -100px;">
						{{ HTML::image('imagenes/ventana/conocenos/secciones/txtRedmite.png','Canal Iberoamericano', ['class'=>'image-responsive imgLogo', 'id'=>'imgLogoCultura']) }}
					</div>
					<div class="spacer s1"></div>
				</div>
				
		<!--	***** Educamedia ******		-->
				<div style="background-image: url({{url('imagenes/ventana/conocenos/secciones/backEducamedia.jpg')}}); background-repeat:no-repeat; background-position:center; background-size: cover;">
					<div class="spacer s1"></div>
					<div id="trigger5" class="spacer s0"></div>
					<div id="animateImg5" class="box1" style="left: -100px;">
						{{ HTML::image('imagenes/ventana/conocenos/secciones/iconoEducamedia.png','Canal Iberoamericano', ['class'=>'image-responsive imgLogo', 'id'=>'imgLogoCultura']) }}
					</div>
					<div id="animateTxt5" class="box1" style="left: -100px;">
						{{ HTML::image('imagenes/ventana/conocenos/secciones/txtEducamedia.png','Canal Iberoamericano', ['class'=>'image-responsive imgLogo', 'id'=>'imgLogoCultura']) }}
					</div>
					<div class="spacer s1"></div>
				</div>
				
		<!--	***** Biblioteca ******		-->
				<div style="background-image: url({{url('imagenes/ventana/conocenos/secciones/backBiblioteca.jpg')}}); background-repeat:no-repeat; background-position:center; background-size: cover;">
					<div class="spacer s1"></div>
					<div id="trigger6" class="spacer s0"></div>
					<div id="animateImg6" class="box1" style="left: -100px;">
						{{ HTML::image('imagenes/ventana/conocenos/secciones/iconoBilbio.png','Canal Iberoamericano', ['class'=>'image-responsive imgLogo', 'id'=>'imgLogoCultura']) }}
					</div>
					<div id="animateTxt6" class="box1" style="left: -100px;">
						{{ HTML::image('imagenes/ventana/conocenos/secciones/txtBiblioteca.png','Canal Iberoamericano', ['class'=>'image-responsive imgLogo', 'id'=>'imgLogoCultura']) }}
					</div>
					<div class="spacer s1"></div>
				</div>
				
		<!--	***** Mexico X ******		-->
				<div style="background-image: url({{url('imagenes/ventana/conocenos/secciones/backMexX.jpg')}}); background-repeat:no-repeat; background-position:center; background-size: cover;">
					<div class="spacer s1"></div>
					<div id="trigger7" class="spacer s0"></div>
					<div id="animateImg7" class="box1" style="left: -100px;">
						{{ HTML::image('imagenes/ventana/conocenos/secciones/iconoMexX.png','Canal Iberoamericano', ['class'=>'image-responsive imgLogo', 'id'=>'imgLogoCultura']) }}
					</div>
					<div id="animateTxt7" class="box1" style="left: -100px;">
						{{ HTML::image('imagenes/ventana/conocenos/secciones/txtMexX.png','Canal Iberoamericano', ['class'=>'image-responsive imgLogo', 'id'=>'imgLogoCultura']) }}
					</div>
					<div class="spacer s1"></div>
				</div>
				
		<!--	***** Salud ******		-->
				<div style="background-image: url({{url('imagenes/ventana/conocenos/secciones/backSalud.jpg')}}); background-repeat:no-repeat; background-position:center; background-size: cover;">
					<div class="spacer s1"></div>
					<div id="trigger8" class="spacer s0"></div>
					<div id="animateImg8" class="box1" style="left: -100px;">
						{{ HTML::image('imagenes/ventana/conocenos/secciones/iconoSalud.png','Canal Iberoamericano', ['class'=>'image-responsive imgLogo', 'id'=>'imgLogoCultura']) }}
					</div>
					<div id="animateTxt8" class="box1" style="left: -100px;">
						{{ HTML::image('imagenes/ventana/conocenos/secciones/txtSalud.png','Canal Iberoamericano', ['class'=>'image-responsive imgLogo', 'id'=>'imgLogoCultura']) }}
					</div>
					<div class="spacer s1"></div>
				</div>
				
			</section>
		</div>
	</div>
</div>
<script>
	// build tween Cultura	****************************
	var tween = TweenMax.fromTo("#animateImg1", 1,
								{left: -300},
								{left: 50, repeat: 0, yoyo: true, ease: Circ.easeInOut}
							);
	var tween2 = TweenMax.fromTo("#animateTxt1", 1,
								{left: 400},
								{left: 50, repeat: 0, yoyo: true, ease: Circ.easeInOut}
							);
		// build scene
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger1", duration: 200, offset: -50})
					.setTween(tween)
					//.addIndicators({name: "loop"}) // add indicators (requires plugin)
					.addTo(controller);
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger1", duration: 200, offset: -50})
					.setTween(tween2)
					//.addIndicators({name: "loop"}) // add indicators (requires plugin)
					.addTo(controller);

	// build tween Canal Iberoamericano	****************************
	var tween3 = TweenMax.fromTo("#animateImg2", 1,
								{left: -300},
								{left: 50, repeat: 0, yoyo: true, ease: Circ.easeInOut}
							);
	var tween4 = TweenMax.fromTo("#animateTxt2", 1,
								{left: 400},
								{left: 50, repeat: 0, yoyo: true, ease: Circ.easeInOut}
							);
		// build scene
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger2", duration: 200, offset: -50})
					.setTween(tween3)
					//.addIndicators({name: "loop"}) // add indicators (requires plugin)
					.addTo(controller);
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger2", duration: 200, offset: -50})
					.setTween(tween4)
					//.addIndicators({name: "loop"}) // add indicators (requires plugin)
					.addTo(controller);

	// build tween Educaplay	****************************
	var tween5 = TweenMax.fromTo("#animateImg3", 1,
								{left: -300},
								{left: 50, repeat: 0, yoyo: true, ease: Circ.easeInOut}
							);
	var tween6 = TweenMax.fromTo("#animateTxt3", 1,
								{left: 400},
								{left: 50, repeat: 0, yoyo: true, ease: Circ.easeInOut}
							);
		// build scene
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger3", duration: 200, offset: -50})
					.setTween(tween5)
					//.addIndicators({name: "loop"}) // add indicators (requires plugin)
					.addTo(controller);
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger3", duration: 200, offset: -50})
					.setTween(tween6)
					//.addIndicators({name: "loop"}) // add indicators (requires plugin)
					.addTo(controller);

	// build tween Redmite	****************************
	var tween7 = TweenMax.fromTo("#animateImg4", 1,
								{left: -300},
								{left: 50, repeat: 0, yoyo: true, ease: Circ.easeInOut}
							);
	var tween8 = TweenMax.fromTo("#animateTxt4", 1,
								{left: 400},
								{left: 50, repeat: 0, yoyo: true, ease: Circ.easeInOut}
							);
		// build scene
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger4", duration: 200, offset: -50})
					.setTween(tween7)
					//.addIndicators({name: "loop"}) // add indicators (requires plugin)
					.addTo(controller);
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger4", duration: 200, offset: -50})
					.setTween(tween8)
					//.addIndicators({name: "loop"}) // add indicators (requires plugin)
					.addTo(controller);
					
	// build tween Educamedia	****************************
	var tween9 = TweenMax.fromTo("#animateImg5", 1,
								{left: -300},
								{left: 50, repeat: 0, yoyo: true, ease: Circ.easeInOut}
							);
	var tween10 = TweenMax.fromTo("#animateTxt5", 1,
								{left: 400},
								{left: 50, repeat: 0, yoyo: true, ease: Circ.easeInOut}
							);
		// build scene
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger5", duration: 200, offset: -50})
					.setTween(tween9)
					//.addIndicators({name: "loop"}) // add indicators (requires plugin)
					.addTo(controller);
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger5", duration: 200, offset: -50})
					.setTween(tween10)
					//.addIndicators({name: "loop"}) // add indicators (requires plugin)
					.addTo(controller);
					
	// build tween Biblioteca	****************************
	var tween11 = TweenMax.fromTo("#animateImg6", 1,
								{left: -300},
								{left: 50, repeat: 0, yoyo: true, ease: Circ.easeInOut}
							);
	var tween12 = TweenMax.fromTo("#animateTxt6", 1,
								{left: 400},
								{left: 50, repeat: 0, yoyo: true, ease: Circ.easeInOut}
							);
		// build scene
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger6", duration: 200, offset: -50})
					.setTween(tween11)
					//.addIndicators({name: "loop"}) // add indicators (requires plugin)
					.addTo(controller);
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger6", duration: 200, offset: -50})
					.setTween(tween12)
					//.addIndicators({name: "loop"}) // add indicators (requires plugin)
					.addTo(controller);
					
	// build tween México X	****************************
	var tween13 = TweenMax.fromTo("#animateImg7", 1,
								{left: -300},
								{left: 50, repeat: 0, yoyo: true, ease: Circ.easeInOut}
							);
	var tween14 = TweenMax.fromTo("#animateTxt7", 1,
								{left: 400},
								{left: 50, repeat: 0, yoyo: true, ease: Circ.easeInOut}
							);
		// build scene
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger7", duration: 200, offset: -50})
					.setTween(tween13)
					//.addIndicators({name: "loop"}) // add indicators (requires plugin)
					.addTo(controller);
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger7", duration: 200, offset: -50})
					.setTween(tween14)
					//.addIndicators({name: "loop"}) // add indicators (requires plugin)
					.addTo(controller);

	// build tween Salud	****************************
	var tween15 = TweenMax.fromTo("#animateImg8", 1,
								{left: -300},
								{left: 50, repeat: 0, yoyo: true, ease: Circ.easeInOut}
							);
	var tween16 = TweenMax.fromTo("#animateTxt8", 1,
								{left: 400},
								{left: 50, repeat: 0, yoyo: true, ease: Circ.easeInOut}
							);
		// build scene
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger8", duration: 200, offset: -50})
					.setTween(tween15)
					//.addIndicators({name: "loop"}) // add indicators (requires plugin)
					.addTo(controller);
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger8", duration: 200, offset: -50})
					.setTween(tween16)
					//.addIndicators({name: "loop"}) // add indicators (requires plugin)
					.addTo(controller);
</script>
