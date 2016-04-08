@section('titleRedmite')
Publicaciones
@stop
@extends('indexRed')
@section('menuRedmite')
@include('viewRed.seccionheader')
@endsection
@section('cuerpoRedmite')

<div class="row">  <!--row inicial -->       
    <div class="col-md-12 fondo_Obscuro text-center text-uppercase">
        <p class="pleca">Publicaciones</p>
    </div>
    <br>
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="panel with-nav-tabs panel-default">
            <div class="panel-heading">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#todos" role="tab" data-toggle="tab">TODOS</a></li>
                    <li><a href="#mexico" role="tab" data-toggle="tab">MÉXICO</a></li>
                    <li><a href="#guatemala" role="tab" data-toggle="tab">GUATEMALA</a></li>
                    <li><a href="#elsalvador" role="tab" data-toggle="tab">EL SALVADOR</a></li>
                    <li><a href="#honduras" role="tab" data-toggle="tab">HONDURAS</a></li>
                    <li><a href="#nicaragua" role="tab" data-toggle="tab">NICARAGUA</a></li>
                    <li><a href="#costarica" role="tab" data-toggle="tab">COSTA RICA</a></li>
                    <li><a href="#panama" role="tab" data-toggle="tab">PANAMÁ</a></li>
                    <li><a href="#colombia" role="tab" data-toggle="tab">COLOMBIA</a></li>
                    <li><a href="#repdominicana" role="tab" data-toggle="tab">REP. DOMINICANA</a></li>
                </ul>
            </div>
            <div class="panel-body">
                <div class="tab-content">
                    <!--TODOS-->
                    <div class="tab-pane fade in active" id="todos">                        
                        <!--Mexico-->
                        <div class="row">
                            <br>
                            <div class="col-md-4 hvr-pulse-grow animated bounceIn">
                                <a href="{{url('publicacionesRed/mexico/cienciastecnologiasculturas.pdf')}}"  target="_blank">
                                    {{ HTML::image('publicacionesRed/mexico/imagenesthumbnails/mexico01.jpg','tecnologías y cultura', array('class'=>'image-responsive tamaho-thumbnail-publicaciones'))}}
                                </a>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item text-justify">Título: Ciencias, tecnologías y culturas</li>
                                    <li class="list-group-item text-justify">Autor: Silvia Fridman, Rubén Edel Navarro</li>
                                    <li class="list-group-item text-justify">Categoría: Educación y nuevas tecnologías</li>
                                    <li class="list-group-item text-justify"><a href="{{url('publicacionesRed/mexico/cienciastecnologiasculturas.pdf')}}" download="cienciasTecnologiasCulturas.pdf">
                                            Material de descarga</a></li>
                                </ul>
                            </div>

                            <div class="col-md-4 hvr-pulse-grow animated bounceIn">
                                <a href="{{url('publicacionesRed/mexico/forointerregionalinvestigacionsobreeva.pdf')}}" target="_blank">
                                    {{ HTML::image('publicacionesRed/mexico/imagenesthumbnails/mexico02.jpg','foro interregional', array('class'=>'image-responsive tamaho-thumbnail-publicaciones'))}}
                                </a>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item text-justify">Título: Foro Interregional de investigación sobre EVA</li>
                                    <li class="list-group-item text-justify">Autor: Rubén Edel Navarro, Manuel Juarez Pacheco, Yadira Navarro Rangel, María Soledad Ramírez Montoya </li>
                                    <li class="list-group-item text-justify">Categoría: Redes Academicas y Tecnologicas</li>
                                    <li class="list-group-item text-justify"><a href="{{url('publicacionesRed/mexico/forointerregionalinvestigacionsobreeva.pdf')}}" download="foroInterRegionalInvEVA.pdf">
                                            Material de descarga</a></li>
                                </ul>
                            </div>

                            <div class="col-md-4 hvr-pulse-grow animated bounceIn">
                                <a href="{{url('publicacionesRed/mexico/modelostecnoeducativos.pdf')}}" target="_blank">
                                    {{ HTML::image('publicacionesRed/mexico/imagenesthumbnails/mexico03.jpg','modelos educativos', array('class'=>'image-responsive tamaho-thumbnail-publicaciones'))}}
                                </a>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item text-justify">Título: Los modelos TecnoEducativos</li>
                                    <li class="list-group-item text-justify">Autor: Ismael Esquivel Gómez</li>
                                    <li class="list-group-item text-justify">Categoría: Aprendizaje del siglo XXI</li>
                                    <li class="list-group-item text-justify"><a href="{{url('publicacionesRed/mexico/modelostecnoeducativos.pdf')}}" download="modelosTecnoEducativos.pdf">
                                            Material de descarga</a></li>
                                </ul>
                            </div>
                        </div>
                        <br>

                        <!--Row 2 -->  
                        <div class="row">
                            <div class="col-md-4 hvr-pulse-grow animated bounceIn">
                                <a href="{{url('publicacionesRed/mexico/territorioseducación.pdf')}}" target="_blank">
                                    {{ HTML::image('publicacionesRed/mexico/imagenesthumbnails/mexico04.jpg','territorios educativos', array('class'=>'image-responsive tamaho-thumbnail-publicaciones'))}}
                                </a>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item text-justify">Título: Territorios de la Educación</li>
                                    <li class="list-group-item text-justify">Autor: Genaro Aguirre Aguilar, Rubén Edel Navarro</li>
                                    <li class="list-group-item text-justify">Categoría: Ambientes Educativos</li>
                                    <li class="list-group-item text-justify"><a href="{{url('publicacionesRed/mexico/territorioseducacion.pdf')}}" download="territoriosEducación.pdf">
                                            Material de descarga</a></li>
                                </ul>
                            </div>

                            <div class="col-md-4 hvr-pulse-grow animated bounceIn">
                                <a href="{{url('publicacionesRed/mexico/usabilidadpedagogicatic.pdf')}}" target="_blank">
                                    {{ HTML::image('publicacionesRed/mexico/imagenesthumbnails/mexico05.jpg','usabilidad pedagogica', array('class'=>'image-responsive tamaho-thumbnail-publicaciones'))}}
                                </a>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item text-justify">Título: Usabilidad Pedagogica de las TIC</li>
                                    <li class="list-group-item text-justify">Autor: Brenda Luz Colorado Aguilar,Rubén Edel Navarro</li>
                                    <li class="list-group-item text-justify">Categoría: Tecnologías de la Información y Comunicación</li>
                                    <li class="list-group-item text-justify"><a href="{{url('publicacionesRed/mexico/usabilidadpedagogicatic.pdf')}}" download="usabilidadPedagogicaTIC.pdf">
                                            Material de descarga</a></li>
                                </ul>
                            </div>
                        </div>
                        <hr>
                        <!--Fin México-->
                        <!--Guatemala-->
                        <div class="row">
                            <br>
                            <div class="col-md-4 hvr-pulse-grow animated bounceIn">
                                <a href="{{url('publicacionesRed/guatemala/contemosjuntosprogramanacionalmatematica.pdf')}}" target="_blank">
                                    {{ HTML::image('publicacionesRed/guatemala/imagenesthumbnails/guatemala01.jpg','programacin matematica', array('class'=>'image-responsive tamaho-thumbnail-publicaciones'))}}   
                                </a>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item text-justify">Título: Contemos Juntos_Programa Nacional de Matemática</li>
                                    <li class="list-group-item text-justify">Autor: Ministerio de Educación Guatemala</li>
                                    <li class="list-group-item text-justify">Categoría: Matemática</li>
                                    <li class="list-group-item text-justify"><a href="{{url('publicacionesRed/guatemala/contemosjuntosprogramanacionalmatematica.pdf')}}" download="contemosJuntosProgramanacioNacionalMatematica.pdf">
                                            Material de descarga</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4 hvr-pulse-grow animated bounceIn">
                                <a href="{{url('publicacionesRed/guatemala/enseñanzaaprendizajelectura.pdf')}}" target="_blank">
                                    {{ HTML::image('publicacionesRed/guatemala/imagenesthumbnails/guatemala02.jpg','aprendizaje lectura', array('class'=>'image-responsive tamaho-thumbnail-publicaciones'))}}   
                                </a>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item text-justify">Título: Enseñanza - aprendizaje de la lectura</li>
                                    <li class="list-group-item text-justify">Autor: Ministerio de Educación Guatemala</li>
                                    <li class="list-group-item text-justify">Categoría: Español</li>
                                    <li class="list-group-item text-justify"><a href="{{url('publicacionesRed/guatemala/enseñanzaaprendizajelectura.pdf')}}" download="enseñanzaAprendizajeLectura.pdf">
                                            Material de descarga</a></li>
                                </ul>
                            </div>
                        </div>
                        <hr> 
                        <!--Fin Guatemala-->
                        <!--El Salvador-->
                        <div class="row">
                            <br>
                            <div class="col-md-4 hvr-pulse-grow animated bounceIn">
                                <a href="{{url('publicacionesRed/elsalvador/enseñanzaaprendizajelectura.pdf')}}" target="_blank">
                                    {{ HTML::image('publicacionesRed/elsalvador/imagenesthumbnails/elsalvador01.jpg','aprendizaje lectura', array('class'=>'image-responsive tamaho-thumbnail-publicaciones'))}}
                                </a>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item text-justify">Título: Enseñanza - Aprendizaje de la Lectura</li>
                                    <li class="list-group-item text-justify">Autor: Ministerio de Educación El Salvador</li>
                                    <li class="list-group-item text-justify">Categoría: Español</li>
                                    <li class="list-group-item text-justify"><a href="{{url('publicacionesRed/elsalvador/enseñanzaaprendizajelectura.pdf')}}" download="enseñanzaAprendizajeLectura.pdf">
                                            Material de descarga</a></li>
                                </ul>
                            </div>
                        </div>
                        <hr>
                        <!--Fin El Salvador-->
                        <!--Honduras-->
                        <div class="row">
                            <br>
                            <div class="col-md-4 hvr-pulse-grow animated bounceIn">
                                <a href="{{url('publicacionesRed/honduras/expresioncomprensionlectora.pdf')}}" target="_blank">
                                    {{ HTML::image('publicacionesRed/honduras/imagenesthumbnails/honduras01.jpg','comprension lectora', array('class'=>'image-responsive tamaho-thumbnail-publicaciones'))}}
                                </a>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item text-justify">Título: Expresión y comprensión lectora</li>
                                    <li class="list-group-item text-justify">Autor: Gladis O. Galindo</li>
                                    <li class="list-group-item text-justify">Categoría: Español</li>
                                    <li class="list-group-item text-justify"><a href="{{url('publicacionesRed/honduras/expresioncomprensionlectora.pdf')}}" download="expresionComprensionLectora.pdf">
                                            Material de descarga</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4 hvr-pulse-grow animated bounceIn">
                                <a href="{{url('publicacionesRed/honduras/enseñanzaaprendizajematematicas.pdf')}}" target="_blank">
                                    {{ HTML::image('publicacionesRed/honduras/imagenesthumbnails/honduras02.jpg','enseñanza matematica', array('class'=>'image-responsive tamaho-thumbnail-publicaciones'))}}
                                </a>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item text-justify">Título: Enseñanza - aprendizaje de la matemática</li>
                                    <li class="list-group-item text-justify">Autor: Honduras</li>
                                    <li class="list-group-item text-justify">Categoría: Matemáticas</li>
                                    <li class="list-group-item text-justify"><a href="{{url('publicacionesRed/honduras/enseñanzaaprendizajematematicas.pdf')}}" download="enseñanzaAprendizajeMatemáticas.pdf">
                                            Material de descarga</a></li>
                                </ul>
                            </div>
                        </div>
                        <hr>
                        <!--Fin Honduras-->

                        <!----------- ******  Opción Nicaragua ****** -----> 
                        <!----------- ****** Termina Opción Nicaragua ****** -----> 


                        <!----------- ******  Opción Costa rica ****** -----> 
                        <!----------- ****** Termina Opción Costa Rica ****** -----> 


                        <!----------- ****** Panamá ****** ----->  
                        <div class="row">
                            <br>
                            <div class="col-md-4 hvr-pulse-grow animated bounceIn">
                                <a href="{{url('publicacionesRed/panama/españolmatematica.pdf')}}" target="_blank">
                                    {{ HTML::image('publicacionesRed/panama/imagenesthumbnails/panama01.jpg','español-matematica', array('class'=>'image-responsive tamaho-thumbnail-publicaciones'))}}
                                </a>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item text-justify">Título: Español y matemática</li>
                                    <li class="list-group-item text-justify">Autor: Gibzka de vernier, Mariela M. de Quezada</li>
                                    <li class="list-group-item text-justify">Categoría: Educación Básica</li>
                                    <li class="list-group-item text-justify"><a href="{{url('publicacionesRed/panama/españolmatematica.pdf')}}" download="españolMatematica.pdf">
                                            Material de descarga</a></li>
                                </ul>
                            </div>
                        </div>
                        <hr>
                        <!----------- ****** Fin Panamá ****** ----->  
                        <!----------- ******  Opción Colombia ****** ----->  
                        <!----------- ****** Termina Opción Colombia ****** ----->    


                        <!----------- ******  Rep. Dominicana ****** ----->    
                        <div class="row">
                            <br>
                            <div class="col-md-4 hvr-pulse-grow animated bounceIn">
                                <a href="{{url('publicacionesRed/repdominicana/compresionlectora.pdf')}}" target="_blank">
                                    {{ HTML::image('publicacionesRed/repdominicana/imagenesthumbnails/repdominicana01.jpg','comprension lectora', array('class'=>'image-responsive tamaho-thumbnail-publicaciones'))}}
                                </a>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item text-justify">Título: Comprensión lectora</li>
                                    <li class="list-group-item text-justify">Autor: Ma. Eunice I. Vicioso</li>
                                    <li class="list-group-item text-justify">Categoría: Español</li>
                                    <li class="list-group-item text-justify"><a href="{{url('publicacionesRed/panama/españolmatematica.pdf')}}" download="españolMatematica.pdf">
                                            Material de descarga</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4 hvr-pulse-grow animated bounceIn">
                                <a href="{{url('publicacionesRed/repdominicana/enseñanzaaprendizajematematica.pdf')}}" target="_blank">
                                    {{ HTML::image('publicacionesRed/repdominicana/imagenesthumbnails/repdominicana02.jpg','aprendizaje matematica', array('class'=>'image-responsive tamaho-thumbnail-publicaciones'))}}
                                </a>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item text-justify">Título: Enseñanza - aprendizaje de la matemática</li>
                                    <li class="list-group-item text-justify">Autor: Rafael David Francisco Ventura</li>
                                    <li class="list-group-item text-justify">Categoría: Matemática</li>
                                    <li class="list-group-item text-justify"><a href="{{url('publicacionesRed/repdominicana/enseñanzaaprendizajematematica.pdf')}}" download="enseñanzaAprendizajeMatemáticas.pdf">
                                            Material de descarga</a></li>
                                </ul>
                            </div>

                            <div class="col-md-1"></div> <!-- cierra table 2 -->
                        </div>

                        <!----------- ******  Fin Rep. Dominicana ****** ----->    
                    </div>
                    <!--FIN TODOS-->

                    <!--México-->
                    <div class="tab-pane fade" id="mexico">     
                        <div class="row">
                            <br>
                            <div class="col-md-4 hvr-pulse-grow animated bounceIn">
                                <a href="{{url('publicacionesRed/mexico/cienciastecnologiasculturas.pdf')}}"  target="_blank">
                                    {{ HTML::image('publicacionesRed/mexico/imagenesthumbnails/mexico01.jpg','tecnologías y cultura', array('class'=>'image-responsive tamaho-thumbnail-publicaciones'))}}
                                </a>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item text-justify">Título: Ciencias, tecnologías y culturas</li>
                                    <li class="list-group-item text-justify">Autor: Silvia Fridman, Rubén Edel Navarro</li>
                                    <li class="list-group-item text-justify">Categoría: Educación y nuevas tecnologías</li>
                                    <li class="list-group-item text-justify"><a href="{{url('publicacionesRed/mexico/cienciastecnologiasculturas.pdf')}}" download="cienciasTecnologiasCulturas.pdf">
                                            Material de descarga</a></li>
                                </ul>
                            </div>

                            <div class="col-md-4 hvr-pulse-grow animated bounceIn">
                                <a href="{{url('publicacionesRed/mexico/forointerregionalinvestigacionsobreeva.pdf')}}" target="_blank">
                                    {{ HTML::image('publicacionesRed/mexico/imagenesthumbnails/mexico02.jpg','foro interregional', array('class'=>'image-responsive tamaho-thumbnail-publicaciones'))}}
                                </a>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item text-justify">Título: Foro Interregional de investigación sobre EVA</li>
                                    <li class="list-group-item text-justify">Autor: Rubén Edel Navarro, Manuel Juarez Pacheco, Yadira Navarro Rangel, María Soledad Ramírez Montoya </li>
                                    <li class="list-group-item text-justify">Categoría: Redes Academicas y Tecnologicas</li>
                                    <li class="list-group-item text-justify"><a href="{{url('publicacionesRed/mexico/forointerregionalinvestigacionsobreeva.pdf')}}" download="foroInterRegionalInvEVA.pdf">
                                            Material de descarga</a></li>
                                </ul>
                            </div>

                            <div class="col-md-4 hvr-pulse-grow animated bounceIn">
                                <a href="{{url('publicacionesRed/mexico/modelostecnoeducativos.pdf')}}" target="_blank">
                                    {{ HTML::image('publicacionesRed/mexico/imagenesthumbnails/mexico03.jpg','modelos educativos', array('class'=>'image-responsive tamaho-thumbnail-publicaciones'))}}
                                </a>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item text-justify">Título: Los modelos TecnoEducativos</li>
                                    <li class="list-group-item text-justify">Autor: Ismael Esquivel Gómez</li>
                                    <li class="list-group-item text-justify">Categoría: Aprendizaje del siglo XXI</li>
                                    <li class="list-group-item text-justify"><a href="{{url('publicacionesRed/mexico/modelostecnoeducativos.pdf')}}" download="modelosTecnoEducativos.pdf">
                                            Material de descarga</a></li>
                                </ul>
                            </div>
                        </div>
                        <br>

                        <!--Row 2 -->  
                        <div class="row">
                            <div class="col-md-4 hvr-pulse-grow animated bounceIn">
                                <a href="{{url('publicacionesRed/mexico/territorioseducación.pdf')}}" target="_blank">
                                    {{ HTML::image('publicacionesRed/mexico/imagenesthumbnails/mexico04.jpg','territorios educativos', array('class'=>'image-responsive tamaho-thumbnail-publicaciones'))}}
                                </a>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item text-justify">Título: Territorios de la Educación</li>
                                    <li class="list-group-item text-justify">Autor: Genaro Aguirre Aguilar, Rubén Edel Navarro</li>
                                    <li class="list-group-item text-justify">Categoría: Ambientes Educativos</li>
                                    <li class="list-group-item text-justify"><a href="{{url('publicacionesRed/mexico/territorioseducacion.pdf')}}" download="territoriosEducación.pdf">
                                            Material de descarga</a></li>
                                </ul>
                            </div>

                            <div class="col-md-4 hvr-pulse-grow animated bounceIn">
                                <a href="{{url('publicacionesRed/mexico/usabilidadpedagogicatic.pdf')}}" target="_blank">
                                    {{ HTML::image('publicacionesRed/mexico/imagenesthumbnails/mexico05.jpg','usabilidad pedagogica', array('class'=>'image-responsive tamaho-thumbnail-publicaciones'))}}
                                </a>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item text-justify">Título: Usabilidad Pedagogica de las TIC</li>
                                    <li class="list-group-item text-justify">Autor: Brenda Luz Colorado Aguilar,Rubén Edel Navarro</li>
                                    <li class="list-group-item text-justify">Categoría: Tecnologías de la Información y Comunicación</li>
                                    <li class="list-group-item text-justify"><a href="{{url('publicacionesRed/mexico/usabilidadpedagogicatic.pdf')}}" download="usabilidadPedagogicaTIC.pdf">
                                            Material de descarga</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Fin MÉXICO-->

                    <!--Guatemala-->
                    <div class="tab-pane fade" id="guatemala">        
                        <div class="row">
                            <br>
                            <div class="col-md-4 hvr-pulse-grow animated bounceIn">
                                <a href="{{url('publicacionesRed/guatemala/contemosjuntosprogramanacionalmatematica.pdf')}}" target="_blank">
                                    {{ HTML::image('publicacionesRed/guatemala/imagenesthumbnails/guatemala01.jpg','programacin matematica', array('class'=>'image-responsive tamaho-thumbnail-publicaciones'))}}   
                                </a>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item text-justify">Título: Contemos Juntos_Programa Nacional de Matemática</li>
                                    <li class="list-group-item text-justify">Autor: Ministerio de Educación Guatemala</li>
                                    <li class="list-group-item text-justify">Categoría: Matemática</li>
                                    <li class="list-group-item text-justify"><a href="{{url('publicacionesRed/guatemala/contemosjuntosprogramanacionalmatematica.pdf')}}" download="contemosJuntosProgramanacioNacionalMatematica.pdf">
                                            Material de descarga</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4 hvr-pulse-grow animated bounceIn">
                                <a href="{{url('publicacionesRed/guatemala/enseñanzaaprendizajelectura.pdf')}}" target="_blank">
                                    {{ HTML::image('publicacionesRed/guatemala/imagenesthumbnails/guatemala02.jpg','aprendizaje lectura', array('class'=>'image-responsive tamaho-thumbnail-publicaciones'))}}   
                                </a>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item text-justify">Título: Enseñanza - aprendizaje de la lectura</li>
                                    <li class="list-group-item text-justify">Autor: Ministerio de Educación Guatemala</li>
                                    <li class="list-group-item text-justify">Categoría: Español</li>
                                    <li class="list-group-item text-justify"><a href="{{url('publicacionesRed/guatemala/enseñanzaaprendizajelectura.pdf')}}" download="enseñanzaAprendizajeLectura.pdf">
                                            Material de descarga</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Fin Guatemala-->

                    <!--El Salvador-->
                    <div class="tab-pane fade" id="elsalvador">                        
                        <div class="row">
                            <br>
                            <div class="col-md-4 hvr-pulse-grow animated bounceIn">
                                <a href="{{url('publicacionesRed/elsalvador/enseñanzaaprendizajelectura.pdf')}}" target="_blank">
                                    {{ HTML::image('publicacionesRed/elsalvador/imagenesthumbnails/elsalvador01.jpg','aprendizaje lectura', array('class'=>'image-responsive tamaho-thumbnail-publicaciones'))}}
                                </a>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item text-justify">Título: Enseñanza - Aprendizaje de la Lectura</li>
                                    <li class="list-group-item text-justify">Autor: Ministerio de Educación El Salvador</li>
                                    <li class="list-group-item text-justify">Categoría: Español</li>
                                    <li class="list-group-item text-justify"><a href="{{url('publicacionesRed/elsalvador/enseñanzaaprendizajelectura.pdf')}}" download="enseñanzaAprendizajeLectura.pdf">
                                            Material de descarga</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Fin El Salvador-->

                    <!--Honduras-->
                    <div class="tab-pane fade" id="honduras">                        
                        <div class="row">
                            <br>
                            <div class="col-md-4 hvr-pulse-grow animated bounceIn">
                                <a href="{{url('publicacionesRed/honduras/expresioncomprensionlectora.pdf')}}" target="_blank">
                                    {{ HTML::image('publicacionesRed/honduras/imagenesthumbnails/honduras01.jpg','comprension lectora', array('class'=>'image-responsive tamaho-thumbnail-publicaciones'))}}
                                </a>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item text-justify">Título: Expresión y comprensión lectora</li>
                                    <li class="list-group-item text-justify">Autor: Gladis O. Galindo</li>
                                    <li class="list-group-item text-justify">Categoría: Español</li>
                                    <li class="list-group-item text-justify"><a href="{{url('publicacionesRed/honduras/expresioncomprensionlectora.pdf')}}" download="expresionComprensionLectora.pdf">
                                            Material de descarga</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4 hvr-pulse-grow animated bounceIn">
                                <a href="{{url('publicacionesRed/honduras/enseñanzaaprendizajematematicas.pdf')}}" target="_blank">
                                    {{ HTML::image('publicacionesRed/honduras/imagenesthumbnails/honduras02.jpg','enseñanza matematica', array('class'=>'image-responsive tamaho-thumbnail-publicaciones'))}}
                                </a>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item text-justify">Título: Enseñanza - aprendizaje de la matemática</li>
                                    <li class="list-group-item text-justify">Autor: Honduras</li>
                                    <li class="list-group-item text-justify">Categoría: Matemáticas</li>
                                    <li class="list-group-item text-justify"><a href="{{url('publicacionesRed/honduras/enseñanzaaprendizajematematicas.pdf')}}" download="enseñanzaAprendizajeMatemáticas.pdf">
                                            Material de descarga</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>     
                    <!--Fin Honduras-->

                    <!--Nicaragua-->
                    <div class="tab-pane fade" id="nicaragua">                        
                        <div class="row">
                            <br><br><br><br>
                            <br><br><br><br>
                            <br><br><br><br>
                            <br><br><br><br>
                            <br><br><br><br>
                            <br><br>
                        </div>
                    </div>
                    <!--Fin Nicaragua-->

                    <!--Costa Rica-->
                    <div class="tab-pane fade" id="costarica">                        
                        <div class="row">
                            <br><br><br><br>
                            <br><br><br><br>
                            <br><br><br><br>
                            <br><br><br><br>
                            <br><br><br><br>
                            <br><br>
                        </div>
                    </div>
                    <!--Fin Costa Rica-->

                    <!--Panama-->
                    <div class="tab-pane fade" id="panama">
                        <div class="row">
                            <br>
                            <div class="col-md-4 hvr-pulse-grow animated bounceIn">
                                <a href="{{url('publicacionesRed/panama/españolmatematica.pdf')}}" target="_blank">
                                    {{ HTML::image('publicacionesRed/panama/imagenesthumbnails/panama01.jpg','español-matematica', array('class'=>'image-responsive tamaho-thumbnail-publicaciones'))}}
                                </a>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item text-justify">Título: Español y matemática</li>
                                    <li class="list-group-item text-justify">Autor: Gibzka de vernier, Mariela M. de Quezada</li>
                                    <li class="list-group-item text-justify">Categoría: Educación Básica</li>
                                    <li class="list-group-item text-justify"><a href="{{url('publicacionesRed/panama/españolmatematica.pdf')}}" download="españolMatematica.pdf">
                                            Material de descarga</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Fin Panama-->

                    <!--Colombia-->
                    <div class="tab-pane fade" id="colombia">                        
                        <div class="row">
                            <br><br><br><br>
                            <br><br><br><br>
                            <br><br><br><br>
                            <br><br><br><br>
                            <br><br><br><br>
                            <br><br>
                        </div>
                    </div>
                    <!--Fin Colombia-->  

                    <!--Repúblcia Dominicana-->
                    <div class="tab-pane fade" id="repdominicana">
                        <div class="row">
                            <br>
                            <div class="col-md-4 hvr-pulse-grow animated bounceIn">
                                <a href="{{url('publicacionesRed/repdominicana/compresionlectora.pdf')}}" target="_blank">
                                    {{ HTML::image('publicacionesRed/repdominicana/imagenesthumbnails/repdominicana01.jpg','comprension lectora', array('class'=>'image-responsive tamaho-thumbnail-publicaciones'))}}
                                </a>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item text-justify">Título: Comprensión lectora</li>
                                    <li class="list-group-item text-justify">Autor: Ma. Eunice I. Vicioso</li>
                                    <li class="list-group-item text-justify">Categoría: Español</li>
                                    <li class="list-group-item text-justify"><a href="{{url('publicacionesRed/panama/españolmatematica.pdf')}}" download="españolMatematica.pdf">
                                            Material de descarga</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4 hvr-pulse-grow animated bounceIn">
                                <a href="{{url('publicacionesRed/repdominicana/enseñanzaaprendizajematematica.pdf')}}" target="_blank">
                                    {{ HTML::image('publicacionesRed/repdominicana/imagenesthumbnails/repdominicana02.jpg','aprendizaje matematica', array('class'=>'image-responsive tamaho-thumbnail-publicaciones'))}}
                                </a>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item text-justify">Título: Enseñanza - aprendizaje de la matemática</li>
                                    <li class="list-group-item text-justify">Autor: Rafael David Francisco Ventura</li>
                                    <li class="list-group-item text-justify">Categoría: Matemática</li>
                                    <li class="list-group-item text-justify"><a href="{{url('publicacionesRed/repdominicana/enseñanzaaprendizajematematica.pdf')}}" download="enseñanzaAprendizajeMatemáticas.pdf">
                                            Material de descarga</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Fin Repúblcia Dominicana-->

                </div>
            </div>
        </div>
    </div> 
    <div class="col-md-1"></div>
</div>

@include('viewRed.seccionpie')
@stop