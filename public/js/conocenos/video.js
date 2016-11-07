$(document).ready(function () {
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
		/*$('#fullpage').fullpage(
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
		);*/
		bajaImgProyectos();
});