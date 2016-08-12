<!--	********* Incluir Jquery	***************	-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="js/ScrollMagic/scrollmagic/uncompressed/ScrollMagic.js"></script>
<script src="js/ScrollMagic/js/lib/greensock/plugins/debug.addIndicators.js" ></script>
<script src="js/ScrollMagic/js/lib/greensock/TweenMax.min.js"></script>
<script src="js/ScrollMagic/js/lib/greensock/plugins/animation.gsap.js" ></script>
<link rel="stylesheet" href="js/ScrollMagic/css/style.css" type="text/css">
<link rel="stylesheet" href="js/ScrollMagic/css/examples.css" type="text/css">
<script>
	// init controller
	var controller = new ScrollMagic.Controller();
</script>
<div id="content-wrapper">
	<div id="example-wrapper">
		<div class="scrollContent" style="height:1500px;">
			<section class="demo" >

				<div class="spacer s2" style="height:200px;"></div>
				<div id="trigger0" class="spacer s0"></div>
				<div id="animate5" class="box1 skin" style="left: -100px;">
					<p>tick. tack.</p>
					<a href="#" class="viewsource">view source</a>
				</div>
				<div id="animate6" class="box1 skin" style="left: -50px;">
					<p>tick. tack.</p>
					<a href="#" class="viewsource">view source</a>
				</div>
		<!--	****** Cultura *****		-->
				<div class="spacer s2"></div>
				<div id="trigger1" class="spacer s0"></div>
				<div id="animateImg1" class="box1 skin" style="left: -100px;">
					<p>tick. tack.</p>
					<a href="#" class="viewsource">view source</a>
				</div>
				<div id="animateTxt1" class="box1 skin" style="left: -50px;">
					<p> Cultura </p>
					<a href="#" class="viewsource">view source</a>
				</div>
				<div class="spacer s2"></div>
		<!--	***** Canal Iberoamericano ******		-->
				<div id="trigger2" class="spacer s0"></div>
				<div id="animateImg2" class="box1 skin" style="left: -100px;">
					<p>tick. tack.</p>
					<a href="#" class="viewsource">view source</a>
				</div>
				<div id="animateTxt2" class="box1 skin" style="left: -100px;">
					<p>Canal Iberoamericano</p>
					<a href="#" class="viewsource">view source</a>
				</div>
				<div class="spacer s2"></div>
				
		<!--	***** Educaplay ******		-->
				<div id="trigger3" class="spacer s0"></div>
				<div id="animateImg3" class="box1 skin" style="left: -100px;">
					<p>tick. tack.</p>
					<a href="#" class="viewsource">view source</a>
				</div>
				<div id="animateTxt3" class="box1 skin" style="left: -100px;">
					<p>Educaplay</p>
					<a href="#" class="viewsource">view source</a>
				</div>
				<div class="spacer s2"></div>

		<!--	***** RedMite ******		-->
				<div id="trigger4" class="spacer s0"></div>
				<div id="animateImg4" class="box1 skin" style="left: -100px;">
					<p>tick. tack.</p>
					<a href="#" class="viewsource">view source</a>
				</div>
				<div id="animateTxt4" class="box1 skin" style="left: -100px;">
					<p>RedMITE</p>
					<a href="#" class="viewsource">view source</a>
				</div>
				<div class="spacer s2"></div>
				
		<!--	***** Educamedia ******		-->
				<div id="trigger5" class="spacer s0"></div>
				<div id="animateImg5" class="box1 skin" style="left: -100px;">
					<p>tick. tack.</p>
					<a href="#" class="viewsource">view source</a>
				</div>
				<div id="animateTxt5" class="box1 skin" style="left: -100px;">
					<p>Educamedia</p>
					<a href="#" class="viewsource">view source</a>
				</div>
				<div class="spacer s2"></div>
				
		<!--	***** Biblioteca ******		-->
				<div id="trigger6" class="spacer s0"></div>
				<div id="animateImg6" class="box1 skin" style="left: -100px;">
					<p>tick. tack.</p>
					<a href="#" class="viewsource">view source</a>
				</div>
				<div id="animateTxt6" class="box1 skin" style="left: -100px;">
					<p>Biblioteca</p>
					<a href="#" class="viewsource">view source</a>
				</div>
				<div class="spacer s2"></div>
				
		<!--	***** Mexico X ******		-->
				<div id="trigger7" class="spacer s0"></div>
				<div id="animateImg7" class="box1 skin" style="left: -100px;">
					<p>tick. tack.</p>
					<a href="#" class="viewsource">view source</a>
				</div>
				<div id="animateTxt7" class="box1 skin" style="left: -100px;">
					<p>México X</p>
					<a href="#" class="viewsource">view source</a>
				</div>
				<div class="spacer s2"></div>
				
		<!--	***** Salud ******		-->
				<div id="trigger8" class="spacer s0"></div>
				<div id="animateImg8" class="box1 skin" style="left: -100px;">
					<p>tick. tack.</p>
					<a href="#" class="viewsource">view source</a>
				</div>
				<div id="animateTxt8" class="box1 skin" style="left: -100px;">
					<p>salud</p>
					<a href="#" class="viewsource">view source</a>
				</div>
				<div class="spacer s2"></div>
				<div class="spacer s2"></div>
				<div class="spacer s2"></div>
			</section>
		</div>
	</div>
