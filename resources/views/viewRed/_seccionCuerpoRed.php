<div class="row fondo_Obscuro">
    <div class="col-md-12" style="padding:0px;">
        <div id="carousel-2" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-2" data-slide-to="0" class="active" ></li>
                <li data-target="#carousel-2" data-slide-to="1"></li>
                <li data-target="#carousel-2" data-slide-to="2"></li>
                <li data-target="#carousel-2" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox" style="margin:0px;">
                <div class="item active">
                    <center>
                        <!--<img class="img-responsive" src="imagenes/red/Banners/1.jpg" alt="..."/> http://172.16.101.33/ventana-educativa-2016/public/-->
                        {{ HTML::image('imagenes/red/Banners/1.jpg','banner1', array('class'=>'image-responsive'))}}
                        <div class="carousel-caption">
                        </div>
                    </center>
                </div>
                <div class="item">
                    <center>
                        <!--<img class="img-responsive" src="imagenes/red/Banners/2.jpg" alt="..."/> imagenes/red/1600-x-650.jpg-->
                        {{ HTML::image('imagenes/red/Banners/2.jpg','banner2', array('class'=>'image-responsive'))}}
                        <div class="carousel-caption">
                        </div>
                    </center>
                </div>
                <div class="item">
                    <center>
                        <!--<img class="img-responsive" src="imagenes/red/Banners/banner-3.jpg" alt="..."/> http://placehold.it/1600x500-->
                        {{ HTML::image('imagenes/red/Banners/banner-3.jpg','banner3', array('class'=>'image-responsive'))}}
                        <div class="carousel-caption">
                        </div>
                    </center>
                </div>
                <div class="item">
                    <center>
                        <!--<img class="img-responsive" src="imagenes/red/Banners/banner-4.jpg" alt="..."/>-->
                        {{ HTML::image('imagenes/red/Banners/banner-4.jpg','banner4', array('class'=>'image-responsive'))}}
                        <div class="carousel-caption">
                        </div>
                    </center>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-2" role="button" data-slide="prev" onclick="reiniciaBarra()">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-2" role="button" data-slide="next" onclick="reiniciaBarra()">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<div class="row fondo_Claro">
    <div class="col-xs-12 col-sm-12 col-md-12 progress-container" style="padding:0px;">
        <div class="progress active"  style="margin:0px;">
            <div id="indicador" class="progress-bar"></div>
        </div>
    </div>
</div>
<div class="row fondo_Obscuro">
    <div class="col-md-12 text-center text-uppercase">
        <h2> Áreas Temáticas</h2>
    </div>
