<div class="row">
    <div class="col-md-12 noticias">
        <div class="col-md-7">
            <div class="col-md-12">
                <div class="col-md-6">
                        {{HTML::image('imagenes/conocenos/noticia1.jpg','Noticia Conocenos',array( 'class'=>'img-responsive'))}}
                        <a><div class="text-center vermas">Ver más</div></a>                                                        
                </div>
                <div class="col-md-6">
                        {{HTML::image('imagenes/conocenos/noticia2.jpg','Noticia Conocenos',array( 'class'=>'img-responsive'))}}
                        <a><div class="text-center vermas">Ver más</div></a>                                                        
                </div>                
            </div>
            <div class="col-md-12">
                <div class="col-md-6">
                        {{HTML::image('imagenes/conocenos/noticia3.jpg','Noticia Conocenos',array( 'class'=>'img-responsive'))}}
                        <a><div class="text-center vermas">Ver más</div></a>                                                        
                </div>
                <div class="col-md-6">
                        {{HTML::image('imagenes/conocenos/noticia4.jpg','Noticia Conocenos',array( 'class'=>'img-responsive'))}}
                        <a><div class="text-center vermas">Ver más</div></a>                                                        
                </div>                
            </div>
        </div>
        <div class="col-md-5">
            <!--Widget face y twitter-->       
            <div class="col-md-12">
                {{ HTML::image('imagenes/red/Logotipos/facebook.png','facebook', array('class'=>'img-responsive img-rounded', 'style'=>'width:100px; height:40px;'))}}
                <div class="fb-page" data-href="https://www.facebook.com/TvEducativaMx" data-tabs="timeline" data-width="500" data-height="350" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/TvEducativaMx" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/TvEducativaMx">Televisión Educativa Mx</a></blockquote></div>
            </div>
            <div class="col-md-12">
                <a class="twitter-timeline" data-lang="en" data-width="500" data-height="350" data-theme="light" href="https://twitter.com/tveducativamx">Tweets by tveducativamx</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
    </div>
</div>

<!--Facebook-->
<div id="fb-root"></div>
<script>(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id))
        return;
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.7";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>