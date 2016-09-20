			/*		**********		Apartado secciones. Agregar efectos de movimiento a iconos y descripciones		**********		 */
	// build tween Cultura 	/	Canal Iberoamericano	****************************
	var animateLeft11 = -1000;
	var animateLeft12 = 0;
	var animateLeft21 = 1000;
	var animateLeft22 = 0;
	var tween = TweenMax.fromTo("#animateImg1", 1,
								{left: animateLeft11},
								{left: animateLeft12, repeat: 0, yoyo: true, ease: Circ.easeInOut}
							);
	var tween2 = TweenMax.fromTo("#animateTxt1", 1,
								{left: animateLeft21},
								{left: animateLeft22, repeat: 0, yoyo: true, ease: Circ.easeInOut}
							);
		// build scene
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger1", duration: 200, offset: -200})
					.setTween(tween)
					.addTo(controller);
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger1", duration: 200, offset: -200})
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
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger2", duration: 200, offset: -200})
					.setTween(tween3)
					.addTo(controller);
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger2", duration: 200, offset: -200})
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
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger3", duration: 200, offset: -200})
					.setTween(tween5)
					.addTo(controller);
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger3", duration: 200, offset: -200})
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
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger4", duration: 200, offset: -200})
					.setTween(tween7)
					.addTo(controller);
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger4", duration: 200, offset: -200})
					.setTween(tween8)
					.addTo(controller);