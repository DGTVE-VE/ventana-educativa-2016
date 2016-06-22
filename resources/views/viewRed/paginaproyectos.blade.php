@section('titleRedmite')
Proyectos
@stop
@extends('indexRed')
@section('menuRedmite')
@include('viewRed.seccionheader')
@endsection
@section('cuerpoRedmite')

<div class="row">
    <div class="row fondo_Obscuro">
        <div class="col-md-12 text-center text-uppercase">
            <p class="pleca">Proyectos</p>
        </div>
    </div>
    <link rel="stylesheet" href="{{asset('css/red/estiloRed3.css')}}">
    <!-- Carousel -->
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10" id="carousel-bounding-box-Proyectos">
                <div class="carousel slide carousel-proyectos" id="myCarouselProyecto">

                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="active item" data-slide-number="0">
                           {{ HTML::image('imagenes/red/proyectos/bannersproyectos/1erencuentro.jpg','baner1 proyectos')}}
                        </div>
                        <div class="item" data-slide-number="1">
                            {{ HTML::image('imagenes/red/proyectos/bannersproyectos/ventanaeducativa.jpg','baner2 proyectos')}}
                        </div>
                        <div class="item" data-slide-number="2">
                            {{ HTML::image('imagenes/red/proyectos/bannersproyectos/pedagogiadigital.jpg','baner3 proyectos')}}
                        </div>
                    </div><!-- Carousel nav -->
                </div>
                <a  data-slide="prev" href="{{url('#myCarouselProyecto')}}" class="left carousel-control circuloFlecha controlIzquierdoCarousel" >‹</a>
                <a data-slide="next" href="{{url('#myCarouselProyecto')}}" class="right carousel-control circuloFlecha controlDerechoCarousel">›</a>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- Slide-content de Textos -->
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8" id="carousel-text"></div>

            <div id="slide-content" style="display: none;">

                @for($i = 0; $i < sizeof($proyectos); $i++)

                {{$id = "slide-content-".$i}}

                <div id={!!$id!!}>
                    {!! $proyectos[$i]->descripcion !!}

                    <!-- <p class="sub-text">Nombre liga <a href={!! $proyectos[$i]->liga !!}>Continuar leyendo</a></p> -->
                </div>

                @endfor

            </div>
            <div class="col-md-2"></div>
        </div>
        <!-- Slide-content de Textos -->
        <br><br>
    </div>
</div>

<script>
    jQuery(document).ready(function ($) {

        $('#myCarouselProyecto').carousel({
            interval: false
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
        var proyecto = URL.substr(URL.indexOf("#") + 1, 1);

//Elegir diapositiva de carousel dependiendo opción recibida
        switch (proyecto) {
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
@include('viewRed.seccionpie')
@stop
