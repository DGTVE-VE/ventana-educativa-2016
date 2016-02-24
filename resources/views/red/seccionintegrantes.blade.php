<div class="row" style="background-image: url('imagenes/red/integrantes/gradiente.jpg');">
    <div class="col-md-12 fondo_Obscuro">
        <div class="col-md-12 text-center text-uppercase">
            <p class="pleca"> Nuestros integrantes </p>
        </div>
    </div>
    <div class="col-md-6">
        <img name="imagenMapa_n"  src="imagenes/red/integrantes/gris.png"  border="5px" id="imagenMapa" class="mapaCentroAmerica img-responsive" usemap="#mapa_n" alt="" />
        <map name="mapa_n" id="mapa">         
            <area alt="Colombia" onmouseover="entraPais(1)" onmouseout="saleMouseInte();" href="#" data-keyboard="true" data-toggle="modal" shape="poly" coords="330,279,347,262,347,226,378,187,394,230,433,238,431,274,414,279,414,319,366,292"/>
            <area alt="Costa Rica" onmouseover="entraPais(2)" onmouseout="saleMouseInte();" href="#modalCostaRica" shape="poly" data-toggle="modal" coords="265,192,290,182,308,208,307,223,291,216"/>
            <area alt="Dominicana" onmouseover="entraPais(3)" onmouseout="saleMouseInte();" href="#modalDominicana" shape="poly" data-toggle="modal" coords="379,130,389,111,414,114,433,130"/>
            <area alt="El Salvador" onmouseover="entraPais(4)" onmouseout="saleMouseInte();" href="#" shape="poly" data-toggle="modal" coords="237,173,243,155,254,183"/>
            <area alt="Guatemala" onmouseover="entraPais(5)" onmouseout="saleMouseInte();" href="#modalGuatemala" shape="poly" data-toggle="modal" coords="214,162,240,128,249,143,237,173"/>
            <area alt="Honduras" onmouseover="entraPais(6)" onmouseout="saleMouseInte();" href="#" shape="poly" data-toggle="modal" coords="242,156,247,142,290,146,253,183"/>
            <area alt="México" onmouseover="entraPais(7)" onmouseout="saleMouseInte();" href="#modalMexico" data-toggle="modal" shape="poly" coords="90,98,162,90,188,123,225,111,228,93,262,100,216,162,159,145,127,131,97,121"/>
            <area alt="Nicaragua" onmouseover="entraPais(8)" onmouseout="saleMouseInte();" href="#" shape="poly" data-toggle="modal" coords="254,182,292,145,291,181,267,194"/>
            <area alt="Panama" onmouseover="entraPais(9)" onmouseout="saleMouseInte();" href="#modalPanama" shape="poly" data-toggle="modal" coords="309,223,311,207,346,201,348,212,360,212,348,228,326,231"/>
        </map>
    </div>
    <div class="col-md-6 text-center" style="margin-top: 10%;">
        <h2 id="nombrepais"></h2>
        <h4 class="">Selecciona un país para ver más...</h4>
    </div>
</div>
<!-- Modal México-->
<div id="modalMexico" class="modal modal-fullscreen fade centraCont" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title modal-titleInt text-center">Colaborador de la Red Mesoamericana en México</h3>
                <button type="button" class="close closeInt" data-dismiss="modal" aria-hidden="true">X</button>
            </div>
            <div class="modal-body">
                <div id="carouselMexico" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators" style="top:150%;">
                        <li data-target="#carouselMexico" data-slide-to="0" class="active"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner carousel-innerInt">
                        <div class="item active">
                            <div class="col-md-12 text-center">
                                <img  src="imagenes/red/integrantes/fotos/mexico/RubenEdel.png" alt="...">
                            </div>
                            <div class="col-md-12 carousel-caption carousel-captionInt">
                                <h3>EDEL NAVARRO, RUBÉN</h3>
                                <h4>Universidad Veracruzana. <br>Investigador de tiempo completo.</h4>
                                <p class="text-justify">Investigador del Consejo Nacional de Ciencia y Tecnología (CONACyT) de México durante los 
                                    últimos 12 años. Desde 2007 forma parte del Comité de Asesores de la Abraham S. Fischler 
                                    College of Education de la Nova Southeastern University de la Florida, USA. Su línea de 
                                    investigación sobre las TIC en la Educación le ha permitido publicar más de 50 artículos científicos, 
                                    su inclusión en el Top-2000 del Ranking de Científicos de Instituciones Mexicanas por el Consejo 
                                    Superior de Investigaciones Científicas de España, y de participar como ponente en Latinoamérica 
                                    y Estados Unidos. Es autor de varios libros y obras electrónicas publicados en España, Colombia, 
                                    Argentina, Chile y México. Actualmente dirige el Centro de Innovación, Desarrollo e Investigación 
                                    Educativa en la Universidad Veracruzana.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carouselMexico" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carouselMexico" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--fin modal México-->

