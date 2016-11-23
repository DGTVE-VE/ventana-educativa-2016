@section('titleMediateca')
    Educamedia
@stop
@extends('indexMediateca')
@section('menuMediateca')
	@include('viewMediateca.encabezadoMediateca')
@endsection
@section('cuerpoMediateca')
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" style="padding:4%">
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center textoTitulo">
		<p id="parrafoBreadcrumb"> </p><br>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<map name="seaGrados" id="seaGrados">
			<area alt="Cálculo y resolución" href="{{url('educamedia/sea/calculo')}}" onmouseover="resaltaImgSecu('sea', 'calculo')" onmouseout="normalImgSecu('sea', 'calculo')" title="" shape="poly" coords="191,6,213,106,249,102,275,106,304,116,336,138,364,168,378,203,381,216,482,195,464,135,428,84,391,48,337,18,284,4,276,3,212,2"/>
			<area alt="Salud y ambiente" href="{{url('educamedia/sea/salud')}}" onmouseover="resaltaImgSecu('sea', 'salud')" onmouseout="normalImgSecu('sea', 'salud')" title="" shape="poly" coords="381,218,481,197,486,220,486,268,477,317,453,368,420,412,370,454,296,481,274,381,307,370,348,337,372,299,384,261"/>
			<area alt="familia, comunidad y sociedad" href="{{url('educamedia/sea/familia')}}" onmouseover="resaltaImgSecu('sea', 'familia')" onmouseout="normalImgSecu('sea', 'familia')" title="" shape="poly" coords="274,382,296,481,264,486,205,485,156,472,95,436,55,400,27,356,7,298,108,275,126,322,153,352,189,374,224,384"/>
			<area alt="Lengua y comunicación" href="{{url('educamedia/sea/lengua')}}" onmouseover="resaltaImgSecu('sea', 'lengua')" onmouseout="normalImgSecu('sea', 'lengua')" title="" shape="poly" coords="106,275,6,296,1,264,2,212,16,159,36,115,63,78,100,45,141,22,192,5,213,105,172,119,129,153,113,186,101,226"/>
		</map>
		<div class="contenedorAro">
			{{HTML::image('imagenes/mediateca/sea/Inicio/materia.png','sea Materias',['class'=>'posicionInicial img-responsive','id'=>'seaInicio'])}}
			{{HTML::image('imagenes/mediateca/sea/Inicio/calculoHover1.png','calculo y resolucion',['class'=>'resaltaImg img-responsive', 'id'=>'calculoHover'])}}
			{{HTML::image('imagenes/mediateca/sea/Inicio/saludHover1.png','Salud y ambiente',['class'=>'resaltaImg img-responsive', 'id'=>'saludHover'])}}
			{{HTML::image('imagenes/mediateca/sea/Inicio/familiaHover1.png','Familia, comunidad y sociedad',['class'=>'resaltaImg img-responsive', 'id'=>'familiaHover'])}}
			{{HTML::image('imagenes/mediateca/sea/Inicio/lenguaHover1.png','Lengua y comunicación',['class'=>'resaltaImg img-responsive', 'id'=>'lenguaHover'])}}
			{{HTML::image('imagenes/mediateca/sea/iconoCentral/centralPrimero.png','Telesecundaria central Primero',['class'=>'imgTelesecCentro', 'id'=>'primerGradoCentro'])}}
			{{HTML::image('imagenes/mediateca/sea/iconoCentral/centralSegundo.png','Telesecundaria central Segundo',['class'=>'imgTelesecCentro', 'id'=>'segundoGradoCentro'])}}
			{{HTML::image('imagenes/mediateca/sea/iconoCentral/centralTercero.png','Telesecundaria central Tercero',['class'=>'imgTelesecCentro', 'id'=>'tercerGradoCentro'])}}
			{{HTML::image('imagenes/mediateca/sea/Inicio/imgMapa.png','Materias SEA',['class'=>'posicionMapa img-responsive', 'id'=>'seaAreas', 'usemap'=>'#seaGrados'])}}
		</div>
	</div>
	 @include('viewMediateca.barraSociales')
@endsection
@section('pieMediateca')

@endsection