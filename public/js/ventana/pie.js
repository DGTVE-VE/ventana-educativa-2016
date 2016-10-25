	programaSubir = 0;
	programaBajar = 0;
/*	*********	Activar animaci�n de barra colaboradores	******** */
	$(document).ready(function() {
		$("#fondoTablaColabora").slideToggle("fast");
		$('#desplegar1').click(function() {
			$("#efectobarramenu2").animate({
				width: "toggle"
				//,"toggle"
			});
		});
		$('#efectobarramenu2').css('display','none');
	});
/*	*********	Oculta pesta�a de colaboradores en evento indicado	******** */
	function ocultaPestana(){
		if(programaSubir != 0){
			clearTimeout(programaSubir);
			programaSubir =0;
		}
		programaBajar = setTimeout(function(){$("#fondoTablaColabora").slideDown("slow"); }, 300);
	}
/*	*********	Muestra pesta�a de colaboradores en evento indicado	******** */
	function muestraPestana(){
		if(programaBajar != 0){
			clearTimeout(programaBajar);
			programaBajar = 0;
		}
		programaSubir = setTimeout(function(){$("#fondoTablaColabora").slideUp("slow"); }, 1000);
	}