</div>
<div class="row fondo_Claro">
    <div class="col-md-12">
        <div class="division">
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
        <table title="Redes de conocimiento y aprendizaje" data-toggle="popover" data-placement="right" data-trigger="hover" 
               data-content="Proponer modelos educativos acordes con los problemas y planteamientos teóricos, tales como: 
               la teoría de las organizaciones para conformar comunidades educativas virtuales, representación y creación 
               de conocimiento distribuido, aprendizaje colaborativo, redes de repositorios de conocimiento y de objetos de aprendizaje.<br><br>
               Se identifican las siguientes líneas:<br>
               <ul>
               <li>Redes sociales para la educación. </li>
               <li>El docente como generador del cambio: la educación digital y los retos en la región mesoamericana.</li>
               </ul>
               ">
            <tr>
                <td style="padding-left:60px;"><p> </p></td>
                <td class="imgTabla">
                    <!--<img class="img-responsive" alt="imagen fija" src="imagenes/red/areasTematicas/RedesConocimiento.png"/>-->
                    {{ HTML::image('imagenes/red/areasTematicas/RedesConocimiento.png','imagen fija', array('class'=>'image-responsive'))}}
                </td>
                <td class="txtTabla"><h3><strong>Redes de conocimiento y aprendizaje</strong></h3>
                </td>
            </tr>
        </table>
    </div>
    <div class="col-sm-6 col-md-4">
        <table class="popover-inner" title="Modelos y ambientes educativos" data-toggle="popover" data-placement="bottom" data-trigger="hover" 
               data-content="Esta área abarca las fases de investigación, fundamentación, desarrollo y evaluación de los 
               modelos y ambientes educativos, basados en tecnologías de información y comunicación.<br><br>
               Se identifican las siguientes líneas:<br>
               <ul>
               <li>Innovación, adaptación e integración de los sistemas educativos tecnológicos.</li>
               <li>Diseño y desarrollo de sistemas educativos innovadores.</li>
               </ul>
               ">
            <tr>
                <td style="padding-left:60px;"><p> </p></td>
                <td class="imgTabla">
                    <!--<img class="img-responsive" alt="imagen fija" src="imagenes/red/areasTematicas/ambientesEducativos.png"/>-->
                    {{ HTML::image('imagenes/red/areasTematicas/ambientesEducativos.png','imagen fija', array('class'=>'image-responsive'))}}
                </td>
                <td class="txtTabla"><h3><strong>Modelos y ambientes educativos</strong></h3>
                </td>
            </tr>
        </table>
    </div>
    <div class="col-sm-6 col-md-4">
        <table title="Gestion y calidad de programas educativos" data-toggle="popover" data-placement="left" data-trigger="hover" 
               data-content="Sus propósitos son el estudio y comparación de modelos de gestión institucional para el uso de las Tecnologías 
               de la Información y Comunicación (TIC) en el sistema, así como para generar criterios e indicadores basados en la recuperación 
               y documentación de buenas prácticas internacionales y regionales. De igual manera, identificar las problemáticas de los procesos 
               de gestión y aseguramiento de la calidad.<br>
               Se identifican las siguientes líneas:<br><br>
               <ul>
               <li>Gestión de sistemas educativos con articulación de las modalidades y entornos físicos y virtuales.</li>
               <li>Evaluación y calidad en sistemas y ambientes educativos.</li>
               <li>Competencias docentes y directivas para la innovación educativa.</li>
               </ul>
               ">
            <tr>
                <td style="padding-left:60px;"><p> </p></td>
                <td class="imgTabla">
                    <!--<img class="img-responsive" alt="imagen fija" src="imagenes/red/areasTematicas/Gestioncalidad.png"/>-->
                    {{ HTML::image('imagenes/red/areasTematicas/Gestioncalidad.png','imagen fija', array('class'=>'image-responsive'))}}
                </td>
                <td class="txtTabla"><h3><strong>Gestion y calidad de programas educativos</strong></h3>
                </td>
            </tr>
        </table>
    </div>
</div>
<div class="row fondo_Claro">
    <div class="division">
    </div>
</div>
<div class="row fondo_Claro">
    <div class="col-sm-6 col-md-4 col-md-offset-2">
        <table title="Multimedia y desarrollo educativo" data-toggle="popover" data-placement="right" data-trigger="hover" 
               data-content="Se explicarán y analizarán  las variables que intervienen en los procesos educativos, entre ellos: el desarrollo cognitivo, 
               afectivo y social, que contribuyen con el desempeño de estudiantes, docentes y directivos. Asimismo, el impacto del desarrollo de software, 
               objetos de aprendizaje, simuladores y laboratorios educativos; así como su incidencia en la calidad de los sistemas  educativos de la región 
               mesoamericana.<br>
               En esta línea se incluyen proyectos específicos relacionados con:<br><br>
               <ul>
               <li>Desarrollo, implementación y evaluación de materiales y recursos educativos digitales.</li>
               <li>Construcción y administración de repositorios y plataformas educativas.</li>
               <li>Educación mediada por tecnología y su contribución pedagógica.</li>
               </ul>
               ">
            <tr>
                <td class="imgTabla">
                    <!--<img class="img-responsive" alt="imagen fija" src="imagenes/red/areasTematicas/Multimedia.png"/>-->
                    {{ HTML::image('imagenes/red/areasTematicas/Multimedia.png','imagen fija', array('class'=>'image-responsive'))}}
                </td>
                <td class="txtTabla"><h3><strong>Multimedia y desarrollo educativo</strong></h3>
                </td>
            </tr>
        </table>
    </div>
    <div class="col-sm-6 col-md-4">
        <table class="text-justify" title="Politica Educativa y cambio social" data-toggle="popover" data-placement="left" data-trigger="hover" 
               data-content="Analizar la convergencia y articulación de las políticas públicas orientadas a la inserción de Tecnologías de la 
               Información y Comunicación (TIC) en la educación básica, en los ámbitos internacional, nacional e institucional.<br><br>
               En esta línea se incluyen proyectos específicos relacionados con:<br>
               <ul>
               <li>Gobierno, política social y educativa.</li>
               <li>Educación democrática.</li>
               <li>Alfabetización e inclusión digital.</li>
               <li>Ciudadanía digital.</li>
               <li>Pedagogía digital.</li>
               <li>Estudiantes y uso de las TIC.</li>
               <li>Análisis de costo beneficios y oportunidades de acceso para la educación mediada por tecnología.</li>
               </ul>
               ">
            <tr>
                <td class="imgTabla">
                    <!--<img class="img-responsive" alt="imagen fija" src="imagenes/red/areasTematicas/PoliticaEducativa.png"/>-->
                    {{ HTML::image('imagenes/red/areasTematicas/PoliticaEducativa.png','imagen fija', array('class'=>'image-responsive'))}}
                </td>
                <td class="txtTabla"><h3><strong>Politica Educativa y cambio social</strong></h3>
                </td>
            </tr>
        </table>
    </div>
