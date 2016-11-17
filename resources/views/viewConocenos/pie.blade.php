<style>
	.medidasPie{
		color: white; z-index:1001; width:100%;
	}
</style>
    <!--sdk twitter-->
    <script>window.twttr = (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0],
                    t = window.twttr || {};
            if (d.getElementById(id))
                return t;
            js = d.createElement(s);
            js.id = id;
            js.src = "https://platform.twitter.com/widgets.js";
            fjs.parentNode.insertBefore(js, fjs);

            t._e = [];
            t.ready = function (f) {
                t._e.push(f);
            };

            return t;
        }(document, "script", "twitter-wjs"));</script>
    <!--sdk facebook-->
    <script>
        window.fbAsyncInit = function () {
            FB.init({
                appId: '1408909052733113',
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
<div id="barraNavPie" class="navbar navbar-inverse medidasPie">
    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2">
        <br>
        {{ HTML::image('imagenes/ventana/encabezado/logoventana.png','logo negativo', array('class'=>'img-responsive', 'width'=>'155', 'height'=>'155'))}}
        <br>
        <div class="col-xs-12">
            <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a> <script>!function (d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                    if (!d.getElementById(id)) {
                        js = d.createElement(s);
                        js.id = id;
                        js.src = p + '://platform.twitter.com/widgets.js';
                        fjs.parentNode.insertBefore(js, fjs);
                    }
                }(document, 'script', 'twitter-wjs');</script>
            <div class="fb-share-button pull-right col-md-8" data-layout="button" data-mobile-iframe="true"></div>
        </div>
        <br>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
        <br>
        <h4 class="text-uppercase">Contáctanos</h4>
        <table>
            <tr>
                <td class="imgTecho" style="padding-right: 15px;">
                    {{ HTML::image('imagenes/red/footer/localizacion.png','logo localizacion', array('class'=>'img-responsive','style'=>' width:25px; height:20px;)'))}}
                </td>
                <td>
                    <p class="textoBlanco">Av. Circunvalación s/n, esquina Tabiqueros,<br>
                        Col. Morelos, Del. Venustiano Carranza.<br>
                        C.P. 15270, Ciudad de México.</p>
                </td>
            </tr>
        </table>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-1 col-lg-2">
        <br><br>
        <table>
            <tr>
                <td class="imgTecho" style="padding:15px;">
                    {{ HTML::image('imagenes/red/footer/telefono.png','logo telefono', array('class'=>'img-responsive','style'=>'align:flex-start; width:20px; height:20px;)'))}}
                </td>
                <td>
                    <p class="textoBlanco">(55) 3601 8100 <br>
                        01 800 2284 883 <br>
                        01 866 5729 837
                    </p>
                </td>
            </tr>
        </table>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-2 col-lg-3">
        <br>
        <br>
        <table>
            <tr>
                <td class="imgTecho" style="padding:15px;">
                    {{ HTML::image('imagenes/red/footer/mail.png','logo mail', array('class'=>'img-responsive','style'=>'align:flex-start; width:20px; height:15px;)'))}}
                </td>
                <td>
                    <p class="textoBlanco"> ventana@televisioneducativa.gob.mx</p>
                </td>
            </tr>
        </table>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
        <h3>Mantente informado. Suscríbete.</h3>
        <form class="form-inline" action="conocenos/guardaCorreoNewsLetterConocenos" method="POST">
            <div class="form-group">
                <input type="email" required name="correo_newsletter" class="form-control" id="correoElectronico" placeholder="direccion@servidor.com"  style="width:80%">
                {!!csrf_field()!!}
                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-send"></span></button>
            </div>
        </form>
    </div>
    <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12"><p class="text-muted derechos">&copy; Televisión Educativa. Todos los derechos reservados.</p></div>
</div>
