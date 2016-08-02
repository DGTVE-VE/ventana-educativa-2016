@section('titleRedmite')
Administracion Contenido
@stop
@extends('indexRed')
@section('menuRedmite')
@include('viewRed.seccionheader')
@endsection
@section('cuerpoRedmite')
<style>
	.opcionMenu{
		cursor: pointer;
	}
</style>
	<div class="row">
		<div class="col-md-12 text-center bg-info">
			<h4> ADMINISTRACION DE CONTENIDO EN REDMITE </h4>
		</div>
	</div>
    <div class="row">
		<div class="col-md-5 col-md-offset-3">
			<div class="dropdown">
				<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Proyectos
				<span class="caret"></span></button>
				<ul class="dropdown-menu">
					<li><span class="opcionMenu" onclick="muestraProyectos()">Alta</span></li>
					<li><span class="opcionMenu" onclick="muestraProyectos()">Baja</span></li>
					<li><span class="opcionMenu" onclick="muestraProyectos()">Modificacion</span></li>
				</ul>
			</div>
		</div>
		<div class="col-md-3">
			<div class="dropdown">
				<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Publicaciones
				<span class="caret"></span></button>
				<ul class="dropdown-menu">
					<li><span class="opcionMenu" onclick="muestraPublicaciones()">Alta</span></li>
					<li><span class="opcionMenu" onclick="muestraPublicaciones()">Baja</span></li>
					<li><span class="opcionMenu" onclick="muestraPublicaciones()">Modificacion</span></li>
				</ul>
			</div>
		</div>
    </div>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<div id="divFormulario"> </div>
		</div>
	</div>
@stop
	<script>
		function muestraProyectos() {
			var urlget = "{{url('redmite/administra/proyecto')}}";
			//var _url = urlget + '/' + id;
			$.ajax({
				method: "GET",
				//url: _url,
				url: urlget,
				error: function (ts) {
					console.log(ts.responseText);
				}})
				.done(function (msg) {
					//console.log('Comentarios cargados: ' + id);
					$("#divFormulario").html(msg);
					//                    console.log ( "Data Saved: " + msg );
				});
		}
		function muestraPublicaciones() {
			var urlget = "{{url('redmite/administra/publicacion')}}";
			//var _url = urlget + '/' + id;
			$.ajax({
				method: "GET",
				//url: _url,
				url: urlget,
				error: function (ts) {
					console.log(ts.responseText);
				}})
				.done(function (msg) {
					//console.log('Comentarios cargados: ' + id);
					$("#divFormulario").html(msg);
					//                    console.log ( "Data Saved: " + msg );
				});
		}
	</script>