</div>
<div class="row fondo_Claro">
    <div class="col-md-12">
        <div class="division">
        </div>
    </div>
</div>
<div class="row fondo_Obscuro">
    <div class="col-md-12 text-center text-uppercase">
        <h2> Proyectos </h2>
    </div>
</div>
<div class="row fondo_Claro text-center" style="background-image:url(imagenes/red/proyectos/fondo-proyectos.jpg);">
    <div class="col-md-12">
        <div class="division">
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
        <center>
            <div class="thumbnail marcoMorado"> <!--homologa-->
                <a href="#">
                    <!--<img class="img-responsive img-rounded" style="padding-top:10px;" src="imagenes/red/proyectos/primerEncuentro.jpg" alt="..."/> http://placehold.it/250x250-->
                    {{ HTML::image('imagenes/red/proyectos/primerEncuentro.jpg','imagen fija', array('class'=>'image-responsive img-rounded', 'style' =>'padding-top:10px;'))}}
                </a>
                <div class="caption">
                </div>
            </div>
        </center>
    </div>
    <div class="col-sm-6 col-md-4">
        <center>
            <div class="thumbnail marcoMorado"> <!-- 376x371-->
                <a href="#">
                    <!--<img class="img-responsive img-rounded imgAbajo10" src="imagenes/red/proyectos/ventanaEducativa.jpg" alt="..."/>-->
                    {{ HTML::image('imagenes/red/proyectos/ventanaEducativa.jpg','imagen fija', array('class'=>'image-responsive img-rounded imgAbajo10'))}}
                </a>
                <div class="caption">
                </div>
            </div>
        </center>
    </div>
    <div class="col-sm-6 col-md-4">
        <center>
            <div class="thumbnail marcoMorado"><!--homologa-->
                <a href="#">
                    <!--<img class="img-responsive img-rounded imgAbajo10"src="imagenes/red/proyectos/ecosistema.jpg" alt="..."/>-->
                    {{ HTML::image('imagenes/red/proyectos/ecosistema.jpg','imagen fija', array('class'=>'image-responsive img-rounded imgAbajo10'))}}
                </a>
                <div class="caption">
                </div>
            </div>
        </center>
    </div>
    <div class="col-sm-12 col-md-12">
        <center>
            <a href="#"> 
                <!--<img class="img-responsive img-rounded imgAbajo30" src="imagenes/red/proyectos/boton-ver-todos.png" alt="..."/>-->
                {{ HTML::image('imagenes/red/proyectos/boton-ver-todos.png','imagen fija', array('class'=>'image-responsive img-rounded imgAbajo30'))}}
            </a>
        </center>
    </div>
    <div class="col-md-12">
        <div class="division">
            <!--	***********************************************		-->
        </div>
    </div>
</div>
<div class="row fondo_Obscuro">
    <div class="col-md-12 text-center text-uppercase">
        <h2> Modelo de Usabilidad Pedagógica de las TIC</h2>
    </div>
