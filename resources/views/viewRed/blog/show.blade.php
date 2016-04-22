@extends ('indexRed')
@section('menuRedmite')
    @include ('viewRed.seccionheader')
@endsection
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

        
        <h3>Conversación de expertos </h3>
        @if(Auth::check())
        @if (Auth::user ()->is_researcher)
        <form action="{{url ('redmite/blog/comment')}}" method="POST" enctype="multipart/form-data">
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
                    @include('viewRed.blog.comments', ['comment'=>$comment])  
                @endif
            @endforeach 
        </div>
    </div>
    <div class='col-md-4'>
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
<script>
    $('.btn-responder').click(function(){
        console.log ('si');
        console.log ($(this).next());
        $(this).next().slideToggle();        
    });
</script>

@include('viewRed.seccionpie')
@stop