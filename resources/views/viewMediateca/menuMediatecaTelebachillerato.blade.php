<div class="row">
    <div id="wrapper">
        <div class="overlay"></div>
        <!-- Sidebar -->
        <div class="margensuperiormenuTS">
            <nav class="navbar navbar-inverse navbar-fixed-top margensuperiormenuTS" id="sidebar-wrapper" role="navigation">
               <ul class="nav sidebar-nav">
                    <li><a href="{{url('http://www.dgb.sep.gob.mx/02-m1/02-subsistemas/telebachillerato/NORMATIVIDAD/DOCUMENTO_BASE_TBC_2015.pdf')}}" target="_blank">Normatividad</a></li>
                    <li><a href="{{url('http://www.dgb.sep.gob.mx/02-m1/02-subsistemas/telebachillerato/NORMATIVIDAD/Mapa_CURRICULAR_tbc_2014.pdf')}}" target="_blank">Mapa Curricular</a></li>
                    <li><a data-toggle="modal" href="#myModal-telebach">Calendario</a></li>
                    <li><a href="{{url('http://www.dgb.sep.gob.mx/02-m1/02-subsistemas/telebachillerato.php?id=materiales_audiovisuales')}}" target="_blank">Materiales Audiovisuales</a></li>
                    <li id="sinBorde"><a href="{{url('http://www.dgb.sep.gob.mx/02-m1/02-subsistemas/telebachillerato.php?id=materiales_impresos')}}" target="_blank">Material Impreso</a></li>
                </ul>
            </nav>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper" class="margensuperiormenuTS">
                <button type="button" class="hamburger is-closed margensuperiormenuTS" data-toggle="offcanvas" >
                    <span class="vertical">MENÚ</span>
                </button>
            </div> <!-- /#page-content-wrapper -->


            <div class="modal fade" id="myModal-telebach" role="dialog">
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



