$('#divTriangulo').css({transform:'scale(0.1, 0.1)'});
		actual = 2;
		
		function cambiaImgFondo(numEdificio){
			switch(numEdificio){
				case 1:
					var rutaImg = 'imagenes/ventana/conocenos/slider/colaboradores.png';
					var rutaTxtDescr = 'imagenes/ventana/conocenos/slider/contenidos/textoColaboradores.png';
					break;
				case 2:
					var rutaImg = 'imagenes/ventana/conocenos/slider/antecedentes.png';
					var rutaTxtDescr = 'imagenes/ventana/conocenos/slider/contenidos/textoAntecedentes.png';
					break;
				case 3:
					var rutaImg = 'imagenes/ventana/conocenos/slider/alineacionProyecto.png';
					var rutaTxtDescr = 'imagenes/ventana/conocenos/slider/contenidos/textoAlineacion.png';
					break;
				default:
					var rutaImg = 'imagenes/ventana/conocenos/slider/alineacionProyecto.png';
					var rutaTxtDescr = 'imagenes/ventana/conocenos/slider/contenidos/textoAntecedentes.png';
					break;
			}
			var imgEdificio = $('#imgApartadoEdificio');
			imgEdificio.fadeOut();
			setTimeout(function(){
				imgEdificio.attr('src',rutaImg);
				imgEdificio.addClass('animate fadeInUp');
				imgEdificio.fadeIn();
			},400);
			$('#imgTextoDescribe').attr('src',rutaTxtDescr);
		}
		
		function cambiaEtiqueta(numEtiqueta){
			var contTxt1 = $('#contenedorTxt1');
			var contTxt2 = $('#contenedorTxt2');
			var contTxt3 = $('#contenedorTxt3');
			switch(numEtiqueta){
				case 1:
					var contEtiqueta1 = "Alineación del Proyecto"; var contEtiqueta2 = "Colaboradores";	var contEtiqueta3 = "Antecedentes";
					var functransfFig1 = 'tranformaFigura(3)'; var functransfFig2 = 'tranformaFigura(1)'; var functransfFig3 = 'tranformaFigura(2)';
					break;
				case 2:
					var contEtiqueta1 = "Colaboradores"; var contEtiqueta2 = "Antecedentes";	var contEtiqueta3 = "Alineación del Proyecto";
					var functransfFig1 = 'tranformaFigura(1)'; var functransfFig2 = 'tranformaFigura(2)'; var functransfFig3 = 'tranformaFigura(3)';
					break;
				case 3:
					var contEtiqueta1 = "Antecedentes"; var contEtiqueta2 = "Alineación del Proyecto";	var contEtiqueta3 = "Colaboradores";
					var functransfFig1 = 'tranformaFigura(2)'; var functransfFig2 = 'tranformaFigura(3)'; var functransfFig3 = 'tranformaFigura(1)';
					break;
				default:
					var contEtiqueta1 = "Colaboradores"; var contEtiqueta2 = "Antecedentes";	var contEtiqueta3 = "Alineación del Proyecto";
					var functransfFig1 = 'tranformaFigura(1)'; var functransfFig2 = 'tranformaFigura(2)'; var functransfFig3 = 'tranformaFigura(3)';
					break;
			}
			contTxt1.fadeOut();
			setTimeout(function(){
				contTxt1.text(contEtiqueta1); $('#contenedorClic1').attr('onclick',functransfFig1); contTxt1.fadeIn(); },400);
			contTxt2.fadeOut(); 
			setTimeout(function(){
				contTxt2.text(contEtiqueta2); $('#contenedorClic2').attr('onclick',functransfFig2); contTxt2.fadeIn(); },400);
			contTxt3.fadeOut(); 
			setTimeout(function(){
				contTxt3.text(contEtiqueta3); $('#contenedorClic3').attr('onclick',functransfFig3); contTxt3.fadeIn(); },400);
		}

		function tranformaFigura(seccion){
			switch(seccion){
				case 1:	//circulo
					if(actual!=1){
						cambiaImgFondo(1);
						cambiaEtiqueta(1);
						$('#seccionVariable').removeClass('fp-auto-height');
						$('#fullpage').fullpage.setFitToSection(true);
					}
					if(actual==2){
						$('#divFigura').removeClass('opaco');
						$('#divFigura').css({transform:'rotate(-135deg)'});
						$('#divFigura').addClass('circulo');
					}else if(actual==3){
						$('#divTriangulo').removeClass('opaco');
						$('#divTriangulo').addClass('homologaColor');
						$('#divFigura').removeClass('homologaColor');
						if(!$('#divFigura').hasClass('circulo')){
							$('#divFigura').addClass('circulo');
						}
						$('#divFigura').css({transform:'rotate(-90deg)'});
						$('#divTriangulo').css({transform:'rotate(-45deg) scale(0.1, 0.1)'});
					}
					setTimeout(function(){$('#divFigura').addClass('opaco');},300);
					actual =1;
					break;
				case 2:	//cuadrado
					if(actual!=2){
						cambiaImgFondo(2);
						cambiaEtiqueta(2);
						$('#seccionVariable').removeClass('fp-auto-height');
						$('#fullpage').fullpage.setFitToSection(true);
					}
					if(actual==1){
						$('#divFigura').removeClass('opaco');
						$('#divFigura').css({transform:'rotate(45deg)'});
						$('#divFigura').removeClass('circulo');
					}else if(actual==3){
						$('#divTriangulo').removeClass('opaco');
						$('#divFigura').removeClass('homologaColor');
						$('#divTriangulo').addClass('homologaColor');
						if($('#divFigura').hasClass('circulo')){
							$('#divFigura').removeClass('circulo');
						}
						$('#divFigura').css({transform:'rotate(-45deg)'});
						$('#divTriangulo').css({transform:'rotate(0deg) scale(0.1, 0.1)'});
					}
					setTimeout(function(){$('#divFigura').addClass('opaco');},300);
					actual =2;
					break;
				case 3:	//triangulo
					if(actual!=3){
						cambiaImgFondo(3);
						cambiaEtiqueta(3);
						$('#fullpage').fullpage.setFitToSection(false);
					}
					if(actual==1 || actual==2){
						$('#divFigura').removeClass('opaco');
						$('#divTriangulo').removeClass('opaco');
						$('#divTriangulo').removeClass('homologaColor');
						$('#divFigura').addClass('homologaColor');
						$('#divTriangulo').css({transform:'rotate(125deg)'});
						if($('#divFigura').hasClass('circulo')){
							$('#divFigura').removeClass('circulo');
						}
						$('#divFigura').css({transform:'scale(0.3, 0.1) rotate(-270deg)'});
						$('#divTriangulo').addClass('opaco');
						$('#seccionVariable').addClass('fp-auto-height');
					}
					actual =3;
					break;
				default:
					break;
			}
		}
		
		/*	***********	Activar parallax fondo	*************   */
		var scene = document.getElementById('scene');
		var parallax = new Parallax(scene);
		var scene = document.getElementById('scene2');
		var parallax = new Parallax(scene);