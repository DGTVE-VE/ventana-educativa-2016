<!--	-----------------	Barra colaboradores para resoluciones grandes	----------------	-->
<div class="row visible-md-block visible-lg-block">
    <div id="barraNavegacionColabora" class="col-md-12 col-lg-12 tabs_holder navbar-fixed-bottom quitaPad" onmouseover="ocultaPestana()" onmouseleave="muestraPestana()">
		<div id="pestanaColabora" class="fondoColabora" ><a href="#"><p id="textoColabora" class="txtPestana" id="desplegar">COLABORADORES</p></a></div>
        <div id="efectobarramenu" class="quitaPad">
			<div id="fondoTablaColabora" class="fondoTablaColabora">
				<div class="pad10px">
				</div>
				<table class="table tablaCOlaboradores">
					<tr>
						<td>
							<a href="http://www.gob.mx/sep" target="_blank" onMouseOver="document.logosep.src = 'imagenes/ventana/pieventana/sepcolor.png';"
							   onMouseOut="document.logosep.src = 'imagenes/ventana/pieventana/sep.png';">
								{{ HTML::image('imagenes/ventana/pieventana/sep.png','Secretaria de Educación Pública',  ['name'=>'logosep', 'class'=>'img-responsive imgSEP'])}}
							</a> 
						</td>
						<td>
							<a href="http://www.televisioneducativa.gob.mx/" target="_blank" onMouseOver="document.logotve.src = 'imagenes/ventana/pieventana/tvecolor.png';"
							   onMouseOut="document.logotve.src = 'imagenes/ventana/pieventana/tve.png';">
								{{ HTML::image('imagenes/ventana/pieventana/tve.png','Televisión Educativa',  ['name'=>'logotve','class'=>'img-responsive imgTVE'])}}     
							</a> 
						</td>
						<td>
							<a href="http://www.csuca.org/" target="_blank" onMouseOver="document.logocsuca.src = 'imagenes/ventana/pieventana/csucacolor.png';"
							   onMouseOut="document.logocsuca.src = 'imagenes/ventana/pieventana/csuca.png';">                            
								{{ HTML::image('imagenes/ventana/pieventana/csuca.png','Consejo Superior Universitario Centroamericano',  ['name'=>'logocsuca','class'=>'img-responsive imgcsuca'])}}
							</a>       
						</td>
						<td>
							<a href="http://ceducar.info/ceducar/" target="_blank" onMouseOver="document.logoceccsica.src = 'imagenes/ventana/pieventana/ceccsicacolor.png';"
							   onMouseOut="document.logoceccsica.src = 'imagenes/ventana/pieventana/ceccsica.png';">
								{{ HTML::image('imagenes/ventana/pieventana/ceccsica.png','Coordinación Educativa y Cultural Centroamericana',  ['name'=>'logoceccsica','class'=>'img-responsive imgceccsica'])}}
							</a>    
						</td>
						<td>
							<a href="https://www.unah.edu.hn/" target="_blank" onMouseOver="document.logounah.src = 'imagenes/ventana/pieventana/unahcolor.png';"
							   onMouseOut="document.logounah.src = 'imagenes/ventana/pieventana/logounah.png';">
								{{ HTML::image('imagenes/ventana/pieventana/logounah.png','Universidad Nacional Autónoma de Honduras',  ['name'=>'logounah','class'=>'img-responsive imgunah'])}}
							</a> 
						</td>
						<td>
							<a href="http://www.mep.go.cr/" target="_blank" onMouseOver="document.logomep.src = 'imagenes/ventana/pieventana/mepcolor.png';"
							   onMouseOut="document.logomep.src = 'imagenes/ventana/pieventana/mep.png';">
								{{ HTML::image('imagenes/ventana/pieventana/mep.png','Secretaria de Educación Pública',  ['name'=>'logomep','class'=>'img-responsive imgmep'])}}
							</a> 
						</td>
						<td>
							<a href="http://amexcid.gob.mx/" target="_blank" onMouseOver="document.logoamexcid.src = 'imagenes/ventana/pieventana/amexcidcolor.png';"
							   onMouseOut="document.logoamexcid.src = 'imagenes/ventana/pieventana/amexcid.png';">
								{{ HTML::image('imagenes/ventana/pieventana/amexcid.png','Agencia Mexicana de Cooperación Internacional para el Desarrollo',  ['name'=>'logoamexcid','class'=>'img-responsive imgAmexid'])}}
							</a> 
						</td>
					</tr>
				</table>
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
							<a href="http://www.gob.mx/sep" target="_blank" onMouseOver="document.logosepsm.src = 'imagenes/ventana/pieventana/sepcolor.png';"
							   onMouseOut="document.logosepsm.src = 'imagenes/ventana/pieventana/sep.png';">
								{{ HTML::image('imagenes/ventana/pieventana/sep.png','Secretaria de Educación Pública',  ['name'=>'logosepsm', 'class'=>'img-responsive logosepCh'])}}
							</a> 
						</td>
					</tr><tr>
						<td>
							<a href="http://www.televisioneducativa.gob.mx/" target="_blank" onMouseOver="document.logotvesm.src = 'imagenes/ventana/pieventana/tvecolor.png';"
							   onMouseOut="document.logotvesm.src = 'imagenes/ventana/pieventana/tve.png';">
								{{ HTML::image('imagenes/ventana/pieventana/tve.png','Dirección General de Televisión Educativa',  ['name'=>'logotvesm','class'=>'img-responsive imgTveCh'])}}
							</a> 
						</td>
					</tr><tr>
						<td>
							<a href="http://www.csuca.org/" target="_blank" onMouseOver="document.logocsucasm.src = 'imagenes/ventana/pieventana/csucacolor.png';"
							   onMouseOut="document.logocsucasm.src = 'imagenes/ventana/pieventana/csuca.png';">                            
								{{ HTML::image('imagenes/ventana/pieventana/csuca.png','Consejo Superior Universitario Centroamericano',  ['name'=>'logocsucasm','class'=>'img-responsive logocsucaCh'])}}
							</a>       
						</td>
					</tr><tr>
						<td>
							<a href="http://ceducar.info/ceducar/" target="_blank" onMouseOver="document.logoceccsicasm.src = 'imagenes/ventana/pieventana/ceccsicacolor.png';"
							   onMouseOut="document.logoceccsicasm.src = 'imagenes/ventana/pieventana/ceccsica.png';">
								{{ HTML::image('imagenes/ventana/pieventana/ceccsica.png','Coordinación Educativa y Cultural Centroamericana',  ['name'=>'logoceccsicasm','class'=>'img-responsive logoceccsicaCh'])}}
							</a>    
						</td>
					</tr><tr>
						<td>
							<a href="https://www.unah.edu.hn/va" target="_blank" onMouseOver="document.logounahsm.src = 'imagenes/ventana/pieventana/unahcolor.png';"
							   onMouseOut="document.logounahsm.src = 'imagenes/ventana/pieventana/logounah.png';">
								{{ HTML::image('imagenes/ventana/pieventana/logounah.png','Universidad Nacional Autónoma de Honduras',  ['name'=>'logounahsm','class'=>'img-responsive logounahCh'])}}
							</a> 
						</td>
					</tr><tr>
						<td>
							<a href="http://www.mep.go.cr/" target="_blank" onMouseOver="document.logomepsm.src = 'imagenes/ventana/pieventana/mepcolor.png';"
							   onMouseOut="document.logomepsm.src = 'imagenes/ventana/pieventana/mep.png';">
								{{ HTML::image('imagenes/ventana/pieventana/mep.png','Secretaria de Educación Pública',  ['name'=>'logomepsm','class'=>'img-responsive logomepCh'])}}
							</a> 
						</td>
					</tr><tr>
						<td>
							<a href="http://amexcid.gob.mx/" target="_blank" onMouseOver="document.logoamexcidsm.src = 'imagenes/ventana/pieventana/amexcidcolor.png';"
							   onMouseOut="document.logoamexcidsm.src = 'imagenes/ventana/pieventana/amexcid.png';">
								{{ HTML::image('imagenes/ventana/pieventana/amexcid.png','Agencia Mexicana de Cooperación Internacional para el Desarrollo',  ['name'=>'logoamexcidsm','class'=>'img-responsive logoamexcidCh'])}}
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