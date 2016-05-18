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
	function muestraDescripcion(){
		$('#imdDescripcion').css('display','block');
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
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="col-md-2">
				</div>
				<div>
					<img src="{{url('imagenes\biblioteca\tomos\bajacalifornia.jpg')}}" alt="..." onmouseenter="muestraDescripcion()">
					<img src="{{url('imagenes\biblioteca\tomos\bajacalifornia.jpg')}}" alt="..." style="display: none; position:relative; top:-480px;">
				</div>
				<div id="imdDescripcion" style="display:none; position: absolute;">
					<img src="{{url('imagenes\biblioteca\tomos\bejaminfranklin.jpg')}}" alt="...">
				</div>
				<div style="position: relative; top: -480px; left:380px;">
					<img src="{{url('imagenes\biblioteca\tomos\bajacalifornia.jpg')}}" alt="...">
					<img src="{{url('imagenes\biblioteca\tomos\bajacalifornia.jpg')}}" alt="..." style="display: none;">
				</div>
				<div class="col-md-1">
					<img src="{{url('imagenes\biblioteca\tomos\bejaminfranklin.jpg')}}" alt="...">
				</div>
				<div class="col-md-1">
					<img src="{{url('imagenes\biblioteca\tomos\cervantes.jpg')}}" alt="...">
				</div>
				<div class="col-md-1">
					<img src="{{url('imagenes\biblioteca\tomos\colegiomex.jpg')}}" alt="...">
				</div>
				<div class="col-md-1">
					<img src="{{url('imagenes\biblioteca\tomos\conevyt.jpg')}}" alt="...">
				</div>
				<div class="col-md-1">
					<img src="{{url('imagenes\biblioteca\tomos\congresounion.jpg')}}" alt="...">
				</div>
				<div class="col-md-1">
					<img src="{{url('imagenes\biblioteca\tomos\ecest.jpg')}}" alt="...">
				</div>
				<div class="col-md-1">
					<img src="{{url('imagenes\biblioteca\tomos\itam.jpg')}}" alt="...">
				</div>
				<div class="col-md-1">
					<img src="{{url('imagenes\biblioteca\tomos\iteso.jpg')}}" alt="...">
				</div>
				<div class="col-md-1">
					<img src="{{url('imagenes\biblioteca\tomos\mundial.jpg')}}" alt="...">
				</div>
				<div class="col-md-1">
				</div>
			</div>
			<div class="item">
				<div class="col-md-1">
				</div>
				<div class="col-md-1">
					<img src="{{url('imagenes\biblioteca\tomos\unamcienciastierra.jpg')}}" alt="...">
				</div>
				<div class="col-md-1">
					<img src="{{url('imagenes\biblioteca\tomos\unameduardogarcia.jpg')}}" alt="...">
				</div>
				<div class="col-md-1">
					<img src="{{url('imagenes\biblioteca\tomos\unamjorgecarpizo.jpg')}}" alt="...">
				</div>
				<div class="col-md-1">
					<img src="{{url('imagenes\biblioteca\tomos\tecmonterrey.jpg')}}" alt="...">
				</div>
				<div class="col-md-1">
				</div>
			</div>
			<div class="item">
				<div class="col-md-1">
				</div>
				<div class="col-md-1">
					<img src="{{url('imagenes\biblioteca\tomos\bajacalifornia.jpg')}}" alt="...">
				</div>
				<div class="col-md-1">
				</div>
			</div>
		  </div>

		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>
	</div>
</div>
@include('viewBiblioteca.menuBiblioteca')
@endsection
