@section('titleDocente')
Docente
@stop
@extends('indexDocente')
@section('menuDocente')
@include('viewVentana.encabezadoVentana')
@endsection
@section('cuerpoDocente')
<style>
    .MenuInicial{padding: 0.5%;}
    .contenidoDocente{
        padding-top: 10%; 

        /*border: 1px solid red;*/
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
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id='calendar'></div>
        </div>
    </div>
</div>
@endsection
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>

<script>
    $(document).ready(function () {
        // page is now ready, initialize the calendar...
        $('#calendar').fullCalendar({           
        })
    });
</script>    