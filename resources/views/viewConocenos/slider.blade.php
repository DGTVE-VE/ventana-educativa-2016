@section('titleConocenos')
Conocenos
@stop
@extends('indexConocenos')
@section('cuerpoConocenos')
<section id="carousel">    				
    <div class="container">
        <div class="row">
			<div class="col-md-8 col-md-offset-4">
				<div style="position:absolute; " id="divFigura"></div>
				<div style="position:absolute;" id="divTriangulo" class="trianguloArriba"></div>
			</div>
            <div class="col-md-12" style="position:relative; top:100px;">
                <!--<div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>-->
                <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="0" style="border: solid 3px;">
                    <div class="col-md-12">
                        <!-- Carousel indicators -->
                        <div class="col-md-2"></div>
                        <div class="botonConocenosSlide col-md-2" data-target="#fade-quote-carousel" data-slide-to="0"> <a class="first after" href="#" onclick="tranformaFigura(1)">Colaboradores</a></div>
                        <div class="col-md-1"></div>
                        <div class="botonConocenosSlide col-md-2" data-target="#fade-quote-carousel" data-slide-to="1"> <a class="first after" href="#" onclick="tranformaFigura(2)">Antecedentes</a></div>
                        <div class="col-md-1"></div>
                        <div class="botonConocenosSlide col-md-2" data-target="#fade-quote-carousel" data-slide-to="2"> <a class="first after" href="#" onclick="tranformaFigura(3)">Alineación del Proyecto</a></div>
                        <div class="col-md-2"></div>                        
                    </div>
                    
                    <!-- Carousel items -->
                    <div class="carousel-inner" style="position: relative; top:200px;">
                        <div class="item">
                            <!--div class="profile-circle" style="background-color: rgba(0,0,0,.2);"></div-->
                            <blockquote>
                                <p>Aqui va el contenido de colaboradores.</p>
                            </blockquote>	
                        </div>
                        <div class="active item">
                            <!--div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div-->
                            <blockquote>
                                <p>Aqui va el contenido de la sección antecedentes.</p>
                            </blockquote>
                        </div>
                        <div class="item">
                            <!--div class="profile-circle" style="background-color: rgba(145,169,216,.2);"></div-->
                            <blockquote>
                                <p>Aqui va el contenido de alineación del proyecto.</p>
                            </blockquote>
                        </div>
                    </div>                    
                </div>
            </div>
			<style>
				#divFigura{
					width:300px;
					height:300px;
					border-radius:0%;
					/*transition: border-radius 0.8s ease;*/
					background-color: purple;
					transition-duration: 1s;
				}
				.circulo{
					border-radius: 50% !important;
					transition-duration: 1s;
				}
				.trianguloArriba{
					width:0 !important;
					height:0 !important;
					border-left:150px solid transparent !important;
					border-right:150px solid transparent !important;
					border-bottom:300px solid purple !important;
					transition-duration: 1s;
				}
			</style>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
			<script>
				$('#divTriangulo').css({transform:'scale(0.1, 0.1)'});
				actual = 2;
				function tranformaFigura(seccion){
					switch(seccion){
						case 1:	//circulo
							if(actual==2){
								$('#divFigura').css({transform:'rotate(-90deg)'});
								$('#divFigura').addClass('circulo');
							}else if(actual==3){
								if(!$('#divFigura').hasClass('circulo')){
									$('#divFigura').addClass('circulo');
								}
								$('#divFigura').css({transform:'rotate(90deg)'});
								//$('#divFigura').css({transform:'scale(1, 1)'});
								$('#divTriangulo').css({transform:'rotate(-90deg)'});
								$('#divTriangulo').css({transform:'scale(0.1, 0.1)'});
							}
							actual =1;
							break;
						case 2:	//cuadrado
							if(actual==1){
								$('#divFigura').css({transform:'rotate(90deg)'});
								$('#divFigura').removeClass('circulo');
							}else if(actual==3){
								if($('#divFigura').hasClass('circulo')){
									$('#divFigura').removeClass('circulo');
								}
								$('#divFigura').css({transform:'rotate(90deg)'});
								//$('#divFigura').css({transform:'scale(1, 1)'});
								$('#divTriangulo').css({transform:'rotate(-90deg)'});
								$('#divTriangulo').css({transform:'scale(0.1, 0.1)'});
							}
							actual =2;
							break;
						case 3:	//triangulo
							if(actual==1 || actual==2){
								$('#divTriangulo').css({transform:'rotate(-90deg)'});
								//$('#divTriangulo').css({transform:'scale(1, 1)'});
								$('#divFigura').css({transform:'rotate(-90deg)'});
								$('#divFigura').css({transform:'scale(0.1, 0.1)'});
							}
							actual =3;
							break;
						default:
							break;
					}
				}
			</script>
        </div>
    </div>
</section>

@endsection
