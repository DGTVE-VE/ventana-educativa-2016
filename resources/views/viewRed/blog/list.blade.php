@extends ('indexRed')
@include ('viewRed.seccionheader')
@section ('cuerpoRedmite')
<style>
	.tablaMenuApps{
	    position: fixed; right:3%;
		box-shadow: 5px 5px 1px rgba(0, 0, 0, .2);
		background:rgba(0, 0, 0, .7);
	}
	.fondoRegistroMedia{
		background:rgba(0, 0, 0, .7);
		width:320px;
		height:230px;
	}
</style>
<script>
	$('#buscar').css('visibility','hidden');
	$('#iconoBuscar').css('visibility','hidden');
	$('#navegacionVentana').removeClass('menuVentana');
	$('#navegacionVentana').addClass('menuVentanaRedmite');
	$('#navegacionVentana').addClass('navbar-inverse');
	$('#navegacionVentana').removeClass('navbar-fixed-top');
	$('#navegacionVentana').css('height','55px');
	$('#mueveTablaApps').removeClass('mueveTabla');
	$('#mueveTablaApps').addClass('tablaMenuApps');
	$('#menuVentanaRegistro').removeClass('fondoRegistro');
	$('#menuVentanaRegistro').addClass('fondoRegistroMedia');
</script>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-6">
        @foreach ($blogs as $blog)

        <div class="row">
            <div class="col-md-3">
                <a href="{{url("redmite/blog/$blog->id")}}">
                    <img src="{{url ($blog->imagen)}}" height="90" width="140">
                </a>
            </div>
            <div class="col-md-6">
                <h3><a href="{{url("redmite/blog/$blog->id")}}"> {{$blog->titulo}} </a></h3>
                <?php
                $dt = new DateTime($blog->created_at);
                $date = $dt->format('m/d/Y');
                ?>
                {{$date}}
                <h3> {{$colaboradores[$blog->colaborador_id]->nombre}}</h3>
                {!!substr($blog->cuerpo, 0, 200)!!}...
                <a href="{{url("redmite/blog/$blog->id")}}"> Leer mas</a>
            </div>            
        </div>

        <hr>
        @endforeach
        {!! $blogs->render() !!}
    </div>
    <hr>
    <div class='col-md-4'>
        <ul class="nav nav-tabs" id='myTabs'>
            <li class="active">
                <a data-toggle="tab" href="#leidos">Más leído</a></li>
            <li><a data-toggle="tab" href="#recientes">Más reciente</a></li>
            <li><a data-toggle="tab" href="#comentados">Más comentado</a></li>
        </ul>
        <div class="tab-content">
            <div id="leidos" class="tab-pane fade in active">
                <ul>
                    @foreach ($leidos as $leido)
                    <li> <a href="{{url("redmite/blog/$leido->id")}}"> {{$leido->titulo}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div id="recientes" class="tab-pane fade">
                <ul>
                    @foreach ($recientes as $reciente)
                    <li> <a href="{{url("redmite/blog/$reciente->id")}}"> {{$reciente->titulo}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div id="comentados" class="tab-pane fade">
                <ul>
                    @foreach ($comentados as $comentado)
                    <li> <a href="{{url("redmite/blog/$comentado->id")}}"> {{$comentado->titulo}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
<script>
    $('#myTabs a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
      });
</script>
    

@include('viewRed.seccionpie')
@stop