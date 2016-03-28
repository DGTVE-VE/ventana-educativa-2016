<style>
	.textoTitulo{
		color: white;
		font-family:'Ubuntu';
		font-size:2em;
	}

	.telesecPrimero{
		position:absolute; top:10%; left:12%; width:77%; height: 197%;
	}
	.teleSecSegundo{
		position: absolute; top:57%; left:51%; width:77%; height: 195%;
	}
	.telesecTercero{
		position:absolute; top:116%; left:15.5%; width:77%; height: 194%;
	}
	.telesecundaria{
		position: absolute; top:0%; left:51%; width:80%; height: 100%;
	}
	.telebachillerato{
		position: absolute; top:100%; left:51%; width:80%; height: 100%;
	}
</style>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center textoTitulo">
	MEDIATECA
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="padding:10%;">
	<a href="telesecundaria">
		{{ HTML::image('imagenes/mediateca/Inicio/telesecundaria.png','Telesecundaria',['class'=>'telesecundaria'])}}
	</a>
	<a href="telebachillerato">
		{{HTML::image('imagenes/mediateca/Inicio/telebachillerato.png','Telebachillerato',['class'=>'telebachillerato'])}}
	</a>
</div>
<!--div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:10%;">
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2" style="padding:10%;">
	{{HTML::image('imagenes/mediateca/Telesecundaria/Inicio/PrimerGrado.png','Telesecundaria',['class'=>'telesecPrimero'])}}
	{{HTML::image('imagenes/mediateca/Telesecundaria/Inicio/SegundoGrado.png','Telebachillerato',['class'=>'teleSecSegundo'])}}
	{{HTML::image('imagenes/mediateca/Telesecundaria/Inicio/TercerGrado.png','Telebachillerato',['class'=>'telesecTercero'])}}
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:10%;">
</div-->
