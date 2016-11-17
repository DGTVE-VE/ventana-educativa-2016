<!--	-----------------	Barra colaboradores para resoluciones grandes	----------------	-->
<script>
	function cambiaLogohover(idHtmlLogo, nombreArchivoLogo){
		var rutaImgLogo = "{{url('imagenes/ventana/pieventana')}}";
		document.getElementById(idHtmlLogo).src = rutaImgLogo + "/" + nombreArchivoLogo + ".png";
	}
	function cambiaLogoOut(idHtmlLogo, nombreArchivoLogo){
		var rutaImgLogo = "{{url('imagenes/ventana/pieventana')}}";
		document.getElementById(idHtmlLogo).src = rutaImgLogo + "/" + nombreArchivoLogo + ".png";
	}
</script>
<div class="row visible-md-block visible-lg-block">
    <div id="barraNavegacionColabora" class="col-md-12 col-lg-12 tabs_holder navbar-fixed-bottom quitaPad" onmouseover="ocultaPestana()" onmouseleave="muestraPestana()">
		<div id="pestanaColabora" class="fondoColabora" ><a href="#"><p id="textoColabora" class="txtPestana" id="desplegar">COLABORADORES</p></a></div>
        <div id="efectobarramenu" class="quitaPad">
			<div id="fondoTablaColabora" class="fondoTablaColabora">
				<div class="pad10px">
				</div>
					<div class="row">
						<div class="col-md-4">
							<div class="col-md-5 col-md-offset-1">
								<a href="http://www.gob.mx/sep" target="_blank" onmouseover="cambiaLogohover('logosep', 'sepcolor')"
								   onmouseout="cambiaLogoOut('logosep', 'sep')">
									{{ HTML::image('imagenes/ventana/pieventana/sep.png','Secretaria de Educación Pública',  ['id'=>'logosep', 'name'=>'logosep', 'class'=>'img-responsive imgSEP centrarImg'])}}
								</a> 
							</div>
							<div class="col-md-5 col-md-offset-1">
								<a href="http://www.televisioneducativa.gob.mx/" target="_blank" onmouseover="cambiaLogohover('logotve', 'tvecolor')"
								   onmouseout="cambiaLogoOut('logotve','tve')">
									{{ HTML::image('imagenes/ventana/pieventana/tve.png','Televisión Educativa',  ['id'=>'logotve','name'=>'logotve','class'=>'img-responsive imgTVE centrarImg'])}}     
								</a>
							</div>
						</div>
						<div class="col-md-5">
							<div class="col-md-4">
								<a href="http://www.csuca.org/" target="_blank" onmouseover="cambiaLogohover('logocsuca','csucacolor')"
								   onmouseout="cambiaLogoOut('logocsuca', 'csuca')">
									{{ HTML::image('imagenes/ventana/pieventana/csuca.png','Consejo Superior Universitario Centroamericano',  ['id'=>'logocsuca','name'=>'logocsuca','class'=>'img-responsive imgcsuca centrarImg'])}}
								</a>
							</div>
							<div class="col-md-4">
								<a href="http://ceducar.info/ceducar/" target="_blank" onmouseover="cambiaLogohover('logoceccsica','ceccsicacolor')"
								   onmouseout="cambiaLogoOut('logoceccsica', 'ceccsica')">
									{{ HTML::image('imagenes/ventana/pieventana/ceccsica.png','Coordinación Educativa y Cultural Centroamericana',  ['id'=>'logoceccsica','name'=>'logoceccsica','class'=>'img-responsive imgceccsica centrarImg'])}}
								</a>
							</div>
							<div class="col-md-4">
								<a href="https://www.unah.edu.hn/" target="_blank" onmouseover="cambiaLogohover('logounah','unahcolor')"
								   onmouseout="cambiaLogoOut('logounah', 'logounah')">
									{{ HTML::image('imagenes/ventana/pieventana/logounah.png','Universidad Nacional Autónoma de Honduras',  ['id'=>'logounah','name'=>'logounah','class'=>'img-responsive imgunah centrarImg'])}}
								</a> 
							</div>
						</div>
						<div class="col-md-3">
							<div class="col-md-5">
								<a href="http://www.mep.go.cr/" target="_blank" onmouseover="cambiaLogohover('logomep','mepcolor')"
								   onmouseout="cambiaLogoOut('logomep', 'mep')">
									{{ HTML::image('imagenes/ventana/pieventana/mep.png','Secretaria de Educación Pública',  ['id'=>'logomep','name'=>'logomep','class'=>'img-responsive imgmep centrarImg'])}}
								</a> 
							</div>
							<div class="col-md-6">
								<a href="http://amexcid.gob.mx/" target="_blank" onmouseover="cambiaLogohover('logoamexcid','amexcidcolor')"
								   onmouseout="cambiaLogoOut('logoamexcid', 'amexcid')">
									{{ HTML::image('imagenes/ventana/pieventana/amexcid.png','Agencia Mexicana de Cooperación Internacional para el Desarrollo',  ['id'=>'logoamexcid','name'=>'logoamexcid','class'=>'img-responsive imgAmexid centrarImg'])}}
								</a> 
							</div>
						</div>
					</div>
				<div class="pad10px">
				</div>
			</div>
		</div>
    </div>
