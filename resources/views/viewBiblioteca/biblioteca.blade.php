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
        <br><br>
        <h2 class="text-center">Biblioteca</h2>
        <br>
        <div class="accordionBiblio">
            <ul id="tomosBiblioteca">
                <li style="background-image: url('{{asset('imagenes/biblioteca/pais/costarica.jpg')}}')"></li>
                <li style="background-image: url('{{asset('imagenes/biblioteca/pais/colombia.jpg')}}')"></li>
                <li style="background-image: url('{{asset('imagenes/biblioteca/pais/dominicana.jpg')}}')"></li>
                <li style="background-image: url('{{asset('imagenes/biblioteca/pais/guatemala.jpg')}}')"></li>
                <li style="background-image: url('{{asset('imagenes/biblioteca/pais/honduras.jpg')}}')"></li>
                <li class="hoverLiBiblioteca" onclick="location.href='{{asset('biblioteca/tomos')}}'" style="background-image: url('{{asset('imagenes/biblioteca/pais/mexico.jpg')}}')"></li>
                <li style="background-image: url('{{asset('imagenes/biblioteca/pais/nicaragua.jpg')}}')"></li>
                <li style="background-image: url('{{asset('imagenes/biblioteca/pais/panama.jpg')}}')"></li>                
                <li style="background-image: url('{{asset('imagenes/biblioteca/pais/salvador.jpg')}}')"></li>
                
            </ul>
        </div>
    </div>
</div>
@include('viewMediateca.barraSociales')
@endsection

<script>
    
</script>