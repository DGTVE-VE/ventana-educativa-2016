/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

		//		**********		Comenzar reproducción de video de fondo		***********	
	
	function reproduceVideo(){
		document.getElementById('videoFondo').play();
		document.getElementById('videoFondo').loop = true;
	}

$(document).ready(function () {
    /*para el menú hamburguesa*/
  var trigger = $('.hamburgerConocenos'),
      overlay = $('.overlayConocenos'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });
	
	overlay.click(function () {
	  isClosed = true;
      hamburger_cross();
	  $('#wrapperConocenos').toggleClass('toggled');
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapperConocenos').toggleClass('toggled');
  }); 
  /*fin para el menú hamburguesa*/
  
  /*para el scroll*/
  $('.click').click(function(e){
   // prevent default action
   e.preventDefault();
   
   // get id of target div (placed in href attribute of anchor element)
   // and pass it to the scrollToElement function
    // also, use 2000 as an argument for the scroll speed (2 seconds, 2000 milliseconds)
   scrollToElement( $(this).attr('href'), 2000 );
});

var scrollToElement = function(el, ms){
    var speed = (ms) ? ms : 600;
    $('html,body').animate({
        scrollTop: $(el).offset().top
    }, speed);
}

/*fin para el scroll*/

/*botón aparece bottom scroll*/
$(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        }); 
 
        $('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });
/*botón aparece bottom scroll*/        

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
					
											/*		***************		Apartado reproducción de video. 		***************		 */
	
	//	************	Efecto de salto de la flecha 	***********
		function mueveFlecha(dir){
			if(dir=='abajo'){
				tiempoEspera="400";
				desplaza = "+=20px";
				dir = 'arriba';
			}
			else{
				tiempoEspera="1200";
				desplaza = "-=20px";
				dir = 'abajo';
			}
			$('#flechaBrinca').animate({ "top": desplaza }, "slow");
			
			setTimeout(function(){ mueveFlecha(dir); }, tiempoEspera);
		}
	
		mueveFlecha('abajo');
	
		function cambiaImagenesArriba(imgEntrante, imgSaliente){
			var imagenEntrante = '#' + imgEntrante;
			var imagenSaliente = '#' + imgSaliente;
			$(imagenEntrante).removeClass('slideOutDown');
			$(imagenSaliente).removeClass('slideInDown');
			$(imagenSaliente).addClass('slideOutUp');
			$(imagenSaliente).removeClass('slideInUp');
			setTimeout(function(){ 
				$(imagenSaliente).removeClass('muestra');
				$(imagenSaliente).addClass('oculta');
				$(imagenEntrante).removeClass('oculta');
				$(imagenEntrante).addClass('muestra'); 
				$(imagenEntrante).addClass('slideInUp');
			}, 500);
		}

		function cambiaImagenesAbajo(imgEntrante, imgSaliente){
			var imagenEntrante = '#' + imgEntrante;
			var imagenSaliente = '#' + imgSaliente;
			$(imagenEntrante).removeClass('slideOutUp');
			$(imagenSaliente).removeClass('slideInUp');
			$(imagenSaliente).addClass('slideOutDown');
			setTimeout(function(){
				$(imagenSaliente).removeClass('muestra');
				$(imagenSaliente).addClass('oculta');
				$(imagenEntrante).removeClass('oculta');
				$(imagenEntrante).addClass('muestra');
				$(imagenEntrante).addClass('slideInDown');
			}, 500);
		}
		
		function bajaImgProyectos(){
			$('#textoProyectos').css('visibility','visible');
			$('#textoProyectos').addClass('slideInDown');
		}
		function avanzaSeccion(seccion){
			$('#fullPage').fullpage.moveTo(seccion);
		}
	
		function menuANegro(){
			$('#imagenLogoVentana').attr('src','imagenes/ventana/encabezado/logoNegro/logoventana.png');
			$('#iconoManuApps').attr('src','imagenes/ventana/encabezado/logoNegro/iconoApps.png');
			$('.hamburgerConocenos.is-closed .hamb-top, .hamburgerConocenos.is-closed .hamb-middle, .hamburgerConocenos.is-closed .hamb-bottom').css('background-color','#1a1a1a');
			$('#scene').css('top','-50px');
		}
		
		function menuABlanco(){
			$('#imagenLogoVentana').attr('src','imagenes/ventana/encabezado/logoventana.png');
			$('#iconoManuApps').attr('src','imagenes/ventana/encabezado/iconoApps.png');
			$('.hamburgerConocenos.is-closed .hamb-top, .hamburgerConocenos.is-closed .hamb-middle, .hamburgerConocenos.is-closed .hamb-bottom').css('background-color','#f2f2f2');
			$('#scene').css('top','50px');
		}
		
	//	************	Activación de elemento fullPage (desplazamiento vertical) 	***********
		$('#fullpage').fullpage(
			{navigation:true, scrollOverflow:false, loopTop:true, scrollBar: true,
				onLeave: 
				function(index, nextIndex, direction){
					var leavingSection = $(this);
					if(index == 1 && nextIndex == 6){
						if($('#textoObjetivos').css('display') == 'block'){
							cambiaImagenesAbajo('textoProyectos','textoObjetivos');
							return false;
						}
						else if($('#botonPlay').css('display') == 'block'){
							cambiaImagenesAbajo('textoObjetivos','botonPlay');
							return false;
						}
						else{
							return false;
						}
					}
					else if(index == 1 && nextIndex == 2){
						if($('#textoProyectos').css('display') == 'block'){
							cambiaImagenesArriba('textoObjetivos','textoProyectos');
							return false;
						}
						else if($('#textoObjetivos').css('display') == 'block'){
							cambiaImagenesArriba('botonPlay','textoObjetivos');
							return false;
						}
						else{
							menuANegro();
							$('#fullpage').fullpage.setFitToSection(false);
							$('#fullpage').fullpage.setAutoScrolling(false);
						}
					}
					else if(index== 4 && nextIndex == 3){
						$('#fullpage').fullpage.setFitToSection(false);
					}
					else if(index== 3 && nextIndex == 2){
						$('#fullpage').fullpage.setFitToSection(true);
					}
					else if(index == 2 && nextIndex == 1){
						menuABlanco();
						$('#fullpage').fullpage.setAutoScrolling(true);
					}
					else if(index== 3 && nextIndex == 4){
						$('#fullpage').fullpage.setFitToSection(true);
					}
					else if(index== 2 && nextIndex == 3){
						$('#fullpage').fullpage.setFitToSection(false);
					}
					else if(index== 1 && nextIndex != 2 ){
						menuANegro();
						$('#fullpage').fullpage.setAutoScrolling(false);
					}
					else if(index!= 2 && nextIndex == 1 ){
						menuABlanco();
						$('#fullpage').fullpage.setAutoScrolling(true);
					}
				}
			}
		);
		bajaImgProyectos();
});