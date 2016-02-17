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
							document.getElementById("txtFuncionalidad").style.weigth ="550px";
							document.getElementById("txtFuncionalidad").style.height ="165px";
							document.getElementById("txtFuncionalidad").style.left ="-360px";
							document.getElementById("txtFuncionalidad").style.top ="-50px";
							break;
						case 'expectativas':
							document.getElementById("imgExpectativas").src ="imagenes/red/ModeloUsabilidad/disposicionExpectativasOver.png";
							document.getElementById("txtExpectativas").style.weigth ="550px";
							document.getElementById("txtExpectativas").style.height ="116px";
							document.getElementById("txtExpectativas").style.left ="-410px";
							document.getElementById("txtExpectativas").style.top ="105px";
							break;
						case 'saberesDig':
							document.getElementById("imgSaberesDig").src ="imagenes/red/ModeloUsabilidad/saberesDigitalesOver.png";
							document.getElementById("txtSaberesDig").style.weigth ="500px";
							document.getElementById("txtSaberesDig").style.height ="176px";
							document.getElementById("txtSaberesDig").style.left ="400px";
							document.getElementById("txtSaberesDig").style.top ="155px";
							break;
						case 'apropiacion':
							document.getElementById("imgApropiacion").src ="imagenes/red/ModeloUsabilidad/apropiacionIncorporacionEduOver.png";
							document.getElementById("txtApropiacion").style.weigth ="500px";
							document.getElementById("txtApropiacion").style.height ="122px";
							document.getElementById("txtApropiacion").style.left ="300px";
							document.getElementById("txtApropiacion").style.top ="345px";
							break;
						case 'RedesConocimiento':
							document.getElementById("imgRedesConocimiento").src ="imagenes/red/areasTematicas/RedesConocimientoOver.png";
							break;
						case 'AmbientesEducativos':
							document.getElementById("imgAmbientesEducativos").src ="imagenes/red/areasTematicas/ambientesEducativosOver.png";
							break;
						case 'Gestioncalidad':
							document.getElementById("imgGestioncalidad").src ="imagenes/red/areasTematicas/GestioncalidadOver.png";
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
							document.getElementById("txtFuncionalidad").style.weigth ="397px";
							document.getElementById("txtFuncionalidad").style.height ="119px";
							document.getElementById("txtFuncionalidad").style.left ="-205px";
							document.getElementById("txtFuncionalidad").style.top ="0px";
							break;
						case 'expectativas':
							document.getElementById("imgExpectativas").src ="imagenes/red/ModeloUsabilidad/disposicionExpectativas.png";
							document.getElementById("txtExpectativas").style.weigth ="421px";
							document.getElementById("txtExpectativas").style.height ="89px";
							document.getElementById("txtExpectativas").style.left ="-280px";
							document.getElementById("txtExpectativas").style.top ="122px";
							break;
						case 'saberesDig':
							document.getElementById("imgSaberesDig").src ="imagenes/red/ModeloUsabilidad/saberesDigitales.png";
							document.getElementById("txtSaberesDig").style.weigth ="386px";
							document.getElementById("txtSaberesDig").style.height ="136px";
							document.getElementById("txtSaberesDig").style.left ="400px";
							document.getElementById("txtSaberesDig").style.top ="180px";
							break;
						case 'apropiacion':
							document.getElementById("imgApropiacion").src ="imagenes/red/ModeloUsabilidad/apropiacionIncorporacionEdu.png";
							document.getElementById("txtApropiacion").style.weigth ="374px";
							document.getElementById("txtApropiacion").style.height ="91px";
							document.getElementById("txtApropiacion").style.left ="300px";
							document.getElementById("txtApropiacion").style.top ="350px";
							break;
						case 'RedesConocimiento':
							document.getElementById("imgRedesConocimiento").src ="imagenes/red/areasTematicas/RedesConocimiento.png";
							break;
						case 'AmbientesEducativos':
							document.getElementById("imgAmbientesEducativos").src ="imagenes/red/areasTematicas/ambientesEducativos.png";
							break;
						case 'Gestioncalidad':
							document.getElementById("imgGestioncalidad").src ="imagenes/red/areasTematicas/Gestioncalidad.png";
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