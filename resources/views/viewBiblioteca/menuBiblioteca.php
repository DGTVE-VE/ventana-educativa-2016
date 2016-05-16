<div class="row">
    <div id="wrapper-biblioteca">
        <div class="overlay"></div>
        <!-- Sidebar -->
        <div class="margensuperiormenuBib">
            <nav class="navbar navbar-inverse navbar-fixed-top margensuperiormenuBib" id="sidebar-wrapper-biblioteca" role="navigation">
                <ul class="nav sidebar-nav">
                    <li><a href="#">Docente</a></li>
                    <li><a href="#">Nacional</a></li>
                    <li><a href="#">Escolar</a></li>
                    <li id="sinBorde"><a href="#">Pública</a></li>
                </ul>
            </nav>

            <!-- Page Content -->
            <div id="page-content-wrapper-bib" class="margensuperiormenuBib">
                <button type="button" class="hamburger-biblioteca is-closed margensuperiormenuBib" data-toggle="offcanvas" >
                    <span class="vertical">MENÚ</span>
                </button>
            </div> <!-- fin page-content-->
     
        </div>
    </div> 
</div>

<script>

    $(document).ready(function () {
        var trigger = $('.hamburger-biblioteca'),
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
            $('#wrapper-biblioteca').toggleClass('toggled');
        });
    });

</script>



