@section('titleConocenos')
Ventana Educativa / Conocenos
@stop
@extends('indexConocenos')
@section('menuConocenos')
@include('viewVentana.encabezadoVentana')
<script>
	$('#imagenLogoVentana').attr('src','{{url("imagenes/ventana/encabezado/logoNegro/logoventana.png")}}');
	$('#iconoManuApps').attr('src','{{url("imagenes/ventana/encabezado/logoNegro/iconoApps.png")}}');
</script>
@endsection
@section('cuerpoConocenos')
<div class="menuBlog"> 
    <a href="{{url('conocenos')}}" class="text-center">
        <h4 class="glyphicon glyphicon-home" style="color: black;"></h4><br/>
    </a>
</div>
<div class="row" style="position:relative; top:50px;">
    <div class='col-md-2'></div>
    <div class='col-md-5 txtBlogRed'>
        <br>
        <div class="col-md-12"><img src="{{url ($blog->imagen)}}" class="img-responsive center-block"></div>                
        <h3 class="text-center"> {{$blog->titulo}}</h3>
        <?php
        $dt = new DateTime($blog->created_at);
        $date = $dt->format('m/d/Y');
        ?>
        {{$date}}
        <h4 class="text-left">Por: {{$colaborador->user->name}}</h4>
        <div class="text-justify">
            {!!$blog->cuerpo!!}
        </div>
        <h3>Conversación de expertos </h3>
        @if(Auth::check())
        @if (Auth::user ()->is_researcher)
        <form action="{{url ('conocenos/blog/comment')}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />    
            <input type="hidden" name="id_colaborador" value="{{$colaborador->id}}" />    
            <input type="hidden" name="id_blog" value="{{$blog->id}}" />    
            <input type="hidden" name="id_comment" value="0" />            
            <textarea name="comment"></textarea>
            <button type="submit" class="btn btn-default"> Comentar </button>
        </form>
        @endif
        @endif
        <div>
            @foreach ($blog->comments as $comment)
            @if ($comment->id_comment == 0) 
            <div class="fondo_Claro text-justify">
                @include('viewConocenos.blog.comments', ['comment'=>$comment])  
            </div>
            <hr>
            @endif
            @endforeach 
        </div>
    </div>
    <div class='col-md-4 txtBlogRed'>
        <br>
        <!--Acerca de-->
        <div class="panel-heading blogPanel">
            <h4 class="panel-title">
                <a data-toggle="collapse" href="#acercade">
                    Acerca del autor
                    <i class="fa fa-plus pull-right" aria-hidden="true"></i>
                </a>
            </h4>
        </div>
        <div id="acercade" class="panel-collapse collapse">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-2"><img src="{{asset($colaborador->url_foto)}}" width="50" height="50"></div>
                    <div class="col-md-10"><h5>{{$colaborador->user->name}}</h5></div>
                    <div class="col-md-10"><h5>{{$colaborador->puesto}}</h5></div>
                    <div class="col-md-12"><p class="text-justify">{{$colaborador->resena}}</p></div>
                </div>
            </div>
        </div>
        <div>
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
                    <div id="leidos" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ol>
                                @foreach ($leidos as $leido)
                                <li> <a href="{{url("conocenos/blog/$leido->id")}}"> {{$leido->titulo}}</a></li>                    
                                @endforeach                        
                            </ol>
                        </div>
                    </div>
                    <br>
                    <!--recientes-->
                    <div class="panel-heading blogPanel">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#recientes">
                                Más reciente
                                <i class="fa fa-plus pull-right" aria-hidden="true"></i>                            
                            </a>
                        </h4>
                    </div>
                    <div id="recientes" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ol>
                                @foreach ($recientes as $reciente)
                                <li> <a href="{{url("conocenos/blog/$reciente->id")}}"> {{$reciente->titulo}}</a></li>
                                @endforeach 
                            </ol>
                        </div>
                    </div>
                    <br>
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
        </div>
    </div>
</div>
@include('viewConocenos.pie')
<script>
	$('#barraNavPie').removeClass('posicionPie');
	$('#barraNavPie').css('bottom','-20px');
	$('.textoBlanco').css('color','white');
</script>
@endsection
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="{{asset ('tinymce/tinymce.min.js')}}"></script>
<!-- /TinyMCE -->
<script>
    $('.btn-responder').click(function () {
        console.log('si');
        console.log($(this).next());
        $(this).next().slideToggle();
    });
    tinymce.init({        
        selector: 'textarea',
        language: 'es_MX'
    });
</script>
