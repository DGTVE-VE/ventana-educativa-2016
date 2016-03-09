@section('titleVentana')
Ventana Educativa
@stop
@extends('indexVentana')
@section('menuVentana')
@include('viewVentana.encabezadoVentana')
@endsection
@section('cuerpoVentana')
<div class="container">
        <div id="presentacion" class="carousel slide">
          <div class="carousel-inner">           
            <div class="item active">
                <img class="image-responsive" src="imagenes/ventana/presentacion/lamina1.png" alt="Slide1">              
            </div>
            
            <div class="item">
                <img class="image-responsive" src="imagenes/ventana/presentacion/lamina2.png" alt="Slide2">
            </div>
            <div class="item">
                <img class="image-responsive" src="imagenes/ventana/presentacion/lamina3.png" alt="Slide2">
            </div>
            <div class="item">
                <img class="image-responsive" src="imagenes/ventana/presentacion/lamina4.png" alt="Slide2">
            </div>              
          </div>          
              <div class="carousel-controls">
              	<a class="left carousel-control" href="#presentacion" data-slide="prev"><i class="fa fa-angle-double-left fa-lg"></i></a>
              	<a class="right carousel-control" href="#presentacion" data-slide="next"><i class="fa fa-angle-double-right fa-lg"></i></a>
              </div>
          
        </div>   
</div>
<script>
	$('#presentacion').carousel({
		interval:   false;
	});
</script>
@endsection
@section('pieVentana')
@include('viewVentana.pieVentana')
@endsection

