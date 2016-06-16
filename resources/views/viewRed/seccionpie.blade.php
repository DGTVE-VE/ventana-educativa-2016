<div class="row fondo_footer1" style="margin-top:-20px;">
    <script>
        window.fbAsyncInit = function () {
            FB.init({
                appId: '606978862799823',
                xfbml: true,
                version: 'v2.6'
            });
        };

        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <div class="division">
    </div>
    <div class="col-xs-6 col-sm-6 col-md-2 col-md-offset-1 col-lg-2 col-lg-offset-1">
        {{ HTML::image('imagenes/red/LogoRed/logoNegativo.png','logo negativo', array('class'=>'img-responsive', 'width'=>'155', 'height'=>'155'))}}
        <br>
        <a href="https://twitter.com/Red_Mesoamerica" target="_blank">
            {{ HTML::image('imagenes/red/footer/icono-twetter-A.png','icono twitter', array('class'=>'img-responsive img-rounded','id'=>'imgIconoTwetter', 'style'=>'float:left; width:50px; height:50px; position: relative; left:15px;', 'onmouseenter'=>'imgResalta("twetter")', 'onmouseleave'=>'imgNormal("twetter")'))}}
        </a>
        <!--        <a href="https://www.facebook.com/Red-Mesoamericana-de-Investigaci%C3%B3n-y-Tecnolog%C3%ADa-Educat%C3%ADva-930360840393101/" target="_blank">
                    {{ HTML::image('imagenes/red/footer/icono-face-A.png','icono facebook', array('class'=>'img-responsive img-rounded','id'=>'imgIconoFacebook', 'style'=>'float:left; width:50px; height:50px; position: relative; left:35px;', 'onmouseenter'=>'imgResalta("facebook")', 'onmouseleave'=>'imgNormal("facebook")'))}}
                </a>-->
        <br>
                <div 
                    class="fb-share-button pull-right col-md-8" 
                    data-layout="button" 
                    data-mobile-iframe="true">
                </div>
        <!--<img id="imgIconoYoutube" class="img-responsive img-rounded" style="float:left; width:50px; height:50px;" src="imagenes/red/footer/icono-youtube-A.png" onmouseenter="imgResalta('youtube')" onmouseleave="imgNormal('youtube')"/>-->
        <br>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
        <h4 class="text-uppercase"> Colaboradores </h4>
        <div class="col-xs-12 col-sm-12 col-md-12">
            {{ HTML::image('imagenes/red/footer/amexid.png','logo amexid', array('class'=>'img-responsive text-center', 'style'=>'width:150px; height:50px;)'))}}
            <br>
        </div>
        <div class="col-xs-6 col-sm-3 col-md-6 col-lg-6">
            {{ HTML::image('imagenes/red/footer/ceccsica.png','logo ceccsica', array('class'=>'img-responsive','style'=>'width:60px; height:79px;)'))}}
        </div>
        <div class="col-xs-6 col-sm-3 col-md-6 col-lg-6">
            {{ HTML::image('imagenes/red/footer/csuca.png','logo csuca', array('class'=>'img-responsive','style'=>'width:75px; height:75px;)'))}}
        </div>
        <div class="col-xs-12 col-sm-12 col-sm-12 col-md-12 col-lg-12">
            <br>
            {{ HTML::image('imagenes/red/footer/tve.png','logo tve', array('class'=>'img-responsive','style'=>'width:150px; height:50px;)'))}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
        <h4 class="text-uppercase">Contáctanos</h4>
        <table>
            <tr>
                <td class="imgTecho" style="padding:5px;">
                    {{ HTML::image('imagenes/red/footer/localizacion.png','logo localizacion', array('class'=>'img-responsive','style'=>'align:flex-start; width:14px; height:20px;)'))}}
                </td>
                <td>
                    <p>Av. Circunvalación s/n, esquina Tabiqueros,<br>
                        Col. Morelos, Del. Venustiano Carranza.<br>
                        C.P. 15270, Ciudad de México.</p>
                </td>
            </tr>
            <tr>
                <td class="imgTecho" style="padding:5px;">
                    {{ HTML::image('imagenes/red/footer/telefono.png','logo telefono', array('class'=>'img-responsive','style'=>'align:flex-start; width:20px; height:20px;)'))}}
                </td>
                <td>
                    <p>(55) 3601 8100 <br>
                        01 800 2284 883 <br>
                        01 866 5729 837
                    </p>							
                </td>
            </tr>
            <tr>
                <td class="imgTecho" style="padding:5px;">
                    {{ HTML::image('imagenes/red/footer/mail.png','logo mail', array('class'=>'img-responsive','style'=>'align:flex-start; width:20px; height:15px;)'))}}
                </td>
                <td>
                    <p> redmite@televisioneducativa.gob.mx</p>
                </td>
            </tr>
        </table>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
        <h4 class="text-uppercase">Tags</h4><br>
        <p>Investigación <strong class="lead">Colaboración </strong> Mesoamérica<br>
            <strong class="lead">Tecnología</strong> Educación Matemáticas <strong class="lead">Español</strong><br>
            Indicadores educativos <strong class="lead">Metodologías pedagógicas</strong><br>
            Docentes <strong class="lead">Procesos formativos</strong> Pedagogía digital</p>
        <br>
        <h4>Mantente informado. Suscríbete.</h4>
        <form class="form-inline" action="redmite/guardaCorreoNewsLetter" method="POST">
            <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <input type="email" required name="correo_newsletter" class="form-control" id="correoElectronico" placeholder="direccion@servidor.com"  style="width:80%">
                {!!csrf_field()!!}
                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-send"></span></button>
            </div>
        </form>
    </div>
</div>
<footer>
    <div class="row fondo_footer2">
        <div class="col-xs-9 col-sm-6 col-md-10 col-md-offset-1">
            <br>
            <p>Proyecto alineado al Programa Mesoamericano de Cooperación 2015 - 2016. <br>
                Desarrollado por Dirección General de Televisión Educativa.
            </p>
        </div>
        <div class="col-xs-3 col-sm-6 col-md-1 text-center">
            <br>
            <a id="top-link-block" data-spy="affix" data-offset-top="300" class="nav up-arrow" href="#pag_principal" data-toggle="tooltip" title="ARRIBA">
                {{ HTML::image('imagenes/red/footer/flecha-arriba.png','flecha arriba', array('class'=>'img-responsive img-rounded footer','style'=>'width:42px; height:40px;)'))}}
                <!--span class="glyphicon glyphicon-menu-up" style="border-style:solid; border-width: 1px; padding:15px;"></span-->
            </a>
            <br>
        </div>
    </div>	
</footer>