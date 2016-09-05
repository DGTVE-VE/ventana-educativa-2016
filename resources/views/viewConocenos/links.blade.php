<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 contenedorMapa">
        <div class="text-center"><h4>LINKS</h4></div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-12">
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="col-md-4">
                            <a href="http://www.gob.mx/amexcid" target="_blank"><img src="imagenes/ventana/conocenos/links/amexcid.png" alt="..." class="img-responsive"></a>
                        </div>
                        <div class="col-md-4">
                            <a href="http://www.canal6.com.ni/" target="_blank"><img src="imagenes/ventana/conocenos/links/canal6.png" alt="..." class="img-responsive"></a>
                        </div>
                        <div class="col-md-4">
                            <a href="http://www.csuca.org/" target="_blank"><img src="imagenes/ventana/conocenos/links/csuca.png" alt="..." class="img-responsive"></a>
                        </div>
                    </li>
                    <li>
                        <div class="col-md-4">
                            <a href=" http://www.sica.int/cecc/" target="_blank"><img src="imagenes/ventana/conocenos/links/sica.png" alt="..." class="img-responsive"></a>
                        </div>
                        <div class="col-md-4">
                            <a href="http://www.fundacioncatolica.org/tv_educativa.html" target="_blank"><img src="imagenes/ventana/conocenos/links/suyapa.png" alt="..." class="img-responsive"></a>
                        </div>
                        <div class="col-md-4">
                            <a href="http://www.uv.mx/" target="_blank"><img src="imagenes/ventana/conocenos/links/UVeracruzana.png" alt="..." class="img-responsive"></a>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </div>
</div>

<style>
    .slider{
        padding:50px !important;
        padding-bottom:0px !important;
        padding-top:0px !important;
    }
</style>

<!--	********* Incluir libreria flexslider	***************	-->
<link rel="stylesheet" href="js/FlexSlider/flexslider.css" type="text/css" media="screen"/>
<script src="js/FlexSlider/jquery.flexslider.js"></script>
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
