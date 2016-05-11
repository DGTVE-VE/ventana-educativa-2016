@section('titleBiblioteca')
Biblioteca
@stop
@extends('indexBiblioteca')
@section('menuBiblioteca')
@include('viewVentana.encabezadoVentana')
<script>
    $('#buscar').css('display', 'none');
    $('#iconoBuscar').css('display', 'none');
    $('#navegacionVentana').css('height', '55px');
    $(window).scroll(function () {
        var scroll_v = this.pageYOffset;
        if (scroll_v > 10) {
            $('#navegacionVentana').css('background', 'rgba(0, 0, 0, .3)');
        }
        if (scroll_v < 10) {
            $('#navegacionVentana').css('background', 'transparent');
        }
    });
</script>        

@endsection
@section('cuerpoBiblioteca')
<div class="container">
    <div class="row">
        <div class="content">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                México
                            </a>
                        </h4>

                    </div>
                    <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body">
                            <img src="http://files.conceptcarz.com/img/Suzuki/suzuki-concept-kizashi-3-2008-01-800.jpg" />
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                Guatemala   
                            </a>
                        </h4>

                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <img src="http://www.wallsave.com/wallpapers/800x400/zl-camaro/65234/zl-camaro-chevrolet-carbon-concept-car-65234.jpg" />
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                              El Salvador  
                            </a>
                        </h4>

                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <img src="http://files.conceptcarz.com/img/Volvo/2009_Volvo_S60_Concept-Image-01-800.jpg" />
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                              Honduras  
                            </a>
                        </h4>

                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <img src="http://files.conceptcarz.com/img/Volvo/2009_Volvo_S60_Concept-Image-01-800.jpg" />
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                              Nicaragua  
                            </a>
                        </h4>

                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <img src="http://files.conceptcarz.com/img/Volvo/2009_Volvo_S60_Concept-Image-01-800.jpg" />
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                              Costa Rica 
                            </a>
                        </h4>

                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <img src="http://files.conceptcarz.com/img/Volvo/2009_Volvo_S60_Concept-Image-01-800.jpg" />
                        </div>
                    </div>
                </div>                
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                             Panamá  
                            </a>
                        </h4>

                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <img src="http://files.conceptcarz.com/img/Volvo/2009_Volvo_S60_Concept-Image-01-800.jpg" />
                        </div>
                    </div>
                </div>                
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                              Colombia  
                            </a>
                        </h4>

                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <img src="http://files.conceptcarz.com/img/Volvo/2009_Volvo_S60_Concept-Image-01-800.jpg" />
                        </div>
                    </div>
                </div>  
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                              República DOminicana  
                            </a>
                        </h4>

                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <img src="http://files.conceptcarz.com/img/Volvo/2009_Volvo_S60_Concept-Image-01-800.jpg" />
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                              Belice  
                            </a>
                        </h4>

                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <img src="http://files.conceptcarz.com/img/Volvo/2009_Volvo_S60_Concept-Image-01-800.jpg" />
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</div>
@endsection
