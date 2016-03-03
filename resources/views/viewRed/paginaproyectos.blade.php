@section('titleRedmite')
Proyectos
@stop
@extends('indexRed')
@section('menuRedmite')
@include('viewRed.seccionheader')
@endsection
@section('cuerpoRedmite')

<div class="row" style="margin-top: 5%;">        
    <div class="row fondo_Obscuro">
        <div class="col-md-12 text-center text-uppercase">
            <p class="pleca">Proyectos</p>
        </div>
    </div>
    <link rel="stylesheet" href="css/red/estiloRed3.css">
    <!-- Carousel -->
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10" id="carousel-bounding-box">
                <div class="carousel slide carousel-proyectos" id="myCarouselProyecto">

                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="active item" data-slide-number="0">
                            <img src="imagenes/red/proyectos/bannersproyectos/1erencuentro.jpg">
                        </div>
                        <div class="item" data-slide-number="1">
                            <img src="imagenes/red/proyectos/bannersproyectos/ventanaeducativa.jpg">
                        </div>

                        <div class="item" data-slide-number="2">
                            <img src="imagenes/red/proyectos/bannersproyectos/pedagogiadigital.jpg">
                        </div>
                    </div><!-- Carousel nav -->
                </div>
                <a  data-slide="prev" href="#myCarouselProyecto" class="left carousel-control circuloFlecha" >‹</a>
                <a data-slide="next" href="#myCarouselProyecto" class="right carousel-control circuloFlecha controlDerechoCarousel">›</a>
            </div>
            <div class="col-md-1"></div>
        </div>

        <!-- Slide-content de Textos -->
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8" id="carousel-text"></div>

            <div id="slide-content" style="display: none;">
                <div  id="slide-content-0">
                    <h2>1. Primer encuentro </h2>
                    <p style="text-align: justify;">El pasado Encuentro de Investigadores, Evaluadores y Técnicos en el Diseño de Recursos
                        Educativos, realizado del 28 al 30 de octubre de 2015, en San José, Costa Rica, tuvo como 
                        objetivo desarrollar líneas estratégicas para la producción de recursos para apoyo del 
                        docente, que puedan contribuir a disminuir deficiencias académicas en las áreas de 
                        español y matemáticas de educación básica en la región mesoamericana. Participaron  
                        profesionales educativos, en representación de los ministerios de educación de 
                        Guatemala, El Salvador, Honduras, República Dominicana, Costa Rica y México.
                    </p>
                    <P style="text-align: justify;">
                        La realización del evento estuvo a cargo de la Dirección General de Televisión Educativa de 
                        México (DGTV), la Coordinación de Educación y Cultura de Centroamérica (CECC/SICA), la 
                        Agencia Mexicana de Cooperación Internacional para el Desarrollo (AMEXCID) y el 
                        Ministerio de Educación de Costa Rica. 
                    </p>
                    <p style="text-align: justify;">
                        Como punto de partida en consenso de los países participantes se concluyeron los 
                        siguientes puntos:
                    </p>
                    <ul>
                        <li>Desarrollar una Red Mesoamericana de investigación que produzca elementos
                            para fortalecer a la educación de la región, a través de propuestas sobre nuevas 
                            metodologías y enfoques de enseñanza y aprendizaje.</li>
                        <li>Contribuir al diseño y desarrollo de contenidos curriculares mesoamericanos para
                            el robustecimiento de la plataforma Ventana Educativa.</li>
                        <li>Generar un prototipo metodológico para la producción de contenidos educativos
                            ligados a la lectura y matemáticas, en la enseñanza básica en la región.</li>
                        <li>Presentación del proyecto Centro América Lee y el fortalecimiento de la Caja
                            Viajera.</li>
                    </ul>
                   <!--<p class="sub-text">October 24 2014 - <a href="#">Continuar leyendo</a></p>-->
                </div>

                <div id="slide-content-1">
                    <h2>2. Ventana Educativa</h2>
                    <a name="tema1"></a>
                    <p style="text-align: justify;">Es una plataforma digital de gestión y distribución de contenidos educativos multimedia, alineados
                        a los programas educativos de nivel básico, que sirven como sistema de soporte para brindar 
                        educación a distancia y apoyo al  docente, lo cual favorece a la cohesión social e inclusión 
                        educativa de la región Mesoamericana.
                    </p>
                    
                     <ul>
                        <li>Libros digitales</li>
                        <li>Contenido educativo audiovisual</li>
                        <li>Aplicaciones y juegos educativos</li>
                        <li>Recursoseducativos multimedia</li>
                        <li>Objetos de aprendizaje</li>
                        <li>Información educativa</li>
                    </ul>
                    <p>Dirigido a:</p>
                    <ul>
                        <li>Alumnos: libros de texto tendrán video, aplicaciones y juegos interactivos.</li>
                        <li>Profesores: materiales didácticos y herramientas de gestión escolar.</li>
                        <li>Padres de familia: acceso contenido educativo de apoyo en casa.</li>
                        <li>Población en general con intereses académicos</li>
                    </ul>
                    
                   <!--<p class="sub-text">October 24 2014 - <a href="#">Continuar leyendo</a></p>-->
                </div>

                <div id="slide-content-2">
                    <h2>3. Ecosistema Digital de Aprendizaje</h2>
                    <a name="tema1"></a>
                    <p style="text-align: justify;">Es un entorno digital conformado por los proyectos desarrollados desde México: Ventana 
                        Educativa, Canal de Televisión Satelital Iberoamericano y la Plataforma MéxicoX, mismos que son 
                        orientados al uso y aprovechamiento de las Tecnologías de la Información y Comunicación en la 
                        educación.  Su objetivo general es brindar nuevos modelos de enseñanza y aprendizaje basados en 
                        pedagogía digital, así como brindar elementos de alfabetización digital mediante contenidos 
                        multimedia y material audiovisual que permitan generar una sociedad más equitativa e inclusiva.
                    </p>
                    <!--<p class="sub-text">October 24 2014 - <a href="#">Continuar leyendo</a></p>-->
                </div>

            </div>
            <div class="col-md-2"></div>
        </div> 
        <!-- Slide-content de Textos -->
        <br><br>
    </div>
</div>

<script>

    jQuery(document).ready(function ($) {

        $('#myCarouselProyecto').carousel({
            interval: 5000
        });

        $('#carousel-text').html($('#slide-content-0').html());

//Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click(function () {
            var id_selector = $(this).attr("id");
            var id = id_selector.substr(id_selector.length - 1);
            var id = parseInt(id);
            $('#myCarouselProyecto').carousel(id);
        });


// When the carousel slides, auto update the text
        $('#myCarouselProyecto').on('slid.bs.carousel', function (e) {
            var id = $('.item.active').data('slide-number');
            $('#carousel-text').html($('#slide-content-' + id).html());
        });

//Obtener texto de dirección
        var URL = document.location.hash;
        var proyecto = URL.substr(URL.indexOf("#") + 1, 1);

//Elegir diapositiva de carousel dependiendo opción recibida
        switch (proyecto) {
            case '0':
                $('#myCarouselProyecto').carousel(0);
                break;
            case '1':
                $('#myCarouselProyecto').carousel(1);
                break;
            case '2':
                $('#myCarouselProyecto').carousel(2);
                break;
            default:
                $('#myCarouselProyecto').carousel(0);
                break;
        }
    })
</script>

@include('viewRed.seccionpie')
@stop
