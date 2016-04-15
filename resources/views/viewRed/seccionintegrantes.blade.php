<div class="row" style="background-image:url('{{ asset('imagenes/red/integrantes/gradiente.jpg') }}')">
    <div class="col-md-12 fondo_Obscuro">
        <div class="col-md-12 text-center text-uppercase">
            <p class="pleca"> Nuestros integrantes </p>
        </div>
    </div>
    <div class="col-md-6">
        <!--<img name="imagenMapa_n"  src="imagenes/red/integrantes/gris.png"  border="5px" id="imagenMapa" class="mapaCentroAmerica img-responsive" usemap="#mapa_n" alt="" />-->
        {{ HTML::image('imagenes/red/integrantes/gris.png','integrantes', array('name'=>'imagenMapa_n','id'=>'imagenMapa', 'border'=>'5px','class' =>'mapaCentroAmerica img-responsive', 'usemap'=>'#mapa_n'))}}
        <map name="mapa_n" id="mapa">         
            <area alt="Colombia" onmouseover="entraPais(1)" onmouseout="saleMouseInte();" href="#" data-keyboard="true" data-toggle="modal" shape="poly" coords="330,279,347,262,347,226,378,187,394,230,433,238,431,274,414,279,414,319,366,292"/>
            <area alt="Costa Rica" onmouseover="entraPais(2)" onmouseout="saleMouseInte();" href="#modalCostaRica" shape="poly" data-toggle="modal" coords="265,192,290,182,308,208,307,223,291,216"/>
            <area alt="Dominicana" onmouseover="entraPais(3)" onmouseout="saleMouseInte();" href="#modalRepublicaDominicana" shape="poly" data-toggle="modal" coords="379,130,389,111,414,114,433,130"/>
            <area alt="El Salvador" onmouseover="entraPais(4)" onmouseout="saleMouseInte();" href="#modalSalvador" shape="poly" data-toggle="modal" coords="237,173,243,155,254,183"/>
            <area alt="Guatemala" onmouseover="entraPais(5)" onmouseout="saleMouseInte();" href="#modalGuatemala" shape="poly" data-toggle="modal" coords="214,162,240,128,249,143,237,173"/>
            <area alt="Honduras" onmouseover="entraPais(6)" onmouseout="saleMouseInte();" href="#modalHonduras" shape="poly" data-toggle="modal" coords="242,156,247,142,290,146,253,183"/>
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
                <!--<h3 class="modal-title modal-titleInt text-center">México</h3>-->
                <button type="button" class="close closeInt" data-dismiss="modal" aria-hidden="true">X</button>
            </div>
            <div class="modal-body">
                <div id="carouselMexico" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators" style="top:120%;">
                        <li data-target="#carouselMexico" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselMexico" data-slide-to="1" class="active"></li>
                        <li data-target="#carouselMexico" data-slide-to="2" class="active"></li>
                        <li data-target="#carouselMexico" data-slide-to="3" class="active"></li>
                        <li data-target="#carouselMexico" data-slide-to="4" class="active"></li>                        
                        <li data-target="#carouselMexico" data-slide-to="5" class="active"></li>  
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner carousel-innerInt">
                        <!-- Integrante 1 -->
                        <div class="item active">
                            <div class="col-md-12 text-center">
                                <!--<img  src="imagenes/red/integrantes/fotos/mexico/RubenEdel.png" alt="...">-->
                                {{ HTML::image('imagenes/red/integrantes/fotos/mexico/RubenEdel.png','Colaborador México 1')}}                            </div>
                            <div class="col-md-12 carousel-caption carousel-captionInt">
                                <h3>Rubén Edel Navarro</h3>
                                <h4>Investigador de tiempo completo<br>
                                    Universidad Veracruzana</h4>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
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
                                    <div class="col-md-1"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Integrante 2 -->
                        <div class="item ">
                            <div class="col-md-12 text-center">
                                <!--<img  src="imagenes/red/integrantes/fotos/mexico/BrendaLuzColorado.png" alt="...">-->
                                {{ HTML::image('imagenes/red/integrantes/fotos/mexico/BrendaLuzColorado.png','Colaborador México 2')}}  
                            </div>
                            <div class="col-md-12 carousel-caption carousel-captionInt">
                                <h3>Brenda Luz Colorado Aguilar</h3>
                                <h4>Asesora técnico pedagógico<br>
                                    Secretaría de Educación de Veracruz (SEV)</h4>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <p class="text-justify">Asesora técnico pedagógico de la Secretaría de Educación de Veracruz (SEV) 
                                            y profesora de asignatura de la Universidad Veracruzana. Miembro de la Red Temática, Reto 3. Tecnologías 
                                            de Información y Comunicación del Consejo Nacional de Ciencia y Tecnología (CONACYT), experiencia en 
                                            impartición de cursos en el nivel de licenciatura, maestría y doctorado en ambientes presenciales y virtuales.
                                            Como parte de su línea de investigación sobre la educación mediada por las TIC, ha publicado el libro 
                                            Usabilidad pedagógica de las TIC, artículos científicos y participado como ponente en congresos nacionales 
                                            e internacionales. Forma parte del equipo internacional de entrenadores profesionales del software de análisis 
                                            de datos cualitativos: MAXQDA.</p>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Integrante 3 -->
                        <div class="item ">
                            <div class="col-md-12 text-center">
                                <!--<img  src="imagenes/red/integrantes/fotos/mexico/RamonaImelda.png" alt="...">-->
                                {{ HTML::image('imagenes/red/integrantes/fotos/mexico/RamonaImelda.png','Colaborador México 3')}}  
                            </div>
                            <div class="col-md-12 carousel-caption carousel-captionInt">
                                <h3>Ramona Imelda García López</h3>
                                <h4>Profesora investigadora titular C<br>
                                    Departamento de Educación</h4>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <p class="text-justify">Licenciada en Ciencias de la Educación y Maestra en Docencia
                                            e Investigación Educativa por el Instituto Tecnológico de Sonora; Doctora en Educación 
                                            con especialidad en Tecnología Instruccional y Educación a Distancia por la Nova 
                                            Southeastern University de Miami, Florida. Ha impartido clases desde nivel preescolar
                                            hasta doctorado desde 1992 a la fecha; en el Instituto Tecnológico de Sonora ha sido 
                                            Coordinadora de las Carreras de Licenciado en Ciencias de la Educación y Profesional 
                                            Asociado en Desarrollo Infantil; Jefa del Departamento de Psicología y Educación, 
                                            Directora Académica de la Unidad Guaymas, Coordinadora de Gestión del Conocimiento. 
                                            Actualmente, profesora investigadora titular C del Departamento de Educación, responsable 
                                            del Doctorado en Sistemas y Ambientes Educativos. Líder de la Línea de Investigación del 
                                            Cuerpo Académico de Tecnología Educativa en la Sociedad del Conocimiento. Ha participado 
                                            en Congresos nacionales e internacionales con ponencias y conferencias relacionadas con 
                                            la tecnología educativa y la gestión del conocimiento; ha publicado en distintas revistas 
                                            nacionales e internacionales, así como coautora de algunos capítulos de libros. 
                                            Ha participado en distintos proyectos de investigación, tanto como responsable como 
                                            colaboradora, a nivel institucional e interinstitucional.</p>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Integrante 4 -->
                        <div class="item ">
                            <div class="col-md-12 text-center">
                                {{ HTML::image('imagenes/red/integrantes/fotos/mexico/yadiranavarrorangel.png','Colaborador México 4')}}  
                            </div>
                            <div class="col-md-12 carousel-caption carousel-captionInt">
                                <h3>Yadira Navarro Rangel</h3>
                                <h4>Coordinadora del Doctorado en Sistema y Ambientes Educativos<br>
                                    Programa Interinstitucional, Sede BUAP</h4>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <p class="text-justify">Doctora en Educación por la Universidad Autónoma de Aguascalientes (UAA) y Miembro del Sistema Nacional de Investigadores Nivel 1.
                                            Participó en el programa para lideres emergentes en educación en línea del Institute for Engaged Leadership in Online Learning (IELOL) from Penn State University y forma parte de equipo institucional de la BUAP para el proyecto “Comunidades Digitales para el Aprendizaje en Educación Superior” CODAES.
                                            Es miembro del Consejo Mexicano de Investigación Educativa (COMIE), de la Red de Investigación e Innovación en Sistemas y Ambientes Educativos (RIISAE) del Espacio Común de Educación Superior a Distancia (ECOESAD), de la Red TIC del CONACyT y de la Red en Tecnologías Educativas del Programa para el Desarrollo Profesional Docente (PRODEP)
                                            Actualmente es la Coordinadora del Doctorado en Sistema y Ambientes Educativos. Programa Interinstitucional, Sede BUAP.
                                            Además de los Entornos Virtuales de Aprendizaje y las comunidades de práctica, ha realizado investigaciones en temas de seguimiento de egresados y trayectorias académicas, evaluación docente, Escuelas Normales y formación docente, Federalismo y descentralización de la educación México, expansión de la cobertura de secundaria con enfoque de género. Cuenta con publicaciones en dichos temas.
                                            </p>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Integrante 5 -->
                        <div class="item ">
                            <div class="col-md-12 text-center">
                                {{ HTML::image('imagenes/red/integrantes/fotos/mexico/rafaelcordobadelvalle.png','Colaborador México 5')}}  
                            </div>
                            <div class="col-md-12 carousel-caption carousel-captionInt">
                                <h3>Rafael Córdoba Del Valle</h3>
                                <h4>Colaborador del Doctorado en Sistemas y Ambientes Educativos</h4>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <p class="text-justify">Doctor en Sistemas y Ambientes Educativos por la Universidad Veracruzana y candidato a investigador del Consejo Nacional de Ciencia y Tecnología (CONACyT). Es miembro del Consejo de Transformación Educativa y miembro del cuerpo académico Gestión Tecnológica: Aplicación en Educación y Negocios. Desarrolla investigación en la línea de Entornos Virtuales de Aprendizaje en la que se destaca su participación como ponente en diversos congresos nacionales e internacionales. </p>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Integrante 6 -->
                        <div class="item ">
                            <div class="col-md-12 text-center">
                                    {{ HTML::image('imagenes/red/integrantes/fotos/mexico/rosadelcarmenfloresmacias.png','Colaborador México 6')}}  
                            </div>
                            <div class="col-md-12 carousel-caption carousel-captionInt">
                                <h3>Rosa del Carmen Flores Macías</h3>
                                <h4>Pertenece al Sistema Nacional de Investigadores</h4>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <p class="text-justify">Investigadora en el campo de la Psicología Educativa desde hace más de 30 años, sus publicaciones abarcan diferentes temas; pertenece al Sistema Nacional de Investigadores. Una de sus líneas de investigación es el desarrollo de entornos virtuales de aprendizaje para promover la competencia lectora en educación básica, media superior y superior. Así mismo, tiene investigación sobre los procesos de enseñanza y aprendizaje en internet, así como sobre la atención a las dificultades de los alumnos. Sitio web: http://tutoriaaprendizajeadolescentes.org/</p>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
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
                <!--<h3 class="modal-title modal-titleInt text-center">Costa Rica</h3>-->
                <button type="button" class="close closeInt" data-dismiss="modal" aria-hidden="true">X</button>
            </div>
            <div class="modal-body">
                <div id="carouselCostaRica" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators" style="top:120%;">
                        <li data-target="#carouselCostaRica" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselCostaRica" data-slide-to="1"></li>
                        <li data-target="#carouselCostaRica" data-slide-to="2"></li>
                        <li data-target="#carouselCostaRica" data-slide-to="3"></li>
                        <li data-target="#carouselCostaRica" data-slide-to="4"></li>
                        <li data-target="#carouselCostaRica" data-slide-to="5"></li>
                        <li data-target="#carouselCostaRica" data-slide-to="6"></li>
                        <li data-target="#carouselCostaRica" data-slide-to="7"></li>
                        <li data-target="#carouselCostaRica" data-slide-to="8"></li>
                        <li data-target="#carouselCostaRica" data-slide-to="9"></li>
                        <li data-target="#carouselCostaRica" data-slide-to="10"></li>

                    </ol>
                    <!-- Wrapper for slides -->
                    <!--Colaborador 1-->
                    <div class="carousel-inner carousel-innerInt">
                        <div class="item active">
                            <div class="col-md-12 text-center">
                                <!--<img  src="imagenes/red/integrantes/fotos/costarica/AnaGuilma.png" alt="...">-->
                                {{ HTML::image('imagenes/red/integrantes/fotos/costarica/AnaGuilma.png','integrante cost1')}} 
                            </div>
                            <div class="col-md-12 carousel-caption carousel-captionInt">
                                <h3>Ana Gilma Guevara Bello</h3>
                                <h4>Asesora Regional de Español</br>
                                    Ministerio de Educación Pública de Costa Rica </h4>
                                <!--<br>Dirección Regional de Educación Zona Norte Norte<br>Asesora Regional de Español<br></h4>-->
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <p class="text-justify">Licenciada en Ciencias de la Educación con énfasis en Docencia para ejercer la 
                                            Enseñanza del Castellano y la Literatura. Labora en el área educativa desde hace 13 
                                            años. Ha sido Profesora de Español en diferentes centros educativos. Actualmente, es 
                                            Asesora Regional de Español en la Dirección Regional de Educación Zona Norte.</p>
                                    </div> 
                                    <div class="col-md-1"></div>
                                </div>
                            </div>

                        </div>
                        <!--Colaborador 2-->
                        <div class="item">
                            <div class="col-md-12 text-center">
                                <!--<img  src="imagenes/red/integrantes/fotos/costarica/AnnyGonzalez.png" alt="...">-->
                                {{ HTML::image('imagenes/red/integrantes/fotos/costarica/AnnyGonzalez.png','integrante cost2')}} 
                            </div>
                            <div class="col-md-12 carousel-caption carousel-captionInt">
                                <h3>Anny González Gairaud </h3>
                                <h4>Coordinadora de Proyectos</br>
                                    Coordinación Educativa y Cultural Centroamericana (CECC/SICA)                                  
                                </h4>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <p class="text-justify">Máster en Informática Educativa y Administración Educativa, Posgrado en Desarrollo Cognitivo en Ambientes Informáticos. Ha laborado en el área educativa como docente de Educación Primaria, Asesora Nacional y Jefatura del Ministerio de Educación de Costa Rica por más de 35 años. Diseñadora y ejecutora de Proyectos Educativos con Tecnología, Educación Popular Legal, Transformación de Bibliotecas escolares en Centros de Recursos para el Aprendizaje. Coordinadora del Proyecto Constitución nuestra: “Así como la Entendemos". Profesora Universitaria en Informática Educativa. Literatura Infantil Bilingüe, en la Universidad de LaSalle y Pepperdine California. <br>
                                            Actualmente se desempeña como Coordinadora de Proyectos Educativos de la CECC/SICA.
                                        </p>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>      
                            </div>
                        </div>
                        <!--Colaborador 3-->
                        <div class="item">
                            <div class="col-md-12 text-center">
                                <!--<img  src="imagenes/red/integrantes/fotos/costarica/LiliamCorrales.png" alt="...">-->
                                {{ HTML::image('imagenes/red/integrantes/fotos/costarica/LiliamCorrales.png','integrante cost3')}} 
                            </div>
                            <div class="col-md-12 carousel-caption carousel-captionInt">
                                <h3>Lilliam Corrales Torres</h3>
                                <h4>Asesora Pedagógica de Español </br>
                                    Ministerio de Educación Pública - Costa Rica                              
                                </h4>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <p class="text-justify">Licenciada en educación con énfasis en I y II ciclos.  Licenciada en docencia.  Licenciada en 
                                            educación con énfasis en Español.  Máster en administración educativa. <br>
                                            Ha laborado en el sistema educativo público desde el año 2002; desempeñando el puesto de 
                                            docente en educación primaria, profesora de español en educación secundaria. En el sistema 
                                            educativo privado como profesora universitaria en diversas casas de enseñanza del país.</p>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                            </div>
                        </div>
                        <!--Colaborador 4-->                        
                        <div class="item">
                            <div class="col-md-12 text-center">
                                <!--<img  src="imagenes/red/integrantes/fotos/costarica/RandallCastro.png" alt="...">-->
                                {{ HTML::image('imagenes/red/integrantes/fotos/costarica/RandallCastro.png','integrante cost4')}} 
                            </div>
                            <div class="col-md-12 carousel-caption carousel-captionInt">
                                <h3>Rándall Castro Madrigal</h3>
                                <h4>Asesor Regional de Español - Costa Rica</br>
                                    Ministerio de Educación Pública (MEP)
                                </h4>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
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
                                <div class="col-md-1"></div>
                            </div>
                        </div>
                        <!--Colaborador 5-->                        
                        <div class="item">
                            <div class="col-md-12 text-center">
                                <!--<img  src="imagenes/red/integrantes/fotos/costarica/AlejandraSanchez.png" alt="...">-->
                                {{ HTML::image('imagenes/red/integrantes/fotos/costarica/AlejandraSanchez.png','integrante cost5')}} 
                            </div>
                            <div class="col-md-12 carousel-caption carousel-captionInt">
                                <h3>Alejandra Sánchez Flores</h3>
                                <h4>Encargada de Tecnología y Comunicación<br>
                                    Coordinación Educativa y Cultural Centroamericana CECC/SICA</h4>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <p class="text-justify">Ingeniera en informática. Labora para la CECC/SICA como Encargada de Tecnología y Comunicación. 
                                            Actualmente cursa Licenciatura en Ingeniería Informática con énfasis en Administración de Proyectos.</p>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                            </div>
                        </div>
                        <!--Colaborador 6-->                        
                        <div class="item">
                            <div class="col-md-12 text-center">
                                <!--<img  src="imagenes/red/integrantes/fotos/costarica/ElizabethFigueroa.png" alt="...">-->
                                {{ HTML::image('imagenes/red/integrantes/fotos/costarica/ElizabethFigueroa.png','integrante cost6')}}
                            </div>
                            <div class="col-md-12 carousel-caption carousel-captionInt">
                                <h3>Elizabeth Figueroa Fallas</h3>
                                <h4>Asesora Nacional de Matemática, Departamento de Primero y Segundo Ciclos </br>
                                    Ministerio de Educación Pública de Costa Rica
                                </h4>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <p class="text-justify">Licenciada en Ciencias de la Educación con Énfasis en la Enseñanza de la Matemática. Maestría en Administración Educativa y en Educación. Labora en el Ministerio de Educación Pública desde el 2001 y en la Dirección de Desarrollo Curricular desde 2012.</p>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                            </div>                        
                        </div>

                        <!--Colaborador 7-->                        
                        <div class="item">
                            <div class="col-md-12 text-center">
                                <!--<img  src="imagenes/red/integrantes/fotos/costarica/JavierFranciscoBarquero.jpg" alt="...">-->
                                {{ HTML::image('imagenes/red/integrantes/fotos/costarica/JavierFranciscoBarquero.jpg','integrante cost7')}}
                            </div>
                            <div class="col-md-12 carousel-caption carousel-captionInt">
                                <h3>Javier Francisco Barquero Rodríguez</h3>
                                <h4>Asesor pedagógico de matemática<br>
                                    Dirección Regional de Puriscal
                                </h4>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <p class="text-justify">Licenciado en la enseñanza de la matemática de la Universidad de Costa Rica;
                                            desde 1993, asesor pedagógico de matemática en la Dirección Regional de Puriscal, tanto a nivel 
                                            de primaría como de secundaria. Ha trabajado en la Universidad de Costa Rica y en la Universidad 
                                            Estatal a Distancia impartiendo cursos de servicio de la escuela de matemática, así como cursos 
                                            de formación para futuros docentes de primaria. Ponente en Festival de Matemática Internacional 
                                            organizado en Costa Rica.</p>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                            </div>                        
                        </div>

                        <!--Colaborador 8-->                        
                        <div class="item">
                            <div class="col-md-12 text-center">
                                <!--<img  src="imagenes/red/integrantes/fotos/costarica/HermesMena.png" alt="...">-->
                                 {{ HTML::image('imagenes/red/integrantes/fotos/costarica/HermesMena.png','integrante cost8')}}
                            </div>
                            <div class="col-md-12 carousel-caption carousel-captionInt">
                                <h3>Hermes Mena Picado</h3>
                                <h4>Asesor Regional de Matemática</br>
                                    Ministerio de Educación Pública
                                </h4>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <p class="text-justify">Licenciado en Ciencias de la Educación con Énfasis en la Enseñanza de la Matemática, 
                                            con Maestría en Didáctica de la Matemática para Educación Primaria. Docente de educación 
                                            secundaria y universitaria, actualmente se desempeña como Asesor Regional de Matemática en la 
                                            Dirección Regional Educativa de Aguirre.</p>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                            </div>                        
                        </div>

                        <!--Colaborador 9-->                        
                        <div class="item">
                            <div class="col-md-12 text-center">
                                <!--<img  src="imagenes/red/integrantes/fotos/costarica/XiniaLizethZuñiga.png" alt="...">-->
                                {{ HTML::image('imagenes/red/integrantes/fotos/costarica/XiniaLizethZuñiga.png','integrante cost9')}}                            </div>
                            <div class="col-md-12 carousel-caption carousel-captionInt">
                                <h3>Xinia Lizeth Zúñiga Esquivel</h3>
                                <h4>Asesora de Matemáticas<br>
                                    Ministerio de Educación Pública de Costa Rica
                                </h4>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <p class="text-justify">Licenciada en enseñanza de la Matemática, Master en enseñanza de la Matemática en I y 
                                            II ciclo, Licenciada en docencia con énfasis en Enseñanza de la Matemática.  Ha sido 
                                            docente de matemática en educación secundaria.  Actualmente trabaja con docentes de 
                                            Matemáticas de Educación Primaria y Educación Secundaria.</p>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                            </div>                        
                        </div>

                        <!--Colaborador 10-->                        
                        <div class="item">
                            <div class="col-md-12 text-center">
                                <!--<img  src="imagenes/red/integrantes/fotos/costarica/RichardNavarro.png" alt="...">-->
                                {{ HTML::image('imagenes/red/integrantes/fotos/costarica/RichardNavarro.png','integrante cost10')}}
                            </div>
                            <div class="col-md-12 carousel-caption carousel-captionInt">
                                <h3>Richard Navarro Garro</h3>
                                <h4>Asesor nacional de Español<br>
                                    Ministerio de Educación Pública, Costa Rica.
                                </h4>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <p class="text-justify">Doctorado en ciencias de la educación con énfasis en Investigación
                                            Educativa.  Licenciado en ciencias de la educación con énfasis en I y 
                                            II Ciclos y énfasis en la enseñanza del Español. Licenciado y máster 
                                            en Administración Educativa. Labora en el área de educación desde 
                                            hace 15 años.  Ha sido docente de educación primaria, profesor de 
                                            Español para secundaria, administrador educativo y profesor 
                                            universitario.  Actualmente se desempeña como asesor nacional de 
                                            Español en el Departamento de Primero y Segundo Ciclos de la 
                                            Dirección de Desarrollo Curricular del MEP.</p>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                            </div>                        
                        </div>

                        <!--Colaborador 11-->                        
                        <div class="item">
                            <div class="col-md-12 text-center">
                                <!--<img  src="imagenes/red/integrantes/fotos/costarica/YorlenyRocioRojas.png" alt="...">-->
                                {{ HTML::image('imagenes/red/integrantes/fotos/costarica/YorlenyRocioRojas.png','integrante cost11')}}
                            </div>
                            <div class="col-md-12 carousel-caption carousel-captionInt">
                                <h3>Yorleny Rocío Rojas Jiménez</h3>
                                <h4>Asesora Pedagógica de Matemática<br>
                                    Ministerio de Educación Pública de Costa Rica
                                </h4>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <p class="text-justify">Bachiller y Licenciada en la Enseñanza de la Matemática en Secundaria. Bachiller
                                            y Licenciada en Ciencias de la Educación con énfasis en I y II Ciclos, Primaria. 
                                            Licenciada en Ciencias de la Educación con énfasis en Docencia. Licenciada en 
                                            Ciencias de la Educación con énfasis en Administración Educativa. UNED 
                                            (Universidad Estatal a Distancia de Costa Rica). Docente en el área de matemática
                                            en primaria y universidad. Actualmente, asesora pedagógica en matemática.</p>
                                    </div>
                                    <div class="col-md-1"></div>
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
</div>
<!--fin modal Costa Rica-->

