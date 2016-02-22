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
<div class="container">
    
    <div id="main_area">
        <!-- Slider -->
        <div class="row">
            <div class="col-mod-12" id="slider">
                <!-- Top part of the slider -->
                            <a name="tema2"></a>
                <div class="row">
                    <div class="col-md-12" id="carousel-bounding-box">
                        <div class="carousel slide carousel-proyectos" id="myCarouselProyecto">

                            <!-- Carousel items -->
                            <div class="carousel-inner">

                                <div class="active item" data-slide-number="0">
                                    <img src="http://placehold.it/1170x350">
                                    <!--<img class="img-responsive"src="foto-ventana-educativa.jpg" ></div>-->
                                </div>
                                <div class="item" data-slide-number="1">
                                    <img src="http://placehold.it/1170x350">
                                </div>

                                <div class="item" data-slide-number="2">
                                    <img src="http://placehold.it/1170x350">
                                </div>
                            </div><!-- Carousel nav -->
                            <a  data-slide="prev" href="#myCarouselProyecto" class="left carousel-control circuloFlecha" >‹</a>
                            <a data-slide="next" href="#myCarouselProyecto" class="right carousel-control circuloFlecha controlDerechoCarousel">›</a>

                        </div>
                    </div>
                    <div class="col-md-12" id="carousel-text"></div>

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
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
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
                            <!--<a name="tema1"></a>-->
                            <p style="text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                when an unknown printer took a galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but also the leap into
                                electronic typesetting, remaining essentially unchanged. It was popularised in
                                the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                                and more recently with desktop publishing software like Aldus PageMaker including
                                versions of Lorem Ipsum.
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
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
                            <!--<a name="tema1"></a>-->
                            <p style="text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                when an unknown printer took a galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but also the leap into
                                electronic typesetting, remaining essentially unchanged. It was popularised in
                                the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                                and more recently with desktop publishing software like Aldus PageMaker including
                                versions of Lorem Ipsum.
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
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
                </div>
                </br>
                    <a href="ventanaquienessomos2.jpg" download="imagen">
                        Descargar Archivo
                    </a>
                </button>

            </div><!--/row1-->
        </div>
    </div>
</div>
</div>
</div>
<!-- Navbar -->

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
    });
</script>

@include('red.seccionpie')
@stop
