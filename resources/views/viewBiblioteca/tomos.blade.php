@section('titleBiblioteca')
Biblioteca
@stop
@extends('indexBiblioteca')
@section('menuBiblioteca')
@include('viewVentana.encabezadoVentana')
<style>
    .fondoDegradadoMenuInicial{
        background: rgba(0, 0, 0, .4);
        border: none;
    }
    .fondoDegradadoMenu{
        background: rgba(0, 0, 0, .7);
        border: none;
    }
    .reduceFlecha{
        width:20px;
    }
    #contenedor{
        /*-webkit-transition: all 0.1s ease;
        -moz-transition: all 0.1s ease;
        -o-transition: all 0.1s ease;
        transition: all 0.1s ease;*/
    }
    .imagenDescribe{
        position:absolute; top:0px; left: 25%; display: none; z-index:-1;
    }
</style>
<script>
    $('#buscar').css('display', 'none');
    $('#iconoBuscar').css('display', 'none');
    $('#navegacionVentana').css('height', '55px');
    $('.imgLogo').attr('src', '{{url("imagenes/biblioteca/imgMenu/ventanaEducativa.png")}}');
    $('.appsLogo').attr('src', '{{url("imagenes/biblioteca/imgMenu/menu.png")}}');
    $('#img-usuario').attr('src', '{{url("imagenes/biblioteca/imgMenu/registro.png")}}');
    $('#navegacionVentana').addClass('fondoDegradadoMenuInicial');
    $(window).scroll(function () {
        var scroll_v = this.pageYOffset;
        if (scroll_v > 10) {
            $('#navegacionVentana').removeClass('fondoDegradadoMenuInicial');
            $('#navegacionVentana').addClass('fondoDegradadoMenu');
        }
        if (scroll_v < 10) {
            $('#navegacionVentana').removeClass('fondoDegradadoMenu');
            $('#navegacionVentana').addClass('fondoDegradadoMenuInicial');
        }
    });
    $(document).ready(function () {
        var contenedor = '#contenedor11';
        anchoCol = $(contenedor).width() * 1.3;
        anchoAumenta = anchoCol * 2.9;
        altoLomos = $('#imagenLomo1').height();
        anchoLomos = $('#imagenLomo1').width();
        $('.imagenLomo').css('height', altoLomos);
        $('.imagenLomo').css('width', anchoLomos);
        $('.imagenDescribe').css('height', altoLomos);
    });
    function muestraDescripcion(elem, libro) {
        var contenedor = '#contenedor' + elem + libro;
        $(contenedor).css('width', anchoAumenta);
        var colMargen = '#columnaMargen' + elem;
        $(colMargen).css('display', 'none');
        var contenedorDescr = '#descripcion' + elem + libro;
        $(contenedorDescr).css('display', 'block');
    }
    function ocultaDescripcion(elem, libro) {
        var contenedor = '#contenedor' + elem + libro;
        $(contenedor).css('width', anchoCol);
        var colMargen = '#columnaMargen' + elem;
        $(colMargen).css('display', 'block');
        var contenedorDescr = '#descripcion' + elem + libro;
        $(contenedorDescr).css('display', 'none');
    }
</script>        

@endsection
@section('cuerpoBiblioteca')
<div class="row" style="padding-top:55px;">
    <div class="col-md-12">
    </div>
</div>
<div class="row" style="padding:10px;">
    <div class="col-md-12">
        <h2 class="text-center">Biblioteca</h2>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div id="carouselTomos" class="carousel slide" data-ride="carousel" data-interval="false" style="margin-left:5%; margin-right:5%;">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                @foreach ($tomos as $item => $numeroitem)         
                @if($item===0)
                <li data-target="#carouselTomos" data-slide-to="0" class="active"></li>
                @elseif($item != 0)
                <li data-target="#carouselTomos" data-slide-to="{{$item}}"></li>
                @endif       
                @endforeach
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                @foreach ($tomos as $item => $tomo)         
                @if($item===0)
                <div class="item active">
                    <div class="hidden-xs hidden-sm col-sm-1 col-md-1" id="columnaMargen1">
                    </div>
                    <div id="contenedor1{{$item}}" class="col-xs-3 col-sm-2 col-md-1 col-lg-1" onmouseenter="muestraDescripcion('1',{{$item}})" onmouseleave="ocultaDescripcion('1',{{$item}})">
                        <img id="imagenLomo1" src="{{url($tomo->url_tomo)}}" class="img-responsive imagenLomo" alt="...">
                        <img id="descripcion1{{$item}}" src="{{url($tomo->url_descripcion)}}" class="img-responsive imagenDescribe" alt="...">
                    </div>
                </div>
                @elseif(($item != 0) &&($item < 9))
                <div class="item">
                    <div class="col-md-1" id="columnaMargen1">
                    </div>
                    <div id="contenedor1{{$item}}" class="col-xs-3 col-sm-2 col-md-1 col-lg-1" onmouseover="muestraDescripcion('1', '{{$item}}')" onmouseleave="ocultaDescripcion('1',{{$item}})">
                        <img src="{{url($tomo->url_tomo)}}" class="img-responsive imagenLomo" alt="...">
                        <img id="descripcion1{{$item}}" src="{{url($tomo->url_descripcion)}}" class="img-responsive imagenDescribe" alt="...">
                    </div>                    
                </div>                    
                @else($item >= 9)
                <div class="item">
                    <div class="col-md-1" id="columnaMargen2">
                    </div>
                    <div id="contenedor2{{$item}}" class="col-xs-3 col-sm-2 col-md-1 col-lg-1" onmouseover="muestraDescripcion('2', '{{$item}}')" onmouseleave="ocultaDescripcion('2',{{$item}})">
                        <img src="{{url($tomo->url_tomo)}}" class="img-responsive imagenLomo" alt="...">
                        <img id="descripcion2{{$item}}" src="{{url($tomo->url_descripcion)}}" class="img-responsive imagenDescribe" alt="...">
                    </div>                    
                </div>
                @endif 
                @endforeach
            </div>

            <!-- Controls -->
            <a class="left carousel-control reduceFlecha" href="#carouselTomos" role="button" data-slide="prev" style="position:absolute; left:5%;">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control reduceFlecha" href="#carouselTomos" role="button" data-slide="next" style="position:absolute; right:5%;">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <img src="{{ asset('imagenes/biblioteca/tomos/plecaMadera.png') }}" style="position: absolute; left:10%; width:80%">
    </div>
</div>
@include('viewBiblioteca.menuBiblioteca')
@endsection
