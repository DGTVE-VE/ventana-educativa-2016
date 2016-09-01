
<!--	********	Parallax Capas	***********	-->
<!-- Behavioral Meta Data -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <div class="row">
			<div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
			  <section class="slider">
				<div class="flexslider">
				  <ul class="slides">
					<li>
						<div class="col-md-4">
							<img src="imagenes/ventana/conocenos/links/amexcid.png" alt="..." class="img-responsive">
						</div>
						<div class="col-md-4">
							<img src="imagenes/ventana/conocenos/links/canal6.png" alt="..." class="img-responsive">
						</div>
						<div class="col-md-4">
							<img src="imagenes/ventana/conocenos/links/csuca.png" alt="..." class="img-responsive">
						</div>
					</li>
					<li>
						<div class="col-md-4">
							<img src="imagenes/ventana/conocenos/links/sica.png" alt="..." class="img-responsive">
						</div>
						<div class="col-md-4">
							<img src="imagenes/ventana/conocenos/links/suyapa.png" alt="..." class="img-responsive">
						</div>
						<div class="col-md-4">
							<img src="imagenes/ventana/conocenos/links/UVeracruzana.png" alt="..." class="img-responsive">
						</div>
					</li>
				  </ul>
				</div>
			  </section>
		  </div>
		</div>

	<style>
		.marcoNegro{
			position: relative; top:-10%; left:-2%; max-width:110%;
		}
		.imgEdificio{
			position: absolute; top:-0.6%; left:1.5%; max-width:102.1%;
		}
		#divFigura{
			position:absolute; top:23%; left:30%;
			width:240px;	height:240px;
			border-radius:0%;
			background: #6bebcf; /* For browsers that do not support gradients */
			transition: visibility 0.3s, border-radius 0.8s, transform 0.8s;
			-webkit-transform: rotate(45deg);
			-ms-transform: rotate(45deg);
			transform: rotate(45deg);
		}
		.homologaColor{
			visibility:hidden;
		}
		.oculto{
			display:none;
		}
		.circulo{
			border-radius: 50% !important;
			transition: border-radius 0.8s;
		}
		.trianguloDerecha{
			position:absolute; top:10%; left: 8%;
			width:0 !important;	height:0 !important;
			border-top:153px solid transparent !important;
			border-bottom:153px solid transparent !important;
			border-left:306px solid #6bebcf !important;
			transition: visibility 0.3s, transform 0.8s;
		}
		.opaco{
			opacity: 0.9;
			/*transition: opacity:0.3s;*/
		}
		.txtNegro{
			color:black;
		}
		.punteroMano{
			cursor: pointer;
		}
		.acomodaLigas{
			position: absolute; left:40%;
		}
		.altura50Celda{
			height:50px;
		}
		.marcoNegro{
			position: relative; top:-10%; left:-2%; max-width:110%;
		}
				/*		*********	Media Queries	*****	*/
		@media (min-width:992px ){
			.acomodaLigas{
				position: absolute; top:-200%; left:40%;
			}
			#divFigura{
				position:absolute; top:23%; left:30%;
				width:210px;	height:210px;
				border-radius:0%;
				background: #6bebcf; /* For browsers that do not support gradients */
				transition: visibility 0.3s, border-radius 0.8s, transform 0.8s;
				-webkit-transform: rotate(45deg);
				-ms-transform: rotate(45deg);
				transform: rotate(45deg);
			}
			.trianguloDerecha{
				position:absolute; top:33%; left: 17%;
				width:0 !important;	height:0 !important;
				border-top:123px solid transparent !important;
				border-bottom:123px solid transparent !important;
				border-left:247px solid #6bebcf !important;
				transition: visibility 0.3s, transform 0.8s;
			}
			.imgEdificio{
				position: absolute; top:-0.6%; left:1.7%; max-width:101%;
			}
		}
		@media (min-width: 1300px){
			.acomodaLigas{
				position: absolute; top:-220%; left:40%;
			}
			#divFigura{
				position:absolute; top:23%; left:28%;
				width:240px;	height:240px;
				border-radius:0%;
				background: #6bebcf; /* For browsers that do not support gradients */
				transition: visibility 0.3s, border-radius 0.8s, transform 0.8s;
				-webkit-transform: rotate(45deg);
				-ms-transform: rotate(45deg);
				transform: rotate(45deg);
			}
			.trianguloDerecha{
				position:absolute; top:32%; left: 17%;
				width:0 !important;	height:0 !important;
				border-top:130px solid transparent !important;
				border-bottom:130px solid transparent !important;
				border-left:260px solid #6bebcf !important;
				transition: visibility 0.3s, transform 0.8s;
			}
			.imgEdificio{
				position: absolute; top:-0.6%; left:1.5%; max-width:102.1%;
			}

		}
		@media (min-width: 1500px){
			.acomodaLigas{
				position: absolute; top:-270%; left:40%;
			}
			#divFigura{
				position:absolute; top:25%; left:27%;
				width:260px;	height:260px;
				border-radius:0%;
				background: #6bebcf; /* For browsers that do not support gradients */
				transition: visibility 0.3s, border-radius 0.8s, transform 0.8s;
				-webkit-transform: rotate(45deg);
				-ms-transform: rotate(45deg);
				transform: rotate(45deg);
			}
			.trianguloDerecha{
				position:absolute; top:30%; left: 15%;
				width:0 !important;	height:0 !important;
				border-top:153px solid transparent !important;
				border-bottom:153px solid transparent !important;
				border-left:306px solid #6bebcf !important;
				transition: visibility 0.3s, transform 0.8s;
			}
			.imgEdificio{
				position: absolute; top:-0.4%; left:1.5%; max-width:102.1%;
			}

		}
		.slider{
			padding:50px !important;
		}
	</style>
	
	<!--	********* Incluir libreria flexslider	***************	-->
	<link rel="stylesheet" href="js/FlexSlider/flexslider.css" type="text/css" media="screen"/>
	<script src="js/FlexSlider/jquery.flexslider.js"></script>
	<!--	********* Incluir Jquery	***************	-->
	<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script-->
	<!--	********* Incluir libreria parallax	***************	-->
	<script src="js/parallaxCapas/deploy/parallax.js"></script>
	<script>
		$('#divTriangulo').css({transform:'scale(0.1, 0.1)'});
		actual = 2;
		
		function cambiaImgFondo(numEdificio){
			switch(numEdificio){
				case 1:
					var rutaImg = 'imagenes/ventana/conocenos/slider/alineacionProyecto.png';
					break;
				case 2:
					var rutaImg = 'imagenes/ventana/conocenos/slider/antecedentes.png';
					break;
				case 3:
					var rutaImg = 'imagenes/ventana/conocenos/slider/alineacionProyecto.png';
					break;
				default:
					var rutaImg = 'imagenes/ventana/conocenos/slider/alineacionProyecto.png';
					break;
			}
			var imgEdificio = $('#imgApartadoEdificio');
			imgEdificio.fadeOut();
			setTimeout(function(){
				imgEdificio.attr('src',rutaImg);
				imgEdificio.addClass('animate fadeInUp');
				imgEdificio.fadeIn();
			},400);
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
					}
					actual =3;
					break;
				default:
					break;
			}
		}
		
		<!--	***********	Activar parallax fondo	*************	-->
		var scene = document.getElementById('scene');
		var parallax = new Parallax(scene);
		var scene = document.getElementById('scene2');
		var parallax = new Parallax(scene);
		
		<!--	***********	Activar slider colaboradores	*************	-->
		$('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
		  $('.flexslider').flexslider("stop");
        }
      });
	</script>
