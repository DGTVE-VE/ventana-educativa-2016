<style>
	.textoTitulo{
		color: white;
		font-family:'Ubuntu';
		font-size:2em;
	}
	.telesecundaria{
		position: absolute; top:10%; left:61%; width:80%; height: 100%;
	}
	.telebachillerato{
		position: absolute; top:110%; left:61%; width:80%; height: 100%;
	}
	.bajaFila{
		position:relative; top:80px;
	}
</style>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center textoTitulo bajaFila">
	MEDIATECA
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 bajaFila" style="padding:10%;">
	<a href="{{url('mediateca/telesecundaria')}}">
		{{ HTML::image('imagenes/mediateca/Inicio/telesecundaria.png','Telesecundaria',['class'=>'telesecundaria'])}}
	</a>
	<a href="{{url('mediateca/telebachillerato')}}">
		{{HTML::image('imagenes/mediateca/Inicio/telebachillerato.png','Telebachillerato',['class'=>'telebachillerato'])}}
	</a>
</div>