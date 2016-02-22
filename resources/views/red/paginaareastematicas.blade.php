@section('title')
Publicaciones
@stop
@extends('home')
@section('menu')
<!--<a name="redesconocimiento"></a>-->
@include('red.seccionheader')
@endsection
<div class="backpareatema"> 
    <div class="row" style="margin-top: 5%;" >        
        <div class="row fondo_Obscuro">
            <div class="col-md-12 text-center text-uppercase">
                <h2> Áreas Temáticas</h2>
            </div>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <table class="table table-responsive" style="margin-top: 5%;">
                <tr>
                    <td></br><img src="imagenes/red/areasTematicas/redesdeconocimientoyaprendizaje-blanco.png"></td> 
                <a name="redesconocimiento"></a>
                <td>
                    <ul class="txtAreasTematicas">
                        <li class="list-group-item-heading list-unstyled"><h3>Redes de conocimiento y aprendizaje</h3></li>
                        <p style="text-align: justify;">Proponer modelos educativos acordes con los problemas y planteamientos teóricos, tales como: la teoría de las organizaciones para conformar comunidades educativas virtuales, representación y creación de conocimiento distribuido, aprendizaje colaborativo, redes de repositorios de conocimiento y de objetos de aprendizaje.</p>
                        <p>Se identifican las siguientes líneas:</p>
                        <ul>
                            <li class="list-unstyled"><span class="glyphicon glyphicon-globe"></span>Redes sociales para la educación. </li>
                            <li class="list-unstyled"><span class="glyphicon glyphicon-globe"></span>El docente como generador del cambio: la educación digital y los retos en la región mesoamericana.</li>
                        </ul>
                    </ul>
                    <a name="gestion"></a>
                </td>
                </tr>
                <tr>
                    <td></br><img src="imagenes/red/areasTematicas/modelosyambienteseducativos-blanco.png"></td>
                    <td>
                        <ul class="txtAreasTematicas">                            
                            <li class="ist-group-item-heading list-unstyled"><h3>Modelos y ambientes educativos</h3></li>
                            <p style="text-align: justify;">Esta área abarca las fases de investigación, fundamentación, desarrollo y evaluación de los modelos y ambientes educativos, basados en tecnologías de información y comunicación.</p>
                            <p>Se identifican las siguientes líneas:</p>
                            <ul>
                                <li class="list-unstyled"><span class="glyphicon glyphicon-pencil"></span>Innovación, adaptación e integración de los sistemas educativos tecnológicos.</li>
                                <li class="list-unstyled"><span class="glyphicon glyphicon-pencil"></span>Diseño y desarrollo de sistemas educativos innovadores.</li>
                            </ul>
                        </ul>
                        
                    </td>
                </tr>
                <tr>
                    <td></br><img src="imagenes/red/areasTematicas/gestionycalidaddeprogramaseducativos-blanco.png"></td>
                    <td>
                        <ul  class="txtAreasTematicas">
                            <li class="ist-group-item-heading list-unstyled"><h3>Gestión y calidad de programas educativos</h3></li>
                            <p style="text-align: justify;">Sus propósitos son el estudio y comparación de modelos de gestión institucional para el uso de las Tecnologías de la Información y Comunicación (TIC) en el sistema, así como para generar criterios e indicadores basados en la recuperación y documentación de buenas prácticas internacionales y regionales. De igual manera, identificar las problemáticas de los procesos de gestión y aseguramiento de la calidad.</p>
                            <p>Se identifican las siguientes líneas:</p>
                            <ul>
                                <li class="list-unstyled"><span class="glyphicon glyphicon-ok"></span>Gestión de sistemas educativos con articulación de las modalidades y entornos físicos y virtuales.</li>
                                <li class="list-unstyled"><span class="glyphicon glyphicon-ok"></span>Evaluación y calidad en sistemas y ambientes educativos.</li>
                                <li class="list-unstyled"><span class="glyphicon glyphicon-ok"></span>Competencias docentes y directivas para la innovación educativa.</li>
                            </ul>
                        </ul>
                        <a name="multimedia"></a>                        
                    </td>
                </tr>
                <tr>
                    <td></br><img src="imagenes/red/areasTematicas/multimediaydesarrolloeducativo-blanco.png"></td>
                    <td>
                        <ul  class="txtAreasTematicas">
                            <li class="ist-group-item-heading list-unstyled"><h3>Multimedia y Desarrollo Educativo</h3></li>
                            <p style="text-align: justify;">Se explicarán y analizarán  las variables que intervienen en los procesos educativos, entre ellos: el desarrollo cognitivo, afectivo y social, que contribuyen con el desempeño de estudiantes, docentes y directivos. Asimismo, el impacto del desarrollo de software, objetos de aprendizaje, simuladores y laboratorios educativos; así como su incidencia en la calidad de los sistemas  educativos de la región mesoamericana.</p>
                            <p>En esta línea se incluyen proyectos específicos relacionados con:</p>
                            <ul>
                                <li class="list-unstyled"><span class="glyphicon glyphicon-filter"></span>Desarrollo, implementación y evaluación de materiales y recursos educativos digitales.</li>
                                <li class="list-unstyled"><span class="glyphicon glyphicon-filter"></span>Construcción y administración de repositorios y plataformas educativas.</li>
                                <li class="list-unstyled"><span class="glyphicon glyphicon-filter"></span>Educación mediada por tecnología y su contribución pedagógica.</li>
                            </ul>
                        </ul>  
                        <a name="politica"></a>
                    </td>
                </tr>
                <tr>
                    <td></br><img src="imagenes/red/areasTematicas/politicaeducativaycambiosocial-blanco.png"></td>
                    <td>
                        <ul  class="txtAreasTematicas">
                            <li class="ist-group-item-heading list-unstyled"><h3>Política Educativa y cambio social</h3></li>
                            <p style="text-align: justify;">Analizar la convergencia y articulación de las políticas públicas orientadas a la inserción de Tecnologías de la Información y Comunicación (TIC) en la educación básica, en los ámbitos internacional, nacional e institucional.</p>
                            <p>En esta línea se incluyen proyectos específicos relacionados con:</p>
                            <ul>
                                <li class="list-unstyled"><span class="glyphicon glyphicon-education"></span>Gobierno, política social y educativa.</li>
                                <li class="list-unstyled"><span class="glyphicon glyphicon-education"></span>Educación democrática.</li>
                                <li class="list-unstyled"><span class="glyphicon glyphicon-education"></span>Alfabetización e inclusión digital.</li>
                                <li class="list-unstyled"><span class="glyphicon glyphicon-education"></span>Ciudadanía digital.</li>
                                <li class="list-unstyled"><span class="glyphicon glyphicon-education"></span>Pedagogía digital.</li>
                                <li class="list-unstyled"><span class="glyphicon glyphicon-education"></span>Estudiantes y uso de las TIC.</li>
                                <li class="list-unstyled"><span class="glyphicon glyphicon-education"></span>Análisis de costo beneficios y oportunidades de acceso para la educación mediada por tecnología.</li>
                            </ul>
                        </ul> 
                        
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-md-2"></div>
    </div>
    </br>
</div>
@include('red.seccionpie')