<!-- Modal República Dominicana-->
<div id="modalRepublicaDominicana" class="modal modal-fullscreen fade centraCont" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <!--<h3 class="modal-title modal-titleInt text-center">República Dominicana</h3>-->
                <button type="button" class="close closeInt" data-dismiss="modal" aria-hidden="true">X</button>
            </div>
            <div class="modal-body">
                <div id="carouselDominicana" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators" style="top:120%;">
                        <li data-target="#carouselDominicana" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselDominicana" data-slide-to="1"></li>                        
                    </ol>
                    <!-- Wrapper for slides -->
                    <!--Colaborador 1-->
                    <div class="carousel-inner carousel-innerInt">
                        <div class="item active">
                            <div class="col-md-12 text-center">
                                <!--<img  src="imagenes/red/integrantes/fotos/republicadominicana/EuniceImperio.png" alt="...">-->
                                {{ HTML::image('imagenes/red/integrantes/fotos/republicadominicana/EuniceImperio.png','integrante rep1')}}
                            </div>
                            <div class="col-md-12 carousel-caption carousel-captionInt">
                                <h3>Eunice Imperio Vicioso Melo</h3>
                                <h4>Profesora en el Área de Lengua Española</br>
                                    Instituto Superior de Formación Docente Salomé Ureña<br>
                                </h4>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <p class="text-justify">Licenciada en Educación mención Filosofía y Letras. Labora en el ámbito educativo desde hace 
                                            35 años. Ha obtenido grados de: maestría en Lingüística aplicada a la enseñanza del Español; 
                                            maestría en Formación Inicial para el Cambio en la Práctica Pedagógica (Universidad de 
                                            Barcelona -ISFODOSU). Se desempeña como profesora en el área de Lengua Española en el 
                                            recinto Félix Evaristo Mejía, así como en la Escuela de Letras de la Universidad Autónoma de 
                                            Santo Domingo, en las cátedras de Teoría Literaria y Letras Básicas. Ha participado en la 
                                            planificación y facilitación del diplomado “Aprendiendo y construyendo procesos de 
                                            alfabetización para la vida”.  En convenio con el Centro Cultural Poveda (CCP) y el Ministerio 
                                            de Educación (MINERD). Además ha colaborado en la revisión y  elaboración de los nuevos 
                                            planes de estudios para las carreras de Lic. En Educación Básica y Educación Inicial en el 
                                            Instituto Salomé Ureña. En la actualidad es la coordinadora de la cátedra de Letras Básicas en 
                                            la Universidad Autónoma de Santo Domingo.</p>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                            </div>
                        </div>
                        <!--Colaborador 2-->
                        <div class="item">
                            <div class="col-md-12 text-center">
                                <!--<img  src="imagenes/red/integrantes/fotos/republicadominicana/RafaelDavidFranciscoVentura.png" alt="...">-->
                                {{ HTML::image('imagenes/red/integrantes/fotos/republicadominicana/RafaelDavidFranciscoVentura.png','integrante rep2')}}
                            </div>
                            <div class="col-md-12 carousel-caption carousel-captionInt">
                                <h3>Rafael David Francisco Ventura, M. A.</h3>
                                <h4>Profesor de Matemática </br>
                                    Instituto Superior de Formación Docente Salome Ureña (ISFODOSU) Santo
                                    Domingo</h4>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <p class="text-justify">Licenciado en Ciencias Física y Matemática en la Universidad O & M de 
                                            Santo Domingo, con maestría en matemática pura en la universidad 
                                            Tecnológica de Santiago UTESA y maestría en Formador de Formadores 
                                            de la universidad de Barcelona España. Profesor de grado, de postgrados 
                                            y coordinador del área de matemática del ISFODOSU. Experto en 
                                            aplicación de la TICs en la enseñanza aprendizaje de la matemática.</p>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                            </div> 
                        </div>                        
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carouselDominicana" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carouselDominicana" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--fin modal República Dominicana-->

