	<link rel="stylesheet" type="text/css" href="css/ventana/estiloventana.css"/>
	<script type="text/javascript" src="js/ventana/ventanaCuerpo.js"></script>
		<div class="container-fluid">
		    <div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:30px;">
				</div>
			</div>
	<!----------------------------------	Elementos para vistas en dispositivos grandes		--------------------------------->
            <div class="row visible-md-inline visible-lg-inline">
				<div>
					<div style="padding:2%;">
					</div>
				</div>
				<div class="col-md-1 col-lg-1 col-md-offset-1 col-lg-offset-1" style="padding-top: 8.9%; padding-left:0; padding-right:0;">
					{{HTML::image('imagenes/ventana/homeventana/CUBO-01.png','Canal IberoAmericano',['name'=>'CUBO01','id'=>'CUBO01', 'class'=>'imgColor oculta difumina Intervalo4 slideInLeft rombo1', 'usemap'=>'#mapacubo1'])}}
					<map name="mapacubo1" id="mapacubo1">
						<area shape="poly" coords="0,424,424,0,920,424,480,920" onmouseover="cambiaImgFoto('01')" onmouseout="cambiaImgCubo('01')" href="http://www.ibe.tv/es/canal/iberoamericano/756/Iberoam%C3%A9rica-al-d%C3%ADa-1032016.htm" target="_blank"/>
						<area shape="poly" coords="528,0,920,0,920,392" onmouseover="cambiaImgFoto('02')" onmouseout="cambiaImgCubo('02')" href="#"/>
						<area shape="poly" coords="888,468,940,960,400,880" /> <!--onmouseover="cambiaImgFoto('03')" onmouseout="cambiaImgCubo('03')" -->
					</map>
					<a href="http://www.ibe.tv/es/canal/iberoamericano/756/Iberoam%C3%A9rica-al-d%C3%ADa-1032016.htm" target="_blank">
						{{HTML::image('imagenes/ventana/iconoSeccion/canal_ibero.png','canal IberoAmericano',['id'=>'iconoRombo01','class'=>'imgColor oculta difumina Intervalo4 slideInLeft iconoCanalIbero','onmouseover'=>'cambiaImgFoto("01")','onmouseout'=>'cambiaImgCubo("01")'])}}
					</a>
				</div>
				<div class="col-md-1 col-lg-1" style="padding:3%; padding-left:0px; padding-right:0px;">
					{{HTML::image('imagenes/ventana/homeventana/CUBO-02.png', 'Idiomas',['id'=>'CUBO02','class'=>'imgColor oculta difumina Intervalo3 slideInLeft rombo2','usemap'=>'#mapacubo2'])}}
					{{HTML::image('imagenes/ventana/homeventana/CUBO-03.png',' ',['id'=>'CUBO03','class'=>'imgColor oculta difumina Intervalo3 slideInLeft rombo3', 'usemap'=>'#mapacubo3'])}}
					<map name="mapacubo2" id="mapacubo2">
						<area shape="poly" coords="0,356,356,0,708,360,360,708" onmouseover="cambiaImgFoto('02')" onmouseout="cambiaImgCubo('02')" href="#"/>
					</map>
					<map name="mapacubo3" id="mapacubo3">
						<area shape="poly" coords="0,388,388,0,840,388,420,820" /> <!--onmouseover="cambiaImgFoto('03')" onmouseout="cambiaImgCubo('03')" -->
					</map>
					<a href="#">
						{{HTML::image('imagenes/ventana/iconoSeccion/idiomas.png','',['id'=>'iconoRombo02','class'=>'imgColor oculta difumina Intervalo3 slideInLeft iconoIdiomas','onmouseover'=>'cambiaImgFoto("02")','onmouseout'=>'cambiaImgCubo("02")'])}}
					</a>
				</div>
				<div class="col-md-1 col-lg-1" style="padding-top: 8.3%; padding-left:0px; padding-right:0px;">
					{{HTML::image('imagenes/ventana/homeventana/CUBO-04.png','Padres',['id'=>'CUBO04','class'=>'imgColor oculta difumina Intervalo2 slideInLeft rombo4','usemap'=>'#mapacubo4'])}}
					<map name="mapacubo4"  id="mapacubo4">
						<area shape="poly" coords="0,456,456,0,912,456,456,912" onmouseover="cambiaImgFoto('04')" onmouseout="cambiaImgCubo('04')" href="#"/>
						<area shape="poly" coords="0,456,0,0,456,0" onmouseover="cambiaImgFoto('02')" onmouseout="cambiaImgCubo('02')" href="#"/>
						<area shape="poly" coords="-20,400,-20,960,520,960" /> <!--onmouseover="cambiaImgFoto('03')" onmouseout="cambiaImgCubo('03')" -->
					</map>
					<a href="#">
						{{HTML::image('imagenes/ventana/iconoSeccion/padres.png','Padres',['id'=>'iconoRombo04','class'=>'imgColor oculta difumina Intervalo2 slideInLeft iconoPadres','onmouseover'=>'cambiaImgFoto("04")','onmouseout'=>'cambiaImgCubo("04")'])}}
					</a>
					<div id="iconoRombo04" class="contieneTxt oculta difumina Intervalo2 slideInLeft text-center" onmouseover="cambiaImgFoto('04')" onmouseout="cambiaImgCubo('04')" style="width: 100%; position:absolute; top:210%; left:20%; Z-index:10;">
						<p class="visible-lg-inline txtHomeLg">Padres</p>
						<p class="visible-md-inline txtHomeMd">Padres</p>
					</div>
				</div>
				<div class="col-md-1 col-lg-1" style="padding-top: 10%; padding-left:0; padding-right:0;">
					{{HTML::image('imagenes/ventana/homeventana/CUBO-05.png','Estudiantes',['id'=>'CUBO05','class'=>'imgColor oculta difumina Intervalo1 slideInLeft rombo5', 'usemap'=>'#mapacubo5'])}}
					{{HTML::image('imagenes/ventana/homeventana/CUBO-06.png','VOD',['id'=>'CUBO06','class'=>'imgColor oculta difumina Intervalo1 slideInLeft rombo6','usemap'=>'#mapacubo6'])}}
					<map name="mapacubo5" id="mapacubo5">
						<area shape="poly" coords="0,488,488,0,976,488,488,976" onmouseover="cambiaImgFoto('05')" onmouseout="cambiaImgCubo('05')" href="#"/>
						<area shape="poly" coords="0,524,490,1030,0,1030" onmouseover="cambiaImgFoto('04')" onmouseout="cambiaImgCubo('04')" href="#"/>
					</map>
					<map name="mapacubo6" id="mapacubo6">
						<area shape="poly" coords="0,488,488,0,1020,500,510,1020" onmouseover="cambiaImgFoto('06')" onmouseout="cambiaImgCubo('06')" href="#"/>
						<area shape="poly" coords="0,0,488,0,0,488" onmouseover="cambiaImgFoto('04')" onmouseout="cambiaImgCubo('04')" href="#"/>
					</map>
					<a href="#">
						{{HTML::image('imagenes/ventana/iconoSeccion/primaria.png','Estudiantes',['id'=>'iconoRombo05','class'=>'imgColor oculta difumina Intervalo1 slideInLeft iconoEstudiantes','onmouseover'=>'cambiaImgFoto("05")','onmouseout'=>'cambiaImgCubo("05")'])}}
					</a>
					<a href="#">
						{{HTML::image('imagenes/ventana/iconoSeccion/vod.png','VOD',['id'=>'iconoRombo06','class'=>'imgColor oculta difumina Intervalo1 slideInLeft iconoVOD','onmouseover'=>'cambiaImgFoto("06")','onmouseout'=>'cambiaImgCubo("06")'])}}
					</a>
					<div id="iconoRombo06" class="contieneTxt oculta difumina Intervalo1 slideInLeft text-center" onmouseover="cambiaImgFoto('06')" onmouseout="cambiaImgCubo('06')" style="width: 100%; position:absolute; top:250%; left:20%; Z-index:10;">
						<p class="visible-lg-inline txtHomeLg">VOD</p>
						<p class="visible-md-inline txtHomeMd">VOD</p>
					</div>
				</div>
				<div class="col-md-1 col-lg-1" style="padding-top:6.8%; padding-left:0px; padding-right:0px;">
					{{HTML::image('imagenes/ventana/homeventana/CUBO-07.png','Ventana Educativa',['id'=>'CUBO07','class'=>'imgColor rombo7','usemap'=>'#mapacubo7'])}}
					<map name="mapacubo7" id="mapacubo7">
						<area shape="poly" coords="0,560,580,0,1140,544,544,1140" onmouseover="cambiaImgFoto('07')" onmouseout="cambiaImgCubo('07')" href="presentacion"/>
						<area shape="poly" coords="0,0,570,0,0,548" onmouseover="cambiaImgFoto('05')" onmouseout="cambiaImgCubo('05')" href="#"/>
						<area shape="poly" coords="0,548,548,1160,0,1160" onmouseover="cambiaImgFoto('06')" onmouseout="cambiaImgCubo('06')" href="#"/>
						<area shape="poly" coords="548,0,1160,0,1160,548" onmouseover="cambiaImgFoto('08')" onmouseout="cambiaImgCubo('08')" href="http://formacioncontinua.sep.gob.mx/" target="_blank"/>
						<area shape="poly" coords="548,1160,1160,548,1160,1160" onmouseover="cambiaImgFoto('09')" onmouseout="cambiaImgCubo('09')" href="#"/>
					</map>
					<a href="presentacion">
						{{HTML::image('imagenes/ventana/iconoSeccion/ventanaBco.png','Ventana Educativa',['id'=>'iconoRombo07','class'=>'imgColor iconoVentana','onmouseover'=>'cambiaImgFoto("07")','onmouseout'=>'cambiaImgCubo("07")'])}}
					</a>
				</div>
				<div class="col-md-1 col-lg-1" style="padding-top: 10%; padding-left:0; padding-right:0;">
					{{HTML::image('imagenes/ventana/homeventana/CUBO-08.png','Docentes',['id'=>'CUBO08','class'=>'imgColor oculta difumina Intervalo1 slideInRight rombo8','usemap'=>'#mapacubo8'])}}
					{{HTML::image('imagenes/ventana/homeventana/CUBO-09.png','Mediateca',['id'=>'CUBO09','class'=>'imgColor oculta difumina Intervalo1 slideInRight rombo9','usemap'=>'#mapacubo9'])}}
					<map name="mapacubo8" id="mapacubo8">
						<area shape="poly" coords="0,488,500,0,1020,500,500,1010" onmouseover="cambiaImgFoto('08')" onmouseout="cambiaImgCubo('08')" href="http://formacioncontinua.sep.gob.mx/" target="_blank"/>
						<area shape="poly" coords="440,1040,1040,520,1040,1040" onmouseover="cambiaImgFoto('10')" onmouseout="cambiaImgCubo('10')" href="http://redmite.televisioneducativa.gob.mx/" target="_blank"/>
					</map>
					<map name="mapacubo9" id="mapacubo9">
						<area shape="poly" coords="0,488,488,0,1020,500,510,1020" onmouseover="cambiaImgFoto('09')" onmouseout="cambiaImgCubo('09')" href="#"/>
						<area shape="poly" coords="516,0,1030,0,1030,500" onmouseover="cambiaImgFoto('10')" onmouseout="cambiaImgCubo('10')" href="http://redmite.televisioneducativa.gob.mx/" target="_blank"/>
					</map>
					<a href="http://formacioncontinua.sep.gob.mx/" target="_blank">
						{{HTML::image('imagenes/ventana/iconoSeccion/docentes.png','Docentes',['id'=>'iconoRombo08','class'=>'imgColor oculta difumina Intervalo1 slideInRight iconoDocentes','onmouseover'=>'cambiaImgFoto("08")','onmouseout'=>'cambiaImgCubo("08")'])}}
					</a>
					<a href="#">
						{{HTML::image('imagenes/ventana/iconoSeccion/mediateca.png','Mediateca',['id'=>'iconoRombo09','class'=>'imgColor oculta difumina Intervalo1 slideInRight iconoMediateca','onmouseover'=>'cambiaImgFoto("09")','onmouseout'=>'cambiaImgCubo("09")'])}}
					</a>
				</div>
				<div class="col-md-1 col-lg-1" style="padding-top: 8.2%; padding-left:0px; padding-right:0px;">
					{{HTML::image('imagenes/ventana/homeventana/CUBO-10.png','Red Mesoamerica',['id'=>'CUBO10','class'=>'imgColor oculta difumina Intervalo2 slideInRight rombo10','usemap'=>'#mapacubo10'])}}
					<map name="mapacubo10"  id="mapacubo10">
						<area shape="poly" coords="0,456,470,0,960,500,470,940" onmouseover="cambiaImgFoto('10')" onmouseout="cambiaImgCubo('10')" href="http://redmite.televisioneducativa.gob.mx/" target="_blank"/>
						<area shape="poly" coords="456,0,980,0,980,480" /><!--onmouseover="cambiaImgFoto('11')" onmouseout="cambiaImgCubo('11')" -->
						<area shape="poly" coords="456,960,960,456,960,960" /><!--onmouseover="cambiaImgFoto('12')" onmouseout="cambiaImgCubo('12')" -->
					</map>
					<a href="http://redmite.televisioneducativa.gob.mx/" target="_blank">
						{{HTML::image('imagenes/ventana/iconoSeccion/redmiteBco.png','Red Mesoamericana',['id'=>'iconoRombo10','class'=>'imgColor oculta difumina Intervalo2 slideInRight iconoRedMesoamerica','onmouseover'=>'cambiaImgFoto("10")','onmouseout'=>'cambiaImgCubo("10")'])}}
					</a>
				</div>
				<div class="col-md-1 col-lg-1" style="padding:3%; padding-left:0px; padding-right:0px;">
					{{HTML::image('imagenes/ventana/homeventana/CUBO-11.png',' ',['id'=>'CUBO11','class'=>'imgColor oculta difumina Intervalo3 slideInRight rombo11','usemap'=>'#mapacubo11'])}}
					{{HTML::image('imagenes/ventana/homeventana/CUBO-12.png',' ',['id'=>'CUBO12','class'=>'imgColor oculta difumina Intervalo3 slideInRight rombo12','usemap'=>'#mapacubo12'])}}
					<map name="mapacubo11" id="mapacubo11">
						<area shape="poly" coords="0,356,370,0,725,360,360,708" /><!--onmouseover="cambiaImgFoto('11')" onmouseout="cambiaImgCubo('11')" -->
					</map>
					<map name="mapacubo12" id="mapacubo12">
						<area shape="poly" coords="0,388,388,0,840,388,420,820" /><!--onmouseover="cambiaImgFoto('12')" onmouseout="cambiaImgCubo('12')" -->
					</map>
				</div>
				<div class="col-md-1 col-lg-1" style="padding-top: 8.9%; padding-left:0; padding-right:0;">
					{{HTML::image('imagenes/ventana/homeventana/CUBO-13.png','Mexico X',['id'=>'CUBO13','class'=>'imgColor oculta difumina Intervalo4 slideInRight rombo13','usemap'=>'#mapacubo13'])}}
					<map name="mapacubo13" id="mapacubo13">
						<area shape="poly" coords="0,424,470,0,920,424,480,920" onmouseover="cambiaImgFoto('13')" onmouseout="cambiaImgCubo('13')" href="http://mx.televisioneducativa.gob.mx/" target="_blank"/>
						<area shape="poly" coords="0,0,0,400,400,0" /><!--onmouseover="cambiaImgFoto('11')" onmouseout="cambiaImgCubo('11')" -->
						<area shape="poly" coords="0,460,0,920,430,920" /><!--onmouseover="cambiaImgFoto('12')" onmouseout="cambiaImgCubo('12')" -->
					</map>
					<a href="http://mx.televisioneducativa.gob.mx/" target="_blank">
						{{HTML::image('imagenes/ventana/iconoSeccion/mexicoxBco.png','Mexico X',['id'=>'iconoRombo13','class'=>'imgColor oculta difumina Intervalo4 slideInRight iconoMexicoX','onmouseover'=>'cambiaImgFoto("13")','onmouseout'=>'cambiaImgCubo("13")'])}}
					</a>
				</div>
				<div class="col-md-1 col-lg-1 derechaSociales" style="padding-top: 8.9%; padding-left:0; padding-right:0;">
					<ul class="sociales">
						<li><a href="https://twitter.com/tveducativamx" target="_blank" class="cambiacolorredesSociales"><span><i class="fa fa-twitter fa-2x " id="ct"></i></span></a></li><br/>
						<li><a href="https://www.facebook.com/TvEducativaMx" target="_blank" class="cambiacolorredesSociales"><span><i class="fa fa-facebook fa-2x" id="cf"></i></span></a></li><br/>
						<li><a href="https://www.youtube.com/user/tveducativamx?feature=sub_widget_1" target="_blank" class="cambiacolorredesSociales"><span><i class="fa fa-youtube-play fa-2x" id="cy"></i></span></a></li>
					</ul>
				</div>
				<div class="visible-md-inline visible-lg-inline">
					<div style="padding:2%;">
					</div>
				</div>
			</div>
	<!----------------------------------	Elementos para vistas en dispositivos pequeños		--------------------------------->
			<div class="row visible-xs-inline visible-sm-inline">
				<div class="col-xs-10 col-sm-10 col-xs-offset-1 col-sm-offset-1" style="padding: 20%;">
					<table>
					<tr><td></td>
					<td>
						{{HTML::image('imagenes/ventana/homeventana/FOTO-07.png','Ventana Educativa',['id'=>'CUBOSM07','class'=>'imgColor rombosm7','usemap'=>'#mapacubosm07'])}}
						<map name="mapacubosm07" id="mapacubosm07">
							<area shape="poly" coords="0,560,580,0,1140,544,544,1140" href="presentacion"/>
							<area shape="poly" coords="0,0,570,0,0,548" href="#"/>
							<area shape="poly" coords="0,548,548,1160,0,1160" href="#"/>
							<area shape="poly" coords="548,0,1160,0,1160,548" href="#"/>
							<area shape="poly" coords="548,1160,1160,548,1160,1160" href="#"/>
						</map>
						<a href="presentacion">
							{{HTML::image('imagenes/ventana/iconoSeccion/ventanaBco.png','ventana Educativa',['id'=>'iconoRomboSM07','class'=>'imgColor iconoRomboSM7'])}}
						</a>
					</td><td></td>
					</tr>
					<tr><td>
						{{HTML::image('imagenes/ventana/homeventana/FOTO-08.png','Docentes',['id'=>'CUBOSM08','class'=>'imgColor oculta difumina Intervalo1 slideInRight romboSM8','usemap'=>'#mapacubosm08'])}}
						<map name="mapacubosm08" id="mapacubosm08">
							<area shape="poly" coords="0,488,500,0,1020,500,500,1010" href="#"/>
							<area shape="poly" coords="440,1040,1040,520,1040,1040" href="http://redmite.televisioneducativa.gob.mx/" target="_blank"/>
						</map>
						<a href="http://formacioncontinua.sep.gob.mx/" target="_blank">
							{{HTML::image('imagenes/ventana/iconoSeccion/docentes.png','Docentes',['id'=>'iconoRombosm08','class'=>'imgColor oculta difumina Intervalo1 slideInRight iconoDocentesSM'])}}
						</a>
						<a href="http://formacioncontinua.sep.gob.mx/" target="_blank">
							<div id="iconoRombosm08" class="contieneTxt oculta difumina Intervalo1 slideInRight text-center" style="width: 50%; position:absolute; top:90%; left:5%; Z-index:10;">
								<p class="visible-sm-inline txtHomeSm">Docentes</p>
								<p class="visible-xs-inline txtHomeXs" >Docentes</p>
							</div>
						</a>
					</td>
					<td></td>
					<td>
						{{HTML::image('imagenes/ventana/homeventana/FOTO-09.png','Mediateca',['id'=>'CUBOSM09','class'=>'imgColor oculta difumina Intervalo1 slideInRight foto9','usemap'=>'#mapacubosm09'])}}
						<map name="mapacubosm9" id="mapacubosm9">
							<area shape="poly" coords="0,488,488,0,1020,500,510,1020" href="#"/>
							<area shape="poly" coords="516,0,1030,0,1030,500" href="http://redmite.televisioneducativa.gob.mx/" target="_blank"/>
						</map>
						<a href="#">
							{{HTML::image('imagenes/ventana/iconoSeccion/mediateca.png','Mediateca',['id'=>'iconoRombo09','class'=>'imgColor oculta difumina Intervalo1 slideInRight iconoFoto9'])}}
						</a>
						<div id="iconoRombosm09" class="contieneTxt oculta difumina Intervalo1 slideInRight text-center" style="width: 50%; position:absolute; top:90%; left:45%; Z-index:10;">
							<p class="visible-sm-block txtHomeSm">Mediateca</p>
							<p class="visible-xs-block txtHomeXs">Mediateca</p>
						</div>
					</td>
					</tr>
					<tr><td></td>
					<td>
						{{HTML::image('imagenes/ventana/homeventana/FOTO-10.png','Red Mesoamericana',['id'=>'CUBOSM10','class'=>'imgColor oculta difumina Intervalo2 slideInRight foto10','usemap'=>'#mapacubosm10'])}}
						<map name="mapacubosm10"  id="mapacubosm10">
							<area shape="poly" coords="0,456,470,0,960,500,470,940" href="http://redmite.televisioneducativa.gob.mx/" target="_blank"/>
							<area shape="poly" coords="456,0,980,0,980,480" />
							<area shape="poly" coords="456,960,960,456,960,960" />
						</map>
						<a href="http://redmite.televisioneducativa.gob.mx/" target="_blank">
							{{HTML::image('imagenes/ventana/iconoSeccion/redmiteBco.png','Red Mesoamericana',['id'=>'iconoRombosm10','class'=>'imgColor oculta difumina Intervalo2 slideInRight iconoFoto10'])}}
						</a>
					</td><td></td>
					</tr>
					<tr>
					<td>
						{{HTML::image('imagenes/ventana/homeventana/FOTO-05.png','Estudiantes',['id'=>'CUBOSM05','class'=>'imgColor oculta difumina Intervalo1 slideInLeft foto5','usemap'=>'#mapacubosm05'])}}
						<map name="mapacubosm05" id="mapacubosm05">
							<area shape="poly" coords="0,488,488,0,976,488,488,976" href="#"/>
							<area shape="poly" coords="0,524,490,1030,0,1030" href="#"/>
						</map>
						<a href="#">
							{{HTML::image('imagenes/ventana/iconoSeccion/primaria.png','Estudiantes',['id'=>'iconoRomboSM05','class'=>'imgColor oculta difumina Intervalo1 slideInLeft iconoFoto5'])}}
						</a>
						<div id="iconoRombosm05" class="contieneTxt oculta difumina Intervalo1 slideInLeft text-center" style="width: 50%; position:absolute; top:175%; left:5%; Z-index:10;">
							<p class="visible-sm-inline txtHomeSm">Estudiantes</p>
							<p class="visible-xs-inline txtHomeXs">Estudiantes</p>
						</div>
					</td>
					<td></td>
					<td>
						{{HTML::image('imagenes/ventana/homeventana/FOTO-06.png','VOD',['id'=>'CUBOSM06','class'=>'imgColor oculta difumina Intervalo1 slideInLeft foto6','usemap'=>'#mapacubosm06'])}}
						<map name="mapacubosm06" id="mapacubosm06">
							<area shape="poly" coords="0,488,488,0,1020,500,510,1020" href="#"/>
							<area shape="poly" coords="0,0,488,0,0,488" href="#"/>
						</map>
						<a href="#">
							{{HTML::image('imagenes/ventana/iconoSeccion/vod.png','VOD',['id'=>'iconoRomboSM06','class'=>'imgColor oculta difumina Intervalo1 slideInLeft iconoFoto6'])}}
						</a>
						<div id="iconoRombosm06" class="contieneTxt oculta difumina Intervalo1 slideInLeft text-center" style="width: 50%; position:absolute; top:175%; left:45%; Z-index:10;">
							<p class="visible-sm-inline txtHomeSm">VOD</p>
							<p class="visible-xs-inline txtHomeXs">VOD</p>
						</div>
					</td>
					</tr>
					<tr>
					<td></td>
					<td>
						{{HTML::image('imagenes/ventana/homeventana/FOTO-13.png','Mexico X',['id'=>'CUBOSM13','class'=>'imgColor oculta difumina Intervalo4 slideInRight foto13','usemap'=>'#mapacubosm13'])}}
						<map name="mapacubosm13" id="mapacubosm13">
							<area shape="poly" coords="0,424,470,0,920,424,480,920" href="http://mx.televisioneducativa.gob.mx/" target="_blank"/>
							<area shape="poly" coords="0,0,0,400,400,0" />
							<area shape="poly" coords="0,460,0,920,430,920" />
						</map>
						<a href="http://mx.televisioneducativa.gob.mx/" target="_blank">
							{{HTML::image('imagenes/ventana/iconoSeccion/mexicoxBco.png','Mexico X',['id'=>'iconoRomboSM13','class'=>'imgColor oculta difumina Intervalo4 slideInRight iconoFoto13'])}}
						</a>
					</td>
					<td></td>
					</tr>
					<tr>
					<td>
						{{HTML::image('imagenes/ventana/homeventana/FOTO-02.png','Idiomas',['id'=>'CUBOSM02','class'=>'imgColor oculta difumina Intervalo3 slideInLeft foto2','usemap'=>'#mapacubosm2'])}}
						<map name="mapacubosm2" id="mapacubosm2">
							<area shape="poly" coords="0,356,356,0,708,360,360,708" href="#"/>
						</map>
						<a href="#">
							{{HTML::image('imagenes/ventana/iconoSeccion/idiomas.png','Idiomas',['id'=>'iconoRomboSM02','class'=>'imgColor oculta difumina Intervalo3 slideInLeft iconoFoto2'])}}
						</a>
						<div class="contieneTxt oculta difumina Intervalo3 slideInLeft text-center" style="width: 50%; position:absolute; top:263%; left:5%; Z-index:10;">
							<p class="visible-sm-inline txtHomeSm">Idiomas</p>
							<p class="visible-xs-inline txtHomeXs">Idiomas</p>
						</div>
					</td>
					<td></td>
					<td>
						{{HTML::image('imagenes/ventana/homeventana/FOTO-01.png','Canal IberoAmericano',['id'=>'CUBOSM01','class'=>'imgColor oculta difumina Intervalo4 slideInLeft foto1','usemap'=>'#mapacubosm1'])}}
						<map name="mapacubo1" id="mapacubosm1">
							<area shape="poly" coords="0,424,424,0,920,424,480,920" href="http://www.ibe.tv/es/canal/iberoamericano/756/Iberoam%C3%A9rica-al-d%C3%ADa-1032016.htm" target="_blank"/>
							<area shape="poly" coords="528,0,920,0,920,392" href="#"/>
							<area shape="poly" coords="888,468,940,960,400,880" />
						</map>
						<a href="http://www.ibe.tv/es/canal/iberoamericano/756/Iberoam%C3%A9rica-al-d%C3%ADa-1032016.htm" target="_blank">
							{{HTML::image('imagenes/ventana/iconoSeccion/canal_ibero.png','Canal IberoAmericano',['id'=>'iconoRomboSM01','class'=>'imgColor oculta difumina Intervalo4 slideInLeft iconoFotoCanal'])}}
						</a>
					</td>
					</tr>
					<tr><td></td>
					<td>
						{{HTML::image('imagenes/ventana/homeventana/FOTO-04.png','Padres',['id'=>'CUBOSM04','class'=>'imgColor oculta difumina Intervalo2 slideInLeft foto4','usemap'=>'#mapacubosm4'])}}
						<map name="mapacubosm4"  id="mapacubosm4">
							<area shape="poly" coords="0,456,456,0,912,456,456,912" href="#"/>
							<area shape="poly" coords="0,456,0,0,456,0" href="#"/>
							<area shape="poly" coords="-20,400,-20,960,520,960" />
						</map>
						<a href="#">
							{{HTML::image('imagenes/ventana/iconoSeccion/padres.png','Padres',['id'=>'iconoRomboSM04','class'=>'imgColor oculta difumina Intervalo2 slideInLeft iconoFotoPadres'])}}
						</a>
						<div id="iconoRombosm04" class="contieneTxt oculta difumina Intervalo2 slideInLeft text-center" style="width: 50%; position:absolute; top:305%; left:25%; Z-index:10;">
							<p class="visible-sm-inline txtHomeSm">Padres</p>
							<p class="visible-xs-inline txtHomeXs">Padres</p>
						</div>
					</td>
					<td></td></tr>
					</table>
					<div class="derechaSociales" style="position:fixed; top: 50%; left:80%;">
						<ul class="sociales">
							<li><a href="https://twitter.com/tveducativamx" target="_blank" class="cambiacolorredesSociales"><span><i class="fa fa-twitter fa-2x " id="ct"></i></span></a></li><br/>
							<li><a href="https://www.facebook.com/TvEducativaMx" target="_blank" class="cambiacolorredesSociales"><span><i class="fa fa-facebook fa-2x" id="cf"></i></span></a></li><br/>
							<li><a href="https://www.youtube.com/user/tveducativamx?feature=sub_widget_1" target="_blank" class="cambiacolorredesSociales"><span><i class="fa fa-youtube-play fa-2x" id="cy"></i></span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>