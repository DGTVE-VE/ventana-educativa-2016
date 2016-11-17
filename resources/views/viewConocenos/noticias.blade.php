<style>
    .padDiv10px{
        padding-left: 3px;
        padding-right: 3px;
    }
    .paddAbajo{
        padding-bottom:5px;
        padding-top:5px;
    }
    @media(min-width:320px){
        .triangulo {
            margin-top: 8%;
        }
        .
    }
    @media(min-width:350px){
        .triangulo {
            margin-top: 8%;
        }
    }
    @media(min-width:750px){
        .imgNoticia{
            max-height:250px;
        }
        .triangulo {
            margin-top: 4.5%;
        }
    }
    @media(min-width:980px){
        .triangulo {
            margin-top: 3.5%;
        }
    }
    @media(min-width:992px){
        .imgNoticia{
            min-width:100%;
            max-width:100%;
            max-height:360px;
        }
        .triangulo {
            margin-top: 3%;
        }
    }
    @media(min-width:1513px){
        .triangulo {
            margin-top: 2.7%;
        }
    @media(min-width:1800px){
        .imgNoticia{
            min-width:100%;
            max-width:100%;
            max-height:460px;
        }
        .triangulo {
            margin-top: 2.5%;
        }
    }
    @media(min-width:1920px){
        .triangulo {
            margin-top: 2%;
        }
    }
</style>

<div class="row text-center">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 paddAbajo">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 padDiv10px">
                    {{HTML::image('imagenes/conocenos/noticia1.jpg','Noticia Conocenos',array( 'class'=>'imgNoticia img-responsive'))}}
                    <div class="posicionVerMas"><a data-toggle="modal" data-target="#modalNoticia1" href="#"><div class="text-center vermas">Ver más</div></a></div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 padDiv10px">
                    {{HTML::image('imagenes/conocenos/noticia2.jpg','Noticia Conocenos',array( 'class'=>'imgNoticia img-responsive'))}}
                    <div class="posicionVerMas"><a data-toggle="modal" data-target="#modalNoticia2" href="#"><div class="text-center vermas">Ver más</div></a></div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 padDiv10px">
                    {{HTML::image('imagenes/conocenos/noticia4.jpg','Noticia Conocenos',array( 'class'=>'imgNoticia img-responsive'))}}
                    <div class="posicionVerMas"><a data-toggle="modal" data-target="#modalNoticia3" href="#"><div class="text-center vermas">Ver más</div></a></div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 padDiv10px">
                    {{HTML::image('imagenes/conocenos/noticia3.jpg','Noticia Conocenos',array( 'class'=>'imgNoticia img-responsive'))}}
                    <div class="posicionVerMas"><a data-toggle="modal" data-target="#modalNoticia4" href="#"><div class="text-center vermas">Ver más</div></a></div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <!--Widget face y twitter-->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                {{ HTML::image('imagenes/red/Logotipos/facebook.png','facebook', array('class'=>'img-responsive img-rounded', 'style'=>'width:100px; height:40px;'))}}
                <div class="fb-page" data-href="https://www.facebook.com/TvEducativaMx" data-tabs="timeline" data-width="500" data-height="350" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/TvEducativaMx" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/TvEducativaMx">Televisión Educativa Mx</a></blockquote></div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <a class="twitter-timeline" data-lang="en" data-width="500" data-height="350" data-theme="light" href="https://twitter.com/tveducativamx">Tweets by tveducativamx</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
    </div>
</div>


<!--Modales de Noticias--!>
	<!--Modal para Noticia 1-->
	<div class="modal fade" id="modalNoticia1" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="panel panel-default">
					<div class="panel-heading">
						lectura en la era móvil
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="panel-body">
						<embed width="100%" height="500px" src="{{url('pdf/conocenos/lecturaEraMovil.pdf')}}" type="application/pdf"></embed>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--Modal para Noticia 2-->
	<div class="modal fade" id="modalNoticia2" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="panel panel-default">
					<div class="panel-heading">
						Students, computers & learning
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="panel-body">
						<embed width="100%" height="500px" src="{{url('pdf/conocenos/computersLearningInfographic.pdf')}}" type="application/pdf"></embed>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--Modal para Noticia 3-->
	<div class="modal fade" id="modalNoticia3" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="panel panel-default">
					<div class="panel-heading">
						eLAC Plan de Accion
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="panel-body">
						<embed width="100%" height="500px" src="{{url('pdf/conocenos/eLAC_Plan_de_Accion.pdf')}}" type="application/pdf"></embed>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--Modal para Noticia 4-->
	<div class="modal fade" id="modalNoticia4" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="panel panel-default">
					<div class="panel-heading">
						Objetivos de desarrollo
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="panel-body">
						<embed width="100%" height="500px" src="{{url('pdf/conocenos/mdg-report-2015.pdf')}}" type="application/pdf"></embed>
					</div>
				</div>
			</div>
		</div>
	</div>
<!--Modales de Noticias--!>

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
