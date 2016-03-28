<div class="row" style="left: 0%;">
<div id="wrapper">
    <div class="overlay"></div>

    <!-- Sidebar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
        <ul class="nav sidebar-nav">
            <li><a href="#">Misión</a></li>
            <li><a href="#"><h4>Mapa Curricular</h4></a></li>
            <li><a href="#">Calendario</a></li>
            <li><a href="#">Materiales Educativos</a></li>
            <li id="sinBorde"><a href="#">Programación Televisiva</a></li>
        </ul>
    </nav>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <button type="button" class="hamburger is-closed" data-toggle="offcanvas" >
            <span class="vertical">MENÚ</span>
        </button>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->
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



