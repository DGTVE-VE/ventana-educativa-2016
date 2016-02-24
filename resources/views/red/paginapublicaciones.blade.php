@section('title')
Publicaciones
@stop
@extends('home')
@section('menu')
@include('red.seccionheader')
@endsection
@section('cuerpo')
<div class="row" style="margin-top: 5%;" >  <!--row inicial -->       
    <div class="row fondo_Obscuro">
        <div class="col-md-12 text-center text-uppercase">
            <p class="pleca">Publicaciones</p>
        </div>
    </div>
    </br>
    <div class="row"> <!--row menu -->
        <div class="col-md-1"></div>
        <div class="col-md-10">

            </br>      
            <!--begin tabs going in narrow content -->
            <ul class="nav nav-tabs sidebar-tabs" id="sidebar" role="tablist">
                <li class="active"><a href="#todos" role="tab" data-toggle="tab">TODOS</a></li>
                <li><a href="#mexico" role="tab" data-toggle="tab">MÉXICO</a></li>
                <li><a href="#guatemala" role="tab" data-toggle="tab">GUATEMALA</a></li>
                <li><a href="#elsalvador" role="tab" data-toggle="tab">EL SALVADOR</a></li>
                <li><a href="#honduras" role="tab" data-toggle="tab">HONDURAS</a></li>
                <li><a href="#tab-6" role="tab" data-toggle="tab">NICARAGUA</a></li>
                <li><a href="#tab-7" role="tab" data-toggle="tab">COSTA RICA</a></li>
                <li><a href="#panama" role="tab" data-toggle="tab">PANAMÁ</a></li>
                <li><a href="#tab-9" role="tab" data-toggle="tab">COLOMBIA</a></li>
                <li><a href="#repdominicana" role="tab" data-toggle="tab">REP. DOMINICANA</a></li>

            </ul><!--/.nav-tabs.sidebar-tabs -->
            <!-- Tab panes -->
            <div class="tab-content "> <!-- Tab content 1 -->
                <div class="tab-pane active" id="todos">
                    <div class="col-md-12"> <!-- div de imagenes y texto -->
                        <div class="row">
                            </br>
                            <div class="col-md-4"> <!--imagen1 -->
                                <div class="portfolio-item ih-item square colored effect8 animated bounceIn">
                                    <a href="#">
                                        <img class="img-responsive" src="http://placehold.it/350x200" alt="">
                                        <div class="mask1"></div>
                                        <div class="mask2"></div>
                                        <div class="info ">
                                            <h3>Título</h3>
                                            <p>Descripción</p>
                                        </div>
                                    </a>
                                </div>                                    
                            </div> <!-- cierra imagen1 -->                              
                            
                            <div class="col-md-4 "><!--imagen2 -->
                                <div class="portfolio-item ih-item square colored effect8 animated bounceIn">
                                    <a href="#">
                                        <img class="img-responsive" src="http://placehold.it/350x200" alt="">
                                        <div class="mask1"></div>
                                        <div class="mask2"></div>
                                        <div class="info ">
                                            <h3>Título</h3>
                                            <p>Descripción</p>
                                        </div>
                                    </a>
                                </div>
                            </div> <!-- cierra imagen2 -->     
                            
                            <div class="col-md-4"> <!--imagen3 -->
                                <div class=" portfolio-item ih-item square colored effect8 animated bounceIn">
                                    <a href="#">
                                        <img class="img-responsive" src="http://placehold.it/350x200" alt="">
                                        <div class="mask1"></div>
                                        <div class="mask2"></div>
                                        <div class="info ">
                                            <h3>Título</h3>
                                            <p>Descripción</p>
                                        </div>
                                    </a>
                                </div>
                            </div> <!-- cierra imagen3 -->     
                        </div>
                        <div class="row">
                            <div class="col-md-3">  <!-- table 1-->      
                                <table class="table ">
                                    <tr>
                                        <td class="">Título</td>
                                    </tr>
                                    <tr>
                                        <td>Autor:</td>
                                    </tr>
                                    <tr>
                                        <td>Categoría:</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">Material de descarga</a></td>
                                    </tr>
                                </table>
                            </div> <!-- cierra tab1 -->     
                            <div class="col-md-1"></div>
                            <div class="col-md-3">  <!-- table 2-->      
                                <table class="table ">
                                    <tr>
                                        <td class="">Título</td>
                                    </tr>
                                    <tr>
                                        <td>Autor:</td>
                                    </tr>
                                    <tr>
                                        <td>Categoría:</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">Material de descarga</a></td>
                                    </tr>
                                </table>
                            </div> <!-- cierra tab1 -->     
                            <div class="col-md-1"></div> <!-- cierra table 2 -->
                            <div class="col-md-3">  <!-- table 3-->      
                                <table class="table ">
                                    <tr>
                                        <td class="">Título</td>
                                    </tr>
                                    <tr>
                                        <td>Autor:</td>
                                    </tr>
                                    <tr>
                                        <td>Categoría:</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">Material de descarga</a></td>
                                    </tr>
                                </table>
                            </div> <!-- cierra tab1 -->     
                            <div class="col-md-1"></div><!-- cierra table 3 -->
                        </div>

                        <!--Row 2 -->  
                        <div class="row">
                            <div class="col-md-4"> <!--imagen1 -->
                                <div class="portfolio-item ih-item square colored effect8 animated bounceIn">
                                    <a href="#">
                                        <img class="img-responsive" src="http://placehold.it/350x200" alt="">
                                        <div class="mask1"></div>
                                        <div class="mask2"></div>
                                        <div class="info ">
                                            <h3>Título</h3>
                                            <p>Descripción</p>
                                        </div>
                                    </a>
                                </div>                                    
                            </div> <!-- cierra imagen1 -->                              

                            <div class="col-md-4 "><!--imagen2 -->
                                <div class="portfolio-item ih-item square colored effect8 animated bounceIn">
                                    <a href="#">
                                        <img class="img-responsive" src="http://placehold.it/350x200" alt="">
                                        <div class="mask1"></div>
                                        <div class="mask2"></div>
                                        <div class="info ">
                                            <h3>Título</h3>
                                            <p>Descripción</p>
                                        </div>
                                    </a>
                                </div>
                            </div> <!-- cierra imagen2 -->     

                            <div class="col-md-4"> <!--imagen3 -->
                                <div class=" portfolio-item ih-item square colored effect8 animated bounceIn">
                                    <a href="#">
                                        <img class="img-responsive" src="http://placehold.it/350x200" alt="">
                                        <div class="mask1"></div>
                                        <div class="mask2"></div>
                                        <div class="info ">
                                            <h3>Título</h3>
                                            <p>Descripción</p>
                                        </div>
                                    </a>
                                </div>
                            </div> <!-- cierra imagen3 -->     
                        </div>
                        <div class="row">
                            <div class="col-md-3">  <!-- table 1-->      
                                <table class="table ">
                                    <tr>
                                        <td class="">Título</td>
                                    </tr>
                                    <tr>
                                        <td>Autor:</td>
                                    </tr>
                                    <tr>
                                        <td>Categoría:</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">Material de descarga</a></td>
                                    </tr>
                                </table>
                            </div> <!-- cierra tab1 -->     
                            <div class="col-md-1"></div>
                            <div class="col-md-3">  <!-- table 2-->      
                                <table class="table ">
                                    <tr>
                                        <td class="">Título</td>
                                    </tr>
                                    <tr>
                                        <td>Autor:</td>
                                    </tr>
                                    <tr>
                                        <td>Categoría:</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">Material de descarga</a></td>
                                    </tr>
                                </table>
                            </div> <!-- cierra tab1 -->     
                            <div class="col-md-1"></div> <!-- cierra table 2 -->
                            <div class="col-md-3">  <!-- table 3-->      
                                <table class="table ">
                                    <tr>
                                        <td class="">Título</td>
                                    </tr>
                                    <tr>
                                        <td>Autor:</td>
                                    </tr>
                                    <tr>
                                        <td>Categoría:</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">Material de descarga</a></td>
                                    </tr>
                                </table>
                            </div> <!-- cierra tab1 -->     
                            <div class="col-md-1"></div>
                        </div> <!-- cierra Row  -->

                        <hr>
                    </div>
                </div><!-- div tab pane Todos -->



                <!-----------*********** Opción México *********** -----> 

                <div class="tab-pane active" id="mexico">
                    <div class="col-md-12"> <!-- div de imagenes y texto -->
                        <div class="row">
                            </br>
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
                                        <td class="">Título: Ciencias, tecnologías y culturas</td>
                                    </tr>
                                    <tr>
                                        <td>Autor: Silvia Fridman, Rubén Edel Navarro</td>
                                    </tr>
                                    <tr>
                                        <td>Categoría: Educación y nuevas tecnologías</td>
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
                                        <td class="">Título: Foro Interregional de investigación sobre EVA</td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Autor: Rubén Edel Navarro, Manuel Juarez Pacheco, Yadira Navarro Rangel, María Soledad Ramírez Montoya </p></td>
                                    </tr>
                                    <tr>
                                        <td>Categoría: Redes Academicas y Tecnologicas</td>
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

                            <!--                            <div class="col-md-4"> imagen3 
                                                            <div class=" portfolio-item ih-item square colored effect8 animated bounceIn">
                                                                <a href="#">
                                                                    <img class="img-responsive" src="http://placehold.it/350x200" alt="">
                                                                    <div class="mask1"></div>
                                                                    <div class="mask2"></div>
                                                                    <div class="info ">
                                                                        <h3>Título</h3>
                                                                        <p>Descripción</p>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>  cierra imagen3      -->
                        </div>
                        <div class="row">
                            <div class="col-md-3">  <!-- table 1-->      
                                <table class="table ">
                                    <tr>
                                        <td class="">Título: Territorios de la Educación</td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Autor: Genaro Aguirre Aguilar, Rubén Edel Navarro</p></td>
                                    </tr>
                                    <tr>
                                        <td>Categoría: Ambientes Educativos</td>
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
                                        <td class="">Título: Usabilidad Pedagogica de las TIC</td>
                                    </tr>
                                    <tr>
                                        <td><p style="text-align: justify;">Autor: Brenda Luz Colorado Aguilar,Rubén Edel Navarro</p></td>
                                    </tr>
                                    <tr>
                                        <td>Categoría: Tecnologías de la Información y Comunicación</td>
                                    </tr>
                                    <tr>
                                        <td><a href="publicacionesRed/mexico/usabilidadpedagogicatic.pdf" download="usabilidadPedagogicaTIC.pdf">Material de descarga</a></td>
                                    </tr>
                                </table>
                            </div> <!-- cierra tab1 -->     
                            <div class="col-md-1"></div> <!-- cierra table 2 -->
                            <!--                            <div class="col-md-3">   table 3      
                                                            <table class="table ">
                                                                <tr>
                                                                    <td class="">Título: Usabilidad Pedagogica de las TIC</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Autor: Brenda Luz Colorado Aguilar,Rubén Edel Navarro</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Categoría: Tecnologías de la Información y Comunicación</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="publicacionesRed/mexico/usabilidadpedagogicatic.pdf" download="usabilidadPedagogicaTIC.pdf">Material de descarga</a></td>
                                                                </tr>
                                                            </table>
                                                        </div>  cierra tab1      
                                                        <div class="col-md-1"></div>-->
                        </div> <!-- cierra Row  -->

                        <hr>
                    </div>
                </div><!-- div tab pane mexico -->
                <!----------- ****** Termina Opción México ****** ----->    

                <!----------- ******  Opción Guatemala ****** ----->    

                <div class="tab-pane active" id="guatemala">
                    <div class="col-md-12"> <!-- div de imagenes y texto -->
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
                                        <td class="">Título: Contemos Juntos_Programa Nacional de Matemática</td>
                                    </tr>
                                    <tr>
                                        <td>Autor: Ministerio de Educación Guatemala</td>
                                    </tr>
                                    <tr>
                                        <td>Categoría: Matemática</td>
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
                                        <td class="">Título: Enseñanza - aprendizaje de la lectura</td>
                                    </tr>
                                    <tr>
                                        <td>Autor: Ministerio de Educación Guatemala</td>
                                    </tr>
                                    <tr>
                                        <td>Categoría: Español</td>
                                    </tr>
                                    <tr>
                                        <td><a href="publicacionesRed/guatemala/enseñanzaaprendizajelectura.pdf" download="enseñanzaAprendizajeLectura.pdf">Material de descarga</a></td>
                                    </tr>
                                </table>
                            </div> <!-- cierra tab1 -->     
                            <div class="col-md-1"></div> <!-- cierra table 2 -->

                        </div>

                        <hr>
                    </div>
                </div><!-- div tab pane guatemala -->

                <!----------- ****** Termina Opción Guatemala ****** ----->    


                <!----------- ******  Opción El Salvador ****** ----->  
                <div class="tab-pane active" id="elsalvador">
                    <div class="col-md-12"> <!-- div de imagenes y texto -->
                        <div class="row">
                            </br>
                            <div class="col-md-4"> <!--imagen1 -->
                                <div class="portfolio-item ih-item square colored effect8 animated bounceIn">
                                    <a href="publicacionesRed/elSalvador/enseñanzaaprendizajelectura.pdf" target="_blank">
                                        <img class="img-responsive" src="publicacionesRed/elSalvador/imagenesthumbnails/elsalvador01.jpg" alt="">
