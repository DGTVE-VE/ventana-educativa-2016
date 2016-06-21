@extends('indexEducaplay')
@section('cuerpoEducaplay')
	@if($comentariosVideo!='[]')
		<br>
		@foreach($comentariosVideo as $elemComentario)
			<p> <span style="color:gray;" class="lead">Temporada {{$elemComentario->temporada}}. Capitulo {{$elemComentario->capitulo}}</span>
			<br><span style="color:white;">{{$elemComentario->comment}}</span></p><br>
		@endforeach
	@else
		<p style="color:white;"> AUN NO HAY COMENTARIOS PARA ESTA SERIE</p>
	@endif
@endsection