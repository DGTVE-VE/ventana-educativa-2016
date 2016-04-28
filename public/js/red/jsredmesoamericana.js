	/* --------------------------------------------			 Cambio de imagen para resaltar en evento hover	sección usabilidad		--------------------------*/
				function imgResalta(seccion){
					switch(seccion){
						case 'twetter':
							document.getElementById("imgIconoTwetter").src ="imagenes/red/footer/icono-twetter-B.png";
							break;
						case 'facebook':
							document.getElementById("imgIconoFacebook").src ="imagenes/red/footer/icono-face-B.png";
							break;
						case 'youtube':
							document.getElementById("imgIconoYoutube").src ="imagenes/red/footer/icono-youtube-B.png";
							break;
						case 'funcionalidad':
							document.getElementById("imgFuncionalidad").src ="imagenes/red/ModeloUsabilidad/funcionalidadEduOver.png";
							document.getElementById("txtFuncionalidad").style.width ="320px";
							document.getElementById("txtFuncionalidad").style.height ="70px";
							document.getElementById("txtFuncionalidad").style.left ="-280px";
							break;
						case 'expectativas':
							document.getElementById("imgExpectativas").src ="imagenes/red/ModeloUsabilidad/disposicionExpectativasOver.png";
							document.getElementById("txtExpectativas").style.width ="340px";
							document.getElementById("txtExpectativas").style.height ="91px";
							document.getElementById("txtExpectativas").style.left ="-390px";
							break;
						case 'saberesDig':
							document.getElementById("imgSaberesDig").src ="imagenes/red/ModeloUsabilidad/saberesDigitalesOver.png";
							document.getElementById("txtSaberesDig").style.width ="330px";
							document.getElementById("txtSaberesDig").style.height ="75px";
							/*document.getElementById("txtSaberesDig").style.left ="560px";*/
							break;
						case 'apropiacion':
							document.getElementById("imgApropiacion").src ="imagenes/red/ModeloUsabilidad/apropiacionIncorporacionEduOver.png";
							document.getElementById("txtApropiacion").style.width ="310px";
							document.getElementById("txtApropiacion").style.height ="85px";
							/*document.getElementById("txtApropiacion").style.left ="520px";*/
							break;
						case 'funcionalidadXS':
							document.getElementById("imgFuncionalidadXS").src ="imagenes/red/ModeloUsabilidad/funcionalidadEduOver.png";
							/*document.getElementById("txtFuncionalidad").style.width ="320px";
							document.getElementById("txtFuncionalidad").style.height ="70px";
							document.getElementById("txtFuncionalidad").style.left ="100px";*/
							break;
						case 'expectativasXS':
							document.getElementById("imgExpectativasXS").src ="imagenes/red/ModeloUsabilidad/disposicionExpectativasOver.png";
							/*document.getElementById("txtExpectativas").style.width ="340px";
							document.getElementById("txtExpectativas").style.height ="91px";
							document.getElementById("txtExpectativas").style.left ="-10px";*/
							break;
						case 'saberesDigXS':
							document.getElementById("imgSaberesDigXS").src ="imagenes/red/ModeloUsabilidad/saberesDigitalesOver.png";
							/*document.getElementById("txtSaberesDig").style.width ="330px";
							document.getElementById("txtSaberesDig").style.height ="75px";
							document.getElementById("txtSaberesDig").style.left ="-110px";*/
							break;
						case 'apropiacionXS':
							document.getElementById("imgApropiacionXS").src ="imagenes/red/ModeloUsabilidad/apropiacionIncorporacionEduOver.png";
							/*document.getElementById("txtApropiacion").style.width ="310px";
							document.getElementById("txtApropiacion").style.height ="85px";
							document.getElementById("txtApropiacion").style.left ="-170px";*/
							break;
						case 'RedesConocimiento':
							document.getElementById("imgRedesConocimiento").src ="imagenes/red/areasTematicas/RedesConocimientoOver.png";
							break;
						case 'AmbientesEducativos':
							document.getElementById("imgAmbientesEducativos").src ="imagenes/red/areasTematicas/ambientesEducativosOver.png";
							break;
						case 'Gestioncalidad':
							document.getElementById("imgGestioncalidad").src ="imagenes/red/areasTematicas/GestionCalidadOver.png";
							break;
						case 'Multimedia':
							document.getElementById("imgMultimedia").src ="imagenes/red/areasTematicas/MultimediaOver.png";
							break;
						case 'PoliticaEducativa':
							document.getElementById("imgPoliticaEducativa").src ="imagenes/red/areasTematicas/PoliticaEducativaOver.png";
							break;
						default:
							break;
					}
				}
				function imgNormal(seccion){
					switch(seccion){
						case 'twetter':
							document.getElementById("imgIconoTwetter").src ="imagenes/red/footer/icono-twetter-A.png";
							break;
						case 'facebook':
							document.getElementById("imgIconoFacebook").src ="imagenes/red/footer/icono-face-A.png";
							break;
						case 'youtube':
							document.getElementById("imgIconoYoutube").src ="imagenes/red/footer/icono-youtube-A.png";
							break;
						case 'funcionalidad':
							document.getElementById("imgFuncionalidad").src ="imagenes/red/ModeloUsabilidad/funcionalidadEdu.png";
							document.getElementById("txtFuncionalidad").style.width ="270px";
							document.getElementById("txtFuncionalidad").style.height ="52px";
							document.getElementById("txtFuncionalidad").style.left ="-240px";
							break;
						case 'expectativas':
							document.getElementById("imgExpectativas").src ="imagenes/red/ModeloUsabilidad/disposicionExpectativas.png";
							document.getElementById("txtExpectativas").style.width ="300px";
							document.getElementById("txtExpectativas").style.height ="71px";
							document.getElementById("txtExpectativas").style.left ="-360px";
							break;
						case 'saberesDig':
							document.getElementById("imgSaberesDig").src ="imagenes/red/ModeloUsabilidad/saberesDigitales.png";
							document.getElementById("txtSaberesDig").style.width ="300px";
							document.getElementById("txtSaberesDig").style.height ="56px";
							document.getElementById("txtSaberesDig").style.left ="540px";
							break;
						case 'apropiacion':
							document.getElementById("imgApropiacion").src ="imagenes/red/ModeloUsabilidad/apropiacionIncorporacionEdu.png";
							document.getElementById("txtApropiacion").style.width ="270px";
							document.getElementById("txtApropiacion").style.height ="58px";
							document.getElementById("txtApropiacion").style.left ="500px";
							break;
						case 'funcionalidadXS':
							document.getElementById("imgFuncionalidadXS").src ="imagenes/red/ModeloUsabilidad/funcionalidadEdu.png";
							/*document.getElementById("txtFuncionalidad").style.width ="270px";
							document.getElementById("txtFuncionalidad").style.height ="52px";
							document.getElementById("txtFuncionalidad").style.left ="140px";*/
							break;
						case 'expectativasXS':
							document.getElementById("imgExpectativasXS").src ="imagenes/red/ModeloUsabilidad/disposicionExpectativas.png";
							/*document.getElementById("txtExpectativas").style.width ="300px";
							document.getElementById("txtExpectativas").style.height ="71px";
							document.getElementById("txtExpectativas").style.left ="20px";*/
							break;
						case 'saberesDigXS':
							document.getElementById("imgSaberesDigXS").src ="imagenes/red/ModeloUsabilidad/saberesDigitales.png";
							/*document.getElementById("txtSaberesDig").style.width ="300px";
							document.getElementById("txtSaberesDig").style.height ="56px";
							document.getElementById("txtSaberesDig").style.left ="-100px";*/
							break;
						case 'apropiacionXS':
							document.getElementById("imgApropiacionXS").src ="imagenes/red/ModeloUsabilidad/apropiacionIncorporacionEdu.png";
							/*document.getElementById("txtApropiacion").style.width ="270px";
							document.getElementById("txtApropiacion").style.height ="58px";
							document.getElementById("txtApropiacion").style.left ="-170px";*/
							break;
						case 'RedesConocimiento':
							document.getElementById("imgRedesConocimiento").src ="imagenes/red/areasTematicas/RedesConocimiento.png";
							break;
						case 'AmbientesEducativos':
							document.getElementById("imgAmbientesEducativos").src ="imagenes/red/areasTematicas/ambientesEducativos.png";
							break;
						case 'Gestioncalidad':
							document.getElementById("imgGestioncalidad").src ="imagenes/red/areasTematicas/GestionCalidad.png";
							break;
						case 'Multimedia':
							document.getElementById("imgMultimedia").src ="imagenes/red/areasTematicas/Multimedia.png";
							break;
						case 'PoliticaEducativa':
							document.getElementById("imgPoliticaEducativa").src ="imagenes/red/areasTematicas/PoliticaEducativa.png";
							break;
						default:
							break;
					}
				}

		$(document).ready(function(){
			
		/*----------------------------------------------	Agrega efecto de velocidad lenta al subir al inicio de la página	-------------------*/
			// Initialize Tooltip
			$('[data-toggle="tooltip"]').tooltip(); 

			// Add smooth scrolling to all links in navbar + footer link
			$("footer a[href='#pag_principal']").on('click', function(event) {

				// Prevent default anchor click behavior
				event.preventDefault();

				// Store hash
				var hash = this.hash;

				// Using jQuery's animate() method to add smooth page scroll
				// The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
				$('html, body').animate({
					scrollTop: $(hash).offset().top
				}, 900, function(){
   
				// Add hash (#) to URL when done scrolling (default click behavior)
				window.location.hash = hash;
				});
			});

		/*  -------------------------------------    Permitir elementos HTML en elementos POPOVER  -----------------------------------------------*/
			$('[data-toggle="popover"]').popover({html:true});
		
		/*  -------------------------------------    Activar efecto parallax en scroll   -----------------------------------------------*/
			$(window).bind('scroll',function(e){
				parallaxScroll();
			});
		/*  -------------------------------------    Aumentar tiempo de espera de diapositivas carousel   -----------------------------------------------*/
			$('#carouselRetos').carousel({
			  interval: 12000
			});
		/*-----------------------------------------------------------------------------------------------------------------------------------------------*/
		})
		
	/*	---------------------------------------	Sección Usabilidad. Agregar animación de entrada a imagenes 	--------------------------------*/
        $(function(){
            var elems = $('.estoy-visible');    //elementos que quiero saber si estan en el área visible
            var winW = $(window).width();       //dimensiones de la ventana
            var winH = $(window).height();      //dimensiones de la ventana
            elems.each(function(){
                var self = $(this);
				$(this).fadeOut();
                self.on('esta/visible',function(){
                    //evento personalizado que crearemos mas abajo, se dispara cuando el elemento está visible
                    //lo que ponemos aca es lo que queremos hacer si el elemento aparece en pantalla
                    $(this).fadeIn();
					$(this).addClass("animated");
                });
                self.on('esta/invisible',function(){
                    //evento personalizado que crearemos mas abajo, se dispara cuando el elemento está FUERA del area visible
                    //lo que ponemos aca es lo que queremos hacer si el elemento DESAPARECE de la pantalla
                    //$(this).fadeOut();
					$(this).removeClass("animated");
                });
                
                //obtenemos las dimensiones de cada elemento y su posicion
                var self_w = self.outerWidth()/10; //ancho exterior
                var self_h = self.outerHeight()/10; //alto exterior
                var self_l = self.offset().left; //coordenada izquierda
                var self_t = self.offset().top; //coordenada arriba
                
                //asignamos un evento a window.scroll(), para cuando se haga scroll
                //esta parte del script es algo inefectiva. No es bueno si son muchos los elementos a verificar.
                $(window).scroll(function(){
                    var scroll_h = this.pageXOffset;
                    var scroll_v = this.pageYOffset;
                    //acá verificamos si el elemento está COMPLETAMENTE dentro de las dimensiones de la ventana
                    if( (self_w + self_l - scroll_h) <= winW && (self_l) >= scroll_h &&
                        (self_h + self_t - scroll_v) <= winH && (self_t) >= scroll_v ){
                        self.trigger('esta/visible');
                    }
                    else{
                        self.trigger('esta/invisible');
                    }
                });
            });
        })
		
		/*  -------------------------------------    Activar efecto parallax en scroll   -----------------------------------------------*/
		function parallaxScroll(){
			var scrolled = $(window).scrollTop();
			if(is_chrome){
				$('#parallaxcarouselSliderHome').css('top',(0+(scrolled*0.3))+'px');
				$('#parallaxcarouselSliderHome1').css('top',(0+(scrolled*0.3))+'px');
				$('#parallaxcarouselSliderHome2').css('top',(0+(scrolled*0.3))+'px');
				$('#parallaxcarouselSliderHome3').css('top',(0+(scrolled*0.3))+'px');
			}
			else{
				$('#parallaxcarouselSliderHome').css('top',(0-(scrolled*0.7))+'px');
				$('#parallaxcarouselSliderHome1').css('top',(0-(scrolled*0.7))+'px');
				$('#parallaxcarouselSliderHome2').css('top',(0-(scrolled*0.7))+'px');
				$('#parallaxcarouselSliderHome3').css('top',(0-(scrolled*0.7))+'px');
			}
			$('#parallax-fondoProyectos').css('top',(0-(scrolled*0.55))+'px');
			$('#parallax-fondoIntegrantes').css('top',(0-(scrolled*0.55))+'px');
		}
		/*  -------------------------------------    Detectar si navegador es chrome   -----------------------------------------------*/
		var is_chrome = navigator.userAgent.toLowerCase().indexOf('chrome') > -1;
		if(is_chrome){
			$('.imgSliderHome').css('top','-10'+'px');
		}
		else{
			$('.imgSliderHome').css('top','100'+'px');
		}
		/*
* rwdImageMaps jQuery plugin v1.5
*
* Allows image maps to be used in a responsive design by recalculating the area coordinates to match the actual image size on load and window.resize
*
* Copyright (c) 2013 Matt Stow
* https://github.com/stowball/jQuery-rwdImageMaps
* http://mattstow.com
* Licensed under the MIT license
*/
;(function($) {
	$.fn.rwdImageMaps = function() {
		var $img = this;
		
		var rwdImageMap = function() {
			$img.each(function() {
				if (typeof($(this).attr('usemap')) == 'undefined')
					return;
				
				var that = this,
					$that = $(that);
				
				// Since WebKit doesn't know the height until after the image has loaded, perform everything in an onload copy
				$('<img />').load(function() {
					var attrW = 'width',
						attrH = 'height',
						w = $that.attr(attrW),
						h = $that.attr(attrH);
					
					if (!w || !h) {
						var temp = new Image();
						temp.src = $that.attr('src');
						if (!w)
							w = temp.width;
						if (!h)
							h = temp.height;
					}
					
					var wPercent = $that.width()/100,
						hPercent = $that.height()/100,
						map = $that.attr('usemap').replace('#', ''),
						c = 'coords';
					
					$('map[name="' + map + '"]').find('area').each(function() {
						var $this = $(this);
						if (!$this.data(c))
							$this.data(c, $this.attr(c));
						
						var coords = $this.data(c).split(','),
							coordsPercent = new Array(coords.length);
						
						for (var i = 0; i < coordsPercent.length; ++i) {
							if (i % 2 === 0)
								coordsPercent[i] = parseInt(((coords[i]/w)*100)*wPercent);
							else
								coordsPercent[i] = parseInt(((coords[i]/h)*100)*hPercent);
						}
						$this.attr(c, coordsPercent.toString());
					});
				}).attr('src', $that.attr('src'));
			});
		};
		$(window).resize(rwdImageMap).trigger('resize');
		
		return this;
	};
})(jQuery);
//* End image maps to be used in a responsive design by recalculating the area coordinates**//
