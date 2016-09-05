<div class="footer navbar-fixed-bottom navbar-inverse pieConocenos">
    <div class="col-md-2">
        <br>
        <div class="col-md-12">{{HTML::image('imagenes/ventana/encabezado/logoventana.png','Logo Ventana',array( 'width' => '60%'))}}</div>        
        <br><br><br><br>
        <div class="col-md-6">
            <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a> <script>!function (d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                    if (!d.getElementById(id)) {
                        js = d.createElement(s);
                        js.id = id;
                        js.src = p + '://platform.twitter.com/widgets.js';
                        fjs.parentNode.insertBefore(js, fjs);
                    }
                }(document, 'script', 'twitter-wjs');</script>  
        </div>
        <div class="col-md-6"><div 
                class="fb-share-button" 
                data-layout="button" 
                data-mobile-iframe="true">
            </div></div>
    </div>
    <div class="col-md-10">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <br>
            <h4 class="text-uppercase">Contáctanos</h4>
            <table>
                <tr>
                    <td class="imgTecho" style="padding:26px;">
                        {{ HTML::image('imagenes/red/footer/localizacion.png','Localización', array('class'=>'img-responsive','style'=>'align:flex-start; width:14px; height:20px;)'))}}
                    </td>
                    <td>
                        <p>Av. Circunvalación s/n, esquina Tabiqueros,<br>
                            Col. Morelos, Del. Venustiano Carranza.<br>
                            C.P. 15270, Ciudad de México.</p>
                    </td>
                    <td class="imgTecho" style="padding:26px;">
                        {{ HTML::image('imagenes/red/footer/telefono.png','Teléfono', array('class'=>'img-responsive','style'=>'align:flex-start; width:20px; height:20px;)'))}}
                    </td>
                    <td>
                        <p>(55) 3601 8100 <br>
                            01 800 2284 883 <br>
                            01 866 5729 837
                        </p>							
                    </td>
                    <td class="imgTecho" style="padding:26px;">
                        {{ HTML::image('imagenes/red/footer/mail.png','Correo', array('class'=>'img-responsive','style'=>'align:flex-start; width:20px; height:15px;)'))}}
                    </td>
                    <td>
                        <p> redmite@televisioneducativa.gob.mx</p>
                    </td>
                    <td class="imgTecho" style="padding:26px;">
                        <h4>Mantente informado. Suscríbete.</h4>
                        <form class="form-inline" action="conocenos/guardaCorreoNewsLetterConocenos" method="POST">
                            <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <input type="email" required name="correo_newsletter" class="form-control" id="correoElectronico" placeholder="direccion@servidor.com"  style="width:80%">
                                {!!csrf_field()!!}
                                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-send"></span></button>
                            </div>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="col-md-12"><p class="text-muted derechos">&copy; Televisión Educativa. Todos los derechos reservados.</p></div>
</div>

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