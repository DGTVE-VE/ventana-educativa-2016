<style>
	.textoTitulo{
		color: white;
		font-family:'Ubuntu';
		font-size:2em;
	}
	.bachSemI{
		position: absolute; top:30%; left:55%; width:36%; height: 90%;
	}
	.bachSemII{
		position: absolute; top:15%; left:83%; width:36%; height: 90%;
	}
	.bachSemIII{
		position: absolute; top:58%; left:101%; width:36%; height: 90%;
	}
	.bachSemVI{
		position: absolute; top:2%; left:49.5%; width:36.5%; height: 90%;
	}
	.bachSemV{
		position: absolute; top:44%; left:67.8%; width:36%; height: 90%;
	}
	.bachSemIV{
		position: absolute; top:29%; left:96.2%; width:36%; height: 90%;
	}
	.bajaFila{
		position:relative; top:80px;
	}
</style>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center textoTitulo bajaFila">
	MEDIATECA
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="padding:10%;">
	<a href="{{url('mediateca/telebachillerato/semestreI')}}">
		{{HTML::image('imagenes/mediateca/Telebachillerato/Inicio/SemestreI.png','Telebachillerato',['class'=>'bachSemI'])}}
	</a>
	<a href="{{url('mediateca/telebachillerato/semestreII')}}">
		{{HTML::image('imagenes/mediateca/Telebachillerato/Inicio/SemestreII.png','Telebachillerato',['class'=>'bachSemII'])}}
	</a>
	<a href="{{url('mediateca/telebachillerato/semestreIII')}}">
		{{HTML::image('imagenes/mediateca/Telebachillerato/Inicio/SemestreIII.png','Telebachillerato',['class'=>'bachSemIII'])}}
	</a>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="padding:10%;">
	<a href="{{url('mediateca/telebachillerato/semestreVI')}}">
		{{HTML::image('imagenes/mediateca/Telebachillerato/Inicio/SemestreVI.png','Telebachillerato',['class'=>'bachSemVI'])}}
	</a>
	<a href="{{url('mediateca/telebachillerato/semestreV')}}">
		{{HTML::image('imagenes/mediateca/Telebachillerato/Inicio/SemestreV.png','Telebachillerato',['class'=>'bachSemV'])}}
	</a>
	<a href="{{url('mediateca/telebachillerato/semestreIV')}}">
		{{HTML::image('imagenes/mediateca/Telebachillerato/Inicio/SemestreIV.png','Telebachillerato',['class'=>'bachSemIV'])}}
	</a>
</div>
