<div class="row">
    <div id="wrapper">
        <!--<div class="overlay"></div>-->
        <!-- Sidebar -->
        <div class="margensuperiormenuTS">
            <nav class="navbar navbar-inverse navbar-fixed-top margensuperiormenuTS" id="sidebar-wrapperTB" role="navigation">
                <ul class="nav sidebar-nav">
                    <li><a href="{{url('http://www.dgb.sep.gob.mx/servicios-educativos/telebachillerato/normatividad/DOCUMENTO_BASE_TBC_2015.pdf')}}" target="_blank">Normatividad</a></li>
                    <li><a data-toggle="modal" href="#myModal-mapaCurricular-tb">Mapa Curricular</a></li>
                    <!--<li><a data-toggle="modal" href="#myModal-calendario-tb">Calendario</a></li>-->
                    <li><a href="{{url('http://www.dgb.sep.gob.mx/pdf/escolar.pdf')}}" target="_blank">Calendario</a></li>
                    <li><a href="{{url('http://www.tuprepaenvideos.sep.gob.mx/')}}" target="_blank">Materiales Audiovisuales</a></li>
                    <li id="sinBorde"><a href="{{url('http://www.dgb.sep.gob.mx/servicios-educativos/telebachillerato/materiales_impresos.php')}}" target="_blank">Material Impreso</a></li>
                </ul>
            </nav>

            <!-- Page Content -->
            <div id="page-content-wrapper" class="margensuperiormenuTS">
                <button type="button" class="hamburger is-closed margensuperiormenuTS" data-toggle="offcanvas" >
                    <span class="vertical">MENÚ</span>
                </button>
            </div> <!-- fin page-content-->
        </div> 
    </div>
    <!--Modal para Mapa Curricular-->
    <div class="modal fade" id="myModal-mapaCurricular-tb" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Telebachillerato</h4>
                </div>
                <div class="modal-body">                    
                    <embed width="100%" height="600px" src="{{url('http://www.dgb.sep.gob.mx/servicios-educativos/telebachillerato/normatividad/Mapa_CURRICULAR_tbc_2014.pdf')}}" type="application/pdf"></embed>
                </div>
            </div>
        </div>
    </div> <!-- Fin modal Mapa curricular-->

    <!--Modal para calendario escolar -->
<!--    <div class="modal fade" id="myModal-calendario-tb" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Telebachillerato</h4>
                </div>
                <div class="modal-body">
                    <a href="{{url('http://www.enba.sep.gob.mx/files/calendario2015-2016.pdf')}}" target="_blank">
                        {{ HTML::image('imagenes/mediateca/tbachillerato/calendarioTS.jpg','calendario',['width'=>'100%','height'=>'100%']) }}
                    </a>
                </div>
            </div>
        </div>
    </div>  Fin modal calendario escolar-->
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



