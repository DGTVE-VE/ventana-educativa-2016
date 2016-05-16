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
	$('.imgLogo').attr('src','{{url("imagenes/biblioteca/imgMenu/ventanaEducativa.png")}}');
	$('.appsLogo').attr('src','{{url("imagenes/biblioteca/imgMenu/menu.png")}}');
	$('#img-usuario').attr('src','{{url("imagenes/biblioteca/imgMenu/registro.png")}}');
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
        <br><br><br><br><br><br>
        <div class="accordionBiblio">
            <ul id="tomosBiblioteca">
                <li onclick="location.href='{{asset('biblioteca/tomos')}}'" style="background-image: url('{{asset('imagenes/biblioteca/pais/costarica.jpg')}}')"></li>
                <li onclick="location.href='{{asset('biblioteca/tomos')}}'" style="background-image: url('{{asset('imagenes/biblioteca/pais/guatemala.jpg')}}')"></li>
                <li onclick="location.href='{{asset('biblioteca/tomos')}}'" style="background-image: url('{{asset('imagenes/biblioteca/pais/honduras.jpg')}}')"></li>
                <li onclick="location.href='{{asset('biblioteca/tomos')}}'" style="background-image: url('{{asset('imagenes/biblioteca/pais/mexico.jpg')}}')"></li>
                <li onclick="location.href='{{asset('biblioteca/tomos')}}'" style="background-image: url('{{asset('imagenes/biblioteca/pais/nicaragua.jpg')}}')"></li>
                <li onclick="location.href='{{asset('biblioteca/tomos')}}'" style="background-image: url('{{asset('imagenes/biblioteca/pais/salvador.jpg')}}')"></li>
            </ul>
        </div>
    </div>
</div>
@include('viewMediateca.barraSociales')
@endsection

<script>
    
</script>