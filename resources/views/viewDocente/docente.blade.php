@section('titleDocente')
Docente
@stop
@extends('indexDocente')
@section('menuDocente')
@include('viewVentana.encabezadoVentana')
<style>
    .MenuInicial{padding: 0.5%;}
    .contenidoDocente{
        padding-top: 10%; 

        /*border: 1px solid red;*/
    }
    .imgDocente{
        background: white;
        margin-right: 0.3%;
        border: 1px solid #B0BEC5;
        -webkit-box-shadow: 7px -5px 17px -3px rgba(0,0,0,0.75);
        -moz-box-shadow: 7px -5px 17px -3px rgba(0,0,0,0.75);
        box-shadow: 7px -5px 17px -3px rgba(0,0,0,0.75);
        width: 280px;
        height: 350px;
        padding: 0;        
    }
    .btn-docente{
        color: white;
        font-weight: bold;
        background-color: #0054a6;        
        position: absolute;
        bottom: 0;
        height: 18%;
        font-size: 1.5em;
        width: 100%;
    }
    .btn-docente:hover{
        color: white;
        font-weight: bold;
        background-color: #1B1464;
        position: absolute;
        bottom: 0;
        height: 18%;        
    }
    .btn{border-radius: 0;}
    .tituloDocente{
        font-size: 1.8em;
        color: white;
    }
</style>
<script>
    $('#buscar').css('display', 'none');
    $('#iconoBuscar').css('display', 'none');
    $('#navegacionVentana').css('height', '55px');
    $('#navegacionVentana').css('zIndex', 900);
    $('#navegacionVentana').removeClass('navbar-default').addClass('navbar-inverse');
    $('#navegacionVentana').removeClass('menuVentana');
    $('#navegacionVentana').addClass('MenuInicial');
</script>
<div class="navbar"></div><!--Navbar para que el contenido se baje al nivel de la barra--->
@endsection
@section('cuerpoDocente')
<div class="container">
    <div class="col-md-12 tituloDocente text-center">Docentes</div>
    <div class="row contenidoDocente">
        <div class="imgDocente col-md-3">
            <a href="{{asset('docente/materialapoyo')}}">
            <img class="img-responsive center-block" src="{{asset('imagenes/docente/materialdeapoyo.png')}}">
            <input type="button" class="btn btn-docente col-md-12" value="MATERIAL DE APOYO">
            </a>
        </div>
        <div class="imgDocente col-md-3">
            <a href="{{asset('docente/mimaterial')}}">
            <img class="img-responsive center-block" src="{{asset('imagenes/docente/mimaterial.png')}}">
            <input type="button" class="btn btn-docente col-md-12" value="MI MATERIAL">            
            </a>
        </div>
        <div class="imgDocente col-md-3">
            <a href="{{asset('docente/foros')}}">
            <img class="img-responsive center-block" src="{{asset('imagenes/docente/foros.png')}}">
            <input type="button" class="btn btn-docente col-md-12" value="FOROS">            
            </a>
        </div>
        <div class="imgDocente col-md-3">
            <a href="{{asset('docente/calendario')}}">
            <img class="img-responsive center-block" src="{{asset('imagenes/docente/calendario.png')}}">
            <input type="button" class="btn btn-docente col-md-12" value="CALENDARIO">            
            </a>
        </div>
    </div>
</div>
@endsection
@include('viewMediateca.barraSociales')

