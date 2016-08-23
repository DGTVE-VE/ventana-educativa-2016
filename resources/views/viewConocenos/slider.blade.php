
<!--	********	Parallax Capas	***********	-->
<!-- Behavioral Meta Data -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<ul id="scene" class="scene" style="position:absolute; top:-50px; left:-100px; width:100%">
		<li class="layer" data-depth="0.20"><img src="imagenes/ventana/conocenos/slider/red1.png" style="height:70%; width:90%;"/></li>
	</ul>
	<ul id="scene2" class="scene" style="position:absolute; top:0px; left:250px; width:100%">
		<li class="layer" data-depth="0.40"><img src="imagenes/ventana/conocenos/slider/red2.png" style="height:70%; width:90%;"/></li>
	</ul>
        <div class="row" style="margin:0px;">
			<div class="col-md-4 col-md-offset-4">
				<img class="img-responsive" id="imgMarcoNegro" src="imagenes/ventana/conocenos/slider/marcoNegro.png" style="position: relative; top:-10%; left:-2%; max-width:110%;"/>
				<img class="img-responsive" id="imgApartadoEdificio" src="imagenes/ventana/conocenos/slider/antecedentes.png" style="position: absolute; top:-0.6%; left:1.5%; max-width:102.1%;"/>
				<div id="divTriangulo" class="trianguloDerecha opaco homologaColor"></div>
				<div id="divFigura" class="opaco"></div>
			</div>
		</div>
        <div class="row" style="margin:0px;">
			 <div class="col-md-4 altura50Celda" onclick="tranformaFigura(1)">
				<a class="first after txtNegro acomodaLigas">Colaboradores</a>
			</div>
			<div class="col-md-4 altura50Celda" onclick="tranformaFigura(2)">
				<a class="first after txtNegro acomodaLigas">Antecedentes</a>
			</div>
			<div class="col-md-4 altura50Celda" onclick="tranformaFigura(3)">
				<a class="first after txtNegro acomodaLigas">Alineación del Proyecto</a>
			</div>
		</div>
        <div class="row" style="margin:0px; position:relative; top:0px;">
			<div class="col-md-6 col-md-offset-3">
					<br>
					<img class="img-responsive" src="imagenes/ventana/conocenos/slider/textoAntecedentes.png" style="margin: auto; width:90%;"/>
			</div>
		</div>
	<!--section id="carousel" style="position:relative; top:0px;">
        <div class="row" style="margin:0px;">
			<div class="col-md-4 col-md-offset-4" style="position: absolute; top:0px; height:100%;">
				<img class="img-responsive" id="imgMarcoNegro" src="imagenes/ventana/conocenos/slider/marcoNegro.png" style="position: absolute; top:-10%; left:-5%; max-width:110%;"/>
				<img class="img-responsive" id="imgApartadoEdificio" src="imagenes/ventana/conocenos/slider/antecedentes.png" style="position: absolute; top:-10%; left:-4%; max-width:107.5%;"/>
				<div id="divTriangulo" class="trianguloDerecha opaco homologaColor"></div>
				<div id="divFigura" class="opaco"></div>
			</div>

            <div class="col-md-12" >
                <div class="carousel" id="fade-quote-carousel" data-ride="carousel" data-interval="0">
                    <div class="col-md-12">

                        <div class="col-md-4 text-center" data-target="#fade-quote-carousel" data-slide-to="0" onclick="tranformaFigura(1)">
							<a class="first after txtNegro" href="#">Colaboradores</a>
						</div>
                        <div class="col-md-4 text-center" data-target="#fade-quote-carousel" data-slide-to="1" onclick="tranformaFigura(2)">
							<a class="first after txtNegro" href="#">Antecedentes</a>
						</div>
                        <div class="col-md-4 text-center" data-target="#fade-quote-carousel" data-slide-to="2" onclick="tranformaFigura(3)">
							<a class="first after txtNegro" href="#">Alineación del Proyecto</a>
						</div>
                    </div>
                    

                    <div class="carousel-inner" style="position: relative; top:200px;">
                        <div class="item">
                            <blockquote>
								<br>
								<img class="img-responsive" src="imagenes/ventana/conocenos/slider/textoAntecedentes.png" style="margin: auto;"/>
                            </blockquote>
                        </div>
                        <div class="active item">
                            <blockquote>
								<br>
								<img class="img-responsive" src="imagenes/ventana/conocenos/slider/textoAntecedentes.png" style="margin: auto;"/>
                            </blockquote>
                        </div>
                        <div class="item">
                            <blockquote>
								<br>
								<img class="img-responsive" src="imagenes/ventana/conocenos/slider/textoAntecedentes.png" style="margin: auto;"/>
                            </blockquote>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
	</section-->
	<style>
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
			transition: opacity:0.3s;
		}
		.txtNegro{
			color:black;
		}
		.acomodaLigas{
			position: absolute; left:40%;
		}
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
		}
		.altura50Celda{
			height:50px;
		}
	</style>
	<!--	********* Incluir Jquery	***************	-->
	<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script-->
	<!--	********* Incluir libreria parallax	***************	-->
	<script src="js/parallaxCapas/deploy/parallax.js"></script>
	<script>
		$('#divTriangulo').css({transform:'scale(0.1, 0.1)'});
		actual = 2;
		function tranformaFigura(seccion){
			switch(seccion){
				case 1:	//circulo
					if(actual!=1){
						$('#imgApartadoEdificio').fadeOut();
						setTimeout(function(){
						$('#imgApartadoEdificio').attr('src','imagenes/ventana/conocenos/slider/alineacionProyecto.png');
							$('#imgApartadoEdificio').addClass('animate fadeInUp');
							$('#imgApartadoEdificio').fadeIn();
						},400);
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
						$('#imgApartadoEdificio').fadeOut();
						setTimeout(function(){
							$('#imgApartadoEdificio').attr('src','imagenes/ventana/conocenos/slider/antecedentes.png');
							$('#imgApartadoEdificio').addClass('animate fadeInUp');
							$('#imgApartadoEdificio').fadeIn();
						},400);
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
						$('#imgApartadoEdificio').fadeOut();
						setTimeout(function(){
						$('#imgApartadoEdificio').attr('src','imagenes/ventana/conocenos/slider/alineacionProyecto.png');
							$('#imgApartadoEdificio').addClass('animate fadeInUp');
							$('#imgApartadoEdificio').fadeIn();
						},400);
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
	</script>
