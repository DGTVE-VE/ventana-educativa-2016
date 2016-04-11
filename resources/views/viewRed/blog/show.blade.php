@extends ('indexRed')

@section ('cuerpoRedmite')	
<div class="row">
    <div class='col-md-2'></div>
    <div class='col-md-5'>
        <h1> {{$colaborador->nombre}}</h1>
        <h1> {{$blog->titulo}}</h1>
        <?php
        $dt = new DateTime($blog->created_at);
        $date = $dt->format('m/d/Y');
        ?>
        {{$date}}
        
        <div>
            {!!$blog->cuerpo!!}
        </div>

        <h2>Comentarios </h2>
        <form action="{{url ('redmite/blog/comment')}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />    
            <input type="hidden" name="id_colaborador" value="{{$colaborador->id}}" />    
            <input type="hidden" name="id_blog" value="{{$blog->id}}" />    
            <input type="hidden" name="id_comment" value="0" />            
            <textarea name="comment"></textarea>
            <button type="submit" class="btn btn-default"> Publicar </button>
        </form>
        <div>

            @foreach ($blog->comments as $comment)
            <div>
                {!!$comment->comment!!}

                <div class='hidden' id='{{'respuesta-'.$blog->id}}}'>
                    <form action="{{url ('redmite/blog/comment')}}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />    
                        <input type="hidden" name="id_colaborador" value="{{Auth::user ()->colaborador->id}}" />    
                        <input type="hidden" name="id_blog" value="{{$blog->id}}" />    
                        <input type="hidden" name="id_comment" value="{{$comment->id}}" />            
                        <textarea name="comment"></textarea>
                        <button type="submit" class="btn btn-default"> Responder </button>
                    </form>
                </div>
            </div>
            @endforeach 
        </div>
    </div>
    <div class='col-md-3'>
        <div>
            <h3> Acerca del autor </h3>
            <img src="{{url($colaborador->url_foto)}}" width="50" height="50">
            {{$colaborador->nombre}}
            {{$colaborador->resena}}
        </div>
        <hr>
        <ul class="nav nav-tabs">
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







<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({selector: 'textarea'});</script>


@include('viewRed.seccionpie')
@stop