</div>
<div class="row fondo_Claro">
    <div class="col-md-12">
        <div class="division">
            <!--	***********************************************		-->
        </div>
    </div>
    <div class="col-md-3">
        <h4>Desripcion de seccion Desripcion de seccion Desripcion de seccion Desripcion de seccion Desripcion de seccion</h4>
        <h4><small>Comentario</small></h4>
    </div>
    <div class="col-md-3">
        <h3>Funcionalidad educativa</h3>
    </div>
    <div class="col-md-3">
        <h3>Saberes digitales básicos</h3>
    </div>
    <div class="col-md-3">
        <h4>Desripcion de seccion Desripcion de seccion Desripcion de seccion Desripcion de seccion Desripcion de seccion</h4>
        <h4><small>Comentario</small></h4>
    </div>
    <div class="col-md-12">
        <div class="division">
        </div>
    </div>
    <div class="col-md-3">
        <h4>Desripcion de seccion Desripcion de seccion Desripcion de seccion Desripcion de seccion Desripcion de seccion</h4>
        <h4><small>Comentario</small></h4>
    </div>
    <div class="col-md-3">
        <h3>Disposición y expectativas docentes</h3>
    </div>
    <div class="col-md-3">
        <h3>Apropiación e incorporación educativa</h3>
    </div>
    <div class="col-md-3">
        <h4>Desripcion de seccion Desripcion de seccion Desripcion de seccion Desripcion de seccion Desripcion de seccion</h4>
        <h4><small>Comentario</small></h4>
    </div>
    <div class="col-md-12">
        <div class="division">
        </div>
    </div>
</div>
<div class="row fondo_Obscuro">
    <div class="col-md-12 text-center text-uppercase">
        <h2> Nuestros integrantes </h2>
    </div>