<!-- Modal Panáma-->
<div id="modalPanama" class="modal modal-fullscreen fade centraCont" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <!--<h3 class="modal-title modal-titleInt text-center">Panamá</h3>-->
                <button type="button" class="close closeInt" data-dismiss="modal" aria-hidden="true">X</button>
            </div>
            <div class="modal-body">
                <div id="carouselPanama" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators" style="top:120%;">
                        <li data-target="#carouselPanama" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselPanama" data-slide-to="1" class="active"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner carousel-innerInt">
                        <!-- Colaborador 1 -->
                        <div class="item active">
                            <div class="col-md-12 text-center">
                                <!--<img  src="imagenes/red/integrantes/fotos/panama/IbzkaRodríguez.png" alt="...">-->
                                {{ HTML::image('imagenes/red/integrantes/fotos/panama/IbzkaRodríguez.png','integrante pan1')}}
                            </div>
                            <div class="col-md-12 carousel-caption carousel-captionInt">
                                <h3>Gibzka Rodríguez de Vernier</h3>
                                <h4>Supervisora Nacional de Matemáticas <br>
                                    Ministerio de Educación de Panamá
                                </h4>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <p class="text-justify">Licenciada y Profesora en Matemáticas. Maestría en Ciencias con  Especialización en Matemática
                                            Educativa y  Maestría en Desarrollo de Sistemas Educativos con Especialización en Supervisión y 
                                            Currículum. Con más de 35 años al servicio de la Educación como: Profesora del Nivel Secundario, 
                                            Subdirectora de Colegio de Educación Media,  Directora General de Educación, Directora Regional 
                                            de Educación, Representante de la Olimpiada Nacional de Matemática a nivel de Primaria y 
                                            Secundaria y  Coordinadora de diferentes  cursos y seminarios. Actualmente labora en la Dirección 
                                            Nacional de Educación Media Académica, como Supervisora Nacional de Matemáticas.</p>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Colaborador 2 -->
                        <div class="item ">
                            <div class="col-md-12 text-center">
                                <!--<img  src="imagenes/red/integrantes/fotos/panama/MarielaMendoza.png" alt="...">-->
                                 {{ HTML::image('imagenes/red/integrantes/fotos/panama/MarielaMendoza.png','integrante pan2')}}
                            </div>
                            <div class="col-md-12 carousel-caption carousel-captionInt">
                                <h3>Mariela Mendoza de Quezada</h3>
                                <h4>Supervisora Nacional de Español de Educación Básica General<br>
                                    Ministerio de Educación (MEDUCA)
                                </h4>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <p class="text-justify">Licenciada y Profesora en Educación con Especialización en Español con Maestría en 
                                            Investigación y Evaluación Educativa, Doctorado en Educación con Especialización en 
                                            Investigación, Labora en el área educativa desde hace cuarenta años. Ha sido Maestra de 
                                            Educación Primaria, Profesora de Educación Secundaria y Docente Universitaria de Pregrado y 
                                            Maestría. Capacitadora Nacional en diferentes campos educativos. Autora de diversos 
                                            proyectos nacionales e internacionales. Autora de poesías, ensayos y artículos educativos. 
                                            Actualmente es Supervisora Nacional de Español de Educación Básica General.</p>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carouselPanama" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carouselPanama" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--fin modal Panáma-->

