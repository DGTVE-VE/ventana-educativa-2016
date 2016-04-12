<div class="row">
    <div id="wrapper">
        <div class="overlay"></div>
        <!-- Sidebar -->
        <div class="margensuperiormenuTS">
            <nav class="navbar navbar-inverse navbar-fixed-top margensuperiormenuTS" id="sidebar-wrapper" role="navigation">
                <ul class="nav sidebar-nav">
                    <li><a href="http://telesecundaria.dgmie.sep.gob.mx/mision/" target="_blank">Misión</a></li>
                    <li><a href="http://telesecundaria.dgmie.sep.gob.mx/mapa/" target="_blank">Mapa Curricular</a></li>
                    <li><a data-toggle="modal" href="#myModal-telesec">Calendario</a></li>
                    <li><a href="http://telesecundaria.dgmie.sep.gob.mx/materiales/" target="_blank">Materiales Educativos</a></li>
                    <li id="sinBorde"><a href="http://www.televisioneducativa.gob.mx/canales/telesecundaria" target="_blank">Programación Televisiva</a></li>
                </ul>
            </nav>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper" class="margensuperiormenuTS">
                <button type="button" class="hamburger is-closed margensuperiormenuTS" data-toggle="offcanvas" >
                    <span class="vertical">MENÚ</span>
                </button>
            </div> <!-- /#page-content-wrapper -->


            <!-- Ventana modal para calendario escolar -->
            <div class="modal fade" id="myModal-telesec" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <iframe class=""src="http://www.enba.sep.gob.mx/files/calendario2015-2016.pdf" width="870" height="560" ></iframe> 
                        </div>
                    </div>
                </div>
            </div> <!-- Fin modal -->
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



