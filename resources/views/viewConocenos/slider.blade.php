
<!--	********	Parallax Capas	***********	-->
<!-- Behavioral Meta Data -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<!-- Styles -->
<!--link rel="stylesheet" type="text/css" href="js/parallaxCapas/examples/styles/styles.css"/-->
	<ul id="scene" class="scene" style="position:absolute; top:0px; width:100%">
		<li class="layer" data-depth="0.70"><img src="imagenes/ventana/conocenos/slider/red1.png" style="height:70%; width:90%;"></li>
	</ul>
	<ul id="scene2" class="scene" style="position:absolute; top:0px; width:100%">
		<li class="layer" data-depth="1"><img src="imagenes/ventana/conocenos/slider/red2.png" style="height:70%; width:90%;"></li>
	</ul>
	<section id="carousel" style="position:relative; top:0px;">
        <div class="row">
			<div class="col-md-8 col-md-offset-4" style="position: absolute; top:0px;">
				<div style="position:absolute; top:70px; left:-80px; border: solid 3px; width:620px; height:180px;"></div>
				<div id="divTriangulo" class="trianguloArriba opaco homologaColor"></div>
				<div id="divFigura" class="opaco"></div>
			</div>

            <div class="col-md-12" >
                <!--<div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>-->
                <div class="carousel" id="fade-quote-carousel" data-ride="carousel" data-interval="0">
                    <div class="col-md-12">
                        <!-- Carousel indicators -->
                        <div class="col-md-1"></div>
                        <div class=" col-md-3" data-target="#fade-quote-carousel" data-slide-to="0" onclick="tranformaFigura(1)">
							<a class="first after" href="#">Colaboradores</a></div>
                        <div class="col-md-1"></div>
                        <div class=" col-md-3" data-target="#fade-quote-carousel" data-slide-to="1" onclick="tranformaFigura(2)">
							<a class="first after" href="#">Antecedentes</a></div>
                        <div class="col-md-1"></div>
                        <div class=" col-md-3" data-target="#fade-quote-carousel" data-slide-to="2" onclick="tranformaFigura(3)">
							<a class="first after" href="#">Alineación del Proyecto</a></div>
                        <!--div class="col-md-1"></div-->
                    </div>
                    
                    <!-- Carousel items -->
                    <div class="carousel-inner" style="position: relative; top:150px;">
                        <div class="item">
                            <blockquote>
                                <p>Aqui va el contenido de colaboradores.</p>
                            </blockquote>	
                        </div>
                        <div class="active item">
                            <blockquote>
                                <p>Aqui va el contenido de la sección antecedentes.</p>
                            </blockquote>
                        </div>
                        <div class="item">
                            <blockquote>
                                <p>Aqui va el contenido de alineación del proyecto.</p>
                            </blockquote>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
	</section>
	<style>
		#divFigura{
			position:absolute; left:80px;
			width:300px;	height:300px;
			border-radius:0%;
			background: #33ffff; /* For browsers that do not support gradients */
			transition: visibility 0.3s, border-radius 0.8s, transform 0.8s;
		}
		.homologaColor{
			visibility:hidden;
		}
		.circulo{
			border-radius: 50% !important;
			transition: border-radius 0.8s;
		}
		.trianguloArriba{
			position:absolute; top:-30px; left: 120px;
			width:0 !important;	height:0 !important;
			border-left:150px solid transparent !important;
			border-right:150px solid transparent !important;
			border-bottom:300px solid #33ffff !important;
			transition: visibility 0.3s, transform 0.8s;
		}
		.opaco{
			opacity: 0.5;
			transition: opacity:0.3s;
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
					if(actual==2){
						$('#divFigura').removeClass('opaco');
						$('#divFigura').css({transform:'rotate(-90deg)'});
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
					if(actual==1){
						$('#divFigura').removeClass('opaco');
						$('#divFigura').css({transform:'rotate(90deg)'});
						$('#divFigura').removeClass('circulo');
					}else if(actual==3){
						$('#divTriangulo').removeClass('opaco');
						$('#divFigura').removeClass('homologaColor');
						$('#divTriangulo').addClass('homologaColor');
						if($('#divFigura').hasClass('circulo')){
							$('#divFigura').removeClass('circulo');
						}
						$('#divFigura').css({transform:'rotate(-90deg)'});
						$('#divTriangulo').css({transform:'rotate(-45deg) scale(0.1, 0.1)'});
					}
					setTimeout(function(){$('#divFigura').addClass('opaco');},300);
					actual =2;
					break;
				case 3:	//triangulo
					if(actual==1 || actual==2){
						$('#divFigura').removeClass('opaco');
						$('#divTriangulo').removeClass('opaco');
						$('#divTriangulo').removeClass('homologaColor');
						$('#divFigura').addClass('homologaColor');
						$('#divTriangulo').css({transform:'rotate(45deg)'});
						if($('#divFigura').hasClass('circulo')){
							$('#divFigura').removeClass('circulo');
						}
						$('#divFigura').css({transform:'scale(0.3, 0.1) rotate(70deg)'});
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
