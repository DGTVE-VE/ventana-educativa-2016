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
                    <li><a data-toggle="modal" href="#myModal-materialEducativo">Materiales Educativos</a></li>
                    <li id="sinBorde"><a href="{{url('http://www.televisioneducativa.gob.mx/canales/telesecundaria#subenlaces')}}" target="_blank">Programación Televisiva</a></li>
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
                        </div>
                        <div class="modal-body">
                            <h3>Telesecundaria</h3>
                            <h2>Misión</h2>
                            <p>Brindar a los grupos más vulnerables del país educación secundaria, con una sólida formación en cada disciplina con principios éticos y de solidaridad social, que les permita desarrollar sus aptitudes y capacidades para que sus egresados sean capaces de desempeñarse exitosamente en educación media, así como de aprovechar responsablemente los recursos locales para mejorar su calidad de vida, a través de espacios educativos, materiales, equipo informático, uso de nuevas tecnologías de la información y la comunicación (TIC), y métodos pedagógicos acordes a sus necesidades específicas. Al mismo tiempo de suministrar la formación y los recursos necesarios a los docentes para garantizar su óptimo desempeño.</p>
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
                        </div>
                       <div class="modal-body">
                           <h3>Mapa Curricular</h3>
                               {{ HTML::image('imagenes/mediateca/tsecundaria/mapaCurricularts.png','mapa curricular',['width'=>'870','height'=>'550']) }}
                            
                        </div>
                    </div>
                </div>
            </div> <!-- Fin modal Mapa Curricular-->
            
             <!--Modal para Materiales educativos-->
            <div class="modal fade" id="myModal-materialEducativo" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body soloTexto">
                            <a href="{{url('http://telesecundaria.dgmie.sep.gob.mx/materiales/')}}" target="_blank" >
                            <h3 >Telesecundaria</h3>
                            <h2>Materiales Educativos</h2>
                            <p>Este espacio le ofrece una amplia gama de materiales educativos desarrollados para la Telesecundaria: libros digitales para alumnos y maestros, apuntes, videos de consulta, audios e interactivos, se encuentran a su disposición para consultarlos o descargarlos a su equipo.</p>
                            </a>
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
                        </div>
                        <div class="modal-body">
                            <a href="{{url('http://www.enba.sep.gob.mx/files/calendario2015-2016.pdf')}}" target="_blank">
                            {{ HTML::image('imagenes/mediateca/tsecundaria/calendarioEscolar.jpg','calendario',['width'=>'870','height'=>'620']) }}
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



