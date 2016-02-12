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
					<img class="estoy-visible" alt="..." src="imagenes/red/ModeloUsabilidad/aros-modelo-de-usabilidad.png">
<!--slideInLeft animated-->
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

        $(function(){
            var elems = $('.estoy-visible');    //elementos que quiero saber si estan en el área visible
            var winW = $(window).width();       //dimensiones de la ventana
            var winH = $(window).height();      //dimensiones de la ventana
            elems.each(function(){
                var self = $(this);
                self.on('esta/visible',function(){
                    //evento personalizado que crearemos mas abajo, se dispara cuando el elemento está visible
                    //lo que ponemos aca es lo que queremos hacer si el elemento aparece en pantalla
                    $(this).fadeIn();
                });
                self.on('esta/invisible',function(){
                    //evento personalizado que crearemos mas abajo, se dispara cuando el elemento está FUERA del area visible
                    //lo que ponemos aca es lo que queremos hacer si el elemento DESAPARECE de la pantalla
                    //$(this).fadeOut();
                });
                
                //obtenemos las dimensiones de cada elemento y su posicion
                var self_w = self.outerWidth(); //ancho exterior
                var self_h = self.outerHeight(); //alto exterior
                var self_l = self.offset().left; //coordenada izquierda
                var self_t = self.offset().top; //coordenada arriba
                
                //asignamos un evento a window.scroll(), para cuando se haga scroll
                //esta parte del script es algo inefectiva. No es bueno si son muchos los elementos a verificar.
                $(window).scroll(function(){
                    var scroll_h = this.pageXOffset;
                    var scroll_v = this.pageYOffset;
                    //acá verificamos si el elemento está COMPLETAMENTE dentro de las dimensiones de la ventana
                    if( (self_w + self_l - scroll_h) <= winW && (self_l) >= scroll_h &&
                        (self_h + self_t - scroll_v) <= winH && (self_t) >= scroll_v ){
                        self.trigger('esta/visible');
                    }
                    else{
                        self.trigger('esta/invisible');
                    }
                });
            });
        });
   
			</script>