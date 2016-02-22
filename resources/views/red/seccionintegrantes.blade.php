
<div class="row" style="background-image: url('imagenes/red/integrantes/gradiente.jpg');">
    <div class="col-md-12 fondo_Obscuro">
        <div class="col-md-12 text-center text-uppercase">
            <h2> Nuestros integrantes </h2>
        </div>
    </div>
    <div class="col-md-6">
        <img name="imagenMapa_n"  src="imagenes/red/integrantes/gris.png"  border="5px" id="imagenMapa" class="mapaCentroAmerica img-responsive" usemap="#mapa_n" alt="" />
        <map name="mapa_n" id="mapa">         
            <area alt="Colombia" onmouseover="entraPais(1)" onmouseout="saleMouseInte();" href="#modalColombia" data-keyboard="true" data-toggle="modal" shape="poly" coords="330,279,347,262,347,226,378,187,394,230,433,238,431,274,414,279,414,319,366,292"/>
            <area alt="Costa Rica" onmouseover="entraPais(2)" onmouseout="saleMouseInte();" href="#modalCostarica" shape="poly" data-toggle="modal" coords="265,192,290,182,308,208,307,223,291,216"/>
            <area alt="Dominicana" onmouseover="entraPais(3)" onmouseout="saleMouseInte();" href="#modalDominicana" shape="poly" data-toggle="modal" coords="379,130,389,111,414,114,433,130"/>
            <area alt="El Salvador" onmouseover="entraPais(4)" onmouseout="saleMouseInte();" href="#modalSalvador" shape="poly" data-toggle="modal" coords="237,173,243,155,254,183"/>
            <area alt="Guatemala" onmouseover="entraPais(5)" onmouseout="saleMouseInte();" href="#modalGuatemala" shape="poly" data-toggle="modal" coords="214,162,240,128,249,143,237,173"/>
            <area alt="Honduras" onmouseover="entraPais(6)" onmouseout="saleMouseInte();" href="#modalHonduras" shape="poly" data-toggle="modal" coords="242,156,247,142,290,146,253,183"/>
            <area alt="México" onmouseover="entraPais(7)" onmouseout="saleMouseInte();" href="#modalMexico" data-toggle="modal" shape="poly" coords="90,98,162,90,188,123,225,111,228,93,262,100,216,162,159,145,127,131,97,121"/>
            <area alt="Nicaragua" onmouseover="entraPais(8)" onmouseout="saleMouseInte();" href="#modalNicaragua" shape="poly" data-toggle="modal" coords="254,182,292,145,291,181,267,194"/>
            <area alt="Panama" onmouseover="entraPais(9)" onmouseout="saleMouseInte();" href="#modalPanama" shape="poly" data-toggle="modal" coords="309,223,311,207,346,201,348,212,360,212,348,228,326,231"/>
        </map>
    </div>
    <div class="col-md-6 text-center" style="margin-top: 10%;">
        <h2 id="nombrepais"></h2>
        <h4 class="">Selecciona un país para ver más...</h4>
    </div>
</div>
<!-- Modal -->
<div id="modalMexico" class="modal modal-fullscreen fade centraCont" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title textoModalIntegrante text-center">Colaborador de la Red Mesoamericana en México</h4>
                <!--<img  src="imagenes/red/integrantes/tache.png"/>-->
                <button type="button" class="close closeInt" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <div id="sliderinte" class="carousel slide col-xs-12 col-md-4 col-lg-4" data-ride="carousel" data-interval="3000">
                    <ol class="carousel-indicators indicadorInt">
                        <li data-target="#slider" data-slide-to="0" class="active"></li>
                        <li data-target="#slider" data-slide-to="1" class=""></li>
                        <li data-target="#slider" data-slide-to="2" class=""></li>
                    </ol>
                    <div class="carousel-inner innerInt">
                        <div class="item active">
                            <img alt="First slide" src="imagenes/red/integrantes/GIBZKARODRIGUEZ.png">   
                        </div>
                        <div class="item">
                            <img alt="Second slide" src="imagenes/red/integrantes/anaguilma.png">  
                        </div>
                        <div class="item">
                            <img alt="Third slide" src="imagenes/red/integrantes/GIBZKARODRIGUEZ.png">
                        </div>
                    </div>
                </div>

                <div id="slider_captions" class="col-xs-12 col-md-8 col-lg-8 capInt">
                    <div>
                        <div id="caption-0" class="carousel-caption captionint">
                            <h2>Title 3</h2>
                            <h3>Title 3</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, enim. A sint repudiandae tempora, nulla aliquam</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, enim. A sint repudiandae tempora, nulla aliquam</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, enim. A sint repudiandae tempora, nulla aliquam</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, enim. A sint repudiandae tempora, nulla aliquam</p>
                        </div>
                        <div id="caption-1" class="carousel-caption captionint">
                            <h2>Title 3</h2>
                            <h3>Title 3</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, enim. A sint repudiandae tempora, nulla aliquam</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, enim. A sint repudiandae tempora, nulla aliquam</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, enim. A sint repudiandae tempora, nulla aliquam</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, enim. A sint repudiandae tempora, nulla aliquam</p>
                        </div>
                        <div id="caption-2" class="carousel-caption captionint">
                            <h2>Title 3</h2>
                            <h3>Title 3</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, enim. A sint repudiandae tempora, nulla aliquam</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, enim. A sint repudiandae tempora, nulla aliquam</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, enim. A sint repudiandae tempora, nulla aliquam</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, enim. A sint repudiandae tempora, nulla aliquam</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control controlInt" href="#sliderint" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control controlInt" href="#sliderint" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
            <!--      <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>-->
        </div>

    </div>
</div>
<!--fin modal-->

<script>
    function saleMouseInte() {
//        nombrepais = ;
        document.getElementById('nombrepais').innerHTML = '';
        document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/gris.png';
    }
    function entraPais(v) {
        nombrepais = document.getElementById('nombrepais');
        if (v === 1) {
            document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/colombia.png';
            nombrepais = document.getElementById('nombrepais');
            nombrepais.innerHTML = 'Colombia';
        }
        if (v === 2) {
            document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/costarica.png';
            nombrepais.innerHTML = 'Costa Rica';
        }
        if (v === 3) {
            document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/dominicana.png';
            nombrepais.innerHTML = 'República Dominicana';
        }
        if (v === 4) {
            document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/elsalvador.png';
            nombrepais.innerHTML = 'El Salvador';
        }
        if (v === 5) {
            document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/guatemala.png';
            nombrepais.innerHTML = 'Guatemala';
        }
        if (v === 6) {
            document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/honduras.png';
            nombrepais.innerHTML = 'Honduras';
        }
        if (v === 7) {
            document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/mexico.png';
            nombrepais.innerHTML = 'México';
        }
        if (v === 8) {
            document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/nicaragua.png';
            nombrepais.innerHTML = 'Nicaragua';
        }
        if (v === 9) {
            document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/panama.png';
            nombrepais.innerHTML = 'Panamá';
        }
    }
    $("#sliderinte").on('slide.bs.carousel', function (evt) {

        var step = $(evt.relatedTarget).index();

        $('#slider_captions .carousel-caption:not(#caption-' + step + ')').fadeOut('fast', function () {
            $('#caption-' + step).fadeIn();
        });

    });

    $(document).ready(function (e) {
        $('img[usemap]').rwdImageMaps();
    });
</script>