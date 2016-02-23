@section('title')
Proyectos
@stop
@extends('home')
@section('menu')
@include('red.seccionheader')
@endsection
@section('cuerpo')

<div class="row" style="margin-top: 5%;" >        
    <div class="row fondo_Obscuro">
        <div class="col-md-12 text-center text-uppercase">
            <h2>Proyectos</h2>
        </div>
    </div>
    <link rel="stylesheet" href="css/red/estiloRed3.css">
    <!-- Carousel -->
    <div class="container ">

        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10" id="carousel-bounding-box">
                <div class="carousel slide carousel-proyectos" id="myCarouselProyecto">

                    <!-- Carousel items -->
                    <div class="carousel-inner">

                        <div class="active item" data-slide-number="0">
                            <!--<img src="imagenes/red/proyectos/imagentextoproyectos1.png">-->
                            <img src="http://placehold.it/1000x620">
                        </div>
                        <div class="item" data-slide-number="1">
                            <!--<img src="imagenes/red/proyectos/imagentextoproyectos2.png">-->
                            <img src="http://placehold.it/1000x620">
                        </div>

                        <div class="item" data-slide-number="2">
                            <!--<img src="imagenes/red/proyectos/imagentextoproyectos3.png">-->
                            <img src="http://placehold.it/1000x620">
                        </div>
                    </div><!-- Carousel nav -->

                </div>
                <a  data-slide="prev" href="#myCarouselProyecto" class="left carousel-control circuloFlecha" >‹</a>
                <a data-slide="next" href="#myCarouselProyecto" class="right carousel-control circuloFlecha controlDerechoCarousel">›</a>

            </div>
            <div class="col-md-1"></div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8" id="carousel-text"></div>

            <div id="slide-content" style="display: none;">
                <div  id="slide-content-0">
                    <h2>Tema 1 </h2>
                    <p style="text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                        when an unknown printer took a galley of type and scrambled it to make a type
                        specimen book. It has survived not only five centuries, but also the leap into
                        electronic typesetting, remaining essentially unchanged. It was popularised in
                        the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including
                        versions of Lorem Ipsum.                                           

                    </p>
                   <!--<p class="sub-text">October 24 2014 - <a href="#">Continuar leyendo</a></p>-->
                </div>

                <div id="slide-content-1">
                    <h2>Tema 2</h2>
                    <a name="tema1"></a>
                    <p style="text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                        when an unknown printer took a galley of type and scrambled it to make a type
                        specimen book. It has survived not only five centuries, but also the leap into
                        electronic typesetting, remaining essentially unchanged. It was popularised in
                        the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including
                        versions of Lorem Ipsum.

                    </p>
                   <!--<p class="sub-text">October 24 2014 - <a href="#">Continuar leyendo</a></p>-->
                </div>

                <div id="slide-content-2">
                    <h2>Tema 3</h2>
                    <a name="tema1"></a>
                    <p style="text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                        when an unknown printer took a galley of type and scrambled it to make a type
                        specimen book. It has survived not only five centuries, but also the leap into
                        electronic typesetting, remaining essentially unchanged. It was popularised in
                        the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including
                        versions of Lorem Ipsum.

                    </p>
                   <!--<p class="sub-text">October 24 2014 - <a href="#">Continuar leyendo</a></p>-->
                </div>

            </div>
            <div class="col-md-2"></div>
        </div> 
 
        </br></br>
    </div>
</div>

<script>

    jQuery(document).ready(function ($) {
		
        $('#myCarouselProyecto').carousel({
            interval: 5000
        });

        $('#carousel-text').html($('#slide-content-0').html());

//Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click(function () {
            var id_selector = $(this).attr("id");
            var id = id_selector.substr(id_selector.length - 1);
            var id = parseInt(id);
            $('#myCarouselProyecto').carousel(id);
        });


// When the carousel slides, auto update the text
        $('#myCarouselProyecto').on('slid.bs.carousel', function (e) {
            var id = $('.item.active').data('slide-number');
            $('#carousel-text').html($('#slide-content-' + id).html());
        });
		
//Obtener texto de dirección
		var URL = document.location.hash;
		var proyecto = URL.substr(URL.indexOf("#")+1,1);
		
//Elegir diapositiva de carousel dependiendo opción recibida
		switch(proyecto){
			case '0':
				$('#myCarouselProyecto').carousel(0);
				break;
			case '1':
				$('#myCarouselProyecto').carousel(1);
				break;
			case '2':
				$('#myCarouselProyecto').carousel(2);
				break;
			default:
				$('#myCarouselProyecto').carousel(0);
				break;
		}	
    })	
</script>

@include('red.seccionpie')
@stop
