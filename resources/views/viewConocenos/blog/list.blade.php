@section('titleConocenos')
Ventana Educativa / Conocenos
@stop
@extends('indexConocenos')
@section('menuConocenos')
@include('viewVentana.encabezadoVentana')
<script>
	$('#navegacionVentana').removeClass('navbar-default');
	$('#navegacionVentana').removeClass('menuVentana');
	$('#navegacionVentana').addClass('navbar-inverse');
</script>
@endsection
@section('cuerpoConocenos')
<style>
	.fondoBlog{
		background-image: url('/ventana-educativa-2016/public/imagenes/conocenos/blog/backBlog.jpg');
	}
	.fondoPanelIzq{
		background-color: #545454;
		min-height:100%;
		color: white;
	}
	h4 > a{
		color: white;
	}
	h4 > a:visited{
		color: white;
	}
	.fondoBlanco{
		background-color: white;
		-webkit-box-shadow: 9px 9px 0px -5px rgba(0,0,0,1);
		-moz-box-shadow: 9px 9px 0px -5px rgba(0,0,0,1);
		box-shadow: 9px 9px 0px -5px rgba(0,0,0,1);
	}
</style>
<div class="menuBlog">
    <a href="{{url('conocenos')}}" class="text-center">
        <h4 class="glyphicon glyphicon-home" style="color: white;"></h4><br/>
    </a>
</div>
    <div id="filaPrincipal" class="row fondoBlog">
        <!--inicia blog list-->
		<div class="col-xs-12 col-sm-12 col-md-12" style="padding:20px;"></div>
        <div class="col-xs-11 col-sm-7 col-md-6 col-md-offset-1">
			<div class="col-xs-12 col-sm-12 col-md-12" style="padding:20px;"></div>
            @foreach ($blogs as $blog)
            <div class="col-xs-12 col-sm-12 col-md-12 fondoBlanco">
				<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
				{{--*/ $ligaEntrada = 'conocenos/blog/'.$blog->id; /*--}}
					<a href="{{url($ligaEntrada)}}"> <h2><strong>{{$blog->titulo}} </strong></h2></a>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-md-offset-1">
					<?php
					$dt = new DateTime($blog->created_at);
					$date = $dt->format('m/d/Y');
					?>
					<h4>{{$date}}</h4>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
					{{--*/ $ligaEntrada = 'conocenos/blog/'.$blog->id; /*--}}
					<a href="{{url($ligaEntrada)}}">
                        <img src="{{url ($blog->imagen)}}" style="width:100%">
                    </a>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
					<h3> {{ App\Model\Conocenos\Users::whereid($blog->colaborador_id)->first()->name}}</h3>
                    {!!substr($blog->cuerpo, 0, 400)!!}...
				</div>
				<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
					{{--*/ $ligaEntrada = 'conocenos/blog/'.$blog->id; /*--}}
					<a href="{{url($ligaEntrada)}}" class="pull-right"> Leer más...</a>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12" style="padding:10px;">
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12" style="padding:20px;">
			</div>
            @endforeach
            {!! $blogs->render() !!}
        </div>
        <div id="panelIzquierdo" class="col-xs-12 col-sm-5 col-md-4 col-md-offset-1 fondoPanelIzq">
			<div class="col-xs-12 col-sm-12 col-md-12" style="padding:10px;"></div>
			<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<h3><em> lo más leído </em></h3>
				</div>
				{{--*/ $i=1; /*--}}
				@foreach ($leidos as $leido)
				<div class="col-xs-2 col-sm-2 col-md-2">
					<h1> <strong>{{ $i++ }} </strong></h1>
				</div>
				<div class="col-xs-10 col-sm-10 col-md-10">
					{{--*/ $ligaEntrada = 'conocenos/blog/'.$leido->id; /*--}}
					<h4> <a href="{{url($ligaEntrada)}}"> {{$leido->titulo}}</a> </h4>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12">
				</div>
				@endforeach
				<div class="col-xs-12 col-sm-12 col-md-12">
					<h3> <em>lo más reciente </em></h3>
				</div>
				{{--*/ $i=1; /*--}}
				@foreach ($recientes as $reciente)
				<div class="col-xs-2 col-sm-2 col-md-2">
					<h1> <strong>{{ $i++ }} </strong></h1>
				</div>
				<div class="col-xs-10 col-sm-10 col-md-10">
					{{--*/ $ligaEntrada = 'conocenos/blog/'.$reciente->id; /*--}}
					<h4> <a href="{{url($ligaEntrada)}}"> {{$reciente->titulo}}</a> </h4>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12">
				</div>
				@endforeach
				<div class="col-xs-12 col-sm-12 col-md-12">
					<h3> <em>lo más comentado </em></h3>
				</div>
				{{--*/ $i=1; /*--}}
				@foreach ($comentados as $comentado)
				<div class="col-xs-2 col-sm-2 col-md-2">
					<h1><strong> {{ $i++ }} </strong></h1>
				</div>
				<div class="col-xs-10 col-sm-10 col-md-10">
					{{--*/ $ligaEntrada = 'conocenos/blog/'.$comentado->id; /*--}}
					<h4> <a href="{{url($ligaEntrada)}}"> {{$comentado->titulo}}</a> </h4>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12">
				</div>
				@endforeach

            </div>
			<div class="col-xs-12 col-sm-12 col-md-12">
			</div>
            @if (Auth::guest ())
            @else
            @if (Auth::user()->is_researcher)
            <!--Agregar publicación-->
            <div class="col-xs-10 col-sm-10 panel-heading blogPanel col-md-10 col-md-offset-1 text-center">
                <h4 class="panel-title">
                    <a href="{{url('conocenos/blog/create')}}">
                        Agregar publicación
                    </a>
                </h4>
            </div>
            @endif
            @endif
        </div>
        <!--fin blog list-->
		{{--@include('viewConocenos.pie')--}}
    </div>
	<div class="row"style="background-color:black; margin:0;">
		@include('viewConocenos.pie')
	</div>
	
<script>
	$('#barraNavPie').removeClass('navbar navbar-inverse posicionPie medidasPie');
	$('.textoBlanco').css('color','white');
	$('#barraNavPie').css('color','white');
	$(window).load(function(){
		if($(window).width() > 767){
			var alturaPrincipal = $('#filaPrincipal').css('height');
			$('#panelIzquierdo').css('height',alturaPrincipal);
		}
	});
</script>
@endsection
<script src="{{asset('js/conocenos/jquery-3.1.1.min.js')}}"></script>
<script type="text/javascript">
$('#myTabs a').click(function (e) {
    e.preventDefault()
    $(this).tab('show')
});

</script>
