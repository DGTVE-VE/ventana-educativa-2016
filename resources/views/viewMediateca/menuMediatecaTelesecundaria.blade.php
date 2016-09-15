<style>
	.imagenTelesec{
		width:60px !important;
		height:47px !important;
	}
@media(max-width:991px)
	.imagenTelesec{
		width:60px !important;
		height:47px !important;
	}
@media(min-width:992px)
	.imagenTelesec{
		max-width:160%;
		max-height:160%;
	}
</style>
<div class="row">
    <div id="wrapper">
        <!--<div class="overlay"></div>-->
        <!-- Sidebar -->
        <div class="margensuperiormenuTS">
            <nav class="navbar navbar-inverse navbar-fixed-top margensuperiormenuTS" id="sidebar-wrapperTS" role="navigation">
                <ul class="nav sidebar-nav">
                    <li><a data-toggle="modal" href="#myModal-mision">Misión</a></li>
                    <li><a data-toggle="modal" href="#myModal-mapaCurricular">Mapa Curricular</a></li>
                    <li><a data-toggle="modal" href="#myModal-calendario">Calendario</a></li>
                    <li><a data-toggle="modal" href="#myModal-materialEducativo">Materiales Impresos</a></li>
                    <li id="sinBorde"><a href="{{url('http://www.televisioneducativa.gob.mx/canales/telesecundaria#subenlaces')}}" target="_blank">Programación Televisiva</a></li>
                    <li></li>                                        
                    <li><a data-toggle="modal" href="#modalDidactica">Mediateca Didáctica</a></li>
                </ul>|
            </nav>

            <!-- Page Content -->
            <div id="page-content-wrapper" class="margensuperiormenuTS">
                <button type="button" class="hamburger is-closed margensuperiormenuTS" data-toggle="offcanvas" >
                    <span class="vertical">MENÚ</span>
                </button>
            </div> <!-- page-content-wrapper -->
        </div>
    </div> <!-- /#wrapper -->
    <!--Modal para Mediateca Didáctica-->
    <div class="modal fade" id="modalDidactica" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="row">
                        <div class="col-sm-3 col-md-2 col-lg-2">
                            {{ HTML::image('imagenes/mediateca/tsecundaria/logoTS.png','logo telesecundaria',['class'=>'imagenTelesec'])}}
                        </div>                
                        <div class="col-sm-7 col-md-8 col-lg-8">
                            <h3><strong>Mediateca Didáctica</strong></h3>
                        </div>
                    </div>
                </div>
                <div class="modal-body text-justify" style="height:90%;">
                    <iframe style="width:100%; height:600px;" src="{{url('MediatecaDidactica/index.html')}}"></iframe>
                    <!--div id="contenidoDidactica"></div>
                    <script>$("#contenidoDidactica").load('{{url("MediatecaDidactica/index.html")}}');</script-->
                </div>
            </div>
        </div>
    </div> <!-- Fin modal Mediateca Didáctica-->

    <!--Modal para Misión-->
    <div class="modal fade" id="myModal-mision" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="row">
                        <div class="col-sm-3 col-md-2 col-lg-2">
                            {{ HTML::image('imagenes/mediateca/tsecundaria/logoTS.png','logo telesecundaria',['class'=>'imagenTelesec'])}}
                        </div>                
                        <div class="col-sm-7 col-md-8 col-lg-8">
                            <h3><strong>Telesecundaria</strong></h3>
                        </div>
                        <div class="col-lg-10"></div>
                    </div>
                </div>
                <div class="modal-body text-justify">
                    <h2>Misión</h2><br/>
                    <p>Garantizar el derecho a la educación básica pública y gratuita, estipulado en el Artículo tercero constitucional, a adolescentes mexicanos en edad de cursar la educación secundaria, que radican en poblaciones rurales y semiurbanas de 2,500 habitantes o menos, asegurando con ello, la igualdad de oportunidades para acceder a una educación básica de calidad, donde adquieran los conocimientos y habilidades necesarios que les permitan lograr una trayectoria escolar exitosa y una formación humana integral.</p>
                </div>
            </div>
        </div>
    </div> <!-- Fin modal Misión-->

    <!--Modal para Mapa Curricular-->
    <div class="modal fade" id="myModal-mapaCurricular" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="row">
                        <div class="col-sm-3 col-md-2 col-lg-2">
                            {{ HTML::image('imagenes/mediateca/tsecundaria/logoTS.png','logo telesecundaria',['class'=>'imagenTelesec'])}}
                        </div>                
                       <div class="col-sm-8 col-md-8 col-lg-8">
                            <h3><strong>Telesecundaria</strong></h3>
                        </div>
                        <div class="col-lg-10"></div>
                    </div>
                </div>
                <div class="modal-body text-center">
                    <a href="{{url('http://telesecundaria.sep.gob.mx/assets/pdf/Mapa%20curricular%20para%20la%20educaci%C3%B3n%20secundaria.pdf')}}" target="_blank" >
                        {{ HTML::image('imagenes/mediateca/tsecundaria/mapaCurricularTS.png','mapa curricular',['width'=>'90%','height'=> '80%']) }}
                    </a>
                </div>
            </div>
        </div>
    </div> <!-- Fin modal Mapa Curricular-->

    <!--Modal para Materiales impresos-->
    <div class="modal fade" id="myModal-materialEducativo" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="row">
						<div class="col-sm-3 col-md-2 col-lg-2">
                            {{ HTML::image('imagenes/mediateca/tsecundaria/logoTS.png','logo telesecundaria',['class'=>'imagenTelesec'])}}
                        </div>                
                        <div class="col-sm-8 col-md-8 col-lg-8">
                            <h3><strong>Telesecundaria</strong></h3>
                        </div>
                        <div class="col-lg-10"></div>
                    </div>
                </div>
                <div class="modal-body text-justify">
                    <h2>Materiales Impresos</h2><br/>
                    <p>Este espacio le ofrece una amplia gama de materiales educativos desarrollados para la Telesecundaria: Libros digitalizados para alumnos y maestros, Apuntes, Cursos de Regularización y reforzamiento, así como el Curso Propedéutico. Todo ello se encuentra a su disposición para consultarlos o descargarlos.
                        <a href="{{url('http://telesecundaria.sep.gob.mx/materiales_educativos_impresos.php')}}" target="_blank" > Para materiales impresos...</a></p>
                </div>
            </div>
        </div>
    </div> <!-- Fin modal Materiales educativos-->

    <!-- Ventana modal para calendario escolar -->
    <div class="modal fade" id="myModal-calendario" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <br>
                        <div class="pull-left">
                            <!-- Tabs -->
                            <ul class="nav panel-tabs">
                                <li class="active"><a href="#tab1" data-toggle="tab"><i class="fa fa-calendar" aria-hidden="true"></i>&ensp;Calendario escolar de 185 días</a></li>
                                <li><a href="#tab2" data-toggle="tab"><i class="fa fa-calendar" aria-hidden="true"></i>&ensp;Calendario escolar de 200 días</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab1">
                                <embed width="100%" height="500px" src="{{url('http://telesecundaria.sep.gob.mx/assets/pdf/pdf_calendario/calendario_185.pdf')}}" type="application/pdf"></embed>
                                 <!--<iframe src="http://docs.google.com/gview?url=http://telesecundaria.sep.gob.mx/assets/pdf/pdf_calendario/calendario_200.pdf&embedded=true" style="width:100%; height:500%;" frameborder="0"></iframe>-->
                            </div>
                            <div class="tab-pane" id="tab2">
                                <embed width="100%" height="500px" src="{{url('http://telesecundaria.sep.gob.mx/assets/pdf/pdf_calendario/calendario_200.pdf')}}" type="application/pdf"></embed>
                                 <!--<iframe src="pdf/mediateca/calendario_185.pdf" style="width:100%; height:500px;" frameborder="0"></iframe>-->
                            </div>

                        </div>
                    </div>
                </div>
                <!--                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <div class="row">
                                        <div class="col-lg-1">
                                            {{ HTML::image('imagenes/mediateca/tsecundaria/logoTS.png','logo telesecundaria',['width'=>'160%','height'=>'160%'])}}
                                        </div>                
                                        <div class="col-lg-1 ">
                                            <h3><strong>Telesecundaria</strong></h3>
                                        </div>
                                        <div class="col-lg-10"></div>
                                    </div>    
                                </div>
                                <div class="modal-body">
                                    <a href="{{url('http://telesecundaria.sep.gob.mx/assets/pdf/CALENDARIO%20TS%202015-16.pdf')}}" target="_blank" >
                                        {{ HTML::image('imagenes/mediateca/tsecundaria/calendarioTS.jpg','calendario',['width'=>'100%','height'=> '100%']) }}
                                    </a>
                                </div>-->
            </div>
        </div>
    </div> <!-- Fin modal calendario escolar-->
</div>

<script>

    $(document).ready(function () {
        var trigger = $('.hamburger'),
                overlay = $('.overlay'),
                isClosed = false;

        trigger.click(function () {
            hamburger_cross();
        });

        function hamburger_cross() {

            if (isClosed == true) {
                overlay.hide();
//                        trigger.removeClass('is-open');
                trigger.addClass('is-closed');
                isClosed = false;
            } else {
                overlay.show();
                trigger.removeClass('is-closed');
//                        trigger.addClass('is-open');
                isClosed = true;
            }
        }

        $('[data-toggle="offcanvas"]').click(function () {
            $('#wrapper').toggleClass('toggled');
        });
    });

</script>