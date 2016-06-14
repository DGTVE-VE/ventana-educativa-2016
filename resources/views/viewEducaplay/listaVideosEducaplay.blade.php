{{--*/ 	use App\Http\Controllers\EducaplayController; /*--}}
@section('titleEducaplay')
Educaplay
@stop
@extends('indexEducaplay')
@section('menuEducaplay')
	@include('viewVentana.encabezadoVentana')
	<script src="{{asset ('js/bootstrap-rating-input.min.js')}}"></script>
	<script>
		$('#buscar').css('display','none');
		$('#iconoBuscar').css('display','none');
		$('#navegacionVentana').css('height','55px');
		$(window).scroll(function(){
			var scroll_v = this.pageYOffset;
			if(scroll_v > 10){
				$('#navegacionVentana').css('background','rgba(0, 0, 0, .3)');
			}
			if(scroll_v < 10){
				$('#navegacionVentana').css('background','transparent');
			}
		});

		function refrescaRating(valRating){
			$("#divRating").empty();
			$("#divRating").append('<input type="number" name="rating" id="star-rating" data-icon-lib="fa" data-active-icon="fa-star" data-inactive-icon="fa-star-o" onchange="guardaRating(this.value)" value="'+ parseInt(valRating) +'"/>');
			$("#star-rating").rating({value: parseInt(valRating)});
		}		
		function cargaRating(id_video){
				$.ajax({
					method: "POST",
					url: "{{url('educaplay/queryRate')}}",
					data: { video_id: id_video, _token:"{{csrf_token()}}" },
					error: function(ts) { 
						console.log (ts.responseText); 
					}})
					.done(function( msg ) {
						refrescaRating(msg);
					});
		}
		
		function muestraVideo(urlVideo, idVideo){
			var direccionVideo = "https://www.youtube.com/embed/" + urlVideo + "?autoplay=1";
			cargaRating(idVideo);
			$('#episodio7').attr('src',direccionVideo);
			$('#episodio8').css('display','block');
			$('#episodio7').attr('name',idVideo)
		}
		function guardaRating(CalifRating){
			var idVideo = $('#episodio7').attr('name');
			$.ajax({
					method: "POST",
					url: "{{url('educaplay/rate')}}",
					data: { video_id: idVideo, rating: CalifRating, _token:"{{csrf_token()}}" },
					error: function(ts) {
						console.log (ts.responseText);
					}})
					.done(function( msg ) {
						console.log ( "Data Saved: " + msg + ' ' + idVideo);
						//loadComments ($("#video-id").val());
					});

		}
		$(document).ready( function (){

			 /*$('#star-rating').change (function (){
							});*/
			/*function loadComments (id){
				var urlget = "{{url('educamedia/telesecundaria/comments')}}";
				var _url = urlget + '/'+id;
				 $.ajax({
					method: "GET",
					url: _url,   
					error: function(ts) { 
						console.log (ts.responseText); 
					}})
					.done(function( msg ) {
						console.log ('Comentarios cargados: '+id);
						$("#comentarios").html(msg)
	//                    console.log ( "Data Saved: " + msg );
					});
			}*/
		});
	</script>
<style>
	.estiloTxt{
		color: white;
	}
	.txtSobreImg{
		 position:absolute; top:45px; left:10px; width:90%;
	}
	.txtTitulo{
		color:white; font-size:26px;
	}
	.fondoTrans{
		background-color:transparent; border:none;
	}
	.cambiaPadding{
		padding:0px;
	}
	.reduceAnchoFlecha{
		width:3%;
	}
	.thumbnailVertical{
		width: 260px;
	}
	.margenesFila{
		padding-right:35px; padding-left:35px; margin-top:10px; margin-bottom:30px;
	}
	.tamanoIconoMas{
		width:40%;
		position:relative;
		top: 30px;
	}
	.marcoVideo{
		width:650px; height:450px;
	}
	.efectoLento{
		display:none;
		transition: all 3s ease;
		-webkit-transition: all 3s ease;
		-moz-transition: all 3s ease;
		-o-transition: all 3s ease;
	}
</style>
@include('viewEducaplay.menuEducaplay')
@endsection
@section('cuerpoEducaplay')
	<div class="row" style="height:100px;">
	</div>
	{{--*/ $imprimeTitulo=1; /*--}}
	@foreach ($episodiosSerie as $serie)
		@if($imprimeTitulo===1)
			<div class="row margenesFila">
				<div class="col-md-12 col-lg-12">
					<p class="txtTitulo">{{$serie->titulo_serie}}</p>
				</div>
			</div>
			<div class="row margenesFila">
			@if($urlVideo=='0')
				<div id="episodio8" class="col-md-6 col-md-offset-3 efectoLento">
				{{--*/ $srcUrlVideo = ""; /*--}}
			@else
				<div id="episodio8" class="col-md-6 col-md-offset-3">
				{{--*/ $srcUrlVideo = "https://www.youtube.com/embed/".$urlVideo."?autoplay=1";/*--}}
				<input type="hidden" id="VideoReproduce" value="{{EducaplayController::consultaRatingXURL($urlVideo)}}"/>
			@endif
					<div class="col-md-12">
						<iframe id="episodio7" src="{{$srcUrlVideo}}" frameborder="0" class="marcoVideo">
						</iframe>
					</div>
					<div class="col-md-2">
					@if(Auth::check ())
						<div id="divRating" class="pull-right" style="color:white;">
							<input type="number" name="rating" id="star-rating" class="" data-icon-lib="fa" data-active-icon="fa-star" data-inactive-icon="fa-star-o" onchange="guardaRating(this.value)"/>
						</div>
						<script>
							var tmpRating = $('#VideoReproduce').val();
							refrescaRating(tmpRating);
						</script>
					@endif
					</div>
				</div>
			</div>
			<div class="row margenesFila">
		@endif
				<div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 cambiaPadding">
					<div class="thumbnail fondoTrans">
						<img src="http://img.youtube.com/vi/{{ $serie->url_video}}/2.jpg" class='item-a' style="height:150px; cursor:pointer;" onclick="muestraVideo('{{$serie->url_video}}','{{$serie->id}}')"/>
						<div class="caption estiloTxt">
							<h4 class="estiloTxt"> Temporada: {{$serie->temporada}} Episodio: {{$serie->capitulo}}</h4>
							<span class="estiloTxt">{{$serie->sinopsis}}</span><br>
						</div>
					</div>
				</div>
		@if($imprimeTitulo % 6 === 0 && $imprimeTitulo !== 0)
				</div>
			<div class="row margenesFila">
		@endif
			{{--*/ $imprimeTitulo++; /*--}}
	@endforeach
			</div>
@endsection