</div>
<div class="row fondo_Claro">
    <div class="col-md-12">
        <div class="division">
        </div>
    </div>
    <div class="col-md-10 col-md-offset-1">
        <div id="carousel-3" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-3" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-3" data-slide-to="1"></li>
                <li data-target="#carousel-3" data-slide-to="2"></li>
                <li data-target="#carousel-3" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-2 col-md-offset-2">
                            <div class="thumbnail">
                                <!--<img class="img-responsive img-rounded" src="http://placehold.it/150x200" alt="..."/>-->
                                {{ HTML::image('http://placehold.it/150x200','imagen fija', array('class'=>'image-responsive img-rounded'))}}
                                <div class="caption">
                                    <h4>Nombre Colaborador</h4>
                                    <p>Resumen de descripción</p>
                                    <button type="button" class="btn btn-link">Blog</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-2">
                            <div class="thumbnail">
                                <!--<img class="img-responsive img-rounded" src="http://placehold.it/150x200" alt="..."/>-->
                                {{ HTML::image('http://placehold.it/150x200','imagen fija', array('class'=>'image-responsive img-rounded'))}}
                                <div class="caption">
                                    <h4>Nombre Colaborador</h4>
                                    <p>Resumen de descripción</p>
                                    <button type="button" class="btn btn-link">Blog</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-2">
                            <div class="thumbnail">
                                <!--<img class="img-responsive img-rounded" src="http://placehold.it/150x200" alt="..."/>-->
                                {{ HTML::image('http://placehold.it/150x200','imagen fija', array('class'=>'image-responsive img-rounded'))}}
                                <div class="caption">
                                    <h4>Nombre Colaborador</h4>
                                    <p>Resumen de descripción</p>
                                    <button type="button" class="btn btn-link">Blog</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-2">
                            <div class="thumbnail">
                                <!--<img class="img-responsive img-rounded" src="http://placehold.it/150x200" alt="..."/>-->
                                {{ HTML::image('http://placehold.it/150x200','imagen fija', array('class'=>'image-responsive img-rounded'))}}
                                <div class="caption">
                                    <h4>Nombre Colaborador</h4>
                                    <p>Resumen de descripción</p>
                                    <button type="button" class="btn btn-link">Blog</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-2 col-md-offset-2">
                            <div class="thumbnail">
                                <!--<img class="img-responsive img-rounded" src="http://placehold.it/150x200" alt="..."/>-->
                                {{ HTML::image('http://placehold.it/150x200','imagen fija', array('class'=>'image-responsive img-rounded'))}}
                                <div class="caption">
                                    <h4>Nombre Colaborador</h4>
                                    <p>Resumen de descripción</p>
                                    <button type="button" class="btn btn-link">Blog</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-2">
                            <div class="thumbnail">
                                <!--<img class="img-responsive img-rounded" src="http://placehold.it/150x200" alt="..."/>-->
                                {{ HTML::image('http://placehold.it/150x200','imagen fija', array('class'=>'image-responsive img-rounded'))}}
                                <div class="caption">
                                    <h4>Nombre Colaborador</h4>
                                    <p>Resumen de descripción</p>
                                    <button type="button" class="btn btn-link">Blog</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-2">
                            <div class="thumbnail">
                                <!--<img class="img-responsive img-rounded" src="http://placehold.it/150x200" alt="..."/>-->
                                {{ HTML::image('http://placehold.it/150x200','imagen fija', array('class'=>'image-responsive img-rounded'))}}
                                <div class="caption">
                                    <h4>Nombre Colaborador</h4>
                                    <p>Resumen de descripción</p>
                                    <button type="button" class="btn btn-link">Blog</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-2">
                            <div class="thumbnail">
                                <!--<img class="img-responsive img-rounded" src="http://placehold.it/150x200" alt="..."/>-->
                                {{ HTML::image('http://placehold.it/150x200','imagen fija', array('class'=>'image-responsive img-rounded'))}}
                                <div class="caption">
                                    <h4>Nombre Colaborador</h4>
                                    <p>Resumen de descripción</p>
                                    <button type="button" class="btn btn-link">Blog</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-2 col-md-offset-2">
                            <div class="thumbnail">
                                <!--<img class="img-responsive img-rounded" src="http://placehold.it/150x200" alt="..."/>-->
                                {{ HTML::image('http://placehold.it/150x200','imagen fija', array('class'=>'image-responsive img-rounded'))}}
                                <div class="caption">
                                    <h4>Nombre Colaborador</h4>
                                    <p>Resumen de descripción</p>
                                    <button type="button" class="btn btn-link">Blog</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-2">
                            <div class="thumbnail">
                                <!--<img class="img-responsive img-rounded" src="http://placehold.it/150x200" alt="..."/>-->
                                {{ HTML::image('http://placehold.it/150x200','imagen fija', array('class'=>'image-responsive img-rounded'))}}
                                <div class="caption">
                                    <h4>Nombre Colaborador</h4>
                                    <p>Resumen de descripción</p>
                                    <button type="button" class="btn btn-link">Blog</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-2">
                            <div class="thumbnail">
                                <!--<img class="img-responsive img-rounded" src="http://placehold.it/150x200" alt="..."/>-->
                                {{ HTML::image('http://placehold.it/150x200','imagen fija', array('class'=>'image-responsive img-rounded'))}}
                                <div class="caption">
                                    <h4>Nombre Colaborador</h4>
                                    <p>Resumen de descripción</p>
                                    <button type="button" class="btn btn-link">Blog</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-2">
                            <div class="thumbnail">
                                <!--<img class="img-responsive img-rounded" src="http://placehold.it/150x200" alt="..."/>-->
                                {{ HTML::image('http://placehold.it/150x200','imagen fija', array('class'=>'image-responsive img-rounded'))}}
                                <div class="caption">
                                    <h4>Nombre Colaborador</h4>
                                    <p>Resumen de descripción</p>
                                    <button type="button" class="btn btn-link">Blog</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-2 col-md-offset-2">
                            <div class="thumbnail">
                                <!--<img class="img-responsive img-rounded" src="http://placehold.it/150x200" alt="..."/>-->
                                {{ HTML::image('http://placehold.it/150x200','imagen fija', array('class'=>'image-responsive img-rounded'))}}
                                <div class="caption">
                                    <h4>Nombre Colaborador</h4>
                                    <p>Resumen de descripción</p>
                                    <button type="button" class="btn btn-link">Blog</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-2">
                            <div class="thumbnail">
                                <!--<img class="img-responsive img-rounded" src="http://placehold.it/150x200" alt="..."/>-->
                                {{ HTML::image('http://placehold.it/150x200','imagen fija', array('class'=>'image-responsive img-rounded'))}}
                                <div class="caption">
                                    <h4>Nombre Colaborador</h4>
                                    <p>Resumen de descripción</p>
                                    <button type="button" class="btn btn-link">Blog</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-2">
                            <div class="thumbnail">
                                <!--<img class="img-responsive img-rounded" src="http://placehold.it/150x200" alt="..."/>-->
                                {{ HTML::image('http://placehold.it/150x200','imagen fija', array('class'=>'image-responsive img-rounded'))}}
                                <div class="caption">
                                    <h4>Nombre Colaborador</h4>
                                    <p>Resumen de descripción</p>
                                    <button type="button" class="btn btn-link">Blog</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-2">
                            <div class="thumbnail">
                                <!--<img class="img-responsive img-rounded" src="http://placehold.it/150x200" alt="..."/>-->
                                {{ HTML::image('http://placehold.it/150x200','imagen fija', array('class'=>'image-responsive img-rounded'))}}
                                <div class="caption">
                                    <h4>Nombre Colaborador</h4>
                                    <p>Resumen de descripción</p>
                                    <button type="button" class="btn btn-link">Blog</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-3" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-3" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<div class="row fondo_Claro">
    <div class="division">

    </div>
