<div class="col-md-6"><!--Inicia comentario 1-->
    <div class="panel panel-white post panel-shadow">
        <div class="post-heading">
            <div class="pull-left image">
                <i class="fa fa-user fa-3x img-circle avatar text-center" aria-hidden="true"></i>
                <!--<img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">-->
            </div>
            <div class="pull-left meta">
                <div class="title h5">
                    <p>{{$comment->usuario->name}}</p>
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                </div>
            </div>
            <h6 class="time pull-right">{{date_format($comment->created_at, 'd-m-Y')}}</h6>
        </div> 
        <div class="post-description"> 
            
            <p>{{$comment->comment}}
            </p>
            <!--                        <div class="col-md-12">-->
            <div class="pull-right">
                <i class="fa fa-thumbs-up icon stat-item"></i>   2
                &nbsp;&nbsp;&nbsp;
                <span>Comentar</span>
                <label>2</label>                            
                <span class="caret"></span>                            
            </div>
            <br>
            <!--</div>-->                            
        </div>
    </div>
</div><!--Termina comentario--->