<!--                                        <div class="mask1"></div>
                                        <div class="mask2"></div>
                                        <div class="info ">
                                            <h3>Título</h3>
                                            <p>Descripción</p>
                                        </div>-->
                                    </a>
                                </div>                                    
                            </div> <!-- cierra imagen1 -->                              

                            <!--                            <div class="col-md-4 ">imagen2 
                                                            <div class="portfolio-item ih-item square colored effect8 animated bounceIn">
                                                                <a href="#">
                                                                    <img class="img-responsive" src="http://placehold.it/350x200" alt="">
                                                                    <div class="mask1"></div>
                                                                    <div class="mask2"></div>
                                                                    <div class="info ">
                                                                        <h3>Título</h3>
                                                                        <p>Descripción</p>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>  cierra imagen2      -->


                        </div>
                        <div class="row">
                            <div class="col-md-3">  <!-- table 1-->      
                                <table class="table ">
                                    <tr>
                                        <td class="">Título: Enseñanza - Aprendizaje de la Lectura</td>
                                    </tr>
                                    <tr>
                                        <td>Autor: Ministerio de Educación El Salvador</td>
                                    </tr>
                                    <tr>
                                        <td>Categoría: Español</td>
                                    </tr>
                                    <tr>
                                        <td><a href="publicacionesRed/elSalvador/enseñanzaaprendizajelectura.pdf" download="enseñanzaAprendizajeLectura.pdf">Material de descarga</a></td>

                                    </tr>
                                </table>
                            </div> <!-- cierra tab1 -->     
                            <div class="col-md-1"></div>
                            <!--                            <div class="col-md-3">   table 2      
                                                            <table class="table ">
                                                                <tr>
                                                                    <td class="">Título: Enseñanza - aprendizaje de la lectura</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Autor: Ministerio de Educación Guatemala</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Categoría: Español</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="publicacionesRed/guatemala/enseñanzaaprendizajelectura.pdf" download="enseñanzaAprendizajeLectura.pdf">Material de descarga</a></td>
                                                                </tr>
                                                            </table>
                                                        </div>  cierra tab1      
                                                        <div class="col-md-1"></div>  cierra table 2 -->

                        </div>

                        <hr>
                    </div>
                </div><!-- div tab pane El Salvador -->
                <!----------- ****** Termina Opción El Salvador ****** ----->    


                <!----------- ******  Opción Honduras ****** ----->    

                <div class="tab-pane active" id="honduras">
                    <div class="col-md-12"> <!-- div de imagenes y texto -->
                        <div class="row">
                            </br>
                            <div class="col-md-4"> <!--imagen1 -->
                                <div class="portfolio-item ih-item square colored effect8 animated bounceIn">
                                    <a href="publicacionesRed/Honduras/expresioncomprensionlectora.pdf" target="_blank">
                                        <img class="img-responsive" src="publicacionesRed/Honduras/imagenesthumbnails/honduras01.jpg" alt="">
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
                                    <a href="publicacionesRed/Honduras/enseñanzaaprendizajematematicas.pdf" target="_blank">
                                        <img class="img-responsive" src="publicacionesRed/Honduras/imagenesthumbnails/honduras02.jpg" alt="">
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
                                        <td class="">Título: Expresión y comprensión lectora</td>
                                    </tr>
                                    <tr>
                                        <td>Autor: Gladis O. Galindo</td>
                                    </tr>
                                    <tr>
                                        <td>Categoría: Español</td>
                                    </tr>
                                    <tr>
                                        <td><a href="publicacionesRed/Honduras/expresioncomprensionlectora.pdf" download="expresionComprensionLectora.pdf">Material de descarga</a></td>

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
                                        <td>Autor: Honduras</td>
                                    </tr>
                                    <tr>
                                        <td>Categoría: Matemáticas</td>
                                    </tr>
                                    <tr>
                                        <td><a href="publicacionesRed/Honduras/enseñanzaaprendizajematematicas.pdf" download="enseñanzaAprendizajeMatemáticas.pdf">Material de descarga</a></td>
                                    </tr>
                                </table>
                            </div> <!-- cierra tab1 -->     
                            <div class="col-md-1"></div> <!-- cierra table 2 -->

                        </div>

                        <hr>
                    </div>
                </div><!-- div tab pane Honduras -->
                <!----------- ****** Termina Opción Honduras ****** ----->    


                <!----------- ******  Opción Nicaragua ****** -----> 
                <!----------- ****** Termina Opción Nicaragua ****** -----> 


                <!----------- ******  Opción Costa rica ****** -----> 
                <!----------- ****** Termina Opción Costa Rica ****** -----> 


                <!----------- ******  Opción Panamá ****** ----->  
                <div class="tab-pane active" id="panama">
                    <div class="col-md-12"> <!-- div de imagenes y texto -->
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

                            <!--                            <div class="col-md-4 ">imagen2 
                                                            <div class="portfolio-item ih-item square colored effect8 animated bounceIn">
                                                                <a href="#">
                                                                    <img class="img-responsive" src="http://placehold.it/350x200" alt="">
                                                                    <div class="mask1"></div>
                                                                    <div class="mask2"></div>
                                                                    <div class="info ">
                                                                        <h3>Título</h3>
                                                                        <p>Descripción</p>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>  cierra imagen2      -->


                        </div>
                        <div class="row">
                            <div class="col-md-3">  <!-- table 1-->      
                                <table class="table ">
                                    <tr>
                                        <td class="">Título: Español y matemática</td>
                                    </tr>
                                    <tr>
                                        <td>Autor: Gibzka de vernier, Mariela M. de Quezada</td>
                                    </tr>
                                    <tr>
                                        <td>Categoría: Educación Básica</td>
                                    </tr>
                                    <tr>
                                        <td><a href="publicacionesRed/panama/españolmatematica.pdf" download="españolMatematica.pdf">Material de descarga</a></td>

                                    </tr>
                                </table>
                            </div> <!-- cierra tab1 -->     
                            <div class="col-md-1"></div>
                            <!--                            <div class="col-md-3">   table 2      
                                                            <table class="table ">
                                                                <tr>
                                                                    <td class="">Título: Enseñanza - aprendizaje de la lectura</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Autor: Ministerio de Educación Guatemala</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Categoría: Español</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="publicacionesRed/guatemala/enseñanzaaprendizajelectura.pdf" download="enseñanzaAprendizajeLectura.pdf">Material de descarga</a></td>
                                                                </tr>
                                                            </table>
                                                        </div>  cierra tab1      
                                                        <div class="col-md-1"></div>  cierra table 2 -->

                        </div>

                        <hr>
                    </div>
                </div><!-- div tab pane Panamá -->
                <!----------- ****** Termina Opción Panamá ****** ----->    


                <!----------- ******  Opción Rep. Dominicana ****** ----->  
                <!----------- ****** Termina Opción Panamá ****** ----->    


                <!----------- ******  Opción Rep. Dominicana ****** ----->    

                <div class="tab-pane active" id="repdominicana">
                    <div class="col-md-12"> <!-- div de imagenes y texto -->
                        <div class="row">
                            </br>
                            <div class="col-md-4"> <!--imagen1 -->
                                <div class="portfolio-item ih-item square colored effect8 animated bounceIn">
                                    <a href="#">
                                        <img class="img-responsive" src="http://placehold.it/350x200" alt="">
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
                                    <a href="#">
                                        <img class="img-responsive" src="http://placehold.it/350x200" alt="">
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
                                        <td class="">Título: Comprensión lectora</td>
                                    </tr>
                                    <tr>
                                        <td>Autor: Ma. Eunice I. Vicioso</td>
                                    </tr>
                                    <tr>
                                        <td>Categoría: Español</td>
                                    </tr>
                                    <tr>
                                        <td><a href="publicacionesRed/repDominicana/compresionlectora.pdf" download="compresionLectora.pdf">Material de descarga</a></td>

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
                                        <td><a href="publicacionesRed/repDominicana/enseñanzaaprendizajematematica.pdf" download="enseñanzaAprendizajeMatemáticas.pdf">Material de descarga</a></td>
                                    </tr>
                                </table>
                            </div> <!-- cierra tab1 -->     
                            <div class="col-md-1"></div> <!-- cierra table 2 -->

                        </div>

                        <hr>
                    </div>
                </div><!-- div tab pane Rep. Dominicana -->
                <!----------- ****** Termina Opción Rep. dominicana ****** ----->    




                <!--                            <div class="tab-pane" id="tab-6">
                                                <p>Nicaragua</p>
                                            </div>/.tab-pane de tab6
                
                                            <div class="tab-pane" id="tab-7">
                                                <p>Costa Rica</p>
                                            </div>/.tab-pane de tab7
                
                                            <div class="tab-pane" id="tab-8">
                                                <p>Panamá</p>
                                            </div>/.tab-pane de tab9
                
                                            <div class="tab-pane" id="tab-9">
                                                <p>Colombia</p>
                                            </div>/.tab-pane de tab9
                
                                            <div class="tab-pane" id="tab-10">
                                                <p>Rep. Dom.</p>
                                            </div>/.tab-pane de tab10-->










            </div> <!-- cierra div tab content 1 -->
            <div class="col-md-1"></div>
        </div> 
    </div><!--cierra row menu -->
    </br></br>
</div><!--cierra row inicial -->

@include('red.seccionpie')
@stop