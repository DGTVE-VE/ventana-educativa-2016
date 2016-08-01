@section('titleConocenos')
Conocenos
@stop
@extends('indexConocenos')
@section('cuerpoConocenos')
<section id="carousel">    				
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!--<div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>-->
                <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
                    <div class="col-md-12">
                        <!-- Carousel indicators -->
                        <div class="col-md-2"></div>
                        <div class="botonConocenosSlide col-md-2" data-target="#fade-quote-carousel" data-slide-to="0"> <a class="first after" href="#">Colaboradores</a></div>
                        <div class="col-md-1"></div>
                        <div class="botonConocenosSlide col-md-2" data-target="#fade-quote-carousel" data-slide-to="1"> <a class="first after" href="#">Antecedentes</a></div>
                        <div class="col-md-1"></div>
                        <div class="botonConocenosSlide col-md-2" data-target="#fade-quote-carousel" data-slide-to="2"> <a class="first after" href="#">Alineación del Proyecto</a></div>
                        <div class="col-md-2"></div>                        
                    </div>
                    
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="item">
                            <div class="profile-circle" style="background-color: rgba(0,0,0,.2);"></div>
                            <blockquote>
                                <p>Aqui va el contenido de colaboradores.</p>
                            </blockquote>	
                        </div>
                        <div class="active item">
                            <div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>
                            <blockquote>
                                <p>Aqui va el contenido de la sección antecedentes.</p>
                            </blockquote>
                        </div>
                        <div class="item">
                            <div class="profile-circle" style="background-color: rgba(145,169,216,.2);"></div>
                            <blockquote>
                                <p>Aqui va el contenido de alineación del proyecto.</p>
                            </blockquote>
                        </div>
                    </div>                    
                </div>
            </div>
			<style>
				#target{
					width:300px;
					height:300px;
					border-radius:0%;
					/*transition: border-radius 0.8s ease;*/
					background-color: purple;
					transition-duration: 1s;
				}
				.circulo{
					border-radius: 50% !important;
				}
				.trianguloArriba{
					width:0;
					height:0;
					border-left:150px solid transparent !important;
					border-right:150px solid transparent !important;
					border-bottom:300px solid purple !important;;
				}
			</style>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

			<script>
				function tranformaFigura(){
					if($('#target').hasClass('trianguloArriba')){
						$('#target').css({transform:'rotate(90deg)'});
						$('#target').removeClass('trianguloArriba');
					}else{
						$('#target').css({transform:'rotate(-90deg)'});
						$('#target').addClass('trianguloArriba');
					}
					
				}
			</script>
			<div class="col-md-12">
				<div id="target" onclick="tranformaFigura()"></div>
				<!//div class="trianguloArriba" onclick="tranformaFigura()"></div-->
			</div>
        </div>
    </div>
</section>

@endsection