</div>
<script>
	// build tween Cultura	****************************
	var tween = TweenMax.fromTo("#animateImg1", 1,
								{top: 200},
								{top: -100, repeat: 0, yoyo: true, ease: Circ.easeInOut}
							);
	var tween2 = TweenMax.fromTo("#animateTxt1", 1,
								{top: 200},
								{top: -100, repeat: 0, yoyo: true, ease: Circ.easeInOut}
							);
		// build scene
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger1", duration: 200, offset: -50})
					.setTween(tween)
					.addIndicators({name: "loop"}) // add indicators (requires plugin)
					.addTo(controller);
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger1", duration: 200, offset: -50})
					.setTween(tween2)
					.addIndicators({name: "loop"}) // add indicators (requires plugin)
					.addTo(controller);

	// build tween Canal Iberoamericano	****************************
	var tween3 = TweenMax.fromTo("#animateImg2", 1,
								{left: -500},
								{left: -50, repeat: 0, yoyo: true, ease: Circ.easeInOut}
							);
	var tween4 = TweenMax.fromTo("#animateTxt2", 1,
								{left: 500},
								{left: 50, repeat: 0, yoyo: true, ease: Circ.easeInOut}
							);
		// build scene
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger2", duration: 200, offset: -50})
					.setTween(tween3)
					.addIndicators({name: "loop"}) // add indicators (requires plugin)
					.addTo(controller);
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger2", duration: 200, offset: -50})
					.setTween(tween4)
					.addIndicators({name: "loop"}) // add indicators (requires plugin)
					.addTo(controller);

	// build tween Educaplay	****************************
	var tween5 = TweenMax.fromTo("#animateImg3", 1,
								{left: -500},
								{left: -50, repeat: 0, yoyo: true, ease: Circ.easeInOut}
							);
	var tween6 = TweenMax.fromTo("#animateTxt3", 1,
								{left: 500},
								{left: 50, repeat: 0, yoyo: true, ease: Circ.easeInOut}
							);
		// build scene
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger3", duration: 200, offset: -50})
					.setTween(tween5)
					.addIndicators({name: "loop"}) // add indicators (requires plugin)
					.addTo(controller);
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger3", duration: 200, offset: -50})
					.setTween(tween6)
					.addIndicators({name: "loop"}) // add indicators (requires plugin)
					.addTo(controller);

	// build tween Redmite	****************************
	var tween7 = TweenMax.fromTo("#animateImg4", 1,
								{left: -500},
								{left: -50, repeat: 0, yoyo: true, ease: Circ.easeInOut}
							);
	var tween8 = TweenMax.fromTo("#animateTxt4", 1,
								{left: 500},
								{left: 50, repeat: 0, yoyo: true, ease: Circ.easeInOut}
							);
		// build scene
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger4", duration: 200, offset: -50})
					.setTween(tween7)
					.addIndicators({name: "loop"}) // add indicators (requires plugin)
					.addTo(controller);
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger4", duration: 200, offset: -50})
					.setTween(tween8)
					.addIndicators({name: "loop"}) // add indicators (requires plugin)
					.addTo(controller);
					
	// build tween Educamedia	****************************
	var tween9 = TweenMax.fromTo("#animateImg5", 1,
								{left: -500},
								{left: -50, repeat: 0, yoyo: true, ease: Circ.easeInOut}
							);
	var tween10 = TweenMax.fromTo("#animateTxt5", 1,
								{left: 500},
								{left: 50, repeat: 0, yoyo: true, ease: Circ.easeInOut}
							);
		// build scene
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger5", duration: 200, offset: -50})
					.setTween(tween9)
					.addIndicators({name: "loop"}) // add indicators (requires plugin)
					.addTo(controller);
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger5", duration: 200, offset: -50})
					.setTween(tween10)
					.addIndicators({name: "loop"}) // add indicators (requires plugin)
					.addTo(controller);
					
	// build tween Biblioteca	****************************
	var tween11 = TweenMax.fromTo("#animateImg6", 1,
								{left: -500},
								{left: -50, repeat: 0, yoyo: true, ease: Circ.easeInOut}
							);
	var tween12 = TweenMax.fromTo("#animateTxt6", 1,
								{left: 500},
								{left: 50, repeat: 0, yoyo: true, ease: Circ.easeInOut}
							);
		// build scene
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger6", duration: 200, offset: -50})
					.setTween(tween11)
					.addIndicators({name: "loop"}) // add indicators (requires plugin)
					.addTo(controller);
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger6", duration: 200, offset: -50})
					.setTween(tween12)
					.addIndicators({name: "loop"}) // add indicators (requires plugin)
					.addTo(controller);
					
	// build tween México X	****************************
	var tween13 = TweenMax.fromTo("#animateImg7", 1,
								{left: -500},
								{left: -50, repeat: 0, yoyo: true, ease: Circ.easeInOut}
							);
	var tween14 = TweenMax.fromTo("#animateTxt7", 1,
								{left: 500},
								{left: 50, repeat: 0, yoyo: true, ease: Circ.easeInOut}
							);
		// build scene
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger7", duration: 200, offset: -50})
					.setTween(tween13)
					.addIndicators({name: "loop"}) // add indicators (requires plugin)
					.addTo(controller);
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger7", duration: 200, offset: -50})
					.setTween(tween14)
					.addIndicators({name: "loop"}) // add indicators (requires plugin)
					.addTo(controller);

	// build tween Salud	****************************
	var tween15 = TweenMax.fromTo("#animateImg8", 1,
								{left: -500},
								{left: -50, repeat: 0, yoyo: true, ease: Circ.easeInOut}
							);
	var tween16 = TweenMax.fromTo("#animateTxt8", 1,
								{left: 500},
								{left: 50, repeat: 0, yoyo: true, ease: Circ.easeInOut}
							);
		// build scene
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger8", duration: 200, offset: -50})
					.setTween(tween15)
					.addIndicators({name: "loop"}) // add indicators (requires plugin)
					.addTo(controller);
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger8", duration: 200, offset: -50})
					.setTween(tween16)
					.addIndicators({name: "loop"}) // add indicators (requires plugin)
					.addTo(controller);
</script>
