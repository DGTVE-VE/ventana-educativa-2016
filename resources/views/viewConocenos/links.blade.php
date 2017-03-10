<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 contenedorMapa">
        <div class="text-center"><h4>LINKS</h4></div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <a href="http://www.gob.mx/amexcid" target="_blank"><img src="imagenes/ventana/conocenos/links/amexcid.png" alt="..." class="img-responsive"></a>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <a href="http://www.canal6.com.ni/" target="_blank"><img src="imagenes/ventana/conocenos/links/canal6.png" alt="..." class="img-responsive"></a>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <a href="http://www.csuca.org/" target="_blank"><img src="imagenes/ventana/conocenos/links/csuca.png" alt="..." class="img-responsive"></a>
                        </div>
                    </li>
                    <li>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <a href=" http://www.sica.int/cecc/" target="_blank"><img src="imagenes/ventana/conocenos/links/sica.png" alt="..." class="img-responsive"></a>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <a href="http://www.fundacioncatolica.org/tv_educativa.html" target="_blank"><img src="imagenes/ventana/conocenos/links/suyapa.png" alt="..." class="img-responsive"></a>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <a href="http://www.uv.mx/" target="_blank"><img src="imagenes/ventana/conocenos/links/UVeracruzana.png" alt="..." class="img-responsive"></a>
                        </div>
                    </li>
                    <li>
                         <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <!--<a href="http://upes.edu.mx/sitio/" target="_blank"><img src="imagenes/ventana/conocenos/links/UPES.png" alt="..." class="img-responsive"></a>-->
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <a href="http://upes.edu.mx/sitio/" target="_blank"><img src="imagenes/ventana/conocenos/links/UPES.png" alt="..." class="img-responsive"></a>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <!--<a href="http://upes.edu.mx/sitio/" target="_blank"><img src="imagenes/ventana/conocenos/links/UPES.png" alt="..." class="img-responsive"></a>-->
                        </div>
                    </li>                    
                </ul>
            </div>
        </section>
    </div>
</div>

<style>
    .slider{
        padding:15px !important;
        padding-bottom:0px !important;
        padding-top:0px !important;
    }
</style>

<!--	********* Incluir libreria flexslider	***************	-->
<link rel="stylesheet" href="js/librerias/FlexSlider/flexslider.css" type="text/css" media="screen"/>
<script src="js/librerias/FlexSlider/jquery.flexslider.js"></script>
<script>

<!--	***********	Activar slider colaboradores	*************	-->
    $('.flexslider').flexslider({
        animation: "slide",
        start: function (slider) {
            $('body').removeClass('loading');
            $('.flexslider').flexslider("stop");
        }
    });
</script>
