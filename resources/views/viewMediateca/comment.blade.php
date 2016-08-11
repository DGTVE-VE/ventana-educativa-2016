@if ($comment->comment_id > 0)
<div id="comment-{{$comment->id}}" class="col-md-12 panel panel-white post panel-shadow" style="border:none;"><!--Inicia comentario 1-->
@else
<div id="comment-{{$comment->id}}" class="col-md-6 panel panel-white post panel-shadow"><!--Inicia comentario 1-->
@endif
    <div class="">
        <div class="post-heading">
            <div class="pull-left image">
                @if (File::exists ('uploaded/avatares/'.$comment->usuario->id.'.png'))                        
                {{ HTML::image('uploaded/avatares/'.$comment->usuario->id.'.png', 'Avatar usuario', ['class'=>'img-circle', 'id'=>'img-usuario', 'width'=>'60px'] )}}
                @else
                <i class="fa fa-user fa-3x img-circle avatar text-center" aria-hidden="true"></i>
                @endif
                
                <!--<img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">-->
            </div>
            <div class="pull-left meta">
                <div class="title h5">
                    <p>{{$comment->usuario->name}}</p>
                    {{--*/ $i = 0; /*--}} 
                    <?php
                    if ($comment instanceof \App\Model\Mediateca\TelesecundariaComments){
                        $stars = $comment->usuario->ratingTelesecundaria($comment->telesecundaria_id);
                    } else if ($comment instanceof \App\Model\Mediateca\TelebachilleratoComments){
                        $stars = $comment->usuario->ratingTelebachillerato($comment->telebachillerato_id);
                    }    
                    else{
                        $stars = 0;
                    }
                    ?>
<!--                    Pone las estrellas llenas-->
                    @for ($i=0; $i<$stars; $i++)
                        <i class="fa fa-star" aria-hidden="true"></i>
                    @endfor
<!--                    Pone las estrellas vacías-->
                    @for (; $i<5; $i++)
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    @endfor
                    
                </div>
            </div>
            <h6 class="time pull-right">{{date_format($comment->created_at, 'd-m-Y')}}</h6>
        </div> 
        <div class="post-description"> 
            
            <p>{{$comment->comment}}
            </p>
            <!--                        <div class="col-md-12">-->
            <div class="pull-right">                                
                <a class="link-respuesta" comment-id="{{$comment->id}}" style="cursor: pointer;"><span>Respuestas</span>
                <label>{{$comment->respuestas->count()}}</label>                            
                <span class="caret"></span></a>
            </div>
            <br>
            <div id="responde-{{$comment->id}}" style="display: none" >
                @if (Auth::check ())
                <div class="row">
                    
                    <div class="col-md-12">
                        <textarea rows="3" placeholder="Responde aquí..." class="form-control textareaTransparencia" id="responde_{{$comment->id}}"></textarea>
                    </div>
                    <div class="col-md-12">
                        <!--<button class="btn btn-info form-control"> Responder </button>-->
                        <a class="linkComentar" id="linkComentar_{{$comment->id}}">Envíar respuesta</a>
                    </div>
                </div>
                @endif
                <div class="row" id="respuestas-{{$comment->id}}" >
                    
                @if($comment->respuestas->count() > 0)
                    @foreach ($comment->respuestas as $respuesta)                        
                        @include('viewMediateca.comment', ['comment'=>$respuesta])
                    @endforeach
                @endif
                </div>
            </div>
            <!--</div>-->                            
        </div>
    </div>
</div><!--Termina comentario--->