</div>
<div class="row fondo_Claro text-justify">
    <div class="col-md-12">
        <div class="division">
        </div>
    </div>
    <div class="col-md-3 col-md-offset-1">
        <h3>Retos Regionales</h3>
        <ul>
            <li>Ser un espacio mesoamericano que permita compartir las experiencias, conocimientos y perspectivas entre los miembros de la Red. </li>
            <li>Reconocer el poder de las tecnologías de la información y comunicación (TIC), para promover el intercambio de conocimientos, 
                la cooperación técnica y el impulso a la investigación educativa, en favor de la región mesoamericana.</li>
            <li>Proporcionar a la comunidad educativa -estudiantes, docentes y  padres de familia- la posibilidad de participar 
                activamente en la creación de contenidos educativos, con la finalidad de consolidar una ciudadanía digital.</li>
            <li>Promover estrategias educativas de alcance mesoamericano para el desarrollo, integración y adopción de las tecnologías 
                de la información y comunicación (TIC).</li>
            <li>Generar investigación aplicada a las deficiencias académicas comunes en las áreas de matemáticas y español.</li>
            <li>Crear instrumentos de evaluación para determinar el impacto del uso de las TIC en educación básica.</li>
            <li>Desarrollar modelos de pedagogía digital que orienten la creación, gestión y categorización de los contenidos 
                educativos que se difundan en la plataforma digital Ventana Educativa.</li>
        </ul>
    </div>
    <div class="col-md-4">
        <h3>Sitios de Interés</h3>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div class="col-md-3">
        <!--<img class="img-responsive img-rounded" style="width:150px; height:48px;" src="imagenes/red/Logotipos/facebook.png" alt="..."/>-->
        {{ HTML::image('imagenes/red/Logotipos/facebook.png','facebook', array('class'=>'image-responsive img-rounded','style'=>'width:150px; height:48px;'))}}
        <div>Contenido Facebook.</div>
        <img class="img-responsive img-rounded" style="width:150px; height:48px;" src="imagenes/red/Logotipos/twitter.png" alt="..."/>
        {{ HTML::image('imagenes/red/Logotipos/twitter.png','twitter', array('class'=>'image-responsive img-rounded','style'=>'width:150px; height:48px;'))}}
        <div>Contenido Twitter.</div>

    </div>
</div>
<div class="row fondo_Claro">
    <div class="division">
    </div>
</div>
<!--div class="row fondo_Obscuro">
        <div class="division">
        </div>
