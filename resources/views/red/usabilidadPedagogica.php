			<div class="row fondo_Obscuro">
				<div class="col-md-12 text-center text-uppercase">
					<h2> Modelo de Usabilidad Pedagógica de las TIC</h2>
				</div>
			</div>
			<div class="row fondo_Claro">
				<div class="col-md-12">
					<div class="division">
						<!--	***********************************************		-->
					</div>
				</div>
				<div class="col-sm-3 col-md-4">
				</div>
				<div class="col-sm-3 col-md-4"><!-- style="background-image:url(imagenes/red/ModeloUsabilidad/aros-modelo-de-usabilidad.png); background-repeat:no-repeat; height:500px;">-->
					<img alt="..." src="imagenes/red/ModeloUsabilidad/aros-modelo-de-usabilidad.png">

					<img id="imgFuncionalidad" alt="..." src="imagenes/red/ModeloUsabilidad/funcionalidadEdu.png" onmouseenter="imgResalta('funcionalidad')" onmouseleave="imgNormal('funcionalidad')" style="position:absolute; left:190px; top:62px;">
					<img alt="..." src="imagenes/red/ModeloUsabilidad/texto-lapiz-engrane.png" style="position:absolute; left:-205px; top:0px;">
					
					<img id="imgExpectativas" alt="..." src="imagenes/red/ModeloUsabilidad/disposicionExpectativas.png" onmouseenter="imgResalta('expectativas')" onmouseleave="imgNormal('expectativas')" style="position:absolute; left:78px; top:172px;">
					<img alt="..." src="imagenes/red/ModeloUsabilidad/texto-profesor.png" style="position:absolute; left:-280px; top:122px;">
					
					<img id="imgSaberesDig" alt="..." src="imagenes/red/ModeloUsabilidad/saberesDigitales.png" onmouseenter="imgResalta('saberesDig')" onmouseleave="imgNormal('saberesDig')" style="position:absolute; left:301px; top:173px;">
					<img alt="..." src="imagenes/red/ModeloUsabilidad/texto-cerebro.png" style="position:absolute; left:400px; top:180px;">

					<img id="imgApropiacion" alt="..." src="imagenes/red/ModeloUsabilidad/apropiacionIncorporacionEdu.png" onmouseenter="imgResalta('apropiacion')" onmouseleave="imgNormal('apropiacion')" style="position:absolute; left:189px; top:283px;">
					<img alt="..." src="imagenes/red/ModeloUsabilidad/texto-pizarron.png" style="position:absolute; left:300px; top:350px;">
				</div>
				<div class="col-sm-3 col-md-4">
				
				</div>
				<div class="col-md-12">
					<div class="division">
						<!--	***********************************************		-->
					</div>
				</div>
			</div>
			<script>
				function imgResalta(seccion){
					switch(seccion){
						case 'funcionalidad':
							document.getElementById("imgFuncionalidad").src ="imagenes/red/ModeloUsabilidad/funcionalidadEduOver.png"
							break;
						case 'expectativas':
							document.getElementById("imgExpectativas").src ="imagenes/red/ModeloUsabilidad/disposicionExpectativasOver.png"
							break;
						case 'saberesDig':
							document.getElementById("imgSaberesDig").src ="imagenes/red/ModeloUsabilidad/saberesDigitalesOver.png"
							break;
						case 'apropiacion':
							document.getElementById("imgApropiacion").src ="imagenes/red/ModeloUsabilidad/apropiacionIncorporacionEduOver.png"
							break;
						default:
							break;
					}
				}
				function imgNormal(seccion){
					switch(seccion){
						case 'funcionalidad':
							document.getElementById("imgFuncionalidad").src ="imagenes/red/ModeloUsabilidad/funcionalidadEdu.png"
							break;
						case 'expectativas':
							document.getElementById("imgExpectativas").src ="imagenes/red/ModeloUsabilidad/disposicionExpectativas.png"
							break;
						case 'saberesDig':
							document.getElementById("imgSaberesDig").src ="imagenes/red/ModeloUsabilidad/saberesDigitales.png"
							break;
						case 'apropiacion':
							document.getElementById("imgApropiacion").src ="imagenes/red/ModeloUsabilidad/apropiacionIncorporacionEdu.png"
							break;
						default:
							break;
					}
				}
			</script>