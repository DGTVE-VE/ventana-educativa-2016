<div class="row">
    <div id="wrapper">
        <div class="overlay"></div>
        <!-- Sidebar -->
        <div class="margensuperiormenuTS">
            <nav class="navbar navbar-inverse navbar-fixed-top margensuperiormenuTS" id="sidebar-wrapper" role="navigation">
                <ul class="nav sidebar-nav">
                    <li><a data-toggle="modal" href="#myModal-mision">Misión</a></li>
                    <li><a data-toggle="modal" href="#myModal-mapaCurricular">Mapa Curricular</a></li>
                    <li><a data-toggle="modal" href="#myModal-calendario">Calendario</a></li>
                    <li><a data-toggle="modal" href="#myModal-materialEducativo">Materiales Impresos</a></li>
                    <li id="sinBorde"><a href="{{url('http://www.televisioneducativa.gob.mx/canales/telesecundaria#subenlaces')}}" target="_blank">Programación Televisiva</a></li>
                    <li></li>                                        
                    <li><a href="#">Mediateca Didáctica</a></li>                                                            
                </ul>|
            </nav>

            <!-- Page Content -->
            <div id="page-content-wrapper" class="margensuperiormenuTS">
                <button type="button" class="hamburger is-closed margensuperiormenuTS" data-toggle="offcanvas" >
                    <span class="vertical">MENÚ</span>
                </button>
            </div> <!-- page-content-wrapper -->

            <!--Modal para Misión-->
            <div class="modal fade" id="myModal-mision" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
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
                        <div class="modal-body text-justify">
                            <h2>Misión</h2><br/>
                            <p>Garantizar el derecho a la educación básica pública y gratuita, estipulado en el Artículo tercero constitucional, a adolescentes mexicanos en edad de cursar la educación secundaria, que radican en poblaciones rurales y semiurbanas de 2, 500 habitantes o menos, asegurando con ello, la igualdad de oportunidades para acceder a una educación básica de calidad, donde adquieran los conocimientos y habilidades necesarios que les permitan lograr una trayectoria escolar exitosa y una formación humana integral.</p>
                            <!--<p>Brindar a los grupos más vulnerables del país educación secundaria, con una sólida formación en cada disciplina con principios éticos y de solidaridad social, que les permita desarrollar sus aptitudes y capacidades para que sus egresados sean capaces de desempeñarse exitosamente en educación media, así como de aprovechar responsablemente los recursos locales para mejorar su calidad de vida, a través de espacios educativos, materiales, equipo informático, uso de nuevas tecnologías de la información y la comunicación (TIC), y métodos pedagógicos acordes a sus necesidades específicas. Al mismo tiempo de suministrar la formación y los recursos necesarios a los docentes para garantizar su óptimo desempeño.</p>-->
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
                            <h2>Mapa Curricular</h3>
                                {{ HTML::image('imagenes/mediateca/tsecundaria/mapaCurricularts.png','mapa curricular',['width'=>'100%','height'=>'100%']) }}
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
                                <div class="col-lg-1">
                                   {{ HTML::image('imagenes/mediateca/tsecundaria/logoTS.png','logo telesecundaria',['width'=>'160%','height'=>'160%'])}}
                                </div>                
                                <div class="col-lg-1 ">
                                    <h3><strong>Telesecundaria</strong></h3>
                                </div>
                                <div class="col-lg-10"></div>
                            </div>
                        </div>
                        <div class="modal-body text-justify">
                            <h2>Materiales Impresos</h2><br/>
                            <p>Este espacio le ofrece una amplia gama de materiales educativos desarrollados para la Telesecundaria: libros digitales para alumnos y maestros, apuntes, videos de consulta, audios e interactivos, se encuentran a su disposición para consultarlos o descargarlos a su equipo.
                                <a href="{{url('http://telesecundaria.sep.gob.mx/materiales_educativos_impresos.php')}}" target="_blank" > Consultar material...</a></p>
                        </div>
                    </div>
                </div>
            </div> <!-- Fin modal Materiales educativos-->

            <!-- Ventana modal para calendario escolar -->
            <div class="modal fade" id="myModal-calendario" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Telesecundaria</h4>
                        </div>
                        <div class="modal-body">
                            <a href="{{url('http://telesecundaria.sep.gob.mx/assets/pdf/CALENDARIO%20TS%202015-16.pdf')}}" target="_blank">
                                {{ HTML::image('imagenes/mediateca/tsecundaria/calendarioTS.jpg','calendario',['width'=>'100%','height'=>'100%']) }}
                            </a>
                        </div>
                    </div>
                </div>
            </div> <!-- Fin modal calendario escolar-->
        </div>
    </div> <!-- /#wrapper -->
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



