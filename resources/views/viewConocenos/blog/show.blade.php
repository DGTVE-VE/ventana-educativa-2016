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
        background-image: url({{url('imagenes/conocenos/blog/backBlog.jpg')}});
        }
        .fondoPanelIzq{
            background-color: #545454;
            color: white;
        }
        p > a{
            color: white;
        }
        p > a:visited{
            color: white;
        }
        .fondoBlanco{
            background-color: white;
            -webkit-box-shadow: 9px 9px 0px -5px rgba(0,0,0,1);
            -moz-box-shadow: 9px 9px 0px -5px rgba(0,0,0,1);
            box-shadow: 9px 9px 0px -5px rgba(0,0,0,1);
        }
        #navegacionventana{margin-bottom: 0 !important;}
        .cuerpoBlog{ width: 100%; }
        
    </style>
    <div class="nav-bar "> 
        <a href="{{url('conocenos')}}" class="text-left">
            <h4 class="glyphicon glyphicon-home" style="color: black;"></h4><br/>
        </a>
    </div>
    <div class="container-fluid">
        <div id="filaPrincipal" class="row fondoBlog">
            <div class="col-md-7 fondoBlanco txtBlogRed">
                <div class="center-block">
                    <img src="{{url ($blog->imagen)}}" class="img-responsive center-block">
                </div>
                <div class="col-md-11 col-md-offset-1">
                    <h3 class="text-center"> {{$blog->titulo}}</h3>
                    <?php
                    $dt = new DateTime($blog->created_at);
                    $date = $dt->format('m/d/Y');
                    ?>
                    {{$date}}
                    <h4 class="text-left">Por: {{$colaborador->user->name}}</h4>
                    <div class="text-justify cuerpoBlog">
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
            </div>
            </div>
            <div id="panelIzquierdo" class="col-md-4 pull-right fondoPanelIzq">
                <!--<div class='col-md-12' style="padding:50px;"></div>-->
                <!--<div class="col-md-10 col-md-offset-1">-->
                <div class="col-md-12">
                    <p><a href="{{url('conocenos/blog')}}"><i class="fa fa-arrow-left" aria-hidden="true"></i>  Regresar</a></p>
                </div>
                <div class="col-md-12">
                    <h3><em>  Acerca del autor </em></h3>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="col-xs-2 col-sm-2 col-md-2"><img src="{{asset($colaborador->url_foto)}}" width="50" height="50"></div>
                    <div class="col-xs-10 col-sm-10 col-md-10"><h5>{{$colaborador->user->name}}</h5></div>
                    <div class="col-xs-10 col-sm-10 col-md-10"><h5>{{$colaborador->puesto}}</h5></div>
                    <div class="col-xs-12 col-sm-12 col-md-12"><p class="text-justify">{{$colaborador->resena}}</p></div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <hr>
                    <h3><em> lo más leído </em></h3>
                </div>
                {{--*/ $i=1; /*--}}
                @foreach ($leidos as $leido)
                <div class="col-xs-2 col-sm-2 col-md-2">
                    <h2> <strong>{{ $i++ }} </strong></h2>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10">
                    {{--*/ $ligaEntrada = 'conocenos/blog/'.$leido->id; /*--}}
                    <p> <a href="{{url($ligaEntrada)}}"> {{$leido->titulo}}</a> </p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <hr>
                </div>
                @endforeach
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <h3> <em>lo más reciente </em></h3>
                </div>
                {{--*/ $i=1; /*--}}
                @foreach ($recientes as $reciente)
                <div class="col-xs-2 col-sm-2 col-md-2">
                    <h2> <strong>{{ $i++ }} </strong></h2>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10">
                    {{--*/ $ligaEntrada = 'conocenos/blog/'.$reciente->id; /*--}}
                    <p> <a href="{{url($ligaEntrada)}}"> {{$reciente->titulo}}</a> </p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <hr>
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
                    <p> <a href="{{url($ligaEntrada)}}"> {{$comentado->titulo}}</a> </p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <hr>
                </div>
                @endforeach

                <!--</div>-->
                <!--            <div class="col-xs-12 col-sm-12 col-md-12">
                            </div>-->
                @if (Auth::guest ())
                @else
                @if (Auth::user()->is_researcher)
                <!--Agregar publicación-->
                <div class="panel-heading blogPanel">
                    <h4 class="panel-title text-center">
                        <a style="color:white;" href="{{url('conocenos/blog/create')}}">
                            agregar publicación
                        </a>
                    </h4>
                </div>
                @endif
                @endif 
            </div>
        </div>
       
         

        <script>
            $('#barraNavPie').removeClass('navbar navbar-inverse posicionPie medidasPie');
            $('.textoBlanco').css('color', 'white');
            $('#barraNavPie').css('color', 'white');
            $(window).load(function () {
                if ($(window).width() > 767) {
                    var alturaPrincipal = $('#filaPrincipal').css('height');
                    $('#panelIzquierdo').css('height', alturaPrincipal);
                }
            });
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

        <div class="nav-bar navbar-fixed-bottom" style="background-color: black;">@include('viewConocenos.pie')</div>