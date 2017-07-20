<div class="row fondo_footer1" style="margin-top:-20px;">
    <div class="division">
    </div>
    <div class="col-xs-6 col-sm-5 col-md-3 col-md-offset-1 col-lg-2 col-lg-offset-0">
        {{ HTML::image('imagenes/red/LogoRed/logoNegativo.png','logo negativo', array('class'=>'img-responsive', 'width'=>'155', 'height'=>'155'))}}
        <br>
        <div class="col-xs-6 col-sm-3 col-md-3"><a href="https://twitter.com/share" class="twitter-share-button">Tweet</a></div>
		<div class="fb-share-button pull-right col-xs-6 col-sm-3 col-md-3"
			data-layout="button" 
			data-mobile-iframe="true">
		</div>
        <br>
    </div>
    <div class="col-xs-6 col-sm-6 col-sm-offset-1 col-md-3 col-lg-2">
        <h4 class="text-uppercase"> Colaboradores </h4>
        <div class="col-xs-12 col-sm-12 col-md-12">
            {{ HTML::image('imagenes/red/footer/amexid.png','logo amexid', array('class'=>'img-responsive text-center', 'style'=>'width:150px; height:50px;)'))}}
            <br>
        </div>
        <div class="col-xs-6 col-sm-3 col-md-6 col-lg-6">
            {{ HTML::image('imagenes/red/footer/ceccsica.png','logo ceccsica', array('class'=>'img-responsive','style'=>'width:60px; height:79px;)'))}}
        </div>
        <div class="col-xs-6 col-sm-3 col-md-6 col-lg-6">
            {{ HTML::image('imagenes/red/footer/csuca.png','logo csuca', array('class'=>'img-responsive','style'=>'width:75px; height:75px;)'))}}
        </div>
        <div class="col-xs-12 col-sm-12 col-sm-12 col-md-12 col-lg-12">
            <br>
            {{ HTML::image('imagenes/red/footer/tve.png','logo tve', array('class'=>'img-responsive','style'=>'width:150px; height:50px;)'))}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
        <h4 class="text-uppercase">Contáctanos</h4>
        <table>
            <tr>
                <td class="imgTecho" style="padding:5px;">
                    {{ HTML::image('imagenes/red/footer/localizacion.png','logo localizacion', array('class'=>'img-responsive','style'=>'align:flex-start; width:14px; height:20px;)'))}}
                </td>
                <td>
                    <p>Av. Circunvalación s/n, esquina Tabiqueros,<br>
                        Col. Morelos, Del. Venustiano Carranza.<br>
                        C.P. 15270, Ciudad de México.</p>
                </td>
            </tr>
            <tr>
                <td class="imgTecho" style="padding:5px;">
                    {{ HTML::image('imagenes/red/footer/telefono.png','logo telefono', array('class'=>'img-responsive','style'=>'align:flex-start; width:20px; height:20px;)'))}}
                </td>
                <td>
                    <p>(55) 3601 8100 <br>
                        01 800 2284 883 <br>
                        01 866 5729 837
                    </p>							
                </td>
            </tr>
            <tr>
                <td class="imgTecho" style="padding:5px;">
                    {{ HTML::image('imagenes/red/footer/mail.png','logo mail', array('class'=>'img-responsive','style'=>'align:flex-start; width:20px; height:15px;)'))}}
                </td>
                <td>
                    <p> redmite@televisioneducativa.gob.mx</p>
                </td>
            </tr>
        </table>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-10 col-md-offset-1 col-lg-4 col-lg-offset-0">
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-12">
			<h4 class="text-uppercase">Tags</h4>
			<p>Investigación <strong class="lead">Colaboración </strong> Mesoamérica<br>
				<strong class="lead">Tecnología</strong> Educación Matemáticas <strong class="lead">Español</strong><br>
				Indicadores educativos <strong class="lead">Metodologías pedagógicas</strong><br>
				Docentes <strong class="lead">Procesos formativos</strong> Pedagogía digital</p>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-12">
			<h4>Mantente informado. Suscríbete.</h4>
			<form class="form-inline" action="{{url('redmite/guardaCorreoNewsLetter')}}" method="POST">
				<div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="col-xs-8 col-sm-9 col-md-9 col-lg-9">
						<input type="email" required name="correo_newsletter" class="form-control" id="correoElectronico" placeholder="direccion@servidor.com"  style="width:100%;">
						{!!csrf_field()!!}
					</div>
					<div class="col-xs-4 col-sm-3 col-md-3 col-lg-3">
						<button type="submit" class="btn btn-primary" id="btnEnviar"><span class="glyphicon glyphicon-send"></span></button>
					</div>
				</div>
				<div id="mensaje-error" class="form-group col-xs-11 col-xs-offset-1 col-sm-12 col-sm-offset-1 col-md-12 col-md-offset-1 col-lg-12 col-lg-offset-1 hidden" style="color:white;">
				</div>
			</form>
		</div>
    </div>
</div>
<footer>
    <div class="row fondo_footer2">
        <div class="col-xs-9 col-sm-6 col-md-10 col-md-offset-1">
            <br>
            <p>Proyecto alineado al Programa Mesoamericano de Cooperación 2015 - 2016. <br>
                Desarrollado por Dirección General de Televisión Educativa.
            </p>
        </div>
        <div class="col-xs-3 col-sm-6 col-md-1 text-center">
            <br>
            <a id="top-link-block" data-spy="affix" data-offset-top="300" class="nav up-arrow" href="#pag_principal" data-toggle="tooltip" title="ARRIBA">
                {{ HTML::image('imagenes/red/footer/flecha-arriba.png','flecha arriba', array('class'=>'img-responsive img-rounded footer','style'=>'width:42px; height:40px;)'))}}
            </a>
            <br>
        </div>
    </div>
</footer>
<script src="{{url('js/red/pie.js')}}"></script>
<script>
    function isValidEmail(mail){
        return /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(mail);
    }

    $("#correoElectronico").focusout(function () {
		if($('#correoElectronico').val()==''){
			muestraError(false, '', 'correoElectronico');
		}
		else{
	    	if(isValidEmail($('#correoElectronico').val())){
                var _url = "{{url('redmite/emailRegistrado')}}" + '/' + $('#correoElectronico').val();
                consultaCorreo(_url, 'correo', 'correoElectronico');
		    }
            else{
                muestraError(true, 'Formato de correo incorrecto', 'correoElectronico');
            }			
		}

    });

</script>