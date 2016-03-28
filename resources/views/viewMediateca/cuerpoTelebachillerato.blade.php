<style>
	.textoTitulo{
		color: white;
		font-family:'Ubuntu';
		font-size:2em;
	}
	.bachSemI{
		position: absolute; top:19%; left:35%; width:45%; height: 110%;
	}
	.bachSemII{
		position: absolute; top:1%; left:70%; width:45%; height: 110%;
	}
	.bachSemIII{
		position: absolute; top:52%; left:92%; width:45%; height: 110%;
	}
	.bachSemVI{
		position: absolute; top:8%; left:28.5%; width:45%; height: 108%;
	}
	.bachSemV{
		position: absolute; top:58.5%; left:51%; width:45%; height: 109%;
	}
	.bachSemIV{
		position: absolute; top:40%; left:86%; width:45%; height: 110%;
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
	<a href="{{url('mediateca/telebachillerato/semestreIV')}}">
		{{HTML::image('imagenes/mediateca/Telebachillerato/Inicio/SemestreVI.png','Telebachillerato',['class'=>'bachSemVI'])}}
	</a>
	<a href="{{url('mediateca/telebachillerato/semestreV')}}">
		{{HTML::image('imagenes/mediateca/Telebachillerato/Inicio/SemestreV.png','Telebachillerato',['class'=>'bachSemV'])}}
	</a>
	<a href="{{url('mediateca/telebachillerato/semestreVI')}}">
		{{HTML::image('imagenes/mediateca/Telebachillerato/Inicio/SemestreIV.png','Telebachillerato',['class'=>'bachSemIV'])}}
	</a>
</div>
