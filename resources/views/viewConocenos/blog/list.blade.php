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
    <div class="row fondoBlog">
        <!--inicia blog list-->
		<div class="col-md-12" style="padding:20px;"></div>
        <div class="col-md-6 col-md-offset-1">
			<div class="col-md-12" style="padding:20px;"></div>
            @foreach ($blogs as $blog)
            <div class="col-md-12 fondoBlanco">
				<div class="col-md-10 col-md-offset-1">
					<a href="{{url('conocenos/blog/$blog->id')}}"> <h2><strong>{{$blog->titulo}} </strong></h2></a>
				</div>
				<div class="col-md-10 col-md-offset-1">
					<?php
					$dt = new DateTime($blog->created_at);
					$date = $dt->format('m/d/Y');
					?>
					<h4>{{$date}}</h4>
				</div>
				<div class="col-md-10 col-md-offset-1">
					<a href="{{url("conocenos/blog/$blog->id")}}">
                        <img src="{{url ($blog->imagen)}}" style="width:100%">
                    </a>
				</div>
				<div class="col-md-10 col-md-offset-1">
					<h3> {{$colaboradores[$blog->colaborador_id]->nombre}}</h3>
                    {!!substr($blog->cuerpo, 0, 400)!!}...
				</div>
				<div class="col-md-10 col-md-offset-1">
					<a href="{{url('conocenos/blog/$blog->id')}}" class="pull-right"> Leer más...</a>
				</div>
				<div class="col-md-12" style="padding:10px;">
				</div>
			</div>
			<div class="col-md-12" style="padding:20px;">
			</div>
            @endforeach
            {!! $blogs->render() !!}
        </div>   
        <div class="col-md-4 col-md-offset-1 fondoPanelIzq">
			<div class="col-md-12" style="padding:10px;"></div>
			<div class="col-md-10 col-md-offset-1">
				<div class="col-md-12">
					<h3><em> lo más leído </em></h3>
				</div>
				{{--*/ $i=1; /*--}}
				@foreach ($leidos as $leido)
				<div class="col-md-2">
					<h1> <strong>{{ $i++ }} </strong></h1>
				</div>
				<div class="col-md-10">
					<h4> <a href="{{url('conocenos/blog/$leido->id')}}"> {{$leido->titulo}}</a> </h4>
				</div>
				<div class="col-md-12">
				</div>
				@endforeach
				<div class="col-md-12">
					<h3> <em>lo más reciente </em></h3>
				</div>
				{{--*/ $i=1; /*--}}
				@foreach ($recientes as $reciente)
				<div class="col-md-2">
					<h1> <strong>{{ $i++ }} </strong></h1>
				</div>
				<div class="col-md-10">
					<h4> <a href="{{url('conocenos/blog/$reciente->id')}}"> {{$reciente->titulo}}</a> </h4>
				</div>
				<div class="col-md-12">
				</div>
				@endforeach
				<div class="col-md-12">
					<h3> <em>lo más comentado </em></h3>
				</div>
				{{--*/ $i=1; /*--}}
				@foreach ($comentados as $comentado)
				<div class="col-md-2">
					<h1><strong> {{ $i++ }} </strong></h1>
				</div>
				<div class="col-md-10">
					<h4> <a href="{{url('conocenos/blog/$comentado->id')}}"> {{$comentado->titulo}}</a> </h4>
				</div>
				<div class="col-md-12">
				</div>
				@endforeach
				
            </div>
			<div class="col-md-12">
			</div>
            @if (Auth::guest ())
            @else
            @if (Auth::user()->is_researcher)
            <!--Agregar publicación-->
            <div class="panel-heading blogPanel col-md-10 col-md-offset-1 text-center">
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

    </div>

	{{--@include('viewConocenos.pie')--}}
<script>
	/*$('#barraNavPie').removeClass('posicionPie');
	$('#barraNavPie').addClass('navbar-fixed-bottom');
	$('.textoBlanco').css('color','white');*/
</script>
@endsection
<script src="{{asset('js/conocenos/jquery-3.1.1.min.js')}}"></script>
<script type="text/javascript">
$('#myTabs a').click(function (e) {
    e.preventDefault()
    $(this).tab('show')
});

</script>