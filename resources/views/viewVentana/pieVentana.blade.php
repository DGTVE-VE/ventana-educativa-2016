<!--	-----------------	Barra colaboradores para resoluciones grandes	----------------	-->
<div class="row visible-md-block visible-lg-block">
    <div id="barraNavegacionColabora" class="col-md-12 col-lg-12 tabs_holder navbar-fixed-bottom quitaPad" onmouseover="ocultaPestana()" onmouseleave="muestraPestana()">
		<div id="pestanaColabora" class="fondoColabora" ><a href="#"><p id="textoColabora" class="txtPestana" id="desplegar">COLABORADORES</p></a></div>
        <div id="efectobarramenu" class="quitaPad">
			<div id="fondoTablaColabora" class="fondoTablaColabora">
				<div style="padding:10px;">
				</div>
				<table class="table tablaCOlaboradores"   >
					<tr>
						<td>
							<a href="http://www.gob.mx/sep" target="_blank" onMouseOver="document.logosep.src = 'imagenes/ventana/pieventana/sepcolor.png';"
							   onMouseOut="document.logosep.src = 'imagenes/ventana/pieventana/sep.png';">
								{{ HTML::image('imagenes/ventana/pieventana/sep.png','Secretaria de Educación Pública',  ['style'=>'margin-left: 10% !important;', 'name'=>'logosep', 'class'=>'img-responsive'])}}
							</a> 
						</td>
						<td>
							<a href="http://www.televisioneducativa.gob.mx/" target="_blank" onMouseOver="document.logotve.src = 'imagenes/ventana/pieventana/tvecolor.png';"
							   onMouseOut="document.logotve.src = 'imagenes/ventana/pieventana/tve.png';">
								{{ HTML::image('imagenes/ventana/pieventana/tve.png','Televisión Educativa',  ['style'=>'margin-left: -9% !important;', 'name'=>'logotve','class'=>'img-responsive'])}}     
							</a> 
						</td>
						<td>
							<a href="http://www.csuca.org/" target="_blank" onMouseOver="document.logocsuca.src = 'imagenes/ventana/pieventana/csucacolor.png';"
							   onMouseOut="document.logocsuca.src = 'imagenes/ventana/pieventana/csuca.png';">                            
								{{ HTML::image('imagenes/ventana/pieventana/csuca.png','Consejo Superior Universitario Centroamericano',  ['style'=>'margin-left: -30% !important;', 'name'=>'logocsuca','class'=>'img-responsive'])}}
							</a>       
						</td>
						<td>
							<a href="http://ceducar.info/ceducar/" target="_blank" onMouseOver="document.logoceccsica.src = 'imagenes/ventana/pieventana/ceccsicacolor.png';"
							   onMouseOut="document.logoceccsica.src = 'imagenes/ventana/pieventana/ceccsica.png';">
								{{ HTML::image('imagenes/ventana/pieventana/ceccsica.png','Coordinación Educativa y Cultural Centroamericana',  ['style'=>'margin-left: 30% !important;', 'name'=>'logoceccsica','class'=>'img-responsive'])}}
							</a>    
						</td>
						<td>
							<a href="https://www.unah.edu.hn/" target="_blank" onMouseOver="document.logounah.src = 'imagenes/ventana/pieventana/unahcolor.png';"
							   onMouseOut="document.logounah.src = 'imagenes/ventana/pieventana/logounah.png';">
								{{ HTML::image('imagenes/ventana/pieventana/logounah.png','Universidad Nacional Autónoma de Honduras',  ['style'=>'margin-left: 45% !important;', 'name'=>'logounah','class'=>'img-responsive'])}}
							</a> 
						</td>
						<td>
							<a href="http://www.mep.go.cr/" target="_blank" onMouseOver="document.logomep.src = 'imagenes/ventana/pieventana/mepcolor.png';"
							   onMouseOut="document.logomep.src = 'imagenes/ventana/pieventana/mep.png';">
								{{ HTML::image('imagenes/ventana/pieventana/mep.png','Secretaria de Educación Pública',  ['style'=>'margin-left: 75% !important;', 'name'=>'logomep','class'=>'img-responsive'])}}
							</a> 
						</td>
						<td>
							<a href="http://amexcid.gob.mx/" target="_blank" onMouseOver="document.logoamexcid.src = 'imagenes/ventana/pieventana/amexcidcolor.png';"
							   onMouseOut="document.logoamexcid.src = 'imagenes/ventana/pieventana/amexcid.png';">
								{{ HTML::image('imagenes/ventana/pieventana/amexcid.png','Agencia Mexicana de Cooperación Internacional para el Desarrollo',  ['style'=>'margin-left: 35% !important;', 'name'=>'logoamexcid','class'=>'img-responsive','width'=>'40%', 'height'=>'40%'])}}
							</a> 
						</td>
					</tr>
				</table>
				<div style="padding:10px;">
				</div>
			</div>
		</div>
    </div>