<!-- Modal Guatemala-->
<div id="modalGuatemala" class="modal modal-fullscreen fade centraCont" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <!--<h3 class="modal-title modal-titleInt text-center">Guatemala</h3>-->
                <button type="button" class="close closeInt" data-dismiss="modal" aria-hidden="true">X</button>
            </div>
            <div class="modal-body">
                <div id="carouselGuatemala" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators" style="top:120%;">
                        <li data-target="#carouselGuatemala" data-slide-to="0" class="active"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner carousel-innerInt">
                        <div class="item active">
                            <div class="col-md-12 text-center">
                                <!--<img  src="imagenes/red/integrantes/fotos/guatemala/CarlotaCalito.png" alt="...">-->
                                {{ HTML::image('imagenes/red/integrantes/fotos/guatemala/CarlotaCalito.png','integrante gua1')}}
                            </div>
                            <div class="col-md-12 carousel-caption carousel-captionInt">
                                <h3>Carlota Calito de Alfaro</h3>
                                <h4>Profesional Técnico de la Dirección General de Gestión de Calidad Educativa<br>
                                    Ministerio de Educación de Guatemala
                                </h4>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <p class="text-justify">Licenciada en Pedagogía con orientación en Administración y Evaluación Educativa.  Labora en el 
                                            área educativa desde hace 35 años.  Ha sido docente y bibliotecaria. Participó en el proceso de 
                                            Transformación Curricular en el Marco de la Reforma Educativa en su país, especialmente en los 
                                            niveles inicial y preprimario; posee un post grado en Educación Infantil otorgado por el Instituto 
                                            Pedagógico Latinoamericano y Caribeño de la ciudad de la Habana, Cuba.  Se ha especializado en 
                                            el proceso de adquisición y  desarrollo de las competencias lectoras.  Por diez años se desempeñó 
                                            en el departamento de los niveles de educación inicial y preprimaria, en la Dirección de Gestión de 
                                            Calidad Educativa.  Actualmente, es Jefe del Departamento del Nivel de Educación Primaria y 
                                            coordina la Comisión Ejecutiva del Programa Nacional de Lectura.</p>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carouselGuatemala" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carouselGuatemala" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--fin modal Guatemala-->

