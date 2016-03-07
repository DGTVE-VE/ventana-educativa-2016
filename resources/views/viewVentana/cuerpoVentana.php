		<style>
			.difumina{
				-webkit-filter: blur(3px);
				-moz-filter: blur(3px);
				-o-filter: blur(3px);
				-ms-filter: blur(3px);
				filter: blur(3px);
			}
        </style>
	<script>
	/*	---------------------------------------	Sección Usabilidad. Agregar animación de entrada a imagenes 	--------------------------------*/
		function agregaClaseBlur(imagen){
			imagen = '#' + imagen;
			$(imagen).addClass('difumina');
		}
		function quitaClaseBlur(imagen){
			imagen = '#' + imagen;
			$(imagen).removeClass('difumina');
		}
		function quitaEfxDifumina(clase){
			var elems = $(clase);    //elementos que quiero saber si estan en el área visible
			elems.each(function(){
				$(this).removeClass("difumina");
			});
		}
		function muestraCubos(){
			var Intervalo4 = $('.Intervalo4');    //elementos que quiero saber si estan en el área visible
			Intervalo4.each(function(){
					var cubo = $(this);
					setTimeout(function(){
						cubo.addClass("animated");
						cubo.fadeIn();
						setTimeout(function(){
							quitaEfxDifumina('.Intervalo4');
						},750);
					}, 1000);
				});
			var Intervalo3 = $('.Intervalo3');    //elementos que quiero saber si estan en el área visible
			Intervalo3.each(function(){
					var cubo = $(this);
					setTimeout(function(){
						cubo.addClass("animated");
						cubo.fadeIn();
						setTimeout(function(){
							quitaEfxDifumina('.Intervalo3');
						},750);
					}, 750);
				});
			var Intervalo2 = $('.Intervalo2');    //elementos que quiero saber si estan en el área visible
			Intervalo2.each(function(){
					var cubo = $(this);
					setTimeout(function(){
						cubo.addClass("animated");
						cubo.fadeIn();
						setTimeout(function(){
							quitaEfxDifumina('.Intervalo2');
						},750);
					}, 500);
				});
			var Intervalo1 = $('.Intervalo1');    //elementos que quiero saber si estan en el área visible
			Intervalo1.each(function(){
					var cubo = $(this);
					setTimeout(function(){
						cubo.addClass("animated");
						cubo.fadeIn();
						setTimeout(function(){
							quitaEfxDifumina('.Intervalo1');
						},750);
					}, 250);
				});
		}
		$(document).ready(function(){
			$(function(){
				var elems = $('.oculta');    //elementos que quiero saber si estan en el área visible
				elems.each(function(){
					$(this).fadeOut();
				});
				muestraCubos();
			});
		})
	</script>
		<div class="container-fluid">
		    <div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:30px;">
				</div>
			</div>
            <div class="row">
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1" style="padding-top: 10.5%; padding-left:0; padding-right:0;">
					<img id="CUBO01" class="oculta difumina Intervalo4 slideInLeft" src="imagenes/homeventana/CUBO-01.png" usemap="#mapacubo1" style="width:200%; height:200%; position: relative; left:-30%; z-index:3;"/>
					<map name="mapacubo1">
						<area shape="poly" coords="106,0,212,107,106,212,0,106,106,0" onmouseover="agregaClaseBlur('CUBO01')" onmouseout="quitaClaseBlur('CUBO01')" href="#">
						<!--area shape="poly" coords="444,0,883,445,444,883,444,0" onmouseover="agregaClaseBlur('cubo1')" onmouseout="quitaClaseBlur('cubo1')" href="#"/>
						<area shape="poly" coords="444,0,883,445,444,883,444,0" onmouseover="agregaClaseBlur('cubo1')" onmouseout="quitaClaseBlur('cubo1')" href="#"/-->
					</map>
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" style="padding:4.2%; padding-left:0px; padding-right:0px;">
					<img class="oculta difumina Intervalo3 slideInLeft" src="imagenes/homeventana/CUBO-02.png" style="width:170%; height:170%; position: relative; left:-11%; z-index:2;"/>
					<img class="oculta difumina Intervalo3 slideInLeft" src="imagenes/homeventana/CUBO-03.png" style="width:185%; height:185%; position: relative; left:-18%; z-index:2;"/>
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" style="padding-top: 9.7%; padding-left:0px; padding-right:0px;">
					<img class="oculta difumina Intervalo2 slideInLeft" src="imagenes/homeventana/CUBO-04.png" style="width:210%; height:210%; position: relative; left:-40%; z-index:3;"/>
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" style="padding:0%">
					<img class="oculta difumina Intervalo1 slideInLeft" src="imagenes/homeventana/CUBO-05.png" style="width:220%; height:220%; position: relative; left:-38%; z-index:4;"/>
					<img class="oculta difumina Intervalo1 slideInLeft" src="imagenes/homeventana/CUBO-06.png" style="width:220%; height:220%; position: relative; left:-37%; z-index:4;"/>
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" style="padding-top:8%; padding-left:0px; padding-right:0px;">
					<img src="imagenes/homeventana/CUBO-07.png" style="width:250%; height:250%; position: relative; left:-30%; z-index:5;"/>
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" style="padding:0">
					<img class="oculta difumina Intervalo1 slideInRight" src="imagenes/homeventana/CUBO-08.png" style="width:220%; height:220%; position: relative; left:5%; z-index:4;"/>
					<img class="oculta difumina Intervalo1 slideInRight" src="imagenes/homeventana/CUBO-09.png" style="width:220%; height:220%; position: relative; left:5%; z-index:4;"/>
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" style="padding-top: 9.7%; padding-left:0px; padding-right:0px;">
					<img class="oculta difumina Intervalo2 slideInRight" src="imagenes/homeventana/CUBO-10.png" style="width:210%; height:210%; position: relative; left:19%; z-index:3;"/>
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" style="padding:4.5%; padding-left:0px; padding-right:0px;">
					<img class="oculta difumina Intervalo3 slideInRight" src="imagenes/homeventana/CUBO-11.png" style="width:170%; height:170%; position: relative; left:37%; z-index:2;"/>
					<img class="oculta difumina Intervalo3 slideInRight" src="imagenes/homeventana/CUBO-12.png" style="width:180%; height:180%; position: relative; left:27%; z-index:2;"/>
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" style="padding-top: 10.5%; padding-left:0; padding-right:0;">
					<img class="oculta difumina Intervalo4 slideInRight" src="imagenes/homeventana/CUBO-13.png" style="width:200%; height:200%; position: relative; left:19%; z-index:3;"/>
					<!--	Animate.css 	fadeInLeft	fadeInRight	------	slideInLeft	slideInRight -->
				</div>
			</div>
        </div>