</div>
<!--	-----------------	Barra colaboradores para resoluciones pequeñas	----------------	-->
<div class="visible-xs-block visible-sm-block">
    <div class="tabs_holder f1SM " style="position:fixed; top:90px; left:0px; width:120px; z-index:11;">
		<table>
		<tr><td>
			<div id="efectobarramenu2" style="width:80px;">
				<table class="table tablaColaboraSM" id="efectobarramenu2">
					<tr>
						<td>
							<a href="http://www.gob.mx/sep" target="_blank" onMouseOver="document.logosepsm.src = 'imagenes/ventana/pieventana/sepcolor.png';"
							   onMouseOut="document.logosepsm.src = 'imagenes/ventana/pieventana/sep.png';">
								{{ HTML::image('imagenes/ventana/pieventana/sep.png','Secretaria de Educación Pública',  ['name'=>'logosepsm', 'class'=>'img-responsive', 'style'=>'width:60px; height:18px;'])}}
							</a> 
						</td>
					</tr><tr>
						<td>
							<a href="http://www.televisioneducativa.gob.mx/" target="_blank" onMouseOver="document.logotvesm.src = 'imagenes/ventana/pieventana/tvecolor.png';"
							   onMouseOut="document.logotvesm.src = 'imagenes/ventana/pieventana/tve.png';">
								{{ HTML::image('imagenes/ventana/pieventana/tve.png','Dirección General de Televisión Educativa',  ['name'=>'logotvesm','class'=>'img-responsive', 'style'=>'width:60px; height:23px;'])}}     
							</a> 
						</td>
					</tr><tr>
						<td>
							<a href="http://www.csuca.org/" target="_blank" onMouseOver="document.logocsucasm.src = 'imagenes/ventana/pieventana/csucacolor.png';"
							   onMouseOut="document.logocsucasm.src = 'imagenes/ventana/pieventana/csuca.png';">                            
								{{ HTML::image('imagenes/ventana/pieventana/csuca.png','Consejo Superior Universitario Centroamericano',  ['name'=>'logocsucasm','class'=>'img-responsive', 'style'=>'width:40px; height:40px;'])}}
							</a>       
						</td>
					</tr><tr>
						<td>
							<a href="http://ceducar.info/ceducar/" target="_blank" onMouseOver="document.logoceccsicasm.src = 'imagenes/ventana/pieventana/ceccsicacolor.png';"
							   onMouseOut="document.logoceccsicasm.src = 'imagenes/ventana/pieventana/ceccsica.png';">
								{{ HTML::image('imagenes/ventana/pieventana/ceccsica.png','Coordinación Educativa y Cultural Centroamericana',  ['name'=>'logoceccsicasm','class'=>'img-responsive', 'style'=>'width:40px; height:40px;'])}}
							</a>    
						</td>
					</tr><tr>
						<td>
							<a href="https://www.unah.edu.hn/va" target="_blank" onMouseOver="document.logounahsm.src = 'imagenes/ventana/pieventana/unahcolor.png';"
							   onMouseOut="document.logounahsm.src = 'imagenes/ventana/pieventana/logounah.png';">
								{{ HTML::image('imagenes/ventana/pieventana/logounah.png','Universidad Nacional Autónoma de Honduras',  ['name'=>'logounahsm','class'=>'img-responsive', 'style'=>'width:60px; height:38px;'])}}
							</a> 
						</td>
					</tr><tr>
						<td>
							<a href="http://www.mep.go.cr/" target="_blank" onMouseOver="document.logomepsm.src = 'imagenes/ventana/pieventana/mepcolor.png';"
							   onMouseOut="document.logomepsm.src = 'imagenes/ventana/pieventana/mep.png';">
								{{ HTML::image('imagenes/ventana/pieventana/mep.png','Secretaria de Educación Pública',  ['name'=>'logomepsm','class'=>'img-responsive', 'style'=>'width:60px; height:40px;'])}}
							</a> 
						</td>
					</tr><tr>
						<td>
							<a href="http://amexcid.gob.mx/" target="_blank" onMouseOver="document.logoamexcidsm.src = 'imagenes/ventana/pieventana/amexcidcolor.png';"
							   onMouseOut="document.logoamexcidsm.src = 'imagenes/ventana/pieventana/amexcid.png';">
								{{ HTML::image('imagenes/ventana/pieventana/amexcid.png','Agencia Mexicana de Cooperación Internacional para el Desarrollo',  ['name'=>'logoamexcidsm','class'=>'img-responsive', 'style'=>'width:60px; height:15px;'])}}
							</a> 
						</td>
					</tr>
				</table>
			</div>
		</td>
		<td style="vertical-align:top;">
			<div class="fondoColaboraSM"><a href="#"><p class="txtPestanaSM" id="desplegar1">COLABORADORES</p></a></div>
		</td></tr>
		</table>
    </div>
</div>

<script>
	programaSubir = 0;
	programaBajar = 0;
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
	function ocultaPestana(){
		if(programaSubir != 0){
			clearTimeout(programaSubir);
			programaSubir =0;
		}
		programaBajar = setTimeout(function(){$("#fondoTablaColabora").slideDown("slow"); }, 300);
	}
	function muestraPestana(){
		if(programaBajar != 0){
			clearTimeout(programaBajar);
			programaBajar = 0;
		}
		programaSubir = setTimeout(function(){$("#fondoTablaColabora").slideUp("slow"); }, 1000);
	}
</script>