<!-- Modal Honduras-->
<div id="modalHonduras" class="modal modal-fullscreen fade centraCont" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <!--<h3 class="modal-title modal-titleInt text-center">Guatemala</h3>-->
                <button type="button" class="close closeInt" data-dismiss="modal" aria-hidden="true">X</button>
            </div>
            <div class="modal-body">
                <div id="carouselHonduras" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators" style="top:120%;">
                        <li data-target="#carouselGuatemala" data-slide-to="0" class="active"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner carousel-innerInt">
                        <div class="item active">
                            <div class="col-md-12 text-center">
                                <!--<img  src="imagenes/red/integrantes/fotos/honduras/GladisOndinaGalindo.png" alt="...">-->
                                {{ HTML::image('imagenes/red/integrantes/fotos/honduras/GladisOndinaGalindo.png','integrante hon1')}}
                            </div>
                            <div class="col-md-12 carousel-caption carousel-captionInt">
                                <h3>Gladis Ondina Galindo Velásquez</h3>
                                <h4>Docente formador en el área de Español<br>
                                    Secretaría de Educación de Honduras
                                </h4>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <p class="text-justify">Licenciada en Educación Básica, colaboro con la Secretaría de Educación 
                                            de Honduras en las  áreas de  español y matemática. Labora en el Sistema Educativo Nacional 
                                            desde hace 32 años como docente en servicio, atendiendo el sexto grado en el Centro de 
                                            Educación Básico “Jorge J. Larach". Coordinadora Pedagógica del segundo ciclo, orientando al 
                                            personal docente en las dificultades que presentan. Capacitadora de la cooperativa de maestros 
                                            COACEHL en Honduras, sobre los diferentes enfoques, técnicas motivacionales y de conocimiento 
                                            aplicados en el Currículo Nacional Básico para brindar una educación de calidad y  obtener 
                                            del docente un cambio de actitud y mejores prácticas educativas. Autora de los  Textos del área 
                                            de comunicación en los campo de  Español “Aprende con éxito”  y  Educación Artística, “El Monarca”  
                                            de primero a sexto grado.</p>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carouselGuatemala" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carouselGuatemala" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--fin modal Honduras-->

