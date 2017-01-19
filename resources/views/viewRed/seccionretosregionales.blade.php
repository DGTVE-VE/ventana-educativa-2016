<div class="row fondo_Claro text-justify" style="margin-top:-20px;">
    <div class="col-md-12">
        <div class="division">
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" style="padding-left:5%;">
        <h3>Retos Regionales</h3>
        <div id="carouselRetos" class="carousel slide" data-ride="carousel"> <!-- background-color:#E5E5E5; -->
            <!-- Indicators -->
            <ol class="carousel-indicators" style="position: absolute; top: 75%; left:50%;">
                <li style="border-color:black;" data-target="#carouselRetos" data-slide-to="0" class="active"></li>
                <li style="border-color:black;" data-target="#carouselRetos" data-slide-to="1"></li>
                <li style="border-color:black;" data-target="#carouselRetos" data-slide-to="2"></li>
                <li style="border-color:black;" data-target="#carouselRetos" data-slide-to="3"></li>
                <li style="border-color:black;" data-target="#carouselRetos" data-slide-to="4"></li>
                <li style="border-color:black;" data-target="#carouselRetos" data-slide-to="5"></li>
                <li style="border-color:black;" data-target="#carouselRetos" data-slide-to="6"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    {{ HTML::image('imagenes/red/iconosRetos/1.jpg','icono retos1', array('class'=>'imgIconosRetos img-responsive'))}}
                </div>
                <div class="item">
                    {{ HTML::image('imagenes/red/iconosRetos/2.jpg','icono retos2', array('class'=>'imgIconosRetos img-responsive'))}}
                </div>
                <div class="item">
                    {{ HTML::image('imagenes/red/iconosRetos/3.jpg','icono retos3', array('class'=>'imgIconosRetos img-responsive'))}}
                </div>
                <div class="item">
                    {{ HTML::image('imagenes/red/iconosRetos/4.jpg','icono retos4', array('class'=>'imgIconosRetos img-responsive'))}}
                </div>
                <div class="item">
                    {{ HTML::image('imagenes/red/iconosRetos/5.jpg','icono retos5', array('class'=>'imgIconosRetos img-responsive'))}}
                </div>
                <div class="item">
                    {{ HTML::image('imagenes/red/iconosRetos/6.jpg','icono retos6', array('class'=>'imgIconosRetos img-responsive'))}}
                </div>
                <div class="item">
                    {{ HTML::image('imagenes/red/iconosRetos/7.jpg','icono retos7', array('class'=>'imgIconosRetos img-responsive'))}}
                </div>
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" style="padding-left:3%; padding-right:5%;">
        <h3>Sitios de Interés</h3>
        <div id="carouselSitioInteres" class="carousel slide" data-ride="carousel" style="background-color:white; position: relative; top:0px;">

            <!-- Wrapper for slides -->
            <center>
                <div class="carousel-inner " role="listbox"> <!--fondoBlacoSitiosinteres-->
                    <div class="item active">
                        <div class="table-responsive"> 
                            <table>
                                <tr>
                                    <td style="padding: 10px;">
                                        <a  href="http://www.uv.mx/veracruz/cidie/">
                                            {{ HTML::image('imagenes/red/sitiosInteres/1.png','CIDIE', array('class'=>'img-responsive img-rounded centraCont', 'style'=>'width:150px; height:96px;'))}}
                                        </a>
                                    </td>
                                    <td style="padding: 10px;">
                                        <a href="http://www.cinvestav.mx/">
                                            {{ HTML::image('imagenes/red/sitiosInteres/3.jpg','CINVESTAV', array('class'=>'img-responsive img-rounded centraCont', 'style'=>'width:100px; height:124px;'))}}
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 10px;">
                                        <a href="http://www.televisioneducativa.gob.mx">
                                            {{ HTML::image('imagenes/red/sitiosInteres/logo_tve.png','TV Educativa', array('class'=>'img-responsive img-rounded centraCont', 'style'=>'width:130px; height:42px;'))}}
                                        </a>
                                        <a href="http://www.normalsuperior.com.mx/ens1/files/default/default.asp">
                                            {{ HTML::image('imagenes/red/sitiosInteres/4.png','ENS', array('class'=>'img-responsive img-rounded centraCont', 'style'=>'width:150px; height:86px; position:relative; top:30px; '))}}
                                        </a>
                                    </td>
                                    <td style="padding: 10px;">
                                        <a href="http://redesib.formacionib.org/">
                                            {{ HTML::image('imagenes/red/sitiosInteres/5.png','RID', array('class'=>'img-responsive img-rounded centraCont', 'style'=>'width:100px; height:124px;'))}}
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 10px;">
                                        <a href="http://ceducar.info/ceducar/">
                                            {{ HTML::image('imagenes/red/sitiosInteres/LogoCeducar.jpg','CEDUCAR', array('class'=>'img-responsive img-rounded centraCont', 'style'=>'width:150px; height:67px;'))}}
                                        </a>
                                    </td>
                                    <td style="padding: 10px;">
                                        <a  href="http://www.upn.mx/">
                                            {{ HTML::image('imagenes/red/sitiosInteres/2.png','UPN', array('class'=>'img-responsive img-rounded centraCont', 'style'=>'width:150px; height:127px;'))}}
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:13%;"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </center>
            <!-- Controls -->
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4" style="padding-right:8%;">
        <h3>Redes Sociales</h3>
        {{ HTML::image('imagenes/red/Logotipos/facebook.png','facebook', array('class'=>'img-responsive img-rounded', 'style'=>'width:150px; height:48px;'))}}
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12"><div class="fb-page" data-href="{{url('https://www.facebook.com/Red-Mesoamericana-de-Investigaci&#xf3;n-y-Tecnolog&#xed;a-Educat&#xed;va-930360840393101/')}}" data-tabs="timeline" data-width="450" data-height="230" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div></div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12"><a class="twitter-timeline" href="https://twitter.com/Red_Mesoamerica" data-widget-id="702586618901757952">Tweets por el @Red_Mesoamerica.</a>
            <script>!function(d, s, id){var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location)?'http':'https'; if (!d.getElementById(id)){js = d.createElement(s); js.id = id; js.src = p + "://platform.twitter.com/widgets.js"; fjs.parentNode.insertBefore(js, fjs); }}(document, "script", "twitter-wjs");</script></div>
    </div>
</div>
<div class="row fondo_Claro">
    <div class="division">
    </div>
</div>