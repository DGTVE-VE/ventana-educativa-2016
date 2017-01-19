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
		<map name="mapasea" id="mapasea">
			<area alt="Inicial" title="" href="{{url('educamedia/sea').'/'.$breadcrumbs.'/INICIAL/0'}}" onmouseover="resaltaImgSecu('sea','inicial')" onmouseout="normalImgSecu('sea','inicial')" shape="poly" coords="2,243,100,243,103,209,121,164,157,126,218,101,277,104,308,115,353,152,379,200,385,243,483,243,482,204,462,139,419,78,373,38,308,8,276,1,202,1,144,19,90,48,43,101,15,151,4,193" />
			<area alt="Avanzado" title="" href="{{url('educamedia/sea').'/'.$breadcrumbs.'/AVANZADO/0'}}" onmouseover="resaltaImgSecu('sea','avanzado')" onmouseout="normalImgSecu('sea','avanzado')" shape="poly" coords="1,245,100,245,108,287,129,328,156,355,191,376,244,387,280,379,321,363,354,332,379,287,387,244,483,244,479,295,455,363,412,416,369,452,319,472,275,482,206,483,142,466,86,432,41,382,11,321,3,278" />
		</map>
		<div class="contenedorAro">
			{{HTML::image('imagenes/mediateca/sea/niveles/niveles.png','sea niveles',['class'=>'posicionInicial img-responsive', 'id'=>'niveles'])}}
			{{HTML::image('imagenes/mediateca/sea/niveles/inicial.png','sea inicial',['class'=>'resaltaImg img-responsive', 'id'=>'inicialHover'])}}
			{{HTML::image('imagenes/mediateca/sea/niveles/avanzado.png','sea avanzado',['class'=>'resaltaImg img-responsive', 'id'=>'avanzadoHover'])}}
			
			{{HTML::image('imagenes/mediateca/sea/imgCentral/inicial.gif','sea Central',['class'=>' img-responsive iniImgCentro', 'id'=>'inicialCentro'])}}
			{{HTML::image('imagenes/mediateca/sea/imgCentral/avanzado.gif','sea Central',['class'=>' img-responsive iniImgCentro', 'id'=>'avanzadoCentro'])}}
			
			{{HTML::image('imagenes/mediateca/sea/niveles/imgMapa.png','sea',['class'=>'posicionMapa img-responsive', 'id'=>'seaMapa', 'usemap'=>'#mapasea'])}}
		</div>
	</div>
@include('viewMediateca.barraSociales')
@endsection
@section('pieMediateca')
@endsection