</div-->
<div class="row fondo_footer1">
    <div class="division">
    </div>
    <div class="col-md-2 col-md-offset-1">
        <!--<img class="img-responsive img-rounded" src="imagenes/red/LogoRed/logoNegativo.png" alt="..."/>-->
        {{ HTML::image('imagenes/red/LogoRed/logoNegativo.png','logo negativo', array('class'=>'image-responsive img-rounded'))}}
        <br>
    </div>
    <div class="col-md-2">
        <h4 class="text-uppercase">Colaboradores</h4>
        <br>
        <!--<img class="img-responsive img-rounded" style="width:150px; height:50px;" src="imagenes/red/footer/amexid.png"/>-->
        {{ HTML::image('imagenes/red/footer/amexid.png','amexid', array('class'=>'img-responsive img-rounded', 'style'=>'width:150px; height:50px;'))}}
        <br>
        <h4>CECC/SICA</h4>
        <h4>CSUCA</h4>
        <h4>TELEVISIÓN EDUCATIVA</h4>
    </div>
    <div class="col-md-3">
        <h4 class="text-uppercase">Contáctanos</h4>
        <table>
            <tr>
                <td class="imgTecho">
                    <!--<img class="img-rounded" style="align:flex-start; width:14px; height:20px;" src="imagenes/red/footer/localizacion.png"/>-->
                    {{ HTML::image('imagenes/red/footer/localizacion.png','localizacion', array('class'=>'img-rounded', 'style'=>'align:flex-start; width:14px; height:20px;'))}}
                </td>
                <td>
                    <p>Av. Circunvalación s/n, esquina Tabiqueros,<br>
                        Col. Morelos, Del. Venustiano Carranza.<br>
                        C.P. 15270, Ciudad de México.</p>
                </td>
            </tr>
            <tr>
                <td class="imgTecho">
                    <!--<img class="img-responsive img-rounded" style="align:flex-start; width:20px; height:20px;" src="imagenes/red/footer/telefono.png"/>-->
                    {{ HTML::image('imagenes/red/footer/telefono.png','telefono', array('class'=>'img-responsive img-rounded', 'style'=>'align:flex-start; width:20px; height:20px;'))}}
                </td>
                <td>
                    <p>(55) 3601 8100 <br>
                        01 800 2284 883 <br>
                        01 866 5729 837
                    </p>							
                </td>
            </tr>
            <tr>
                <td class="imgTecho">
                    <!--<img class="img-responsive img-rounded" style="width:20px; height:20px;" src="imagenes/red/footer/mail.png"/>-->
                    {{ HTML::image('imagenes/red/footer/mail.png','mail', array('class'=>'img-responsive img-rounded', 'style'=>'width:20px; height:20px;'))}}
                </td>
                <td>
                    <p> contacto@redmesoamericana.com</p>
                </td>
            </tr>
        </table>
    </div>
    <div class="col-md-3">
        <h4 class="text-uppercase">Tags</h4><br>
        <p>Investigación Colaboración Mesoamérica<br>
            tecnología Educación Matemáticas Español<br>
            Indicadores educativos Metodologías pedagógicas
            Docentes procesos formativos pedagogía digital</p>
        <br>
        <h4	class="text-uppercase">newsletter</h4>
    </div>
</div>
<div class="row fondo_footer1">
    <div class="col-md-3 col-md-offset-1">
        <!--<img class="img-responsive img-rounded" style="float:left;" src="http://placehold.it/60x60"/>-->
        {{ HTML::image('http://placehold.it/60x60','imagen fija', array('class'=>'image-responsive img-rounded','style'=>'float:left;'))}}
       <!--<img class="img-responsive img-rounded" style="float:left;" src="http://placehold.it/60x60"/>-->
        {{ HTML::image('http://placehold.it/60x60','imagen fija', array('class'=>'image-responsive img-rounded','style'=>'float:left;'))}}
       <!--<img class="img-responsive img-rounded" style="float:left;" src="http://placehold.it/60x60"/>-->
        {{ HTML::image('http://placehold.it/60x60','imagen fija', array('class'=>'image-responsive img-rounded','style'=>'float:left;'))}}
    </div>
    <div class="col-md-4">
    </div>
    <div class="col-md-3">
        <form class="form-inline">
            <div class="form-group">
                <input type="email" class="form-control" id="correoElectronico" placeholder="direccion@servidor.com">
                <button type="submit" class="btn btn-default"> Envía </button>
            </div>
        </form>
    </div>
</div>
<div class="row fondo_footer2">
    <div class="col-md-10 col-md-offset-1">
        <br>
        <p>Proyecto alineado al Programa Mesoamericano de Cooperación 2015 - 2016. <br>
            Desarrollado por Dirección General de Televisión Educativa.
        </p>
    </div>
    <div class="col-md-1 text-center">
        <br>
        <a class="nav up-arrow" href="#pag_principal" data-toggle="tooltip" title="ARRIBA">
            <!--<img class="img-responsive img-rounded" src="http://placehold.it/50x50" alt="..."/>-->
            {{ HTML::image('http://placehold.it/50x50','imagen fija', array('class'=>'image-responsive'))}}
            <!--span class="glyphicon glyphicon-triangle-top"></span-->
        </a>
        <br>
    </div>
</div>	
<script src="{{url('js/principal.js')}}"></script>
<!--/div-->