			/*		**********		Apartado secciones. Agregar efectos de movimiento a iconos y descripciones		**********		 */
	// build tween Cultura 	/	Canal Iberoamericano	****************************
	var animateLeft11 = -1000;
	var animateLeft12 = 0;
	var animateLeft21 = 1000;
	var animateLeft22 = 0;
	
	var rutaIzquierda = {
		entrada: {
			curviness:1.25,
			autorotate: true,
			values:[{x:0,y:500}, {x:400, y:0}, {x:600, y:-170}, {x:800, y:-100}],
		},
		salida:{
			curviness:1.25,
			autorotate:true,
			values:[{x:0, y:0},{x:-50,y:-50},{x:-100 , y:-100}]
		}
	};
	
	var rutaDerecha = {
		entrada: {
			curviness:1.25,
			autorotate: true,
			values:[{x:0,y:500}, {x:-400, y:0}, {x:-600, y:-170}, {x:-800, y:-100}],
		},
		salida:{
			curviness:1.25,
			autorotate:true,
			values:[{x:0, y:0},{x:-50,y:-50},{x:-100 , y:-100}]
		}
	};
	
	var tween = new TimelineMax()
				.add(TweenMax.to($("#animateImg1"), 1, {css:{bezier:rutaIzquierda.entrada},ease: Linear.easeNone}))
				//.add(TweenMax.to($("#animateImg1"), 1, {css:{bezier:rutaIzquierda.salida},ease:Power1.easeInOut}))
				;
	var tween2 = new TimelineMax()
				.add(TweenMax.to($("#animateTxt1"), 1, {css:{bezier:rutaDerecha.entrada},ease: Linear.easeNone}))
				//.add(TweenMax.to($("#animateImg1"), 1, {css:{bezier:rutaIzquierda.salida},ease:Power1.easeInOut}))
				;
		// build scene
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger1", duration: 500, offset: -600})
					.setTween(tween)
					.addTo(controller);
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger1", duration: 500, offset: -600})
					.setTween(tween2)
					.addTo(controller);

	// build tween Educaplay	/	RedMite	****************************
	var tween3 = new TimelineMax().add(TweenMax.to($("#animateImg2"), 1, {css:{bezier:rutaIzquierda.entrada},ease: Linear.easeNone}));
	var tween4 = new TimelineMax().add(TweenMax.to($("#animateTxt2"), 1, {css:{bezier:rutaDerecha.entrada},ease: Linear.easeNone}));
		// build scene
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger2", duration: 400, offset: -600})
					.setTween(tween3)
					.addTo(controller);
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger2", duration: 400, offset: -600})
					.setTween(tween4)
					.addTo(controller);

	// build tween Educamedia	/	Biblioteca	****************************
	var tween5 = new TimelineMax().add(TweenMax.to($("#animateImg3"), 1, {css:{bezier:rutaIzquierda.entrada},ease: Linear.easeNone}));
	var tween6 = new TimelineMax().add(TweenMax.to($("#animateTxt3"), 1, {css:{bezier:rutaDerecha.entrada},ease: Linear.easeNone}));
		// build scene
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger3", duration: 400, offset: -600})
					.setTween(tween5)
					.addTo(controller);
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger3", duration: 400, offset: -600})
					.setTween(tween6)
					.addTo(controller);

	// build tween Mexico X	/	Salud	****************************
	var tween7 = new TimelineMax().add(TweenMax.to($("#animateImg4"), 1, {css:{bezier:rutaIzquierda.entrada},ease: Linear.easeNone}));
	var tween8 = new TimelineMax().add(TweenMax.to($("#animateTxt4"), 1, {css:{bezier:rutaDerecha.entrada},ease: Linear.easeNone}));
		// build scene
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger4", duration: 400, offset: -600})
					.setTween(tween7)
					.addTo(controller);
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger4", duration: 400, offset: -600})
					.setTween(tween8)
					.addTo(controller);