<!-- Modal Costa Rica-->
<div id="modalCostaRica" class="modal modal-fullscreen fade centraCont" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title modal-titleInt text-center">Colaborador de la Red Mesoamericana en Costa Rica</h3>
                <button type="button" class="close closeInt" data-dismiss="modal" aria-hidden="true">X</button>
            </div>
            <div class="modal-body">
                <div id="carouselCostaRica" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators" style="top:150%;">
                        <li data-target="#carouselCostaRica" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselCostaRica" data-slide-to="1"></li>
                        <li data-target="#carouselCostaRica" data-slide-to="2"></li>
                        <li data-target="#carouselCostaRica" data-slide-to="3"></li>
                        <li data-target="#carouselCostaRica" data-slide-to="4"></li>
                        <li data-target="#carouselCostaRica" data-slide-to="5"></li>
                        
                    </ol>
                    <!-- Wrapper for slides -->
                    <!--Colaborador 1-->
                    <div class="carousel-inner carousel-innerInt">
                        <div class="item active">
                            <div class="col-md-12 text-center">
                                <img  src="imagenes/red/integrantes/fotos/costarica/AnaGuilma.png" alt="...">
                            </div>
                            <div class="col-md-12 carousel-caption carousel-captionInt">
                                <h3>Ana Gilma Guevara Bello</h3>
                                <h4>Ministerio de Educación Pública de Costa Rica<br>Dirección Regional de Educación Zona Norte Norte<br>Asesora Regional de Español<br></h4>
                                <p class="text-justify">Licenciada en Ciencias de la Educación con énfasis en Docencia para ejercer la 
                                    Enseñanza del Castellano y la Literatura. Labora en el área educativa desde hace 13 
                                    años. Ha sido Profesora de Español en diferentes centros educativos. Actualmente, es 
                                    Asesora Regional de Español en la Dirección Regional de Educación Zona Norte.</p>
                            </div>
                        </div>
                        <!--Colaborador 2-->
                        <div class="item">
                            <div class="col-md-12 text-center">
                                <img  src="imagenes/red/integrantes/fotos/costarica/AnnyGonzalez.png" alt="...">
                            </div>
                            <div class="col-md-12 carousel-caption carousel-captionInt">
                                <h3>Anny González Gairaud </h3>
                                <h4>Coordinación Educativa y Cultural Centroamericana (CECC/SICA) <br>
                                    Coordinadora de Proyectos
                                </h4>
                                <p class="text-justify">Máster en Informática Educativa y Administración Educativa, Posgrado en Desarrollo Cognitivo en Ambientes Informáticos. Ha laborado en el área educativa como docente de Educación Primaria, Asesora Nacional y Jefatura del Ministerio de Educación de Costa Rica por más de 35 años. Diseñadora y ejecutora de Proyectos Educativos con Tecnología, Educación Popular Legal, Transformación de Bibliotecas escolares en Centros de Recursos para el Aprendizaje. Coordinadora del Proyecto Constitución nuestra: “Así como la Entendemos". Profesora Universitaria en Informática Educativa. Literatura Infantil Bilingüe, en la Universidad de LaSalle y Pepperdine California. <br>
                                    Actualmente se desempeña como Coordinadora de Proyectos Educativos de la CECC/SICA.
                                </p>
                            </div>
                        </div>
                        <!--Colaborador 3-->
                        <div class="item">
                            <div class="col-md-12 text-center">
                                <img  src="imagenes/red/integrantes/fotos/costarica/LiliamCorrales.png" alt="...">
                            </div>
                            <div class="col-md-12 carousel-caption carousel-captionInt">
                                <h3>Lilliam Corrales Torres</h3>
                                <h4>Ministerio de Educación Pública - Costa Rica,<br> Dirección Regional Educativa Coto<br>
                                    Asesora Pedagógica de Español
                                </h4>
                                <p class="text-justify">Licenciada en educación con énfasis en I y II ciclos.  Licenciada en docencia.  Licenciada en 
                                    educación con énfasis en Español.  Máster en administración educativa. <br>
                                    Ha laborado en el sistema educativo público desde el año 2002; desempeñando el puesto de 
                                    docente en educación primaria, profesora de español en educación secundaria. En el sistema 
                                    educativo privado como profesora universitaria en diversas casas de enseñanza del país.</p>
                            </div>
                        </div>
                        <!--Colaborador 4-->                        
                        <div class="item">
                            <div class="col-md-12 text-center">
                                <img  src="imagenes/red/integrantes/fotos/costarica/RandallCastro.png" alt="...">
                            </div>
                            <div class="col-md-12 carousel-caption carousel-captionInt">
                                <h3>Rándall Castro Madrigal</h3>
                                <h4>Asesor Regional de Español – Costa Rica – Ministerio de Educación Pública (MEP)
                                </h4>
                                <p class="text-justify">Licenciado en Docencia con énfasis en Español, Bachiller en Castellano y Literatura y Bachiller en La
                                    Enseñanza de la Educación Primaria con énfasis en Español. Posee estudios básicos en informática y 
                                    administración educativa. Labora desde hace 15 años para el Ministerio de Educación Publica de Costa 
                                    Rica y en los Colegios: Nocturno de Palmares y Técnico Agropecuario de Piedades Sur, Colegio Diurno de 
                                    Candelaria. De igual manera, en los programas: Nuevas Oportunidades para Adolescentes, Educación de 
                                    adultos en Palmares, Telesecundaria La Gata y Liceo Rural La Gata. Además laboró para instituciones 
                                    privadas tanto en educación secundaria como universitaria. Ha publicado dos artículos para la revista 
                                    digital CONEXIONES del MEP y más de 20 artículos en el boletín Rincón Filológico, del cual es editor. 
                                    Actualmente es asesor regional de Español en la Dirección Regional de Educación de Sarapiquí.</p>
                            </div>
                        </div>
                        <!--Colaborador 5-->                        
                        <div class="item">
                            <div class="col-md-12 text-center">
                                <img  src="imagenes/red/integrantes/fotos/costarica/AlejandraSanchez.png" alt="...">
                            </div>
                            <div class="col-md-12 carousel-caption carousel-captionInt">
                                <h3>Alejandra Sanchéz Flores</h3>
                                <h4>Coordinación Educativa y Cultural Centroamericana CECC/SICA</h4>
                                <p class="text-justify">Ingeniera en informática. Labora para la CECC/SICA como encargada de Tecnología y Comunicación.
                                    <br>Actualmente cursa Licenciatura en Ingeniería Informática con énfasis en Administración de Proyectos.</p>
                            </div>
                        </div>   
                        <!--Colaborador 6-->                        
                        <div class="item">
                            <div class="col-md-12 text-center">
                                <img  src="imagenes/red/integrantes/fotos/costarica/ElizabethFigueroa.png" alt="...">
                            </div>
                            <div class="col-md-12 carousel-caption carousel-captionInt">
                                <h3>Elizabeth Figueroa Fallas</h3>
                                <h4>Ministerio de Educación Pública de Costa Rica<br>
                                    Dirección de Desarrollo Curricular. <br>
                                    Asesora Nacional de Matemática, Departamento de Primero y Segundo Ciclos.
                                </h4>
                                <p class="text-justify">Licenciada en Ciencias de la Educación con Énfasis en la Enseñanza de la Matemática. Maestría en Administración Educativa y en Educación. Labora en el Ministerio de Educación Pública desde el 2001 y en la Dirección de Desarrollo Curricular desde 2012.</p>
                            </div>
                        </div>                        
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carouselCostaRica" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carouselCostaRica" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--fin modal Costa Rica-->
<script>
    function saleMouseInte() {
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