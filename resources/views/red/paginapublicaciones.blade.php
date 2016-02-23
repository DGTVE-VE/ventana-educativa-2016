@section('title')
Publicaciones
@stop
@extends('home')
@section('menu')
@include('red.seccionheader')
@endsection
<div class="row" style="margin-top: 5%;" >        
    <div class="row fondo_Obscuro">
        <div class="col-md-12 text-center text-uppercase">
            <h2>Publicaciones</h2>
        </div>
    </div>
    <div class="row"> <!--row inicial -->
        <div class="col-md-1"></div>
        <div class="col-md-10">

            </br>      
            <!--begin tabs going in narrow content -->
            <ul class="nav nav-tabs sidebar-tabs" id="sidebar" role="tablist">
                <li class="active"><a href="#tab-1" role="tab" data-toggle="tab">TODOS</a></li>
                <li><a href="#tab-2" role="tab" data-toggle="tab">MÉXICO</a></li>
                <li><a href="#tab-3" role="tab" data-toggle="tab">GUATEMALA</a></li>
                <li><a href="#tab-4" role="tab" data-toggle="tab">EL SALVADOR</a></li>
                <li><a href="#tab-5" role="tab" data-toggle="tab">HONDURAS</a></li>
                <li><a href="#tab-6" role="tab" data-toggle="tab">NICARAGUA</a></li>
                <li><a href="#tab-7" role="tab" data-toggle="tab">COSTA RICA</a></li>
                <li><a href="#tab-8" role="tab" data-toggle="tab">PANAMÁ</a></li>
                <li><a href="#tab-9" role="tab" data-toggle="tab">COLOMBIA</a></li>
                <li><a href="#tab-10" role="tab" data-toggle="tab">REP.DOMINICANA</a></li>

            </ul><!--/.nav-tabs.sidebar-tabs -->
            <!-- Tab panes -->
            <div class="tab-content "> <!-- Tab content 1 -->
                <div class="tab-pane active" id="tab-1">
                    <div class="col-md-12"> <!-- div de imagenes y texto -->
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


                        <!--Row 2 -->  
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
                    </div> <!-- cierra div de imagenes y texto -->

                    <hr>
                </div><!--/.tab-pane de tab1 -->

                <!----- Opción México -----> 
                </br>
                <div class="tab-pane" id="tab-2">
                    <div class="col-md-12"> <!-- div de imagenes y texto -->
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
                    </div><!--/.tab-pane de tab2 -->

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

                        </div><!--/.tab-content de tab1-->
                    </div> <!--/.col-sm-12 -->
                    <div class="col-md-1"></div>
                </div> <!--row inicial -->
                <!--</div>/.row -->
                
            </div><!--/.container -->
            </br></br>
        </div>
    </div>
</div>
@include('red.seccionpie')

