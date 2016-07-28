@section('titleConocenos')
Conocenos
@stop
@extends('indexConocenos')
@section('cuerpoConocenos')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            Noticias
        </div>
        <div class="col-md-6">
            <!--Widget face y twitter-->
            <div class="col-md-12">
                <div class="fb-page" data-href="https://www.facebook.com/TvEducativaMx" data-tabs="timeline" data-width="350" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/TvEducativaMx" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/TvEducativaMx">Televisión Educativa Mx</a></blockquote></div>
            </div>
            <div class="col-md-12">
                <a class="twitter-timeline" data-lang="es" data-width="350" data-height="300" data-dnt="true" href="https://twitter.com/tveducativamx">Tweets by tveducativamx</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
    </div>
</div>
@endsection

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