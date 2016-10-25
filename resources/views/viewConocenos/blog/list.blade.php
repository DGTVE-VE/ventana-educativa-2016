@section('titleConocenos')
Ventana Educativa / Conocenos
@stop
@extends('indexConocenos')
@section('menuConocenos')
@include('viewConocenos.encabezado')
@endsection
@section('cuerpoConocenos')
<div class="menuBlog"> 
    <a href="{{url('conocenos')}}" class="text-center">
        <h4 class="glyphicon glyphicon-home" style="color: white;"></h4><br/>
    </a>
</div>
<div class="container">
    <div class="row">
        <!--inicia blog list-->
        <div class="col-md-9 txtBlogRed">
            @foreach ($blogs as $blog)
            <br>
            <div class="row bordeBlog text-justify">
                <br>
                <div class="col-md-3">
                    <a href="{{url("conocenos/blog/$blog->id")}}">
                        <img src="{{url ($blog->imagen)}}" height="100" width="150">
                    </a>
                </div>
                <div class="col-md-9">
                    <h3><a href="{{url("conocenos/blog/$blog->id")}}"> {{$blog->titulo}} </a></h3>
                    <?php
                    $dt = new DateTime($blog->created_at);
                    $date = $dt->format('m/d/Y');
                    ?>
                    {{$date}}
                    <h3> {{$colaboradores[$blog->colaborador_id]->nombre}}</h3>
                    {!!substr($blog->cuerpo, 0, 200)!!}...
                    <a href="{{url("conocenos/blog/$blog->id")}}" class="pull-right"> Leer más...</a>
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
                                <li> <a href="{{url("conocenos/blog/$leido->id")}}"> {{$leido->titulo}}</a></li>                    
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
                                <li> <a href="{{url("conocenos/blog/$reciente->id")}}"> {{$reciente->titulo}}</a></li>
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
                                <li> <a href="{{url("conocenos/blog/$comentado->id")}}"> {{$comentado->titulo}}</a></li>
                                @endforeach                       
                            </ol>
                        </div>
                    </div>                 
                </div>
            </div>
            <br>
            @if (Auth::guest ())
            @else
            @if (Auth::user()->is_researcher)
            <!--Agregar publicación-->
            <div class="panel-heading blogPanel col-md-6 text-center">
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
</div>
@include('viewConocenos.pie')
<script>
	$('#barraNavPie').removeClass('posicionPie');
	$('#barraNavPie').addClass('navbar-fixed-bottom');
	$('.textoBlanco').css('color','white');
</script>
@endsection
<script src="{{asset('js/conocenos/jquery-3.1.1.min.js')}}"></script>
<script type="text/javascript">
$('#myTabs a').click(function (e) {
    e.preventDefault()
    $(this).tab('show')
});

</script>