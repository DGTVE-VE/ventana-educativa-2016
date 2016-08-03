	<div class="row">
		<div class="col-lg-6 col-lg-offset-3 text-center">
			<h4>Proyectos</h4>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<div class="col-lg-12">
				<div class="form-group">
					<label for="textoTitulo">Titulo</label>
					<input type="text" class="form-control" id="textoTitulo" placeholder="Titulo">
				</div>
				<div class="form-group">
					<label for="textoContenido">Descripcion</label>
					<textarea rows="3" type="text" class="form-control" id="textoContenido" placeholder="Contenido"></textarea>
				</div>
				<div class="form-group">
					<label for="textoTitulo">Liga</label>
					<input type="text" class="form-control" id="textoLiga" placeholder="Liga">
				</div>
				<div class="form-group">
					<label for="subirBanner">Imagen Banner</label>
					<input type="file" id="subirBanner">
					<p class="help-block">Seleccione imagen de proyecto.</p>
				</div>
				<div class="form-group">
					<label for="subirThumbnail">Imagen thumbnail</label>
					<input type="file" id="subirThumbnail">
					<p class="help-block">Seleccione thumbnail de proyecto.</p>
				</div>
			</div>
			<div class="col-lg-6">
				<input type="checkbox" name="activo" value="activo"> Activo
			</div>
			<div class="col-lg-6">
				<button onclick="alert('Enviando')" class="btn btn-default">Enviar</button>
			</div>
		</div>
	</div>
	<script>
		function muestraPublicaciones() {
			var urlget = "{{url('redmite/administra/publicacion')}}";
			//var _url = urlget + '/' + id;
			$.ajax({
				method: "GET",
				//url: _url,
				url: urlget,
				error: function (ts) {
					console.log(ts.responseText);
				}})
				.done(function (msg) {
					//console.log('Comentarios cargados: ' + id);
					$("#divFormulario").html(msg);
					//                    console.log ( "Data Saved: " + msg );
				});
		}
	</script>