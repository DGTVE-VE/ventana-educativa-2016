
<div style='margin-left: 10px; margin-bottom: 10px; padding: 5px'>
    
    <img src="{{url($comment->colaborador->url_foto)}}" width="40" height="40">
    {{$comment->colaborador->nombre}}
{!!$comment->comment!!}
@if (Auth::check ())
@if (Auth::user ()->is_researcher)
<a class='btn-responder'> Responder </a>
<div style="display: none" id='respuesta-{{$comment->id}}'>
    <form action="{{url ('redmite/blog/comment')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />    
        <input type="hidden" name="id_colaborador" value="{{Auth::user ()->colaborador->id}}" />    
        <input type="hidden" name="id_blog" value="{{$comment->id_blog}}" />    
        <input type="hidden" name="id_comment" value="{{$comment->id}}" />            
        <textarea name="comment"></textarea>
        <button type="submit" class="btn btn-default"> Responder </button>
    </form>
</div>
@endif
@endif
@if($comment->respuestas->count() > 0)
    @foreach ($comment->respuestas as $respuesta)
        @include('viewRed.blog.comments', ['comment'=>$respuesta])
    @endforeach
@endif
</div>