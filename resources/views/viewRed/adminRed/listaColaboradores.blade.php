	<div class="row">
		<div class="col-lg-6 col-lg-offset-3 text-center">
			<h4>Colaboradores</h4>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
		</div>
		{{--*/ $i=0; /*--}}
		@foreach($colaboradores as $colaborador)
			<div class="col-md-3">
				<div class="thumbnail">
					<img src="{{$colaborador->url_foto}}" alt="Fotografia Colaborador">
					<div class="caption text-justify">
						<h4>{{$colaborador->name}} {{$colaborador->a_paterno}} {{$colaborador->a_materno}}</h4>
						<p>{{$colaborador->puesto}}</p>
						<p>{{$colaborador->area}}</p>
						<p>{{$colaborador->dependencia}}</p>
						<p>{{$colaborador->resena}}</p>
					</div>
					<button type="button" class="btn btn-default">Acepta</button>
					<button type="button" class="btn btn-default">Rechaza</button>
				</div>
			</div>
			{{--*/ $i++; /*--}}
			@if($i % 3 == 0 && $i != 0)
				</div>
				<div class="row">
					<div class="col-md-2">
					</div>
			@endif
		@endforeach
	</div>