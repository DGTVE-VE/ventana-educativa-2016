@section('titleBiblioteca')
Biblioteca
@stop
@extends('indexBiblioteca')
@section('menuBiblioteca')
@include('viewVentana.encabezadoVentana')
<script>
    $('#buscar').css('display', 'none');
    $('#iconoBuscar').css('display', 'none');
    $('#navegacionVentana').css('height', '55px');
    $(window).scroll(function () {
        var scroll_v = this.pageYOffset;
        if (scroll_v > 10) {
            $('#navegacionVentana').css('background', 'rgba(0, 0, 0, .3)');
        }
        if (scroll_v < 10) {
            $('#navegacionVentana').css('background', 'transparent');
        }
    });
</script>        

@endsection
@section('cuerpoBiblioteca')
<div class="container">
    <div class="row">
        <br><br><br<br><br><br>
        <div class="accordion">
            <ul>
                <li style="background-image: url('{{asset('imagenes/biblioteca/pais/costarica.jpg')}}')"></li>
                <li style="background-image: url('{{asset('imagenes/biblioteca/pais/guatemala.jpg')}}')"></li>
                <li style="background-image: url('{{asset('imagenes/biblioteca/pais/honduras.jpg')}}')"></li>
                <li style="background-image: url('{{asset('imagenes/biblioteca/pais/mexico.jpg')}}')"></li>
                <li style="background-image: url('{{asset('imagenes/biblioteca/pais/nicaragua.jpg')}}')"></li>
                <li style="background-image: url('{{asset('imagenes/biblioteca/pais/salvador.jpg')}}')"></li>
            </ul>
        </div>
    </div>
</div>
@include('viewMediateca.barraSociales')
@endsection
