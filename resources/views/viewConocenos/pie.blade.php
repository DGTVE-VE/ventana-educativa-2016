<div class="footer navbar-fixed-bottom navbar-inverse pieConocenos">
    <div class="col-md-2">
        <br>
        {{HTML::image('imagenes/ventana/encabezado/logoventana.png','Logo Ventana',array( 'width' => '60%'))}}
        <br><br><br><br>
        <p class="text-muted derechos">&copy; Televisión Educativa. Todos los derechos reservados.</p>
    </div>
    <div class="col-md-2">
        <h5>Dirección</h5>
        <address class="text-justify">Av. Circunvalación s/n esquina Tabiqueros, Col. Morelos, Delegación Venustiano Carranza, C.P. 15270, México, CDMX.</address>
    </div>    
    <div class="col-md-2">
        <h5>Teléfonos</h5>
        <p>Conmutador: 3601 8100</p>
        <p>Lada nacional: 01800 2284 883</p>
        <p>Internacional: 01866572983</p>
    </div>
    <div class="col-md-2">
        <h5>E-mail</h5>
        <p>ventana@televisioneducativa.gob.mx</p>
    </div>
    <div class="col-md-2">
        <h5>Redes Sociales</h5>
        <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a> <script>!function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                if (!d.getElementById(id)) {
                    js = d.createElement(s);
                    js.id = id;
                    js.src = p + '://platform.twitter.com/widgets.js';
                    fjs.parentNode.insertBefore(js, fjs);
                }
            }(document, 'script', 'twitter-wjs');</script>  
                <br><br>
        <div 
            class="fb-share-button" 
            data-layout="button" 
            data-mobile-iframe="true">
        </div>
    </div>
    <div class="col-md-2"><h5>Blog</h5></div>
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