<!-- Modal El salvador-->
<div id="modalSalvador" class="modal modal-fullscreen fade centraCont" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close closeInt" data-dismiss="modal" aria-hidden="true">X</button>
            </div>
            <div class="modal-body">
                <div id="carouselSalvador" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators" style="top:120%;">
                        <li data-target="#carouselSalvador" data-slide-to="0" class="active"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner carousel-innerInt">
                        <!-- Colaborador 1 -->
                        <div class="item active">
                            <div class="col-md-12 text-center">
                                <!--<img  src="imagenes/red/integrantes/fotos/panama/IbzkaRodríguez.png" alt="...">-->
                                {{ HTML::image('imagenes/red/integrantes/fotos/elsalvador/carlosrodriguezrivas.png','Integrante El Salvador 1')}}
                            </div>
                            <div class="col-md-12 carousel-caption carousel-captionInt">
                                <h3>Carlos Rodríguez Rivas</h3>
<!--                                <h4></h4>-->
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <p class="text-justify">Coordinador e investigador en educación del Centro Nacional de Investigaciones en Ciencias Sociales y Humanidades del Viceministerio de Ciencia y Tecnología de El Salvador. Coordinador del Plan Nacional de Formación de Docentes en Servicio en el Sector Público del área de ciencias sociales. Además es profesor de filosofía contemporánea en la Universidad de El Salvador. Tiene estudios de licenciatura en filosofía por la Universidad de El Salvador y ha realizado estudios de Maestría en Filosofía Iberoamericana en la Universidad Centroamericana "José Simeón Cañas". Su trabajo se concentra en historia intelectual, historia de la educación, epistemología y metodologías de la enseñanza de las ciencias sociales.</p>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carouselSalvador" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carouselSalvador" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--fin modal el Salvador-->

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