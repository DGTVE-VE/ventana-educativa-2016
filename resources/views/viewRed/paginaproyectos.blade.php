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

                        @for($i = 1; $i < sizeof($proyectos); $i++)

                        <div class="item" data-slide-number={{$i}}>
                            {{ HTML::image($proyectos[$i]->thumbnail,$proyectos[$i]->titulo)}}
                        </div>

                        @endfor

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
                </div>

                @endfor

            </div>
            <div class="col-md-2"></div>
        </div>
        <!-- Slide-content de Textos -->
        <br><br>
    </div>
</div>

<script src="{{url('js/red/proyectos.js')}}"></script>
@include('viewRed.seccionpie')
@stop
