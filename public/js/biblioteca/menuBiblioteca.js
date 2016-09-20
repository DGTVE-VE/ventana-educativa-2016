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