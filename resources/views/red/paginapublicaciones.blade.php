@section('title')
Publicaciones
@stop
@extends('home')
@section('menu')
@include('red.seccionheader')
@endsection
@section('cuerpo')
<div class="row" style="margin-top: 5%;" >  <!--row inicial -->       
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
                            <div class="col-md-4"> <!--imagen1 -->
                                <div class="portfolio-item ih-item square colored effect8 animated bounceIn">
                                    <a href="publicacionesRed/mexico/cienciastecnologiasculturas.pdf"  target="_blank">
                                        <img class="img-responsive" src="publicacionesRed/mexico/imagenesthumbnails/mexico01.jpg" alt="">
                                        <!--                                        <div class="mask1"></div>
                                                                                <div class="mask2"></div>
                                                                                <div class="info ">
                                                                                    <h3>Título</h3>
                                                                                    <p>Descripción</p>
                                                                                </div>-->

                                    </a>
                                </div>                                    
                            </div> <!-- cierra imagen1 -->                              

                            <div class="col-md-4 "><!--imagen2 -->
                                <div class="portfolio-item ih-item square colored effect8 animated bounceIn">
                                    <a href="publicacionesRed/mexico/forointerregionalinvestigacionsobreeva.pdf" target="_blank">
                                        <img class="img-responsive" src="publicacionesRed/mexico/imagenesthumbnails/mexico02.jpg" alt="">
                                        <!--                                        <div class="mask1"></div>
                                                                                <div class="mask2"></div>
                                                                                <div class="info ">
                                                                                    <h3>Título</h3>
                                                                                    <p>Descripción</p>
                                                                                </div>-->
                                    </a>
                                </div>
                            </div> <!-- cierra imagen2 -->     

                            <div class="col-md-4"> <!--imagen3 -->
                                <div class=" portfolio-item ih-item square colored effect8 animated bounceIn" >
                                    <a href="publicacionesRed/mexico/modelostecnoeducativos.pdf" target="_blank">
                                        <img class="img-responsive" src="publicacionesRed/mexico/imagenesthumbnails/mexico03.jpg" alt="">
                                        <!--                                        <div class="mask1"></div>
                                                                                <div class="mask2"></div>
                                                                                <div class="info ">
                                                                                    <h3>Título</h3>
                                                                                    <p>Descripción</p>
                                                                                </div>-->
                                    </a>
                                </div>
                            </div> <!-- cierra imagen3 -->     
                        </div>
                        <div class="row">
                            <div class="col-md-3">  <!-- table 1-->      
                                <table class="table ">
                                    <tr>
                                        <td class=""><p style="text-align: justify;">Título: Ciencias, tecnologías y culturas</p></td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Autor: Silvia Fridman, Rubén Edel Navarro</p></td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Categoría: Educación y nuevas tecnologías</p></td>
                                    </tr>
                                    <tr>
                                        <td><a href="publicacionesRed/mexico/cienciastecnologiasculturas.pdf" download="cienciasTecnologiasCulturas.pdf">Material de descarga</a></td>
                                        <!--<a href="imagenes/red/publicaciones/mexico/cienciastecnologiasculturas.pdf">Material de descarga</a></td>-->

                                    </tr>
                                </table>
                            </div> <!-- cierra tab1 -->     
                            <div class="col-md-1"></div>
                            <div class="col-md-3">  <!-- table 2-->      
                                <table class="table ">
                                    <tr>
                                        <td class=""><p style="text-align: justify;">Título: Foro Interregional de investigación sobre EVA</p></td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Autor: Rubén Edel Navarro, Manuel Juarez Pacheco, Yadira Navarro Rangel, María Soledad Ramírez Montoya </p></td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Categoría: Redes Academicas y Tecnologicas</p></td>
                                    </tr>
                                    <tr>
                                        <td><a href="publicacionesRed/mexico/forointerregionalinvestigacionsobreeva.pdf" download="foroInterregionalInvestigacionSobreEVA.pdf">Material de descarga</a></td>
                                    </tr>
                                </table>
                            </div> <!-- cierra tab1 -->     
                            <div class="col-md-1"></div> <!-- cierra table 2 -->
                            <div class="col-md-3">  <!-- table 3-->      
                                <table class="table ">
                                    <tr>
                                        <td class="">Título: Los modelos TecnoEducativos</td>
                                    </tr>
                                    <tr>
                                        <td>Autor: Ismael Esquivel Gómez</td>
                                    </tr>
                                    <tr>
                                        <td>Categoría: Aprendizaje del siglo XXI</td>
                                    </tr>
                                    <tr>
                                        <td><a href="publicacionesRed/mexico/modelostecnoeducativos.pdf" download="modelosTecnoEducativos.pdf">Material de descarga</a></td>
                                    </tr>
                                </table>
                            </div> <!-- cierra tab1 -->     
                            <div class="col-md-1"></div><!-- cierra table 3 -->
                        </div>

                        <!--Row 2 -->  
                        <div class="row">
                            <div class="col-md-4"> <!--imagen1 -->
                                <div class="portfolio-item ih-item square colored effect8 animated bounceIn">
                                    <a href="publicacionesRed/mexico/territorioseducación.pdf" target="_blank">
                                        <img class="img-responsive" src="publicacionesRed/mexico/imagenesthumbnails/mexico04.jpg" alt="">
                                        <!--                                        <div class="mask1"></div>
                                                                                <div class="mask2"></div>
                                                                                <div class="info ">
                                                                                    <h3>Título</h3>
                                                                                    <p>Descripción</p>
                                                                                </div>-->
                                    </a>
                                </div>                                    
                            </div> <!-- cierra imagen1 -->                              

                            <div class="col-md-4 "><!--imagen2 -->
                                <div class="portfolio-item ih-item square colored effect8 animated bounceIn">
                                    <a href="publicacionesRed/mexico/usabilidadpedagogicatic.pdf" target="_blank">
                                        <img class="img-responsive" src="publicacionesRed/mexico/imagenesthumbnails/mexico05.jpg" alt="">
                                        <!--                                        <div class="mask1"></div>
                                                                                <div class="mask2"></div>
                                                                                <div class="info ">
                                                                                    <h3>Título</h3>
                                                                                    <p>Descripción</p>
                                                                                </div>-->
                                    </a>
                                </div>
                            </div> <!-- cierra imagen2 -->     

                        </div>
                        <div class="row">
                            <div class="col-md-3">  <!-- table 1-->      
                                <table class="table ">
                                    <tr>
                                        <td class=""><p style="text-align: justify;">Título: Territorios de la Educación</p></td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Autor: Genaro Aguirre Aguilar, Rubén Edel Navarro</p></td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Categoría: Ambientes Educativos</p></td>
                                    </tr>
                                    <tr>
                                        <td><a href="publicacionesRed/mexico/territorioseducación.pdf" download="territoriosEducación.pdf">Material de descarga</a></td>
                                    </tr>
                                </table>
                            </div> <!-- cierra tab1 -->     
                            <div class="col-md-1"></div>
                            <div class="col-md-3">  <!-- table 2-->      
                                <table class="table ">
                                    <tr>
                                        <td class=""><p style="text-align: justify;">Título: Usabilidad Pedagogica de las TIC</p></td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Autor: Brenda Luz Colorado Aguilar,Rubén Edel Navarro</p></td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Categoría: Tecnologías de la Información y Comunicación</p></td>
                                    </tr>
                                    <tr>
                                        <td><a href="publicacionesRed/mexico/usabilidadpedagogicatic.pdf" download="usabilidadPedagogicaTIC.pdf">Material de descarga</a></td>
                                    </tr>
                                </table>
                            </div> <!-- cierra tab1 -->     
                            <div class="col-md-1"></div> <!-- cierra table 2 -->
                        </div> <!-- cierra Row  -->

                        <hr>
                        <!--Fin México-->
                        <!--Guatemala-->
                        <div class="row">
                            <br>
                            <div class="col-md-4"> <!--imagen1 -->
                                <div class="portfolio-item ih-item square colored effect8 animated bounceIn">
                                    <a href="publicacionesRed/guatemala/contemosjuntosprogramanacionalmatematica.pdf" target="_blank">
                                        <img class="img-responsive" src="publicacionesRed/guatemala/imagenesthumbnails/guatemala01.jpg" alt="">
                                        <!--                                        <div class="mask1"></div>
                                                                                <div class="mask2"></div>
                                                                                <div class="info ">
                                                                                    <h3>Título</h3>
                                                                                    <p>Descripción</p>
                                                                                </div>-->
                                    </a>
                                </div>                                    
                            </div> <!-- cierra imagen1 -->                              

                            <div class="col-md-4 "><!--imagen2 -->
                                <div class="portfolio-item ih-item square colored effect8 animated bounceIn">
                                    <a href="publicacionesRed/guatemala/enseñanzaaprendizajelectura.pdf" target="_blank">
                                        <img class="img-responsive" src="publicacionesRed/guatemala/imagenesthumbnails/guatemala02.jpg" alt="">
                                        <!--                                        <div class="mask1"></div>
                                                                                <div class="mask2"></div>
                                                                                <div class="info ">
                                                                                    <h3>Título</h3>
                                                                                    <p>Descripción</p>
                                                                                </div>-->
                                    </a>
                                </div>
                            </div> <!-- cierra imagen2 -->     


                        </div>
                        <div class="row">
                            <div class="col-md-3">  <!-- table 1-->      
                                <table class="table ">
                                    <tr>
                                        <td class=""><p style="text-align: justify;">Título: Contemos Juntos_Programa Nacional de Matemática</p></td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Autor: Ministerio de Educación Guatemala</p></td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Categoría: Matemática</p></td>
                                    </tr>
                                    <tr>
                                        <td><a href="publicacionesRed/guatemala/contemosjuntosprogramanacionalmatematica.pdf" download="contemosJuntosProgramanacioNacionalMatematica.pdf">Material de descarga</a></td>

                                    </tr>
                                </table>
                            </div> <!-- cierra tab1 -->     
                            <div class="col-md-1"></div>
                            <div class="col-md-3">  <!-- table 2-->      
                                <table class="table ">
                                    <tr>
                                        <td class=""><p style="text-align: justify;">Título: Enseñanza - aprendizaje de la lectura</p></td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Autor: Ministerio de Educación Guatemala</p></td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Categoría: Español</p></td>
                                    </tr>
                                    <tr>
                                        <td><a href="publicacionesRed/guatemala/enseñanzaaprendizajelectura.pdf" download="enseñanzaAprendizajeLectura.pdf">Material de descarga</a></td>
                                    </tr>
                                </table>
                            </div> <!-- cierra tab1 -->     
                            <div class="col-md-1"></div> <!-- cierra table 2 -->
                        </div>
                        <hr>
                        <!--Fin Guatemala-->
                        <!--El Salvador-->
                        <div class="row">
                            <br>
                            <div class="col-md-4"> <!--imagen1 -->
                                <div class="portfolio-item ih-item square colored effect8 animated bounceIn">
                                    <a href="publicacionesRed/elsalvador/enseñanzaaprendizajelectura.pdf" target="_blank">
                                        <img class="img-responsive" src="publicacionesRed/elsalvador/imagenesthumbnails/elsalvador01.jpg" alt="">
                                        <!--                                        <div class="mask1"></div>
                                                                                <div class="mask2"></div>
                                                                                <div class="info ">
                                                                                    <h3>Título</h3>
                                                                                    <p>Descripción</p>
                                                                                </div>-->
                                    </a>
                                </div>                                    
                            </div> <!-- cierra imagen1 -->                              

                        </div>
                        <div class="row">
                            <div class="col-md-3">  <!-- table 1-->      
                                <table class="table ">
                                    <tr>
                                        <td class=""><p style="text-align: justify;">Título: Enseñanza - Aprendizaje de la Lectura</p></td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Autor: Ministerio de Educación El Salvador</p></td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Categoría: Español</p></td>
                                    </tr>
                                    <tr>
                                        <td><a href="publicacionesRed/elsalvador/enseñanzaaprendizajelectura.pdf" download="enseñanzaAprendizajeLectura.pdf">Material de descarga</a></td>

                                    </tr>
                                </table>
                            </div> <!-- cierra tab1 -->     
                            <div class="col-md-1"></div>
                        </div>
                        <hr>
                        <!--Fin El Salvador-->
                        <!--Honduras-->
                        <div class="row">
                            <br>
                            <div class="col-md-4"> <!--imagen1 -->
                                <div class="portfolio-item ih-item square colored effect8 animated bounceIn">
                                    <a href="publicacionesRed/honduras/expresioncomprensionlectora.pdf" target="_blank">
                                        <img class="img-responsive" src="publicacionesRed/honduras/imagenesthumbnails/honduras01.jpg" alt="">
                                        <!--                                        <div class="mask1"></div>
                                                                                <div class="mask2"></div>
                                                                                <div class="info ">
                                                                                    <h3>Título</h3>
                                                                                    <p>Descripción</p>
                                                                                </div>-->
                                    </a>
                                </div>                                    
                            </div> <!-- cierra imagen1 -->                              

                            <div class="col-md-4 "><!--imagen2 -->
                                <div class="portfolio-item ih-item square colored effect8 animated bounceIn">
                                    <a href="publicacionesRed/honduras/enseñanzaaprendizajematematicas.pdf" target="_blank">
                                        <img class="img-responsive" src="publicacionesRed/honduras/imagenesthumbnails/honduras02.jpg" alt="">
                                        <!--                                        <div class="mask1"></div>
                                                                                <div class="mask2"></div>
                                                                                <div class="info ">
                                                                                    <h3>Título</h3>
                                                                                    <p>Descripción</p>
                                                                                </div>-->
                                    </a>
                                </div>
                            </div> <!-- cierra imagen2 -->     


                        </div>
                        <div class="row">
                            <div class="col-md-3">  <!-- table 1-->      
                                <table class="table ">
                                    <tr>
                                        <td class=""><p style="text-align: justify;">Título: Expresión y comprensión lectora</p></td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Autor: Gladis O. Galindo</p></td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Categoría: Español</p></td>
                                    </tr>
                                    <tr>
                                        <td><a href="publicacionesRed/honduras/expresioncomprensionlectora.pdf" download="expresionComprensionLectora.pdf">Material de descarga</a></td>

                                    </tr>
                                </table>
                            </div> <!-- cierra tab1 -->     
                            <div class="col-md-1"></div>
                            <div class="col-md-3">  <!-- table 2-->      
                                <table class="table ">
                                    <tr>
                                        <td class=""><p style="text-align: justify;">Título: Enseñanza - aprendizaje de la matemática</p></td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Autor: Honduras</p></td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Categoría: Matemáticas</p></td>
                                    </tr>
                                    <tr>
                                        <td><a href="publicacionesRed/honduras/enseñanzaaprendizajematematicas.pdf" download="enseñanzaAprendizajeMatemáticas.pdf">Material de descarga</a></td>
                                    </tr>
                                </table>
                            </div> <!-- cierra tab1 -->     
                            <div class="col-md-1"></div> <!-- cierra table 2 -->
                        </div>
                        <hr>
                        <!--Fin Honduras-->
                        <!----------- ****** Termina Opción Honduras ****** ----->    


                        <!----------- ******  Opción Nicaragua ****** -----> 
                        <!----------- ****** Termina Opción Nicaragua ****** -----> 


                        <!----------- ******  Opción Costa rica ****** -----> 
                        <!----------- ****** Termina Opción Costa Rica ****** -----> 


                        <!----------- ****** Panamá ****** ----->  
                        <div class="row">
                            </br>
                            <div class="col-md-4"> <!--imagen1 -->
                                <div class="portfolio-item ih-item square colored effect8 animated bounceIn">
                                    <a href="publicacionesRed/panama/españolmatematica.pdf" target="_blank">
                                        <img class="img-responsive" src="publicacionesRed/panama/imagenesthumbnails/panama01.jpg" alt="">
                                        <!--                                        <div class="mask1"></div>
                                                                                <div class="mask2"></div>
                                                                                <div class="info ">
                                                                                    <h3>Título</h3>
                                                                                    <p>Descripción</p>
                                                                                </div>-->
                                    </a>
                                </div>                                    
                            </div> <!-- cierra imagen1 -->                              

                        </div>
                        <div class="row">
                            <div class="col-md-3">  <!-- table 1-->      
                                <table class="table ">
                                    <tr>
                                        <td class=""><p style="text-align: justify;">Título: Español y matemática</p></td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Autor: Gibzka de vernier, Mariela M. de Quezada</p></td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Categoría: Educación Básica</p></td>
                                    </tr>
                                    <tr>
                                        <td><a href="publicacionesRed/panama/españolmatematica.pdf" download="españolMatematica.pdf">Material de descarga</a></td>

                                    </tr>
                                </table>
                            </div> <!-- cierra tab1 -->     
                            <div class="col-md-1"></div>

                        </div>

                        <hr>
                        <!----------- ****** Fin Panamá ****** ----->  
                        <!----------- ******  Opción Colombia ****** ----->  
                        <!----------- ****** Termina Opción Colombia ****** ----->    


                        <!----------- ******  Rep. Dominicana ****** ----->    
                        <div class="row">
                            <br>
                            <div class="col-md-4"> <!--imagen1 -->
                                <div class="portfolio-item ih-item square colored effect8 animated bounceIn">
                                    <a href="publicacionesRed/repdominicana/compresionlectora.pdf" target="_blank">
                                        <img class="img-responsive" src="publicacionesRed/repdominicana/imagenesthumbnails/repdominicana01.jpg" alt="">
                                        <!--                                        <div class="mask1"></div>
                                                                                <div class="mask2"></div>
                                                                                <div class="info ">
                                                                                    <h3>Título</h3>
                                                                                    <p>Descripción</p>
                                                                                </div>-->
                                    </a>
                                </div>                                    
                            </div> <!-- cierra imagen1 -->                              

                            <div class="col-md-4 "><!--imagen2 -->
                                <div class="portfolio-item ih-item square colored effect8 animated bounceIn">
                                    <a href="publicacionesRed/repdominicana/enseñanzaaprendizajematematica.pdf" target="_blank">
                                        <img class="img-responsive" src="publicacionesRed/repdominicana/imagenesthumbnails/repdominicana02.jpg" alt="">
                                        <!--                                        <div class="mask1"></div>
                                                                                <div class="mask2"></div>
                                                                                <div class="info ">
                                                                                    <h3>Título</h3>
                                                                                    <p>Descripción</p>
                                                                                </div>-->
                                    </a>
                                </div>
                            </div> <!-- cierra imagen2 -->     


                        </div>
                        <div class="row">
                            <div class="col-md-3">  <!-- table 1-->      
                                <table class="table ">
                                    <tr>
                                        <td class=""><p style="text-align: justify;">Título: Comprensión lectora</p></td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Autor: Ma. Eunice I. Vicioso</p></td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Categoría: Español</p></td>
                                    </tr>
                                    <tr>
                                        <td><a href="publicacionesRed/repdominicana/compresionlectora.pdf" download="compresionLectora.pdf">Material de descarga</a></td>

                                    </tr>
                                </table>
                            </div> <!-- cierra tab1 -->     
                            <div class="col-md-1"></div>
                            <div class="col-md-3">  <!-- table 2-->      
                                <table class="table ">
                                    <tr>
                                        <td class="">Título: Enseñanza - aprendizaje de la matemática</td>
                                    </tr>
                                    <tr>
                                        <td>Autor: Rafael David Francisco Ventura</td>
                                    </tr>
                                    <tr>
                                        <td>Categoría: Matemática</td>
                                    </tr>
                                    <tr>
                                        <td><a href="publicacionesRed/repdominicana/enseñanzaaprendizajematematica.pdf" download="enseñanzaAprendizajeMatemáticas.pdf">Material de descarga</a></td>
                                    </tr>
                                </table>
                            </div> <!-- cierra tab1 -->     
                            <div class="col-md-1"></div> <!-- cierra table 2 -->

                        </div>

                        <hr>
                        <!----------- ******  Fin Rep. Dominicana ****** ----->    

                    </div>
                    <!--FIN TODOS-->

                    <!--México-->
                    <div class="tab-pane fade" id="mexico">                        
                        <div class="row">
                            <br>
                            <div class="col-md-4"> <!--imagen1 -->
                                <div class="portfolio-item ih-item square colored effect8 animated bounceIn">
                                    <a href="publicacionesRed/mexico/cienciastecnologiasculturas.pdf"  target="_blank">
                                        <img class="img-responsive" src="publicacionesRed/mexico/imagenesthumbnails/mexico01.jpg" alt="">
                                        <!--                                        <div class="mask1"></div>
                                                                                <div class="mask2"></div>
                                                                                <div class="info ">
                                                                                    <h3>Título</h3>
                                                                                    <p>Descripción</p>
                                                                                </div>-->

                                    </a>
                                </div>                                    
                            </div> <!-- cierra imagen1 -->                              

                            <div class="col-md-4 "><!--imagen2 -->
                                <div class="portfolio-item ih-item square colored effect8 animated bounceIn">
                                    <a href="publicacionesRed/mexico/forointerregionalinvestigacionsobreeva.pdf" target="_blank">
                                        <img class="img-responsive" src="publicacionesRed/mexico/imagenesthumbnails/mexico02.jpg" alt="">
                                        <!--                                        <div class="mask1"></div>
                                                                                <div class="mask2"></div>
                                                                                <div class="info ">
                                                                                    <h3>Título</h3>
                                                                                    <p>Descripción</p>
                                                                                </div>-->
                                    </a>
                                </div>
                            </div> <!-- cierra imagen2 -->     

                            <div class="col-md-4"> <!--imagen3 -->
                                <div class=" portfolio-item ih-item square colored effect8 animated bounceIn" >
                                    <a href="publicacionesRed/mexico/modelostecnoeducativos.pdf" target="_blank">
                                        <img class="img-responsive" src="publicacionesRed/mexico/imagenesthumbnails/mexico03.jpg" alt="">
                                        <!--                                        <div class="mask1"></div>
                                                                                <div class="mask2"></div>
                                                                                <div class="info ">
                                                                                    <h3>Título</h3>
                                                                                    <p>Descripción</p>
                                                                                </div>-->
                                    </a>
                                </div>
                            </div> <!-- cierra imagen3 -->     
                        </div>
                        <div class="row">
                            <div class="col-md-3">  <!-- table 1-->      
                                <table class="table ">
                                    <tr>
                                        <td class=""><p style="text-align: justify;">Título: Ciencias, tecnologías y culturas</p></td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Autor: Silvia Fridman, Rubén Edel Navarro</p></td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Categoría: Educación y nuevas tecnologías</p></td>
                                    </tr>
                                    <tr>
                                        <td><a href="publicacionesRed/mexico/cienciastecnologiasculturas.pdf" download="cienciasTecnologiasCulturas.pdf">Material de descarga</a></td>
                                        <!--<a href="imagenes/red/publicaciones/mexico/cienciastecnologiasculturas.pdf">Material de descarga</a></td>-->

                                    </tr>
                                </table>
                            </div> <!-- cierra tab1 -->     
                            <div class="col-md-1"></div>
                            <div class="col-md-3">  <!-- table 2-->      
                                <table class="table ">
                                    <tr>
                                        <td class=""><p style="text-align: justify;">Título: Foro Interregional de investigación sobre EVA</p></td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Autor: Rubén Edel Navarro, Manuel Juarez Pacheco, Yadira Navarro Rangel, María Soledad Ramírez Montoya </p></td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Categoría: Redes Academicas y Tecnologicas</p></td>
                                    </tr>
                                    <tr>
                                        <td><a href="publicacionesRed/mexico/forointerregionalinvestigacionsobreeva.pdf" download="foroInterregionalInvestigacionSobreEVA.pdf">Material de descarga</a></td>
                                    </tr>
                                </table>
                            </div> <!-- cierra tab1 -->     
                            <div class="col-md-1"></div> <!-- cierra table 2 -->
                            <div class="col-md-3">  <!-- table 3-->      
                                <table class="table ">
                                    <tr>
                                        <td class="">Título: Los modelos TecnoEducativos</td>
                                    </tr>
                                    <tr>
                                        <td>Autor: Ismael Esquivel Gómez</td>
                                    </tr>
                                    <tr>
                                        <td>Categoría: Aprendizaje del siglo XXI</td>
                                    </tr>
                                    <tr>
                                        <td><a href="publicacionesRed/mexico/modelostecnoeducativos.pdf" download="modelosTecnoEducativos.pdf">Material de descarga</a></td>
                                    </tr>
                                </table>
                            </div> <!-- cierra tab1 -->     
                            <div class="col-md-1"></div><!-- cierra table 3 -->
                        </div>

                        <!--Row 2 -->  
                        <div class="row">
                            <div class="col-md-4"> <!--imagen1 -->
                                <div class="portfolio-item ih-item square colored effect8 animated bounceIn">
                                    <a href="publicacionesRed/mexico/territorioseducación.pdf" target="_blank">
                                        <img class="img-responsive" src="publicacionesRed/mexico/imagenesthumbnails/mexico04.jpg" alt="">
                                        <!--                                        <div class="mask1"></div>
                                                                                <div class="mask2"></div>
                                                                                <div class="info ">
                                                                                    <h3>Título</h3>
                                                                                    <p>Descripción</p>
                                                                                </div>-->
                                    </a>
                                </div>                                    
                            </div> <!-- cierra imagen1 -->                              

                            <div class="col-md-4 "><!--imagen2 -->
                                <div class="portfolio-item ih-item square colored effect8 animated bounceIn">
                                    <a href="publicacionesRed/mexico/usabilidadpedagogicatic.pdf" target="_blank">
                                        <img class="img-responsive" src="publicacionesRed/mexico/imagenesthumbnails/mexico05.jpg" alt="">
                                        <!--                                        <div class="mask1"></div>
                                                                                <div class="mask2"></div>
                                                                                <div class="info ">
                                                                                    <h3>Título</h3>
                                                                                    <p>Descripción</p>
                                                                                </div>-->
                                    </a>
                                </div>
                            </div> <!-- cierra imagen2 -->     

                        </div>
                        <div class="row">
                            <div class="col-md-3">  <!-- table 1-->      
                                <table class="table ">
                                    <tr>
                                        <td class=""><p style="text-align: justify;">Título: Territorios de la Educación</p></td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Autor: Genaro Aguirre Aguilar, Rubén Edel Navarro</p></td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Categoría: Ambientes Educativos</p></td>
                                    </tr>
                                    <tr>
                                        <td><a href="publicacionesRed/mexico/territorioseducación.pdf" download="territoriosEducación.pdf">Material de descarga</a></td>
                                    </tr>
                                </table>
                            </div> <!-- cierra tab1 -->     
                            <div class="col-md-1"></div>
                            <div class="col-md-3">  <!-- table 2-->      
                                <table class="table ">
                                    <tr>
                                        <td class=""><p style="text-align: justify;">Título: Usabilidad Pedagogica de las TIC</p></td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Autor: Brenda Luz Colorado Aguilar,Rubén Edel Navarro</p></td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Categoría: Tecnologías de la Información y Comunicación</p></td>
                                    </tr>
                                    <tr>
                                        <td><a href="publicacionesRed/mexico/usabilidadpedagogicatic.pdf" download="usabilidadPedagogicaTIC.pdf">Material de descarga</a></td>
                                    </tr>
                                </table>
                            </div> <!-- cierra tab1 -->     
                            <div class="col-md-1"></div> <!-- cierra table 2 -->
                        </div> <!-- cierra Row  -->
                    </div>
                    <!--Fin MÉXICO-->

                    <!--Guatemala-->
                    <div class="tab-pane fade" id="guatemala">                        
                        <div class="row">
                            </br>
                            <div class="col-md-4"> <!--imagen1 -->
                                <div class="portfolio-item ih-item square colored effect8 animated bounceIn">
                                    <a href="publicacionesRed/guatemala/contemosjuntosprogramanacionalmatematica.pdf" target="_blank">
                                        <img class="img-responsive" src="publicacionesRed/guatemala/imagenesthumbnails/guatemala01.jpg" alt="">
                                        <!--                                        <div class="mask1"></div>
                                                                                <div class="mask2"></div>
                                                                                <div class="info ">
                                                                                    <h3>Título</h3>
                                                                                    <p>Descripción</p>
                                                                                </div>-->
                                    </a>
                                </div>                                    
                            </div> <!-- cierra imagen1 -->                              

                            <div class="col-md-4 "><!--imagen2 -->
                                <div class="portfolio-item ih-item square colored effect8 animated bounceIn">
                                    <a href="publicacionesRed/guatemala/enseñanzaaprendizajelectura.pdf" target="_blank">
                                        <img class="img-responsive" src="publicacionesRed/guatemala/imagenesthumbnails/guatemala02.jpg" alt="">
                                        <!--                                        <div class="mask1"></div>
                                                                                <div class="mask2"></div>
                                                                                <div class="info ">
                                                                                    <h3>Título</h3>
                                                                                    <p>Descripción</p>
                                                                                </div>-->
                                    </a>
                                </div>
                            </div> <!-- cierra imagen2 -->     


                        </div>
                        <div class="row">
                            <div class="col-md-3">  <!-- table 1-->      
                                <table class="table ">
                                    <tr>
                                        <td class=""><p style="text-align: justify;">Título: Contemos Juntos_Programa Nacional de Matemática</p></td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Autor: Ministerio de Educación Guatemala</p></td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Categoría: Matemática</p></td>
                                    </tr>
                                    <tr>
                                        <td><a href="publicacionesRed/guatemala/contemosjuntosprogramanacionalmatematica.pdf" download="contemosJuntosProgramanacioNacionalMatematica.pdf">Material de descarga</a></td>

                                    </tr>
                                </table>
                            </div> <!-- cierra tab1 -->     
                            <div class="col-md-1"></div>
                            <div class="col-md-3">  <!-- table 2-->      
                                <table class="table ">
                                    <tr>
                                        <td class=""><p style="text-align: justify;">Título: Enseñanza - aprendizaje de la lectura</p></td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Autor: Ministerio de Educación Guatemala</p></td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Categoría: Español</p></td>
                                    </tr>
                                    <tr>
                                        <td><a href="publicacionesRed/guatemala/enseñanzaaprendizajelectura.pdf" download="enseñanzaAprendizajeLectura.pdf">Material de descarga</a></td>
                                    </tr>
                                </table>
                            </div> <!-- cierra tab1 -->     
                            <div class="col-md-1"></div> <!-- cierra table 2 -->

                        </div>

                    </div>
                    <!--Fin Guatemala-->

                    <!--El Salvador-->
                    <div class="tab-pane fade" id="elsalvador">                        
                        <div class="row">
                            <br>
                            <div class="col-md-4"> <!--imagen1 -->
                                <div class="portfolio-item ih-item square colored effect8 animated bounceIn">
                                    <a href="publicacionesRed/elsalvador/enseñanzaaprendizajelectura.pdf" target="_blank">
                                        <img class="img-responsive" src="publicacionesRed/elsalvador/imagenesthumbnails/elsalvador01.jpg" alt="">
                                        <!--                                        <div class="mask1"></div>
                                                                                <div class="mask2"></div>
                                                                                <div class="info ">
                                                                                    <h3>Título</h3>
                                                                                    <p>Descripción</p>
                                                                                </div>-->
                                    </a>
                                </div>                                    
                            </div> <!-- cierra imagen1 -->                              

                        </div>
                        <div class="row">
                            <div class="col-md-3">  <!-- table 1-->      
                                <table class="table ">
                                    <tr>
                                        <td class=""><p style="text-align: justify;">Título: Enseñanza - Aprendizaje de la Lectura</p></td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Autor: Ministerio de Educación El Salvador</p></td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Categoría: Español</p></td>
                                    </tr>
                                    <tr>
                                        <td><a href="publicacionesRed/elsalvador/enseñanzaaprendizajelectura.pdf" download="enseñanzaAprendizajeLectura.pdf">Material de descarga</a></td>

                                    </tr>
                                </table>
                            </div> <!-- cierra tab1 -->     
                            <div class="col-md-1"></div>
                        </div>
                    </div>
                    <!--Fin El Salvador-->

                    <!--Honduras-->
                    <div class="tab-pane fade" id="honduras">                        
                        <div class="row">
                            <br>
                            <div class="col-md-4"> <!--imagen1 -->
                                <div class="portfolio-item ih-item square colored effect8 animated bounceIn">
                                    <a href="publicacionesRed/honduras/expresioncomprensionlectora.pdf" target="_blank">
                                        <img class="img-responsive" src="publicacionesRed/honduras/imagenesthumbnails/honduras01.jpg" alt="">
                                        <!--                                        <div class="mask1"></div>
                                                                                <div class="mask2"></div>
                                                                                <div class="info ">
                                                                                    <h3>Título</h3>
                                                                                    <p>Descripción</p>
                                                                                </div>-->
                                    </a>
                                </div>                                    
                            </div> <!-- cierra imagen1 -->                              

                            <div class="col-md-4 "><!--imagen2 -->
                                <div class="portfolio-item ih-item square colored effect8 animated bounceIn">
                                    <a href="publicacionesRed/honduras/enseñanzaaprendizajematematicas.pdf" target="_blank">
                                        <img class="img-responsive" src="publicacionesRed/honduras/imagenesthumbnails/honduras02.jpg" alt="">
                                        <!--                                        <div class="mask1"></div>
                                                                                <div class="mask2"></div>
                                                                                <div class="info ">
                                                                                    <h3>Título</h3>
                                                                                    <p>Descripción</p>
                                                                                </div>-->
                                    </a>
                                </div>
                            </div> <!-- cierra imagen2 -->     


                        </div>
                        <div class="row">
                            <div class="col-md-3">  <!-- table 1-->      
                                <table class="table ">
                                    <tr>
                                        <td class=""><p style="text-align: justify;">Título: Expresión y comprensión lectora</p></td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Autor: Gladis O. Galindo</p></td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Categoría: Español</p></td>
                                    </tr>
                                    <tr>
                                        <td><a href="publicacionesRed/honduras/expresioncomprensionlectora.pdf" download="expresionComprensionLectora.pdf">Material de descarga</a></td>

                                    </tr>
                                </table>
                            </div> <!-- cierra tab1 -->     
                            <div class="col-md-1"></div>
                            <div class="col-md-3">  <!-- table 2-->      
                                <table class="table ">
                                    <tr>
                                        <td class=""><p style="text-align: justify;">Título: Enseñanza - aprendizaje de la matemática</p></td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Autor: Honduras</p></td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Categoría: Matemáticas</p></td>
                                    </tr>
                                    <tr>
                                        <td><a href="publicacionesRed/honduras/enseñanzaaprendizajematematicas.pdf" download="enseñanzaAprendizajeMatemáticas.pdf">Material de descarga</a></td>
                                    </tr>
                                </table>
                            </div> <!-- cierra tab1 -->     
                            <div class="col-md-1"></div> <!-- cierra table 2 -->

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
                            <br><br><br><br>
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
                            <br><br><br><br>
                        </div>
                    </div>
                    <!--Fin Costa Rica-->

                    <!--Panama-->
                    <div class="tab-pane fade" id="panama">
                        <div class="row">
                            <br>
                            <div class="col-md-4"> <!--imagen1 -->
                                <div class="portfolio-item ih-item square colored effect8 animated bounceIn">
                                    <a href="publicacionesRed/panama/españolmatematica.pdf" target="_blank">
                                        <img class="img-responsive" src="publicacionesRed/panama/imagenesthumbnails/panama01.jpg" alt="">
                                        <!--                                        <div class="mask1"></div>
                                                                                <div class="mask2"></div>
                                                                                <div class="info ">
                                                                                    <h3>Título</h3>
                                                                                    <p>Descripción</p>
                                                                                </div>-->
                                    </a>
                                </div>                                    
                            </div> <!-- cierra imagen1 -->                              

                        </div>
                        <div class="row">
                            <div class="col-md-3">  <!-- table 1-->      
                                <table class="table ">
                                    <tr>
                                        <td class=""><p style="text-align: justify;">Título: Español y matemática</p></td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Autor: Gibzka de vernier, Mariela M. de Quezada</p></td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Categoría: Educación Básica</p></td>
                                    </tr>
                                    <tr>
                                        <td><a href="publicacionesRed/panama/españolmatematica.pdf" download="españolMatematica.pdf">Material de descarga</a></td>

                                    </tr>
                                </table>
                            </div> <!-- cierra tab1 -->     
                            <div class="col-md-1"></div>

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
                            <br><br><br><br>
                        </div>
                    </div>
                    <!--Fin Colombia-->  
                    
                    <!--Repúblcia Dominicana-->
                    <div class="tab-pane fade" id="repdominicana">
                        <div class="row">
                            <br>
                            <div class="col-md-4"> <!--imagen1 -->
                                <div class="portfolio-item ih-item square colored effect8 animated bounceIn">
                                    <a href="publicacionesRed/repdominicana/compresionlectora.pdf" target="_blank">
                                        <img class="img-responsive" src="publicacionesRed/repdominicana/imagenesthumbnails/repdominicana01.jpg" alt="">
                                        <!--                                        <div class="mask1"></div>
                                                                                <div class="mask2"></div>
                                                                                <div class="info ">
                                                                                    <h3>Título</h3>
                                                                                    <p>Descripción</p>
                                                                                </div>-->
                                    </a>
                                </div>                                    
                            </div> <!-- cierra imagen1 -->                              

                            <div class="col-md-4 "><!--imagen2 -->
                                <div class="portfolio-item ih-item square colored effect8 animated bounceIn">
                                    <a href="publicacionesRed/repdominicana/enseñanzaaprendizajematematica.pdf" target="_blank">
                                        <img class="img-responsive" src="publicacionesRed/repdominicana/imagenesthumbnails/repdominicana02.jpg" alt="">
                                        <!--                                        <div class="mask1"></div>
                                                                                <div class="mask2"></div>
                                                                                <div class="info ">
                                                                                    <h3>Título</h3>
                                                                                    <p>Descripción</p>
                                                                                </div>-->
                                    </a>
                                </div>
                            </div> <!-- cierra imagen2 -->     


                        </div>
                        <div class="row">
                            <div class="col-md-3">  <!-- table 1-->      
                                <table class="table ">
                                    <tr>
                                        <td class=""><p style="text-align: justify;">Título: Comprensión lectora</p></td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Autor: Ma. Eunice I. Vicioso</p></td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Categoría: Español</p></td>
                                    </tr>
                                    <tr>
                                        <td><a href="publicacionesRed/repdominicana/compresionlectora.pdf" download="compresionLectora.pdf">Material de descarga</a></td>

                                    </tr>
                                </table>
                            </div> <!-- cierra tab1 -->     
                            <div class="col-md-1"></div>
                            <div class="col-md-3">  <!-- table 2-->      
                                <table class="table ">
                                    <tr>
                                        <td class="">Título: Enseñanza - aprendizaje de la matemática</td>
                                    </tr>
                                    <tr>
                                        <td>Autor: Rafael David Francisco Ventura</td>
                                    </tr>
                                    <tr>
                                        <td>Categoría: Matemática</td>
                                    </tr>
                                    <tr>
                                        <td><a href="publicacionesRed/repdominicana/enseñanzaaprendizajematematica.pdf" download="enseñanzaAprendizajeMatemáticas.pdf">Material de descarga</a></td>
                                    </tr>
                                </table>
                            </div> <!-- cierra tab1 -->     
                            <div class="col-md-1"></div> <!-- cierra table 2 -->

                        </div>
                    </div>
                    <!--Fin Repúblcia Dominicana-->

                </div>
            </div>
        </div>
    </div> 
    <div class="col-md-1"></div>
</div>

@include('red.seccionpie')
@stop