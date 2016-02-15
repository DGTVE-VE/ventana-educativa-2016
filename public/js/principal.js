		// -------------------------------------------------- Inicio de avance de barra			
			//var barraAvance = document.getElementById("avanceSlider");
			//barraAvance.style.width = "30%";

			var maxprogress = 100;
			var actualprogress = 0;
			var itv = 0;
			function prog(){
				if(actualprogress >= maxprogress){
					clearInterval(itv);   	
					return;
				}	
				//var progressnum = document.getElementById("progressnum");
				var indicador = document.getElementById("indicador");
				actualprogress += 1;	
				indicador.style.width=actualprogress + "%";
				//progressnum.innerHTML = (maxprogress - actualprogress) + " MS Faltantes";
			}
			function reiniciaBarra(){
				var indicador = document.getElementById("indicador");
				indicador.style.width= "0%";
				actualprogress=0;
				clearInterval(itv);
			}
			itv = setInterval(prog,50);
			
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
							break;
						case 'expectativas':
							document.getElementById("imgExpectativas").src ="imagenes/red/ModeloUsabilidad/disposicionExpectativasOver.png";
							break;
						case 'saberesDig':
							document.getElementById("imgSaberesDig").src ="imagenes/red/ModeloUsabilidad/saberesDigitalesOver.png";
							break;
						case 'apropiacion':
							document.getElementById("imgApropiacion").src ="imagenes/red/ModeloUsabilidad/apropiacionIncorporacionEduOver.png";
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
							break;
						case 'expectativas':
							document.getElementById("imgExpectativas").src ="imagenes/red/ModeloUsabilidad/disposicionExpectativas.png";
							break;
						case 'saberesDig':
							document.getElementById("imgSaberesDig").src ="imagenes/red/ModeloUsabilidad/saberesDigitales.png";
							break;
						case 'apropiacion':
							document.getElementById("imgApropiacion").src ="imagenes/red/ModeloUsabilidad/apropiacionIncorporacionEdu.png";
							break;
						default:
							break;
					}
				}

		$(document).ready(function(){
			
		//--------------------------------------------------Agrega efecto de velocidad lenta al subir al inicio de la página
			// Initialize Tooltip
			$('[data-toggle="tooltip"]').tooltip(); 

			// Add smooth scrolling to all links in navbar + footer link
			/*$(".navbar a, footer a[href='#pag_principal']").on('click', function(event) {

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
			});*/

			//-------------------------    Reiniciar barra animada de carousel   ----------------------------
			$("#carousel-2").on('slide.bs.carousel', function () {
				reiniciaBarra();
				itv = 0;
				itv = setInterval(prog,50);
			});
			$("#carousel-2").mouseover(function(){
				reiniciaBarra();
			});
			$("#carousel-2").mouseout(function(){
				itv = setInterval(prog,50);
			});
			
			$('[data-toggle="popover"]').popover({html:true});
		})