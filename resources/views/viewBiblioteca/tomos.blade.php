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
	function muestraDescripcion(elem, libro){
		var contenedor = '#contenedor' + elem + libro;
		$(contenedor).css('width','25%');
		var colMargen = '#columnaMargen' + elem;
		$(colMargen).css('display','none');
		var contenedorDescr = '#descripcion' + elem + libro;
		$(contenedorDescr).css('display','block');
	}
	function ocultaDescripcion(elem, libro){
		var contenedor = '#contenedor' + elem + libro;
		$(contenedor).css('width','130');
		var colMargen = '#columnaMargen' + elem;
		$(colMargen).css('display','block');
		var contenedorDescr = '#descripcion' + elem + libro;
		$(contenedorDescr).css('display','none');
	}
</script>        

@endsection
@section('cuerpoBiblioteca')
<div class="row" style="padding-top:55px;">
	<div class="col-md-12">
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div id="carouselTomos" class="carousel slide" data-ride="carousel" data-interval="false">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
			<li data-target="#carouselTomos" data-slide-to="0" class="active"></li>
			<li data-target="#carouselTomos" data-slide-to="1"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="col-md-1" id="columnaMargen1">
				</div>
				<div id="contenedor11" class="col-md-1" onmouseover="muestraDescripcion('1','1')" onmouseleave="ocultaDescripcion('1','1')">
					<img src="{{url('imagenes\biblioteca\tomos\bajacalifornia.jpg')}}" alt="...">
					<img id="descripcion11" src="{{url('imagenes\biblioteca\tomos\hoverTomos\biblioteca-10.png')}}" alt="..." style="position:absolute; top:0px; left: 105px; display: none;">
				</div>

				<div id="contenedor12" class="col-md-1" onmouseover="muestraDescripcion('1','2')" onmouseleave="ocultaDescripcion('1','2')">
					<img src="{{url('imagenes\biblioteca\tomos\bejaminfranklin.jpg')}}" alt="...">
					<img id="descripcion12" src="{{url('imagenes\biblioteca\tomos\hoverTomos\biblioteca-06.png')}}" alt="..." style="position:absolute; top:0px; left: 105px; display: none;">
				</div>
				<div id="contenedor13" class="col-md-1" onmouseover="muestraDescripcion('1','3')" onmouseleave="ocultaDescripcion('1','3')">
					<img src="{{url('imagenes\biblioteca\tomos\cervantes.jpg')}}" alt="...">
					<img id="descripcion13" src="{{url('imagenes\biblioteca\tomos\hoverTomos\biblioteca-01.png')}}" alt="..." style="position:absolute; top:0px; left: 105px; display: none;">
				</div>
				<div id="contenedor14" class="col-md-1" onmouseover="muestraDescripcion('1','4')" onmouseleave="ocultaDescripcion('1','4')">
					<img src="{{url('imagenes\biblioteca\tomos\colegiomex.jpg')}}" alt="...">
					<img id="descripcion14" src="{{url('imagenes\biblioteca\tomos\hoverTomos\biblioteca-02.png')}}" alt="..." style="position:absolute; top:0px; left: 105px; display: none;">
				</div>
				<div id="contenedor15" class="col-md-1" onmouseover="muestraDescripcion('1','5')" onmouseleave="ocultaDescripcion('1','5')">
					<img src="{{url('imagenes\biblioteca\tomos\conevyt.jpg')}}" alt="...">
					<img id="descripcion15" src="{{url('imagenes\biblioteca\tomos\hoverTomos\biblioteca-12.png')}}" alt="..." style="position:absolute; top:0px; left: 105px; display: none;">
				</div>
				<div id="contenedor16" class="col-md-1" onmouseover="muestraDescripcion('1','6')" onmouseleave="ocultaDescripcion('1','6')">
					<img src="{{url('imagenes\biblioteca\tomos\congresounion.jpg')}}" alt="...">
					<img id="descripcion16" src="{{url('imagenes\biblioteca\tomos\hoverTomos\biblioteca-11.png')}}" alt="..." style="position:absolute; top:0px; left: 105px; display: none;">
				</div>
				<div id="contenedor17" class="col-md-1" onmouseover="muestraDescripcion('1','7')" onmouseleave="ocultaDescripcion('1','7')">
					<img src="{{url('imagenes\biblioteca\tomos\ecest.jpg')}}" alt="...">
					<img id="descripcion17" src="{{url('imagenes\biblioteca\tomos\hoverTomos\biblioteca-14.png')}}" alt="..." style="position:absolute; top:0px; left: 105px; display: none;">
				</div>
				<div id="contenedor18" class="col-md-1" onmouseover="muestraDescripcion('1','8')" onmouseleave="ocultaDescripcion('1','8')">
					<img src="{{url('imagenes\biblioteca\tomos\itam.jpg')}}" alt="...">
					<img id="descripcion18" src="{{url('imagenes\biblioteca\tomos\hoverTomos\biblioteca-05.png')}}" alt="..." style="position:absolute; top:0px; left: 105px; display: none;">
				</div>
				<div id="contenedor19" class="col-md-1" onmouseover="muestraDescripcion('1','9')" onmouseleave="ocultaDescripcion('1','9')">
					<img src="{{url('imagenes\biblioteca\tomos\iteso.jpg')}}" alt="...">
					<img id="descripcion19" src="{{url('imagenes\biblioteca\tomos\hoverTomos\biblioteca-08.png')}}" alt="..." style="position:absolute; top:0px; left: 105px; display: none;">
				</div>
				<div id="contenedor110" class="col-md-1" onmouseover="muestraDescripcion('1','10')" onmouseleave="ocultaDescripcion('1','10')">
					<img src="{{url('imagenes\biblioteca\tomos\mundial.jpg')}}" alt="...">
					<img id="descripcion110" src="{{url('imagenes\biblioteca\tomos\hoverTomos\biblioteca-07.png')}}" alt="..." style="position:absolute; top:0px; left: 105px; display: none;">
				</div>
			</div>
			<div class="item">
				<div class="col-md-1" id="columnaMargen2">
				</div>
				<div id="contenedor21" class="col-md-1" onmouseover="muestraDescripcion('2','1')" onmouseleave="ocultaDescripcion('2','1')">
					<img src="{{url('imagenes\biblioteca\tomos\unamcienciastierra.jpg')}}" alt="...">
					<img id="descripcion21" src="{{url('imagenes\biblioteca\tomos\hoverTomos\biblioteca-09.png')}}" alt="..." style="position:absolute; top:0px; left: 105px; display: none;">
				</div>
				<div id="contenedor22" class="col-md-1" onmouseover="muestraDescripcion('2','2')" onmouseleave="ocultaDescripcion('2','2')">
					<img src="{{url('imagenes\biblioteca\tomos\unameduardogarcia.jpg')}}" alt="...">
					<img id="descripcion22" src="{{url('imagenes\biblioteca\tomos\hoverTomos\biblioteca-03.png')}}" alt="..." style="position:absolute; top:0px; left: 105px; display: none;">
				</div>
				<div id="contenedor23" class="col-md-1" onmouseover="muestraDescripcion('2','3')" onmouseleave="ocultaDescripcion('2','3')">
					<img src="{{url('imagenes\biblioteca\tomos\unamjorgecarpizo.jpg')}}" alt="...">
					<img id="descripcion23" src="{{url('imagenes\biblioteca\tomos\hoverTomos\biblioteca-04.png')}}" alt="..." style="position:absolute; top:0px; left: 105px; display: none;">
				</div>
				<div id="contenedor24" class="col-md-1" onmouseover="muestraDescripcion('2','4')" onmouseleave="ocultaDescripcion('2','4')">
					<img src="{{url('imagenes\biblioteca\tomos\tecmonterrey.jpg')}}" alt="...">
					<img id="descripcion24" src="{{url('imagenes\biblioteca\tomos\hoverTomos\biblioteca-13.png')}}" alt="..." style="position:absolute; top:0px; left: 105px; display: none;">
				</div>
			</div>
		  </div>

		  <!-- Controls -->
		  <a class="left carousel-control reduceFlecha" href="#carouselTomos" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control reduceFlecha" href="#carouselTomos" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>
	</div>
</div>
@include('viewBiblioteca.menuBiblioteca')
@endsection