</div>
<!--	-----------------	Barra colaboradores para resoluciones pequeñas	----------------	-->
<div class="visible-xs-block visible-sm-block">
    <div class="tabs_holder f1SM colaboradoresChico">
		<table>
		<tr><td>
			<div id="efectobarramenu2">
				<table class="table tablaColaboraSM" id="efectobarramenu2">
					<tr>
						<td>
							<a href="http://www.gob.mx/sep" target="_blank" onmouseover="cambiaLogohover('logosepsm','sepcolor')"
							   onmouseout="cambiaLogoOut('logosepsm', 'sep')">
								{{ HTML::image('imagenes/ventana/pieventana/sep.png','Secretaria de Educación Pública',  ['id'=>'logosepsm', 'name'=>'logosepsm', 'class'=>'img-responsive logosepCh'])}}
							</a> 
						</td>
					</tr><tr>
						<td>
							<a href="http://www.televisioneducativa.gob.mx/" target="_blank" onmouseover="cambiaLogohover('logotvesm','tvecolor')"
							   onmouseout="cambiaLogoOut('logotvesm', 'tve')">
								{{ HTML::image('imagenes/ventana/pieventana/tve.png','Dirección General de Televisión Educativa',  ['id'=>'logotvesm','name'=>'logotvesm','class'=>'img-responsive imgTveCh'])}}
							</a> 
						</td>
					</tr><tr>
						<td>
							<a href="http://www.csuca.org/" target="_blank" onmouseover="cambiaLogohover('logocsucasm','csucacolor')"
							   onmouseout="cambiaLogoOut('logocsucasm', 'csuca')">
								{{ HTML::image('imagenes/ventana/pieventana/csuca.png','Consejo Superior Universitario Centroamericano',  ['id'=>'logocsucasm','name'=>'logocsucasm','class'=>'img-responsive logocsucaCh'])}}
							</a>       
						</td>
					</tr><tr>
						<td>
							<a href="http://ceducar.info/ceducar/" target="_blank" onmouseover="cambiaLogohover('logoceccsicasm','ceccsicacolor')"
							   onmouseout="cambiaLogoOut('logoceccsicasm', 'ceccsica')">
								{{ HTML::image('imagenes/ventana/pieventana/ceccsica.png','Coordinación Educativa y Cultural Centroamericana',  ['id'=>'logoceccsicasm','name'=>'logoceccsicasm','class'=>'img-responsive logoceccsicaCh'])}}
							</a>    
						</td>
					</tr><tr>
						<td>
							<a href="https://www.unah.edu.hn" target="_blank" onmouseover="cambiaLogohover('logounahsm','unahcolor')"
							   onmouseout="cambiaLogoOut('logounahsm', 'logounah')">
								{{ HTML::image('imagenes/ventana/pieventana/logounah.png','Universidad Nacional Autónoma de Honduras',  ['id'=>'logounahsm','name'=>'logounahsm','class'=>'img-responsive logounahCh'])}}
							</a> 
						</td>
					</tr><tr>
						<td>
							<a href="http://www.mep.go.cr/" target="_blank" onmouseover="cambiaLogohover('logomepsm','mepcolor')"
							   onmouseout="cambiaLogoOut('logomepsm', 'mep')">
								{{ HTML::image('imagenes/ventana/pieventana/mep.png','Secretaria de Educación Pública',  ['id'=>'logomepsm','name'=>'logomepsm','class'=>'img-responsive logomepCh'])}}
							</a> 
						</td>
					</tr><tr>
						<td>
							<a href="http://amexcid.gob.mx/" target="_blank" onmouseover="cambiaLogohover('logoamexcidsm','amexcidcolor')"
							   onmouseout="cambiaLogoOut('logoamexcidsm', 'amexcid')">
								{{ HTML::image('imagenes/ventana/pieventana/amexcid.png','Agencia Mexicana de Cooperación Internacional para el Desarrollo',  ['id'=>'logoamexcidsm','name'=>'logoamexcidsm','class'=>'img-responsive logoamexcidCh'])}}
							</a> 
						</td>
					</tr>
				</table>
			</div>
		</td>
		<td class="alineaArriba">
			<div class="fondoColaboraSM"><a href="#"><p class="txtPestanaSM" id="desplegar1">COLABORADORES</p></a></div>
		</td></tr>
		</table>
    </div>
</div>
<link rel="stylesheet" type="text/css" href="{{url('css/ventana/pie.css')}}"/>
<script src="{{url('js/ventana/pie.js')}}"></script>