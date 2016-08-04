<div class="row">
    <div id="wrapper-biblioteca">
        <div class="overlay"></div>
        <!-- Sidebar -->
        <div class="margensuperiormenuBib">
            <nav class="navbar navbar-inverse navbar-fixed-top margensuperiormenuBib" id="sidebar-wrapper-biblioteca" role="navigation">
                <ul class="nav sidebar-nav">
                    <li><a href="{{url('biblioteca/')}}">Inicio</a></li>
                    @foreach($bibliotecaMenu as $bibliotecaMenu)
                        <li><a href="{{url('biblioteca/tomos/'.$bibliotecaMenu->id)}}">{{$bibliotecaMenu->nombre}}</a></li>
                    @endforeach 
                </ul>
            </nav>

            <!-- Page Content -->
            <div id="page-content-wrapper-bib" class="margensuperiormenuBib">
                <button type="button" class="hamburger-biblioteca is-closed margensuperiormenuBib" data-toggle="offcanvas" >
                    <span class="vertical-biblioteca">MENÚ</span>
                </button>
            </div> <!-- fin page-content-->
        </div>
    </div> 
</div>

<script>
    $(document).ready(function () {
        var trigger = $('.hamburger-biblioteca'),
			overlay = $('.overlay'),
			isClosed = true, abierto = 'is-closed';
			
		function cerrarMenuHamb(){
			overlay.hide();
			trigger.removeClass(abierto);
			isClosed = true;
		}
		
		function abrirMenuHamb(){
			overlay.show();
			trigger.addClass(abierto);
			isClosed = false;
		}

		trigger.click(function () {
            hamburger_cross();
        });
		
		$('#sidebar-wrapper-biblioteca').mouseleave(function () {
			$('#wrapper-biblioteca').toggleClass('toggled');
            cerrarMenuHamb();

        });

        function hamburger_cross() {
            if (isClosed == true) {
				abrirMenuHamb();
            } else {
				cerrarMenuHamb();
            }
        }

        $('[data-toggle="offcanvas"]').click(function () {
            $('#wrapper-biblioteca').toggleClass('toggled');
        });
    });

</script>