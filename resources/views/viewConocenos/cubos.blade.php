<!--script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script-->
<script src="js/conocenos/jquery.plugin.js"></script>
<script src="js/conocenos/jquery.imagecube.js"></script>
<style>
	.padLado{
		padding-left: 0px; padding-right:0px;
	}
	.medidaCubo{
		width: 101%; height: 310px;
	}
</style>
    <div class="row">
	
		<div class="col-sm-12 col-md-12 col-lg-12 contenedorMapa">
			<div class="text-center"><h4>COMUNIDAD EDUCATIVA</h4></div>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-12"><br><br></div>
		<div class="col-md-4 padLado">
			<div id="Cubo1" class="medidaCubo">
				<img src="imagenes/conocenos/cubos/docentes2.png" alt="" title="docentes1"/>
				<img src="imagenes/conocenos/cubos/docentes2.png" alt="" title="docentes2"/>
			</div>
		</div>
		<div class="col-md-4 padLado">
			<div id="Cubo2" class="medidaCubo">
				<img src="imagenes/conocenos/cubos/estudiantes2.png" alt="" title="estudiantes1"/>
				<img src="imagenes/conocenos/cubos/estudiantes2.png" alt="" title="estudiantes2"/>
			</div>
		</div>
		<div class="col-md-4 padLado">
			<div id="Cubo3" class="medidaCubo">
				<img src="imagenes/conocenos/cubos/padres2.png" alt="" title="padres1"/>
				<img src="imagenes/conocenos/cubos/padres2.png" alt="" title="padres2"/>
			</div>
		</div>
    </div>

<script>
        $('#Cubo1').imagecube({direction: 'up', repeat: false, full3D: false});
		$('#Cubo1').mouseenter(function() { 
			var cube = $('#Cubo1'); 
			var next = parseInt($('#next').val(), 10); 
			cube.imagecube('option', {direction: 'up'}). 
				imagecube('rotate', next, function() { 
					$('#current').text($(cube.imagecube('current')).attr('title')); 
				}); 
		});
		$('#Cubo1').mouseleave(function() { 
			var cube = $('#Cubo1'); 
			var next = parseInt($('#next').val(), 10); 
			cube.imagecube('option', {direction: 'down'}). 
				imagecube('rotate', next, function() { 
					$('#current').text($(cube.imagecube('current')).attr('title')); 
				}); 
		});
        $('#Cubo2').imagecube({direction: 'up', repeat: false, full3D: false});
		$('#Cubo2').hover(function() { 
			var cube = $('#Cubo2');
			var next = parseInt($('#next').val(), 10); 
			cube.imagecube('option', {direction: $('#direction').val()}). 
				imagecube('rotate', next, function() { 
					$('#current').text($(cube.imagecube('current')).attr('title')); 
				}); 
		});
        $('#Cubo3').imagecube({direction: 'up', repeat: false, full3D: false});
		$('#Cubo3').hover(function() { 
			var cube = $('#Cubo3'); 
			var next = parseInt($('#next').val(), 10); 
			cube.imagecube('option', {direction: $('#direction').val()}). 
				imagecube('rotate', next, function() { 
					$('#current').text($(cube.imagecube('current')).attr('title')); 
				}); 
		});
</script>