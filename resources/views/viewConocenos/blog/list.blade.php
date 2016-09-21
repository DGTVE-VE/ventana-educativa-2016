@section('titleConocenos')
Ventana Educativa / Conocenos
@stop
@extends('indexConocenos')
@section('menuConocenos')
@include('viewConocenos.encabezado')
@endsection
@section('cuerpoConocenos')


<div class="container-fluid sinPaddingLateral">
    <div id="fullpage">
        <div class="col-md-1"></div>
        <div class="col-md-7 txtBlogRed">
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
            <h4><strong>Tags</strong></h4>
            <div class="bordeBlog">
                <!--Aquí las tags-->
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
        <div class="col-md-1"></div>
    </div>
</div>
<!-- /#wrapper -->
</div>

<script>
    $('#myTabs a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
    });
</script>
@endsection
@include('viewConocenos.pie')