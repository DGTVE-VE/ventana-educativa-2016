<style>
	.medidasPie{
		color: white; z-index:1001; width:100%;
	}
</style>

<div id="barraNavPie" class="navbar navbar-inverse medidasPie">
    <div class="col-xs-6 col-sm-6 col-md-2 col-lg-3">
        <br>
        {{ HTML::image('imagenes/ventana/encabezado/logoventana.png','logo negativo', array('class'=>'img-responsive', 'width'=>'155', 'height'=>'155'))}}
        <br>
        <div class="col-xs-6 col-sm-4 col-md-6 col-lg-6">
            <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
        </div>
		<div class="fb-share-button col-xs-6 col-sm-4 col-md-6 col-lg-6" data-layout="button" data-mobile-iframe="true"></div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
        <br>
        <h4 class="text-uppercase">Contáctanos</h4>
        <table>
            <tr>
                <td class="imgTecho" style="padding-right: 15px;">
                    {{ HTML::image('imagenes/red/footer/localizacion.png','logo localizacion', array('class'=>'img-responsive','style'=>' width:19px; height:23px;)'))}}
                </td>
                <td>
                    <p class="textoBlanco">Av. Circunvalación s/n, esquina Tabiqueros,<br>
                        Col. Morelos, Del. Venustiano Carranza.<br>
                        C.P. 15270, Ciudad de México.</p>
                </td>
            </tr>
        </table>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <br><br>
        <table>
            <tr>
                <td class="imgTecho" style="padding:15px;">
                    {{ HTML::image('imagenes/red/footer/telefono.png','logo telefono', array('class'=>'img-responsive','style'=>'align:flex-start; width:20px; height:20px;)'))}}
                </td>
                <td>
                    <p class="textoBlanco">(55) 3601 8100 <br>
                        01 800 2284 883 <br>
                        01 866 5729 837
                    </p>
                </td>
            </tr>
            <tr>
                <td class="imgTecho" style="padding:15px;">
                    {{ HTML::image('imagenes/red/footer/mail.png','logo mail', array('class'=>'img-responsive','style'=>'align:flex-start; width:20px; height:15px;)'))}}
                </td>
                <td>
                    <p class="textoBlanco"> ventana@televisioneducativa.gob.mx</p>
                </td>
            </tr>
        </table>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
        <h3>Mantente informado. Suscríbete.</h3>
        <form class="col-xs-12" action="conocenos/guardaCorreoNewsLetterConocenos" method="POST">
            <div class="form-group">
                <input type="email" required name="correo_newsletter" class="form-control col-xs-8" id="correoElectronico" placeholder="direccion@servidor.com" style="width:70%"/>
                {!!csrf_field()!!}
                <button type="submit" class="btn btn-primary col-xs-2"><span class="glyphicon glyphicon-send"></span></button>
            </div>
        </form>
    </div>
    <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12"><p class="text-muted derechos">&copy; Televisión Educativa. Todos los derechos reservados.</p></div>
</div>
