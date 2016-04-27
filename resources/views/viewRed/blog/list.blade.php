@extends ('indexRed')
@section('menuRedmite')
    @include ('viewRed.seccionheader')
@endsection
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
    $('#buscar').css('visibility', 'hidden');
    $('#iconoBuscar').css('visibility', 'hidden');
    $('#navegacionVentana').removeClass('menuVentana');
    $('#navegacionVentana').addClass('menuVentanaRedmite');
    $('#navegacionVentana').addClass('navbar-inverse');
    $('#navegacionVentana').removeClass('navbar-fixed-top');
    $('#navegacionVentana').css('height', '55px');
    $('#mueveTablaApps').removeClass('mueveTabla');
    $('#mueveTablaApps').addClass('tablaMenuApps');
    $('#menuVentanaRegistro').removeClass('fondoRegistro');
    $('#menuVentanaRegistro').addClass('fondoRegistroMedia');
</script>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-7 txtBlogRed">
        @foreach ($blogs as $blog)
        <br>
        <div class="row bordeBlog text-justify">
            <br>
            <div class="col-md-3">
                <a href="{{url("redmite/blog/$blog->id")}}">
                    <img src="{{url ($blog->imagen)}}" height="100" width="150">
                </a>
<!--                <br><br>
                <a href="" class="TextoNegro"><i class="fa fa-commenting-o fa-2x pull-left" aria-hidden="true" title="Comentar publicación" data-toggle="tooltip" data-placement="bottom"></i></a>
                <a href="" class="btn btn-facebook btn-sm  pull-right"><i title="Compartir en Facebook" data-toggle="tooltip" data-placement="bottom" class="fa fa-facebook"></i></a>
                <a href="" class="btn btn-twitter btn-sm pull-right"><i title="Compartir en Twitter" data-toggle="tooltip" data-placement="bottom" class="fa fa-twitter"></i></a>  
                -->
            </div>
            <div class="col-md-9">
                <h3><a href="{{url("redmite/blog/$blog->id")}}"> {{$blog->titulo}} </a></h3>
                <?php
                $dt = new DateTime($blog->created_at);
                $date = $dt->format('m/d/Y');
                ?>
                {{$date}}
                <h3> {{$colaboradores[$blog->colaborador_id]->nombre}}</h3>
                {!!substr($blog->cuerpo, 0, 200)!!}...
                <a href="{{url("redmite/blog/$blog->id")}}" class="pull-right"> Leer más...</a>
            </div> 
            <br>
        </div>
        @endforeach
        {!! $blogs->render() !!}
    </div>   
    <div class="col-md-3 txtBlogRed">
        <br>
        <div class="panel-group bordeBlog"><br>
            <div class="panel panel-default">
                <div class="panel-heading blogPanel">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#leidos">
                            Más leído
                            <i class="fa fa-plus pull-right" aria-hidden="true"></i>                            
                        </a>
                    </h4>
                </div>
                <br>
                <div id="leidos" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ol>
                            @foreach ($leidos as $leido)
                            <li> <a href="{{url("redmite/blog/$leido->id")}}"> {{$leido->titulo}}</a></li>                    
                            @endforeach                        
                        </ol>
                    </div>
                </div>                
                <!--recientes-->
                <div class="panel-heading blogPanel">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#recientes">
                            Más reciente
                            <i class="fa fa-plus pull-right" aria-hidden="true"></i>                            
                        </a>
                    </h4>
                </div>
                <br>
                <div id="recientes" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ol>
                            @foreach ($recientes as $reciente)
                            <li> <a href="{{url("redmite/blog/$reciente->id")}}"> {{$reciente->titulo}}</a></li>
                            @endforeach 
                        </ol>
                    </div>
                </div>
                <!--comentados-->
                <div class="panel-heading blogPanel">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#comentados">
                            Más comentado
                            <i class="fa fa-plus pull-right" aria-hidden="true"></i>
                        </a>
                    </h4>
                </div>
                <div id="comentados" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ol>
                            @foreach ($comentados as $comentado)
                            <li> <a href="{{url("redmite/blog/$comentado->id")}}"> {{$comentado->titulo}}</a></li>
                            @endforeach                       
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <h4><strong>Tags</strong></h4>
        <div class="bordeBlog">
           <!--Aquí las tags-->
        </div>
    </div>
    <div class="col-md-1"></div>
</div>
<script>
    $('#myTabs a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
    });
</script>
@include('viewRed.seccionpie')
@stop