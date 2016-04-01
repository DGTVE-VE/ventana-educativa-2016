<div class="row">
    <div id="wrapper">
        <div class="overlay"></div>

        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li><a href="http://www.dgb.sep.gob.mx/02-m1/02-subsistemas/telebachillerato/NORMATIVIDAD/DOCUMENTO_BASE_TBC_2015.pdf" target="_blank">Normatividad</a></li>
                <li><a href="http://www.dgb.sep.gob.mx/02-m1/02-subsistemas/telebachillerato/NORMATIVIDAD/Mapa_CURRICULAR_tbc_2014.pdf" target="_blank">Mapa Curricular</a></li>
                <li><a href="#">Calendario</a></li>
                <li><a href="http://www.dgb.sep.gob.mx/02-m1/02-subsistemas/telebachillerato.php?id=materiales_audiovisuales" tarjet="_blank">Materiales Audiovisuales</a></li>
                <li id="sinBorde"><a href="http://www.dgb.sep.gob.mx/02-m1/02-subsistemas/telebachillerato.php?id=materiales_impresos" target="_blank">Material Impreso</a></li>
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas" >
                <span class="vertical">MENÚ</span>
            </button>
        </div> <!-- /#page-content-wrapper -->
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



